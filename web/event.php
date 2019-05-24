<div class="tab-main">
    <div class="tab-inner">
        <div class="tabs" id="tabs">
            <div class="graph">
                <nav>
                    <ul>
                        <li class=tab-current>
                            <a href="#section-1"><span>
                                SHOW
                            </span></a>
                        </li>
                        <li>
                            <a href="#section-2" class="icon-cup">
                                <span>
                                    ADD
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="content tab">
                    <section id="section-1" class="content-current">
                        <?php
                           $sql = "SELECT  event_name, event_location, event_start, event_end FROM event ";
                           $result = $conn->query($sql);
                           
                           if ($result->num_rows > 0) {
                               // output data of each row
                               ?>
                              <table class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Start</th>
                                        <th>End</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            <?php
                             $i = 0;
                               while($row = $result->fetch_assoc()) {
                                   echo "<tr>";
                                   echo "<td>" . $row["event_name"] . "</td>";
                                   echo "<td>" . $row["event_location"] . "</td>";
                                   echo "<td>" .  $row["event_start"] . "</td>";
                                   echo "<td>" . $row["event_end"] . "</td>";
                                   echo "</tr>" ;
                                   $i++;
                               }
                               echo "</tbody></table>";
                           } else {
                               ?>
                               <div class="alert alert-warning" role="alert">
                                   Event NOT FOUND 
                                </div>
                               <?php
                           }
                        ?>
                    
                    </section>
                    <section id="section-2">
                    <form method="post">
                    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="id" name="id" placeholder="001">
    </div>
  </div>
                    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="location" class="col-sm-2 col-form-label">Location</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="location" name="location" placeholder="Happiness Room Lt.3">
    </div>
  </div>

  <div class="form-group row">
    <label for="start" class="col-sm-2 col-form-label">Start</label>
    <div class='col-sm-10'>
    <input type="datetime-local" id="start-time"
       name="start-time" value="2019-05-24T00:00"
       min="2019-05-24T00:00">
    </div>
  </div>
  <div class="form-group row">
    <label for="start" class="col-sm-2 col-form-label">End</label>
    <div class='col-sm-10'>
    <input type="datetime-local" id="end-time"
       name="end-time" value="2019-05-24T02:30"
       min="2019-05-24T02:30"> 
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="save" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 
<?php
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $a=$_POST['name'];
    $b=$_POST['location'];
    $c=$_POST['start-time'];
    $d=$_POST['end-time'];
    
    $sql="INSERT INTO event (event_id,event_name,event_location,event_start,event_end) VALUES ('$id','$a','$b','$c','$d')";
    if ($conn->query($sql) === TRUE) {
        // header("Refresh:0; url=index.php?page=event");
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/cbpFWTabs.js"></script>
<script>
	new CBPFWTabs( document.getElementById( 'tabs' ) );
</script>


