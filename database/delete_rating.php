<?php
// Check if the rating ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $rating_id = $_GET['id'];

    // Include database connection
    include "../phppost/db.php";

    // Prepare SQL statement to delete the rating
    $sql = "DELETE FROM ratings WHERE id = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $rating_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Rating deleted successfully, redirect back to the ratings page
        header("Location: ratings.php");
        exit();
    } else {
        // Failed to delete rating
        echo "Error: " . mysqli_error($conn);
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
} else {
    // If rating ID is not provided, redirect back to the ratings page
    header("Location: ratings.php");
    exit();
}
?>