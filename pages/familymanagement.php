<?php
// Simulating a logged-in user with a family account
$userName = "John Doe";
$familyMembers = [
    ["name" => "Alice", "measurements" => 12],
    ["name" => "Bob", "measurements" => 8],
    ["name" => "Charlie", "measurements" => 15],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Account Management - Measurement Management System</title>
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
        <h4>Family Account Management</h4>
        <p>Welcome, <?php echo htmlspecialchars($userName); ?>! Manage your family members and their measurements below.</p>

        <!-- Add Member Button -->
        <a href="#" class="btn waves-effect waves-light blue">
            <i class="material-icons left">person_add</i>Add Member
        </a>

        <!-- Family Members Table -->
        <table class="striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Measurement Count</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($familyMembers as $member): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($member['name']); ?></td>
                        <td><?php echo htmlspecialchars($member['measurements']); ?></td>
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