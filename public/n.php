<?php
$correct_password = "sara";

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

<marquee>Nick is coolbeans.</marquee>

<p>Dear Nick,</p>

<hr>

<h1>Happy Birthday Nickolad Strength!!!!</h1>

<p>21 Years old!! DEAR GOD UR OLD</p>

<p>Welp guess ur gonna have to live with it. 🤷‍♂️</p>

<p>Pros:</p>
<ul>
    <li>Friend</li>
    <li>Loves nature as I do</li>
    <li>Climbing</li>
    <li>Ditches gf to hang (bros before hoes).</li>
</ul>
<p>Cons:</p>
<ul>
    <li>Unc</li>
    <li>Far away</li>
    <li>Chopped 😂</li>
</ul>

<p>Gotta say ur a good friend and I'm glad to know you.</p>

<p>Have a slice of cake: 🍰</p>
<p>Actually have a few more: 🍰🍰🍰🍰🍰</p>
<p>Lokey you can have the whole cake: 🎂</p>
<p>Here you can have more cakes since its ur special day: 🎂🎂🎂🎂🎂🎂🎂</p>

<p>You: 😋</p>

<p>No way you ate all of that u fat fuck.</p>

<p>Happy birthday pal.</p>

<p>Alright peace.</p>

<hr>

<p>Sincerely,</p>
<p>Andrew</p>

<?php else: ?>
    
    <h1>Unlock ur birthday present!!!!</h1>
    <p>Hint: Spell her name wrong.</p>

    <h2>What is the password?</h2>
    <form method="POST" action="">
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Unlock">
    </form>
    
    <?php if ($error_message): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

<?php endif; ?>
