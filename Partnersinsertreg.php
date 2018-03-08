<?php
include 'dbconfignew.php';
//we want to insert all our codes in our waawphp database

//var_dump($_POST);
$FullName = $_POST['FullName'];
$TellNumber = $_POST['TellNumber'];
$CompanyName = $_POST['CompanyName'];
$CompanyAddress = $_POST['CompanyAddress'];
$Email = $_POST['Email'];
$Reason_for_partnership = $_POST['Reason_for_partnership'];

//$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
/*link to hashed password algorithm
http://php.net/manual/en/function.password-hash.php
*/

//next step is sql query

//var_dump($FirstName);

$sql = "INSERT INTO userreg (FullName,TellNumber,CompanyName,CompanyAddress,Email,Reason_for_partnership) VALUES
 ('$FullName','$TellNumber','$CompanyName','$CompanyAddress','$Email','$Reason_for_partnership')";


if($conn->query($sql) === TRUE){

    /*now we are going to redirect user after they have successfully
    created an account on our platform
    */
    header("location: welcome1.php");

};


?>