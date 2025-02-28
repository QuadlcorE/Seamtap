<?php
session_start();

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    // Simulate user validation (replace with actual database logic)
    if (isset($_SESSION['user']) && $_SESSION['user']['email'] === $email) {
        if (password_verify($password, $_SESSION['user']['password'])) {
            // Login successful
            echo "<p class='green-text center-align'>Login successful! Welcome, " . $_SESSION['user']['full_name'] . ".</p>";
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php'; ?>
<div class="container">
    <h2 class="center-align">Login</h2>
    <?php if (isset($error)): ?>
        <div class="red-text center-align"><?php echo $error; ?></div>
    <?php endif; ?>
    <form action="" method="POST">
        <!-- Email Address -->
        <div class="input-field">
            <input type="email" id="email" name="email" required>
            <label for="email">Email Address</label>
        </div>

        <!-- Password -->
        <div class="input-field">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
        </div>

        <!-- Submit Button -->
        <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit">Login
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
<?php include '../includes/footer.php'; ?>

</html>