

<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/19/18
 * Time: 6:13 AM
 */

$servername="localhost";
$username="root";
$password="";
$mydatabase="lecturers";

$name=$_POST["studentsname"];
$email=$_POST["email"];
$score=$_POST["score"];
$connection=mysqli_connect($servername,$username,$password,$mydatabase);
if (!$connection) {
die("connection failed " . mysqli_connect_error());
}

?>
<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>results</title>
    <style type="text/css">
        form{
            margin-left: 30%;
        }
    </style>
</head>
<body>
<div class="well-lg">
    <form action="register.php" method="POST">
        username:
        <input type="text" name="studentsname" placeholder="enter student name"><br><br>
        Students email:<br>
        <input type="text" name="email" placeholder="students email"><br>
        Score:
        <input type="text" name="score" placeholder="score">
        <input type="submit" name="reg_user1" class="btn-info">
        <input type="reset" name="RESET" class="btn-danger">



    </form>
</div>

</body>
</html>
