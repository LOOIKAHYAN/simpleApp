<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Include database connection
    include "../phppost/db.php";

    // Get form data
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $app = $_POST['app'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    // Prepare SQL statement to update the rating
    $sql = "UPDATE ratings SET fullname = ?, age = ?, gender = ?, app = ?, rating = ?, comments = ? WHERE id = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssi", $fullname, $age, $gender, $app, $rating, $comments, $id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Rating updated successfully, redirect back to the ratings page
        header("Location: ratings.php");
        exit();
    } else {
        // Failed to update rating
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
} else {
    // If form is not submitted, redirect back to the ratings page
    header("Location: ratings.php");
    exit();
}
?>