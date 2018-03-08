<?php
include 'dbconfignew.php';
//we want to insert all our codes in our waawphp database

//var_dump($_POST);
$FirstName = $_POST['FirstName'];
$MiddleName = $_POST['MiddleName'];
$TellNumber = $_POST['TellNumber'];
$Email = $_POST['Email'];
$password = $_POST['password'];

//$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
/*link to hashed password algorithm
http://php.net/manual/en/function.password-hash.php
*/

//next step is sql query

//var_dump($FirstName);

$sql = "INSERT INTO userreg (FirstName,MiddleName,TellNumber,Email,password) VALUES
 ('$FirstName','$MiddleName','$TellNumber','$Email', '$password')";


if($conn->query($sql) === TRUE){

    /*now we are going to redirect user after they have successfully
    created an account on our platform
    */
    header("location: welcome1.php");

};


?>