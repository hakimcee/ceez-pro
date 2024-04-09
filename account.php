<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h2><b>Register Here</b></h2>
<fieldset style="width:200px; border-radius:5px;">

<form action="" method="POST">

    <label for=""><b> Full_Name</b></label><br><br>
    <input type="text" name="fname" ><br><br>
    <label for="" ><b>Department</b></label><br><br>
    <input type="text" name="department"><br><br>
    <label for=""><b>Responsibility</b></label><br><br>
    <input type="text" name="respons" ><br><br>
    <label for=""><b>Level</b></label><br><br>
    <input type="text" name="level" ><br><br>
    <label for=""><b>User_Name</b></label><br><br>
    <input type="text" name="uname" ><br><br>
    <label for=""><b>Password</b></label><br><br>
    <input type="password" name="pass" ><br><br>
<button type="submit" name="save" ><b> Submit</b></button>


</div>
</form>
</fieldset>
</center>

<?php

include "connection.php";
if (isset($_POST['save'])) {
    $Full_Name= $_POST['fname'];
    $Department= $_POST['department'];
    $Responsibility= $_POST['respons'];
    $Level= $_POST['level'];
    $User_Name= $_POST['uname'];
    $Password= $_POST['pass'];
    
        $insert= "INSERT INTO employee VALUES('','$Full_Name','$Department','$Responsibility','$Level','$User_Name','$Password')";
        $query= mysqli_query($connect,$insert);

        header("location:index.php");

    }

?>
</body>
</html>

