<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view_users.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Users</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("database/db_connection.php");
                    
                    if ($dbcon) {
                        $view_users_query = "SELECT * FROM users";
                        $run = mysqli_query($dbcon, $view_users_query);

                        if ($run) {
                            // Loop through the results
                            while ($row = mysqli_fetch_array($run)) {
                                $user_id = $row['id'];
                                $user_name = $row['user_name'];
                                $user_email = $row['user_email'];
                                ?>
                                <tr>
                                    <td><?php echo $user_id; ?></td>
                                    <td><?php echo $user_name; ?></td>
                                    <td><?php echo $user_email; ?></td>
                                    <td>
                                        <a href="delete.php?del=<?php echo $user_id; ?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<script>alert('Failed to fetch users.');</script>";
                        }
                    } else {
                        echo "<script>alert('Failed to connect to the database.');</script>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
