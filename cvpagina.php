<?php
include_once 'config.php';

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($con, $sql);