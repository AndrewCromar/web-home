<?php
$correct_password = "iloveyou";

$access_granted = false;
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST['password'] ?? '';

    if ($user_input === $correct_password) {
        $access_granted = true;
    } else {
        $error_message = "Incorrect password. Please try again.";
    }
}
?>

<?php if ($access_granted): ?>
    
    letter goes here

<?php else: ?>
    
    <h2>Enter Password to Read the Letter</h2>
    <form method="POST" action="">
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Unlock">
    </form>
    
    <?php if ($error_message): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

<?php endif; ?>