<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/18/18
 * Time: 12:06 PM
 */

/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/18/18
 * Time: 9:54 AM
 */$servername="localhost";
$username="root";
$password="";
$mydatabase="lecturers";

$name=$_POST["username"];
$email=$_POST["email"];
$score=$_POST["score"];
$connection=mysqli_connect($servername,$username,$password,$mydatabase);
if (!$connection) {
    die("connection failed " . mysqli_connect_error());
}

?>
<?php include('server.php');?>

include ('server.php');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>students marks</title>
</head>
<body>
<form action="registe.php" method="POST">
    <?php include ('errors.php');?>
    <label >student name</label><br>
    <input type="text" name="student name"
           placeholder="student name" id="s name" value="<?php echo $studentsname?>"><br>
    <label>Email</label><br>
    <input type="email" name="email" value="<?php echo $email?>"
           placeholder="enter email"id="email"> <br>
    <label for="password">Password</label>
    <input type="password" name="password1">
    <label for="confirmpasssword">Confirm password</label>
    <input type="password" name="password2">
    <button type="submit" name="post_marks">Register</button>


</form>
</body>
