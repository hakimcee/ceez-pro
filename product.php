
<center>
    <h2>Product Register</h2>
    <fieldset style="width:200px; border-radius:5px;">
    <form action="" method="POST">
    <label for=""><b>Product Name:</b></label><br><br>
    <input type="text" name="pname"><br><br>
    <label for="">Price Per Unit:</label><br><br>
    <input type="text" name="punit"><br><br>
    <button type="submit" name="save">SUBMIT</button>
</form>
</fieldset>
</center>
<?php
include "connection.php";
$fid=$_GET['fid'];
$select="SELECT * FROM farmer WHERE farmid='$fid'";
mysqli_query($con,$select);
?>
<?php
if(isset($_POST['save'])){
    $pname=$_POST['pname'];
    $punit=$_POST['punit'];
    $connect = mysqli_connect('localhost','root','','xy_scheme');
    $insert="INSERT INTO product VALUES ('','$fid','$pname','$punit')";
    $query= mysqli_query($connect,$insert);
    header("location:welcome.php");
}
?>