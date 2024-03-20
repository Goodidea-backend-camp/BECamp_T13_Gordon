<!-- 開始遊戲 -->

<?php
require_once 'createHero.php';
require_once 'continue.php';

startGame();

function startGame()
{
    echo "數字選擇 1.繼續 2.創建新角色 3.查看對戰紀錄：";
    $start = fgets(STDIN);
    if ($start == 1) {
        echo "你要選擇的角色是？";
        // continueGame($hero);
    } else if ($start == 2) {
        createHero();
        echo "你已創好角色，請選擇繼續。";
        startGame();
    } else if ($start == 3) {
        echo "你要查看的對戰紀錄是？";
    } else {
        echo "請輸入1,2,3";
    }
}


?>