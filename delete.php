<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost", "root", "", "crud");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM users WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header("Location: index.php");
}
?>
