<?php

class Hero extends Character
{
    public $stage = 1;
    public function addAttribute($attribute)
    {
        if ($attribute == 1) {
            $this->physicalAttack++;
            echo "增加物理攻擊";
        } elseif ($attribute == 2) {
            $this->magicAttack++;
            echo "增加魔法攻擊";
        } elseif ($attribute == 3) {
            $this->physicalDefense++;
            echo "增加物理防禦";
        } elseif ($attribute == 4) {
            $this->magicDefense++;
            echo "增加魔法防禦";
        } elseif ($attribute == 5) {
            $this->luck++;
            echo "增加幸運";
        } else {
            echo "請輸入有效數字";
        }
    }

    //不在規劃內，後來發現使用繼續，從資料庫拿到英雄資訊，需要重新創立該角色到php內
    public function setAttribute($attributeArr)
    {
        $this->hp = $attributeArr["HP"];
        $this->mp = $attributeArr["MP"];
        $this->physicalAttack = $attributeArr["Physical_Attack"];
        $this->magicAttack = $attributeArr["Magic_Attack"];
        $this->physicalDefense = $attributeArr["Physical_Defense"];
        $this->physicalDefense = $attributeArr["Magic_Defense"];
        $this->luck = $attributeArr["Luck"];
        $this->level = $attributeArr["Level"];
        $this->experience = $attributeArr["Experience"];
        $this->skillLibrary = $attributeArr["Skill"];
        $this->stage = $attributeArr["Stage"];
    }
}


