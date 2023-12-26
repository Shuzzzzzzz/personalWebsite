<?php
    include_once 'message_database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body>
    
    <?php
        $sql = "SELECT * FROM message;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            echo '<style>
            table {
                border-collapse: collapse;
                width: fit-content;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            </style>';

            echo '<table border="1">';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th>Email</th>';
            echo '<th>Subject</th>';
            echo '<th>Message</th>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['subject'] . '</td>';
                echo '<td>' . $row['message'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        }
    ?>

</body>
</html>