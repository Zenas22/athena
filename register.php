<?php
require_once "connect.php"; // call connection code to db server
// receive user details form the form
if (isset($_POST['submit'])) {
    $reg_uid = $_POST['$reg_uid'];
    $reg_password = $_POST['$reg_password'];
    $reg_password_confirm = $_POST['$reg_password_confirm'];
    $reg_email = $_POST['reg_email'];
    $reg_fullname = $_POST['$reg_fullname'];
    $reg_gender = $_POST['$reg_gender'];
    $reg_agree = $_POST['$reg_agree'];
    //check if password is confirmed Password

    //check if user name already exists
    $checkusername = mysqli_query($myconn,"SELECT * FROM watu WHERE Username = '".$reg_uid."'");
    // if user name exist generate error message

    if(mysqli_num_rows($checkusername) == 1)
    {
    echo "<h1>Error</h1>";
    echo "<p>Sorry, that username already exists. Please go back and choose another user name.</p>";
    }
    else
    {
    // insert user details into the table users
    $registerquery = mysqli_query($myconn,"INSERT INTO watu (reg_uid, reg_password, reg_email, reg_fullname, reg_gender, reg_agree)
    VALUES('$reg_uid','$reg_password','$reg_email','$reg_fullname','$reg_gender','$reg_agree')");

    if($registerquery) //confirm the user details were inserted into table
    {
    echo "<h1>Success</h1>";
    echo "<p>Your User account was successfully created.
    Please <a href=\"index.html\">Click here to login</a>.</p>";
    }
    else
    {
    echo "<h1>Error</h1>";
    echo "<p><a href=\"registration.html\">Sorry, your registration failed. Please go back and try again.</a></p>";

    }
    }

}
?>
