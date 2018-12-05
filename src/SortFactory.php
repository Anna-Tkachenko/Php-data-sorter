<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 12/5/18
 * Time: 10:08 PM
 */

namespace App;


final class SortFactory
{
    public function create($data, $strategy = null)
    {
        switch ($strategy) {
            case DirectSort::STRATEGY:
                return new Sort($data, new DirectSort());
            case UndirectSort::STRATEGY:
                return new Sort($data, new UndirectSort());
            case NullSort::STRATEGY:
                return new Sort($data, new NullSort());
        }

        throw new \RuntimeException(
            \sprintf('Strategy %s of sort is not implemented', $strategy)
        );
    }
}