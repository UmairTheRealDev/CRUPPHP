<?php 
 $con = mysqli_connect("localhost", "root", "", "crud_db") or die("connection failed");

if(isset($_GET['delid']))
{
    $id = $_GET['delid'];
    $sql = "DELETE FROM `users_tbl` WHERE $id = `id`";
    // print_r($sql);
    if(mysqli_query($con,$sql))
    {
        header('location: table.php');
    }

}


