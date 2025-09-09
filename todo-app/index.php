<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Simple App</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h1 class="heading">ToDo App</h1>
    <div class="container">
        <div class="form-area">
            <form method="POST" action="add_task.php">
                <input type="text" name="task"
                    placeholder="Write your task here..." required />
                <button class="form-btn" name="add-task">
                    Add Task
                </button>
            </form>
        </div>
        <table class="table">
            <thead class="table-head">
                <tr>
                    <th>#</th>
                    <th>Tasks</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <?php
                require 'config.php';
                $fetchingtasks =
                    mysqli_query($conn, "SELECT * FROM `task` ORDER BY `task_id` ASC")
                    or die(mysqli_error($conn));
                $count = 1;
                while ($fetch = $fetchingtasks->fetch_array()) {
                ?>
                    <tr class="table-body-bottom">
                        <td>
                            <?php echo $count++ ?>
                        </td>
                        <td>
                            <?php echo $fetch['task'] ?>
                        </td>
                        <td>
                            <?php echo $fetch['status'] ?>
                        </td>
                        <td colspan="2" class="action">
                            <?php
                            if ($fetch['status'] != "Done") {
                                echo
                                '<a href="update_task.php?task_id=' . $fetch['task_id'] . '" 
class="btn-completed">✅</a>';
                            }
                            ?>
                            <a href="delete_task.php?task_id=<?php echo $fetch['task_id'] ?>"
                                class="btn-remove">
                                ❌
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>