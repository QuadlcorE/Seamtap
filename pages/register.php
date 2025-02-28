<!DOCTYPE html>
<html lang="en">
    <?php include '../includes/header.php'; ?>
    <div class="container">
        <h2 class="center-align">Fashion Designer Registration</h2>
        <div class="row">
            <form class="col s12" action="register_process.php" method="POST">
                <!-- Full Name -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="full_name" name="full_name" type="text" class="validate" required>
                        <label for="full_name">Full Name</label>
                    </div>
                </div>
                <!-- Email Address -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email Address</label>
                    </div>
                </div>
                <!-- Password -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <!-- Confirm Password -->
                <div class="row">
                    <div class="input-field col s12">
                        <input id="confirm_password" name="confirm_password" type="password" class="validate" required>
                        <label for="confirm_password">Confirm Password</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="row">
                    <div class="col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Register
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>
</html>