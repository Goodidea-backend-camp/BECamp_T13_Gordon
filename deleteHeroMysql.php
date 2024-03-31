<?php
function deleteHeroMysql($hero)
{
    global $dblink;
    $sql = "DELETE FROM hero WHERE name='{$hero->name}'";
    mysqli_query($dblink, $sql);
    // echo "刪除{$hero->name}完成";
}

