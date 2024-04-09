<center>
    <h2><b>FARMERS</b></h2>
    <fieldset style="width:200px; border-radius:5px;">
<form action="" method="POST">
    <label for=""><b>Farmer Name:</b></label><br><br>
    <input type="text" name="fname"><br><br>
    <label for=""><b>Id Number:</b></label><br><br>
    <input type="number" name="idnum"><br><br>
    <label for=""><b>Crop Type:</b></label><br><br>
    <input type="text" name="ctype"><br><br>
    <label for=""><b>Season Type:</b></label><br><br>
    <input type="text" name="stype"><br><br>
    <label for=""><b>Quantity:</b></label><br><br>
    <input type="number" name="quantity"><br><br>
    <button type="submit" name="save"><b>SUBMIT</b></button>
</form>
</fieldset>
</center>
<?php
if(isset($_POST['save'])){
$fname = $_POST['fname'];
$idnum = $_POST['idnum'];
$ctype = $_POST['ctype'];
$stype = $_POST['stype'];
$quantity = $_POST['quantity'];
include "connection.php";
$insert= "INSERT INTO farmer VALUES('','$fname','$idnum','$stype','$ctype','$quantity',NOW())";
        $query= mysqli_query($connect,$insert);
        header("location:welcome.php");
}
?>
