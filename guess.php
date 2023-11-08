<?php
session_start();

$correct_answer = 24;

// Check if the user has submitted a guess
if (isset($_POST['guess'])) {
    $guess = intval($_POST['guess']);
    
    if ($guess == $correct_answer) {
        $message = "Congratulations! You guessed the correct number: $correct_answer";
    } elseif ($guess < $correct_answer) {
        $message = "Try a higher number!";
    } else {
        $message = "Try a lower number!";
    }
} else {
    // User hasn't submitted a guess yet
    $message = "Welcome to the guessing game!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>87509872</title>
</head>
<body>
    <h1>Guess the Number Game</h1>
    <p><?php echo $message; ?></p>
    <form method="post">
        <label for="guess">Enter your guess:</label>
        <input type="number" id="guess" name="guess" min="1" max="100">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
