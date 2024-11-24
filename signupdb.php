<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $checkQuery = "SELECT * FROM customer WHERE gmail = '$gmail'";
    $result = mysqli_query($con, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists
        echo "<script>
                alert('This email is already registered.');
                window.location.href = 'loginsignup.php';
              </script>";
    } else {
        // Insert new record
        $sql = "INSERT INTO customer (username, gmail, password) VALUES ('$name', '$gmail', '$password')";
        if (mysqli_query($con, $sql)) {
            echo "<script>alert('You  are successfully login');</script>";
            header('Location: index.php');
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>
