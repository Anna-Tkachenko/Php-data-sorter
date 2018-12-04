<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/4/18
 * Time: 7:20 PM
 */

namespace App;

interface SortStrategyInterface
{
    public function sort($data);
}