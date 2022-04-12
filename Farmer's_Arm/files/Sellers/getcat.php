<?php
include '../db.php';

$data = mysqli_query($conn,"SELECT * FROM category where category_id=".$_GET['id']);
echo json_encode(mysqli_fetch_array($data));
mysqli_close($conn);