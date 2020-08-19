<?php

class Mother {
    private $root;
    public function treeInit($array)
    {
        $this->root = new Child();
        foreach($array as $value){
            $this->root->treeClimb(array_reverse($value));
        }
        return $this->root;
    }
}

class Child {
    private $children = [];
    public function treeClimb($arr)
    {
        if(count($arr) > 0) {
            $childTmp = array_pop($arr);
            if(!key_exists($childTmp,$this->children))
            {
                $this->children[$childTmp] = new Child();
            }
        $this->children[$childTmp]->treeClimb($arr);
        }
    }
}

$array = array(array('obst','banae','krumm','gelb'),
                    array('obst','beere','him'),
                    array('obst','beere','brom'),
                    array('obst','banae','gerade'),
                    array('veg','carot','gerade'));

$obj = new Mother();
var_dump($obj->treeInit($array));
