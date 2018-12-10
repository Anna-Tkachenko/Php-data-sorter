<?php

/*
 * This file is part of the "Php data-sorter" project.
 * (c) Anna Tkachenko <tkachenko.anna835@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

final class NullSort implements SortStrategyInterface
{
    /**
     * Strategy of class sorting method.
     *
     * @var string
     */
    const STRATEGY = null;

    /**
     * {@inheritdoc}
     */
    public function sort(array $data): array
    {
        return $data;
    }
}
