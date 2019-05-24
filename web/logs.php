<h2>Logs</h2>
<form method="post">
<label for="field-2">Event &nbsp;<span class="at-required-highlight">:</span></label>
<?php
     $sql = "SELECT event_id, event_name, event_location FROM event";
     $result = $conn->query($sql); ?>
<div class="form-group">
<div class="stay">
						<div class="stay-left">
                        <select name="field-2" id="event-select" required="true" class="form-control">
        <option value="">--SELECT--</option>
        <?php 
                while($row = $result->fetch_assoc()) { ?>
                echo "<option value="<?php echo $row['event_id']; ?>" <?php if(isset($_POST['test']) && $_POST['test'] == $row['event_id']) { ?>selected<?php } ?>><?php echo $row['event_name'] . ' - ' . $row['event_location']; ?></option>";
             <?php } ?>
            <input type="hidden" name="test" id="test">
    </select>
						</div>
						<div class="btn-1">
                        <button class="btn btn-primary">Submit</button> 
						</div>
							<div class="clearfix"> </div>
			</div>

		
  
</div>
            </form>
            <?php 
                   if(isset($_POST['test'])) {
                    $events = $_POST['test'];    
                    $sql_absen="SELECT employees.firstname, employees.lastname, absen.input_time FROM absen INNER JOIN employees ON  employees.id = absen.employee_id WHERE absen.event_id='$events' ";
                        $result_absen = $conn->query($sql_absen);
                        if($result_absen->num_rows > 0) {
                            ?>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Present</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $j = 1;
                            while($row = $result_absen->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>". $j . "</td>";
                                echo "<td>". $row['firstname']. " " .$row["lastname"] . "</td>";
                                echo "<td>". $row['input_time']. "</td>";
                                echo "</tr>";
                                $j++;
                            }
                            echo "</tbody></table>";
                        } else {
                            ?>
                                 <div class="alert alert-warning" role="alert">
                                   NO PRESENCE
                                </div>
                            <?php
                        }
                   } 
            ?>

<script>
     $(function() {
         $('#event-select').on('change', function(event) {
            $.post('logs.php',function(data){
                $('#test').val(event.target.value);
            });
        });
    });
</script>