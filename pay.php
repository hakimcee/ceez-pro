<center>
    <h2><b>Payment Form</b></h2>
    <fieldset style="width:200px; border-radius:5px;">
        <form action="" method="POST">
            <label for=""><b>Quantity:</b></label><br><br>
            <input type="number" name="quantity"><br><br>
            <label for=""><b>Price Per_Unity:</b></label><br><br>
            <input type="number" name="punit"><br><br>
        <button type="submit" name="save"><b>SUBMIT</b></submit>
</form>
    </fieldset>
</center>
<?php
if(isset($_POST['save'])){
    $id= $_GET["fid"];
    $quantity=$_POST['quantity'];
    $punit=$_POST['punit'];
    $total= floatval($quantity) * floatval($punit);
    $select = "SELECT * FROM farmer WHERE idnum='$id'";
    include "connection.php";
    $insert= "INSERT INTO payment VALUES('','$id','$quantity','$punit','$total',NOW())";
    $query= mysqli_query($con,$insert);

    echo"<h3>Payment SuccessFull!!!</h3>";
    header("location:welcome.php");
}

?>