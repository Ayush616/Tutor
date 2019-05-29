<?php include "connection.php";
        
        $q = "SELECT * FROM details";
        $result = mysqli_query($connection, $q);        
        
        while($row = mysqli_fetch_array($result)){ ?>
                <img src="<?php echo $row['image']; ?>" width="50px" height="40"><br>
                Teacher Name: <?php echo $row['name']; ?><br>
                Qualification: <?php echo $row['Qualification']; ?><br>
                Experience: <?php echo $row['experience']; ?> yrs.<br>
                Subject interested: <?php echo $row['subject']; ?><br>
                Location: <?php echo $row['location']; ?><br><br>
        
        <?php }?>