<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/4/18
 * Time: 7:31 PM
 */

namespace App;


class Sort
{
    private $data = [];
    private $sortStrategy;

    public function setData(array $data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function setSortStrategy(SortStrategyInterface $sortStrategy){
        $this->sortStrategy = $sortStrategy;
    }

    public function sortData(){
        $new_data = $this->sortStrategy->sort($this->data);
        return $new_data;
    }
}