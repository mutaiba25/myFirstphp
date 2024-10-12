<?php 
 if (
    isset($_POST['email']) && $_POST['email'] != null &&
    isset($_POST['full_name']) && $_POST['full_name'] != null &&
    isset($_POST['password']) && $_POST['password'] != null

 )
 {
    echo 'your email is';
    echo $_POST['email'];
    echo '<br>';

    echo 'your password is';
    echo $_POST['password'];
    echo '<br>'; 

    echo 'your full_name is';
    echo $_POST['full_name'];
    echo '<br>';
 }
 
?>