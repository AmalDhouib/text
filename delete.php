<?php
mysqli_connect("localhost", "root", "", "s");
$db=mysqli_select_db($connection,'phpcrud');
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $querry ="DELETE FROM s WHERE id='$id'";
    $querry-run =mysqli_query($connection,$querry):
    if ($querry_run){
        echo'<script> alert("Data Deleted");</script>';
        header("location : home.php")
    }
    else{
        echo'<script> alert("Data not Deleted");</script>';

    }
}
?>