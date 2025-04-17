<?php 
    $title = "Delete Records";
    require_once '../includes/header.php';
    require_once '../db/conn.php';     	
?>
<?php 


if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $key=$_POST['key'];

$key = mysqli_real_escape_string($conn, $key);


}
$sql = "DELETE FROM `string_info` WHERE string_id=$key";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

?>