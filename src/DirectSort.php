<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/4/18
 * Time: 7:41 PM
 */

namespace App;


final class DirectSort implements SortStrategyInterface
{
    const STRATEGY = 'direct';

    public function sort($data) {
        sort($data);
        return $data;
    }
}