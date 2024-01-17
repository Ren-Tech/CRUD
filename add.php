<?php
include_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (addUser($name, $email, $phone)) {
        header("Location: index.php");
    } else {
        echo "Error adding user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="styles/add.css?v=<?php echo time(); ?>">
    
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
    <div class="container">
        
            <div class="card-header">
                <h2 class="text-center">ADD NEW USER</h2>
            </div>
            <p>

            <form action="" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                </div>

                <div class="text-center-buttons">
    <button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> ADD USER</button>
    <a href="index.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> BACK TO USER LIST</a>
</div>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
