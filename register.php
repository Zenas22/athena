<?php
if (isset($_POST['submit'])) {
    $reg_username = $_POST['$reg_username'];
    $reg_password = $_POST['$reg_password'];
    $reg_password_confirm = $_POST['$reg_password_confirm'];
    $reg_email = $_POST['reg_email'];
    $reg_fullname = $_POST['$reg_fullname'];
    $reg_gender = $_POST['$reg_gender'];
    $reg_agree = $_POST['$reg_agree'];
    if ($reg_name == "" ||  $reg_email == "" || $reg_password == $reg_password_confirm) {
        $msg = "invalid username or password"
    } else {
        $sql = $con->query(query:"select")
    }
}
?>
