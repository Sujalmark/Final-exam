<?php 
    $title = "View Records";
    require_once '../includes/header.php';
    require_once '../db/conn.php';     	
?>
	<?php 

    $sql = "SELECT * FROM string_info WHERE 1";
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["string_id"]," ";
                echo $row["message"],"<br>";
                
            }
        }
        else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    } 


    ?>
     <form method="post" action="/final/php/deleterecord.php">
                    <input type="number" name="key"class="form-control btn-success"id="inputKey" placeholder="Primary Key">
                   <button class="btn btn-warning btn-info w-100">Delete Record</a>
</form>