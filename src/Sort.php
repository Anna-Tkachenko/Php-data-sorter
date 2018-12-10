<?php

/*
 * This file is part of the "Php data-sorter" project.
 * (c) Anna Tkachenko <tkachenko.anna835@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

class Sort
{
    /**
     * Data array for sorting.
     *
     * @var array
     */
    private $data = [];

    /**
     * Object with required sort method.
     *
     * @var SortStrategyInterface
     */
    private $sortStrategy;

    /**
     * Sort constructor.
     *
     * @param $data
     * @param SortStrategyInterface $sortStrategy
     */
    public function __construct(array $data, SortStrategyInterface $sortStrategy)
    {
        $this->data = $data;
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * Rewrite current data array.
     *
     * @param array $data New array.
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return array Current data array.
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Set object with current strategy of sorting method.
     *
     * @param SortStrategyInterface $sortStrategy
     */
    public function setSortStrategy(SortStrategyInterface $sortStrategy): void
    {
        $this->sortStrategy = $sortStrategy;
    }

    /**
     * Sorts data array with current sort strategy.
     *
     * @return array Sorted data array.
     */
    public function sortData(): array
    {
        $new_data = $this->sortStrategy->sort($this->data);
        return $new_data;
    }
}
