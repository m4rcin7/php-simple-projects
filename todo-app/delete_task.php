<?php
require_once 'config.php';

if (isset($_GET['task_id'])) {
    $task_id = (int) $_GET['task_id'];

    $deletingtasks = mysqli_query($conn, 
        "DELETE FROM `task` WHERE `task_id` = $task_id"
    ) or die(mysqli_error($conn));

    header("Location: index.php");
    exit();
}
?>
