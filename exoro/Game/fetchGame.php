<?php
header('Content-Type:text/plain; charset=UTF-8');
session_start();

$host = "localhost";
$dbname = "exoro_database";
$dbuser = "exoro_owner";
$dbpass = "codexisfat";

try {
    $db = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $dbuser, $dbpass, array(
    PDO::ATTR_PERSISTENT => true
));
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Internal Error: " . $e->getMessage();
    }
    
    if(!is_numeric($_GET['game']) || empty($_GET['auth'])){
    exit("We're no strangers to love
You know the rules and so do I
A full commitment's what I'm thinking of
You wouldn't get this from any other guy
I just wanna tell you how I'm feeling
Gotta make you understand
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
We've known each other for so long
Your heart's been aching but you're too shy to say it
Inside we both know what's been going on
We know the game and we're gonna play it
And if you ask me how I'm feeling
Don't tell me you're too blind to see
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
Never gonna give, never gonna give
(Give you up)
We've known each other for so long
Your heart's been aching but you're too shy to say it
Inside we both know what's been going on
We know the game and we're gonna play it
I just wanna tell you how I'm feeling
Gotta make you understand
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye
Never gonna tell a lie and hurt you
Never gonna give you up
Never gonna let you down
Never gonna run around and desert you
Never gonna make you cry
Never gonna say goodbye");
    }else{
    //get player
    $plrq = $db->prepare("SELECT * FROM users WHERE jkey LIKE :ticket");
    $plrq->execute([':ticket' => $_GET['auth']]);
    $plr = $plrq->fetch();

    if(!$plr){
    exit("Couldn't get player.");
    }else{
    //get game
    $gq = $db->prepare("SELECT * FROM games WHERE id = :gid");
    $gq->execute([':gid' => $_GET['game']]);
    $game = $gq->fetch();

    if(!$game){
    exit("Couldn't get game.");
    }else{
    }
    }
    }
    ?>