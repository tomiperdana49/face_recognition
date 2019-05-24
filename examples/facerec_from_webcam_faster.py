import face_recognition
import cv2
import numpy as np
import mysql.connector as mariadb
import time
from datetime import datetime
import json_tricks

import time

# This is a demo of running face recognition on live video from your webcam. It's a little more complicated than the
# other example, but it includes some basic performance tweaks to make things run a lot faster:
#   1. Process each video frame at 1/4 resolution (though still display it at full resolution)
#   2. Only detect faces in every other frame of video.

# PLEASE NOTE: This example requires OpenCV (the `cv2` library) to be installed only to read from your webcam.
# OpenCV is *not* required to use the face_recognition library. It's only required if you want to run this
# specific demo. If you have trouble installing it, try any of the other demos that don't require it instead.




# connect to mysql mariadb
mariadb_connection = mariadb.connect(user='root', password='', database='face_recognition')

cursor_event = mariadb_connection.cursor()
cursor_event.execute("SELECT event_id, event_name, event_location FROM event")
eventsId = []
for row in cursor_event:
    eventsId.append(row[0])
    print('Event ID: ' + row[0])
    print('Event Name: ' + row[1])
    print('Event Location: ' + row[2])
    print()

eventId = ""
while eventId not in eventsId:
    eventId = input('Pilih event_id:')
# Get a reference to webcam #0 (the default one)
video_capture = cv2.VideoCapture(0)
cursor = mariadb_connection.cursor()

#retrieving information
cursor.execute("SELECT id,firstname,image, distance FROM employees")

known_face_encodings = []
known_face_names = []
employee_id = []
for id, firstname, image, distance in cursor:
    #image = face_recognition.load_image_file("images/{}".format(image))
    #face_image = face_recognition.face_encodings(image)[0]
    face_image = json_tricks.loads(distance)['distance']
    known_face_encodings.append(face_image)
    known_face_names.append(firstname)
    employee_id.append(id)

# Initialize some variables
face_locations = []
face_encodings = []
face_names = []
process_this_frame = True
start = 0
timer = time.time()
name_show = "Unknown"
show = 0
#eventId = "001"
dataScan = []
while True:

    # Grab a single frame of video
    ret, frame = video_capture.read()
    # Resize frame of video to 1/4 size for faster face recognition processing
    small_frame = cv2.resize(frame, (0, 0), fx=0.25, fy=0.25)

    # Convert the image from BGR color (which OpenCV uses) to RGB color (which face_recognition uses)
    rgb_small_frame = small_frame[:, :, ::-1]

    # Only process every other frame of video to save time
    if process_this_frame:
        # Find all the faces and face encodings in the current frame of video
        face_locations = face_recognition.face_locations(rgb_small_frame)
        face_encodings = face_recognition.face_encodings(rgb_small_frame, face_locations)

        face_names = []
        for face_encoding in face_encodings:
            # See if the face is a match for the known face(s)
            matches = face_recognition.compare_faces(known_face_encodings, face_encoding, tolerance=0.4)
            name = "Unknown"

            # # If a match was found in known_face_encodings, just use the first one.
            # if True in matches:
            #     first_match_index = matches.index(True)
            #     name = known_face_names[first_match_index]

            # Or instead, use the known face with the smallest distance to the new face
            face_distances = face_recognition.face_distance(known_face_encodings, face_encoding)
            best_match_index = np.argmin(face_distances)
            if matches[best_match_index]:
                name = known_face_names[best_match_index]
            if name_show == "Unknown" or name != name_show:
                start = 0
                timer = time.time()
            elif name == name_show:
                start = time.time() - timer
            name_show = name
            face_names.append(name)
        if not face_encodings:
            start = 0
            timer = time.time()


    process_this_frame = not process_this_frame

    # Display the results
    for (top, right, bottom, left), name in zip(face_locations, face_names):
        font = cv2.FONT_HERSHEY_DUPLEX
        # Scale back up face locations since the frame we detected in was scaled to 1/4 size
        top *= 4
        right *= 4
        bottom *= 4
        left *= 4
        if employee_id[best_match_index] in dataScan:
            cv2.rectangle(frame, (left, top), (right, bottom), (0, 255, 0), 2)
            cv2.rectangle(frame, (left, bottom - 35), (right, bottom), (0, 255, 0), cv2.FILLED)
            cv2.putText(frame, "Present" , (left + 6, top - 3), font, 1.0, (255, 255, 255), 1)
        else:
            if start >= 3:
                # Draw a box around the face
                cv2.rectangle(frame, (left, top), (right, bottom), (0, 255, 0), 2)

                # Draw a label with a name below the face
                cv2.rectangle(frame, (left, bottom - 35), (right, bottom), (0, 255, 0), cv2.FILLED)
                cv2.putText(frame, "Success" , (left + 6, top - 3), font, 1.0, (255, 255, 255), 1)
                try:
                    cursor.execute("INSERT IGNORE INTO absen (event_id,employee_id,input_time) VALUES (%s,%s,%s)", (eventId, employee_id[best_match_index],datetime.today().strftime('%Y-%m-%d %H:%I:%S')))
                    dataScan.append(employee_id[best_match_index])
                except mariadb.Error as error:
                    print("Error: {}".format(error))
                mariadb_connection.commit()
            else:
                # Draw a box around the face
                cv2.rectangle(frame, (left, top), (right, bottom), (0, 0, 255), 2)

                # Draw a label with a name below the face
                cv2.rectangle(frame, (left, bottom - 35), (right, bottom), (0, 0, 255), cv2.FILLED)
                cv2.putText(frame, str(round(start)) , (right - 4, top - 3), font, 1.0, (255, 255, 255), 1)

        cv2.putText(frame, name , (left + 6, bottom - 6), font, 1.0, (255, 255, 255), 1)

    # Display the resulting image
    cv2.imshow('Video', frame)

    # Hit 'q' on the keyboard to quit!
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# Release handle to the webcam
video_capture.release()
cv2.destroyAllWindows()
