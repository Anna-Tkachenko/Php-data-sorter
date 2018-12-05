<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/4/18
 * Time: 7:43 PM
 */

namespace App;


final class UndirectSort implements SortStrategyInterface
{
    const STRATEGY = 'undirect';

    public function sort($data){
        rsort($data);
        return $data;
    }
}