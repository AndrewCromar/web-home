<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = "iloveyou";
    $input_password = $_POST['password'] ?? '';
    $type = strtolower($_POST['type'] ?? '');

    // Check password
    if (strtolower($input_password) === $password) {
        if ($type === "dad") {
            echo "<p>Dad Message</p>";
        } elseif ($type === "mom") {
            echo "<p>Mom Message</p>";
        } else {
            echo "<p>Unknown user.</p>";
        }
    } else {
        echo "<p>Incorrect password!</p>";
    }
} else {
    // If the form hasn't been submitted, show the HTML form
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