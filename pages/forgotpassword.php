<?php
// Start session
session_start();

// Simulate database (replace with actual database logic)
$users = [
    'user@example.com' => [
        'password' => password_hash('old_password', PASSWORD_DEFAULT),
        'reset_token' => null,
        'reset_expires' => null
    ]
];

// Handle Forgot Password Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['forgot_password'])) {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
    } elseif (!array_key_exists($email, $users)) {
        $_SESSION['error'] = "Email not found.";
    } else {
        // Simulate sending a reset link
        $token = bin2hex(random_bytes(16));
        $users[$email]['reset_token'] = $token;
        $users[$email]['reset_expires'] = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $_SESSION['message'] = "Password reset link has been sent to your email.";
        $_SESSION['reset_token'] = $token; // Simulate storing token in session
    }
}

// Handle Reset Password Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $token = $_POST['token'];

    // Validate passwords
    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
    } else {
        // Simulate token validation
        $email = array_search($token, array_column($users, 'reset_token'));
        if ($email && $users[$email]['reset_expires'] > date("Y-m-d H:i:s")) {
            // Update password
            $users[$email]['password'] = password_hash($new_password, PASSWORD_DEFAULT);
            $users[$email]['reset_token'] = null;
            $users[$email]['reset_expires'] = null;

            $_SESSION['message'] = "Your password has been updated successfully.";
            unset($_SESSION['reset_token']);
        } else {
            $_SESSION['error'] = "Invalid or expired token.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../includes/header.php'; ?>
<div class="container">
    <!-- Forgot Password Page -->
    <?php if (!isset($_GET['token'])): ?>
        <h2>Forgot Password</h2>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="red-text"><?php echo $_SESSION['error'];
                                    unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="green-text"><?php echo $_SESSION['message'];
                                    unset($_SESSION['message']); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="input-field">
                <input type="email" id="email" name="email" required>
                <label for="email">Email Address</label>
            </div>
            <button type="submit" name="forgot_password" class="btn waves-effect waves-light">Send Reset Link</button>
        </form>
    <?php else: ?>
        <!-- Reset Password Page -->
        <h2>Reset Password</h2>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="red-text"><?php echo $_SESSION['error'];
                                    unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="green-text"><?php echo $_SESSION['message'];
                                    unset($_SESSION['message']); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
            <div class="input-field">
                <input type="password" id="new_password" name="new_password" required>
                <label for="new_password">New Password</label>
            </div>
            <div class="input-field">
                <input type="password" id="confirm_password" name="confirm_password" required>
                <label for="confirm_password">Confirm New Password</label>
            </div>
            <button type="submit" name="reset_password" class="btn waves-effect waves-light">Reset Password</button>
        </form>
    <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>

</html>