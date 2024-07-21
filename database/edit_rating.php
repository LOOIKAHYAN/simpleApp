<?php
// Check if the rating ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $rating_id = $_GET['id'];

    // Include database connection
    include "../phppost/db.php";

    // Prepare SQL statement to fetch the rating details
    $sql = "SELECT * FROM ratings WHERE id = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $rating_id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch rating details
    $rating = mysqli_fetch_assoc($result);

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);

    // Check if rating exists
    if ($rating) {
        // Rating found, display edit form
        ?>

        <!DOCTYPE html>
        <html>

        <head>
            <title>Edit Rating</title>
            <style>
                body {
                    font-family: "Times New Roman";
                    margin: 30px 0;
                    background: linear-gradient(to right, #eaeffa, #c1d0f0, #98b1e6);
                    font-size: 16px;
                }

                .container {
                    text-align: center;
                }

                form {
                    width: 30%;
                    /* Adjust width as needed */
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    background-color: #f9f9f9;
                    margin-top: 20px;
                    display: inline-block;
                    font-size: 16px;
                }

                input[type="text"],
                textarea {
                    width: calc(100% - 18px);
                    /* Adjust width as needed */
                    padding: 8px;
                    margin: 6px 0;
                    box-sizing: border-box;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    font-family: "Times New Roman";
                    font-size: 16px;
                }

                input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    float: right;
                    font-family: "Times New Roman";
                    font-size: 16px;
                }

                input[type="submit"]:hover {
                    background-color: #45a049;
                }
            </style>
        </head>

        <body>
            <div class="container">
                <h2>Edit Rating</h2>
                <form method="post" action="update_rating.php">
                    <input type="hidden" name="id" value="<?php echo $rating['id']; ?>">
                    Full Name <input type="text" name="fullname" value="<?php echo $rating['fullname']; ?>"><br><br>
                    Age <input type="text" name="age" value="<?php echo $rating['age']; ?>"><br><br>
                    Gender <input type="text" name="gender" value="<?php echo $rating['gender']; ?>"><br><br>
                    App <input type="text" name="app" value="<?php echo $rating['app']; ?>"><br><br>
                    Rating <input type="text" name="rating" value="<?php echo $rating['rating']; ?>"><br><br>
                    Comments <textarea name="comments"><?php echo $rating['comments']; ?></textarea><br><br>
                    <input type="submit" name="submit" value="Update Rating">
                </form>
            </div>
        </body>

        </html>


        <?php
    } else {
        // Rating not found, redirect back to the ratings page
        header("Location: ratings.php");
        exit();
    }
} else {
    // If rating ID is not provided, redirect back to the ratings page
    header("Location: ratings.php");
    exit();
}
?>