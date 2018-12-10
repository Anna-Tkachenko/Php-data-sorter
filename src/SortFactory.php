<?php

/*
 * This file is part of the "Php data-sorter" project.
 * (c) Anna Tkachenko <tkachenko.anna835@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

final class SortFactory
{
    /**
     * Creates object of class Sort with one of sort strategy.
     *
     * @param $data
     * @param null $strategy Default sort strategy.
     * @return Sort Object of class Sort.
     */
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
