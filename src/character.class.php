<?php
// 創造角色，有各種數值、擁有的技能、攻擊、施放魔法
class Character
{
    public $name;
    public $profession;
    public $hp = 10;
    public $mp = 10;
    public $physicalAttack = 3;
    public $magicAttack = 3;
    public $physicalDefense = 1;
    public $magicDefense = 1;
    public $luck = 0;
    public $level = 1;
    public $experience = 0;
    public $skillLibrary = [];
    public function __construct($name, $profession)
    {
        $this->name = $name;
        $this->profession = $profession;
    }
    public function getAttributes(): array
    {
        return [
            'Name' => $this->name,
            'Profession' => $this->profession,
            'HP' => $this->hp,
            'MP' => $this->mp,
            'PhysicalAttack' => $this->physicalAttack,
            'MagicAttack' => $this->magicAttack,
            'PhysicalDefense' => $this->physicalDefense,
            'MagicDefense' => $this->magicDefense,
            'Luck' => $this->luck,
            'Level' => $this->level,
            'Experience' => $this->experience,
            // 'Skill' => implode(', ', $this->skillLibrary)
        ];
    }

    public function printAttributes()
    {
        $attributes = $this->getAttributes();
        foreach ($attributes as $attribute => $value) {
            echo "{$attribute}: {$value}" . PHP_EOL;
        }
    }
    public function physical_attack()
    {
        return $this->physicalAttack;
    }
    public function be_physical_attacked(int $damage)
    {
        $hpDecreased = $damage - $this->physicalDefense;
        $this->hp -= $hpDecreased;
        return $hpDecreased;
        // echo "受到 $hp_decreased 傷害";
    }
}

