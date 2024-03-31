<?php

require_once 'mysql.php';
require_once 'deleteHeroMysql.php';
require_once 'saveHeroInMysql.php';
require_once 'continueInGame.php';
require_once 'monster.php';


function continueGame()
{
    echo "選擇你的角色名稱" . PHP_EOL;
    //串接DB原有角色
    global $dblink;
    // 用mysqli_query方法執行(sql語法)將結果存在變數中
    $result = mysqli_query($dblink, "select * from hero");
    if (mysqli_num_rows($result) === 0) {
        echo '還沒有英雄，請先創建角色';
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . PHP_EOL;
    }

    $heroName = trim(fgets(STDIN));
    $sql = "SELECT * FROM hero WHERE name='$heroName'";

    $result = mysqli_query($dblink, $sql);
    $heroAttr = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) === 0) {
        echo '角色名字打錯摟' . PHP_EOL;
        throw new Exception('角色名字打錯摟');
    }
    $hero = new Hero($heroAttr['name'], $heroAttr['Profession']);
    $hero->setAttribute($heroAttr);
    echo "你的英雄能力";
    $hero->printAttributes();

    // $level_1_monster = new Character('Slime', '');
    // $level_1_monster->hp = 30;
    global $monster;

    $winEnermy = true;
    while ($winEnermy) {
        echo "數字選擇 1.進到下一關 2.存擋 3.查看目前英雄能力：";
        $start = fgets(STDIN);
        if ($start == 1) {
            if ($monster[$hero->stage]) {
                $winEnermy = continueInGame($hero, $monster[$hero->stage]);
            } else {
                echo "找不到該怪物，已經全破";
                return;
            }
            if ($winEnermy) {
                $hero->stage++;
            }
        } else if ($start == 2) {
            deleteHeroMysql($hero);
            saveHeroInMysql($hero);
            echo "存擋成功";
        } else if ($start == 3) {
            $hero->printAttributes();
        } else {
            echo "請輸入1/2/3";
        }
    }

}

