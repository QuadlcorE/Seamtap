<?php
// Simulating a logged-in user
$userName = "John Doe";
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php'; ?>
    <!-- Dashboard Content -->
    <div class="dashboard-container">
        <div class="row">
            <div class="col s12">
                <h4>Welcome, <?php echo htmlspecialchars($userName); ?>!</h4>
                <p>Here's a quick overview of your account.</p>
            </div>
        </div>

        <!-- Button Section -->
        <div class="row button-section">
            <div class="col s12">
                <a href="#" class="btn waves-effect waves-light blue">
                    <i class="material-icons left">group</i>View Families
                </a>
                <a href="#" class="btn waves-effect waves-light green">
                    <i class="material-icons left">person</i>View Individuals
                </a>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php'; ?>
</html>