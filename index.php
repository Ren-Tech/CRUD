<?php
include_once 'functions.php';
$result = getUsers();
$totalUsers = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple CRUD Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="styles/styles.css?v=<?php echo time(); ?>">
   
</head>
<body>

<div class="row mx-auto">
    <div class="col text-center crud-item">
        <h1 class="crud-letter">C</h1>
        <h5 class="crud-word">create</h5>
        <i class="fas fa-user-plus crud-icon create-icon"></i>
    </div><div class="col text-center crud-item">
        <h1 class="crud-letter">R</h1>
        <h5 class="crud-word">read</h5>
        <i class="fas fa-eye crud-icon read-icon"></i>
    </div><div class="col text-center crud-item">
        <h1 class="crud-letter">U</h1>
        <h5 class="crud-word">update</h5>
        <i class="fas fa-edit crud-icon update-icon"></i>
    </div><div class="col text-center crud-item">
        <h1 class="crud-letter">D</h1>
        <h5 class="crud-word">delete</h5>
        <i class="fas fa-trash-alt crud-icon delete-icon"></i>
    </div>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">USER LIST</h2>
        </div>
        <div class="card-body">
            <p>Total Users: <?php echo $totalUsers; ?></p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> EDIT</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> ADD NEW USER</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


