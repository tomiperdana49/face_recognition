<h2>
    Employee
</h2>

<?php
    $sql = "SELECT  firstname, lastname, image FROM employees ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $i = 1;
        while($row = $result->fetch_assoc()) {
             if ($i % 4 == 1) {
                 ?>
                 <div class="grids_of_4">
                 <?php
             }
             ?>
        <div class="grid1_of_4">
            <div class="content_box">
                <img src="images/images/<?php echo $row['image'] ?>" class="img-responsive" alt="">
                
                <h4><?php echo $row["firstname"] . " " .   $row["lastname"] ?></h4>
            </div>
        </div>
             <?php
             if ($i % 4 == 0 && $i > 1 || $i == $result->num_rows) {
                ?>
       <div class="clearfix"></div>
     </div>
                <?php
             }

            $i++;
        }
    } 

?>
		
