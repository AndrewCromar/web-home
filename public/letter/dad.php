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
    
<p>Dad,</p>

<p>It is twelve am and I have realised it is Father's Day! I thought I should do something so I've wipped this up.</p>

<p>Firstly, thanks for everything; thanks for the new bike, thanks for taking us to Hawaii, thanks for supporting me so I can survive, thanks for helping me be able to go to college, thanks for everything I have not mentioned.</p>

<p>I am very greatfull to have you as my dad and I'm sure the rest of us kids are too.</p>

<p>You give me so much I wish I could give back but I literally can't.</p>

<p>I feel as I have gotten older I have come to realise just how much you do for the family. Even this trip to Hawaii, going out to delicious food every night, very nice hotel/airbnb, lots of fun activities. It must have cost so much! You would spend so much on things and then still offer to rent sixty dollar chairs and surf boards!</p>

<p>It's not just about the money, I'm just using it as an example of how much you give. I try to think about why you give so much, I feel I don't deserve it because what have I done? I have some idea of why you do but it's still crazy. I only wish I could give so much in return.</p>

<p>You give us an awsome house to live in and continue to improve it and make it awesome. A ton of the last gifts and presents you have given me are awsome. When I opened the card on my birthday for the computer upgrade budget I feel I didn't react strong enough to show by gratitude, same with the desk upgrade. Both of which have turned out to be awesome gifts and I use them so much and am so happy to have them. I was riding my new bike before writing this and it is so nice!</p>

<p>Thank you for being my dad, I could not have asked for a better one.</p>

<p>I Love You,</p>
<p>Andrew</p>

P.S. I want to write more and write another letter for Mom but it is getting late and I am very tired so I am going to go to bed, good night.

<?php else: ?>
    
    <h2>What is the password?</h2>
    <form method="POST" action="">
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Unlock">
    </form>
    
    <?php if ($error_message): ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>

<?php endif; ?>