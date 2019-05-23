import os
import json
import json_tricks
import face_recognition
import mysql.connector as mariadb

current_path = os.path.dirname(os.path.realpath(__file__))
dataset_path = current_path + '/images'

db = mariadb.connect(user='root', password='', database='face_recognition')

cursor_truncate = db.cursor()
cursor_truncate.execute('truncate table employees')

for file_name in os.listdir(dataset_path):
    employee_id, first_name, last_name, extension = file_name.split('-')
    image = face_recognition.load_image_file(dataset_path + '/' + file_name)
    face = face_recognition.face_encodings(image)[0]
    json_object = json_tricks.dumps({'distance': face})
    json_string = json.dumps(json_object)
    cursor_user = db.cursor()
    cursor_user.execute('insert into employees (employee_id, firstname, lastname, image, distance) values (%s, %s, %s, %s, ' + json_string + ')', (employee_id, first_name, last_name, file_name))
    db.commit()
