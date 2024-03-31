<?php
function continueInGame($hero, $monster)
{
    echo "進入(" . ($hero->stage) . ")關";
    echo "遭遇怪物血量為{$monster->hp}，攻擊為{$monster->physicalAttack}";
    while (!$monster->hp <= 0 && !$hero->hp <= 0) {
        echo PHP_EOL . "請輸入 1.普攻 2.使用技能 3.閃躲攻擊";
        $actioin = fgets(STDIN);
        if ($actioin == 1) {
            $beAttacted = $hero->be_physical_attacked($monster->physical_attack());
            $attact = $monster->be_physical_attacked($hero->physical_attack());
            echo "受到{$beAttacted}傷害,英雄剩下{$hero->hp}血量";
            echo "怪物受到{$attact}傷害,怪物剩下{$monster->hp}血量";
        } elseif ($actioin == 2) {
            echo "功能還沒做";
        } elseif ($actioin == 3) {
            echo "功能還沒做";
        } else {
            echo "請輸入 1,2,3";
        }
    }

    if ($monster->hp <= 0) {
        echo PHP_EOL . "打贏怪物了";
        return true;
    } else if ($hero->hp <= 0) {
        echo PHP_EOL . "game over";
        return false;
    }
}