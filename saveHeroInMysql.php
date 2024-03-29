<?php
function saveHeroInMysql($hero)
{
    $name = $hero->name;
    $profession = $hero->profession;
    $hp = $hero->hp;
    $mp = $hero->mp;
    $physical_attack = $hero->physicalAttack;
    $magic_attack = $hero->magicAttack;
    $physical_defense = $hero->physicalDefense;
    $magic_defense = $hero->magicDefense;
    $luck = $hero->luck;
    $skill = "Slash";
    $stage = $hero->stage;

    // $value = array_values($hero->getAttributes());
    // echo implode(',', $value);

    $sql = "INSERT INTO hero (name, Profession, HP, MP, Physical_Attack, Magic_Attack, Physical_Defense, Magic_Defense, Luck, Skill, Stage)
VALUES ('$name', '$profession', $hp, $mp, $physical_attack, $magic_attack, $physical_defense, $magic_defense, $luck, '$skill', $stage)";

    global $dblink;
    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    mysqli_query($dblink, $sql);

}