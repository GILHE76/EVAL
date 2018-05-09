<?php
define("PATHCONF", "./conf/");
date_default_timezone_set("Europe/Paris");
require_once "./functions/classAutoLoader.php";
spl_autoload_register('classAutoLoader');

$chat1 = new Chat('Noireau', 2, 'noir', 'male', 'asiatique');
$chat2 = new Chat('Nova', 8, 'blanc', 'male', 'europeen');
$chat3 = new Chat('Pollux', 10, 'bleu', 'femelle', 'bresilien');
$chats = array($chat1, $chat2, $chat3);?>
<table>
    <thead>
    <tr>
        <th>Prenom</th>
        <th>Age</th>
        <th>Couleur</th>
        <th>Sexe</th>
        <th>Race</th>
    </tr>
    </thead>
    <?php foreach ($chats as $chat) {
    $getInfo = $chat->getInfos();?>
    <tr>
        <td><?php echo $getInfo['prenom'] ?></td>
        <td><?php echo $getInfo['age'] ?></td>
        <td><?php echo $getInfo['couleur'] ?></td>
        <td><?php echo $getInfo['sexe'] ?></td>
        <td><?php echo $getInfo['race'] ?></td>
    </tr>
    <?php } ?>
</table>

