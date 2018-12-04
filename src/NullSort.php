<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/4/18
 * Time: 8:52 PM
 */

namespace App;


final class NullSort implements SortStrategyInterface
{
    public function sort($data)
    {
       return $data;
    }
}