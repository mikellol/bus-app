<?php
require 'conection.php';
$first_name = $_POST("first_name");
$password = $_POST("password");
$last_name = $_POST("last_name");
$email = $_POST("email");
$telephone = $_POST("telephone");



$sql = "INSERT INTO user  VALUES ('$first_name', 
'$last_name','$password','$telephone','$email')";

if(mysqli_query($conn, $sql)){
echo "<h3>data stored in a database successfully." 
    . " Please browse your localhost php my admin" 
    . " to view the updated data</h3>"; 

echo nl2br("\n$first_name\n $last_name\n "
    . "$password\n $telephone\n $email");
} else{
echo "ERROR: Hush! Sorry $sql. " 
    . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

?>