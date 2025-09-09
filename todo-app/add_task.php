<?php 
require_once 'config.php';

if (isset($_POST['add-task'])) {
    if (!empty($_POST['task'])) {
        $task = mysqli_real_escape_string($conn, $_POST['task']);

        $sql = "INSERT INTO `task` (`task`, `status`) VALUES ('$task', 'In progress...')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
