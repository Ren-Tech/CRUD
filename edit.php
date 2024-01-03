<?php
include_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (updateUser($id, $name, $email, $phone)) {
        header("Location: index.php");
    } else {
        echo "Error updating user.";
    }
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = getUsers();  
    $row = mysqli_fetch_assoc($result);


} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles\edit.css">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Edit User</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Back to Users List</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
