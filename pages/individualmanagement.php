<?php
// Simulating a logged-in user with an individual account
$userName = "Jane Doe";
$measurements = [
    ["date" => "2023-10-01", "value" => "72 kg"],
    ["date" => "2023-09-25", "value" => "71.5 kg"],
    ["date" => "2023-09-18", "value" => "71 kg"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Account Management - Measurement Management System</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .container {
            padding: 20px;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Individual Account Management</h4>
        <p>Welcome, <?php echo htmlspecialchars($userName); ?>! Manage your customer's measurements below.</p>

        <!-- Add Measurement Button -->
        <a href="#" class="btn waves-effect waves-light blue">
            <i class="material-icons left">add</i>Add Measurement
        </a>

        <!-- Measurements Table -->
        <table class="striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($measurements as $measurement): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($measurement['date']); ?></td>
                        <td><?php echo htmlspecialchars($measurement['value']); ?></td>
                        <td>
                            <a href="#" class="btn waves-effect waves-light green">
                                <i class="material-icons left">edit</i>Edit
                            </a>
                            <a href="#" class="btn waves-effect waves-light red">
                                <i class="material-icons left">delete</i>Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>