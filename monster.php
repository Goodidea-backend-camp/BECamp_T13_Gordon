<?php
require_once 'autoloader.php';

$monster = [];
$level_1_monster = new Character('Slime', '');
$level_1_monster->hp = 30;
$monster[1] = $level_1_monster;

$level_2_monster = new Character('bat', '');
$level_2_monster->hp = 20;
$level_2_monster->physicalAttack = 3;
$monster[2] = $level_2_monster;


