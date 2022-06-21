<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/24/2014 
 * Time: 11:55 PM 
 */  
include("db.php"); 

if(isset($_POST['stud_delete_btn']))
{
    $id = $_POST['delete_stud_id'];

    $query = "DELETE FROM student WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: ViewUsers.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: ViewUsers.php");
    }
}
?> 