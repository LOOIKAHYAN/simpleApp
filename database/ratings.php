<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="../images/demo.png">
    <title>Ratings Database</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            margin-bottom: 50px;
            background: linear-gradient(to right, #eaeffa, #c1d0f0, #98b1e6);
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        form {
            text-align: right;
            margin-right: 50px;
            margin-bottom: 20px;
        }

        select,
        input[type="text"],
        input[type="submit"] {
            padding: 8px;
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
        }

        select {
            margin-right: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            margin-left: 10px;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 95%;
            background-color: white;
            border: 1px solid darkblue;
        }

        th,
        td {
            border-left: 1px solid darkblue;
            border-right: 1px solid darkblue;
            text-align: left;
            padding: 3px 10px;
        }

        th {
            background-color: #71dada;
            border: 1px solid darkblue;
            padding: 5px 10px;
        }

        tr:nth-child(even) td {
            background-color: #d6f5f5;
        }

        tr:nth-child(odd) td {
            background-color: #ebfafa;
        }

        .action-buttons {
            text-align: center;
        }

        .action-buttons button {
            margin: 5px;
            font-family: "Times New Roman";
            font-size: 20px;
            padding: 2px 10px;
            border: 1px solid gray;
            border-radius: 10px;
            font-weight: 600;
        }

        .updateBtn {
            color: green;
        }

        .deleteBtn {
            color: red;
        }

        .action-buttons button:hover {
            background-color: lightgray;
        }
    </style>
    <script>
        function confirmAction(action, id) {
            var username = "";
            var password = "";

            while (username === "") {
                username = prompt("Please enter your username:", "");
            }

            while (password === "") {
                password = prompt("Please enter your password:", "");
            }

            // Validate username and password (this is just a simple example)
            if (username == "admin" && password == "1234") {
                // Based on the action, redirect to the appropriate URL
                switch (action) {
                    case 'update':
                        window.location.href = 'edit_rating.php?id=' + id + '&username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
                        break;
                    case 'delete':
                        if (confirm("Are you sure you want to delete this rating?")) {
                            window.location.href = 'delete_rating.php?id=' + id;
                        }
                        break;
                    default:
                        break;
                }
            } else {
                alert("Invalid username and password!");
            }
        }
    </script>
</head>

<body>

    <h2
        style="background-color: steelblue; margin-top:0px; padding: 10px; color: white; text-shadow: 2px 2px 1px black;">
        Ratings Database</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Filter by:
        <select id="filter_column" name="filter_column">
            <option value="">Select Column</option>
            <option value="id">ID</option>
            <option value="submitdatetime">Submit Date Time</option>
            <option value="fullname">Full Name</option>
            <option value="age">Age</option>
            <option value="gender">Gender</option>
            <option value="app">App</option>
            <option value="rating">Rating</option>
            <option value="comments">Comments</option>
        </select>
        <input type="text" name="filter_value" placeholder="Enter value">
        <input type="submit" name="submit" value="Filter">
    </form>

    <?php
    include "../phppost/db.php";

    $filter_column = $_POST['filter_column'] ?? '';
    $filter_value = $_POST['filter_value'] ?? '';
    $sql = "SELECT * FROM ratings";
    if (!empty($filter_column) && !empty($filter_value)) {
        // Use LIKE operator for pattern matching with wildcard %
        $filter_value = '%' . $filter_value . '%';
        $sql .= " WHERE $filter_column LIKE '$filter_value'";
    }
    // SQL query to fetch data
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
    
        ?>
        <table>
            <tr>
                <th style="width:2%;">ID</th>
                <th style="width:10%;">Submit Date Time</th>
                <th style="width:15%;">Full Name</th>
                <th style="width:5%;">Age</th>
                <th style="width:10%;">Gender</th>
                <th style="width:15%;">App</th>
                <th style="width:3%;">Rating</th>
                <th style="width:25%;">Comments</th>
                <th style="width:15%;">Action</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["submitdatetime"] . "</td>
                <td>" . $row["fullname"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["app"] . "</td>
                <td>" . $row["rating"] . "</td>
                <td>" . $row["comments"] . "</td>
                <td class='action-buttons'>
                    <button class='updateBtn' onclick=\"if(confirmAction('update', " . $row["id"] . ")) { location.href='edit_rating.php?id=" . $row["id"] . "' }\">Update</button>
                    <button class='deleteBtn' onclick=\"if(confirmAction('delete', " . $row["id"] . ")) { location.href='delete_rating.php?id=" . $row["id"] . "' }\">Delete</button>
                </td>
            </tr>";
            }
            echo "</table>";
    } else {

        ?>

            <table>
                <tr>
                    <td style="text-align: center; background-color: white; padding: 10px;">No records found</td>
                </tr>
            </table>

            <?php
    }
    $conn->close();
    ?>

</body>

</html>