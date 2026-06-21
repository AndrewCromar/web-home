<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = "iloveyou";
    $input_password = $_POST['password'] ?? '';
    $type = strtolower($_POST['type'] ?? '');

    if (strtolower($input_password) === $password) {
        if ($type === "dad") {
            header("Location: dad.php");
            exit; // Stop executing the script after redirect
        } elseif ($type === "mom") {
            header("Location: mom.php");
            exit;
        } else {
            echo "<p>Unknown user.</p>";
        }
    } else {
        echo "<p>Incorrect password!</p>";
    }
} else {
?>
    <form method="post" action="">
        <label>What is the password? </label>
        <input type="password" name="password" required><br><br>

        <label>Are you dad or mom? </label>
        <select name="type">
            <option value="dad">Dad</option>
            <option value="mom">Mom</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
<?php
}
?>