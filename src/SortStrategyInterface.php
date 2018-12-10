<?php

/*
 * This file is part of the "Php data-sorter" project.
 * (c) Anna Tkachenko <tkachenko.anna835@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

interface SortStrategyInterface
{
    /**
     * Sorts array of data.
     *
     * @param array $data
     * @return array Sorted array.
     */
    public function sort(array $data): array;
}
