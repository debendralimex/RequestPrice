<?php
namespace Debendra\Customer\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface RequestSearchResultsInterface
 * @package Debendra\Customer\Api\Data
 */
interface RequestSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface[]
     */
    public function getItems();

    /**
     * @param array $items
     *
     * @return SearchResultsInterface
     */
    public function setItems(array $items);
}
