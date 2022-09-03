<?php

$bdd = new PDO("mysq1:host=127.0.0.1;dbname=tuto;charset=utf8", "root","");

if(isset($_POST['pseudo']) AND isset($_POST['
message']) AND !empty($_POST['pseudo'])
AND !empty($_POST['message']))

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);
$insertmsg = $bdd->prepare('INSERT INTO 
OséeChatMmm(pseudo, message) VALUES( ?, ?)');
$insertmsg->execute(array($pseudo, $ message));
?>
<html>

<head>
    <title>tuto php</title>
    <meta charset="utf-8">
</head>

<body>
    <form method="post" action="">
        <input type="text" name="pseudo" placeholder="pseudo" />
        <input type="text" name="message" placeholder="MESSAGE" />
        <input type="submit" value="ENVOYER" />
    </form>
</body>

</html>