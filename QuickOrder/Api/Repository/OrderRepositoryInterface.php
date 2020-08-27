<?php

namespace ALevel\QuickOrder\Api\Repository;

use ALevel\QuickOrder\Api\Data\OrderInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

interface OrderRepositoryInterface
{
    /**
     * Get order by ID
     *
     * @param int $id
     * @throws NoSuchEntityException
     * @return OrderInterface
     */
    public function getById(int $id) : OrderInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria) : SearchResultsInterface;

    /**
     * @param \ALevel\QuickOrder\Api\Data\OrderInterface $order
     * @return \ALevel\QuickOrder\Api\Data\OrderInterface
     */
    public function save(\ALevel\QuickOrder\Api\Data\OrderInterface $order) : OrderInterface;

    /**
     * @param OrderInterface $order
     * @throws CouldNotDeleteException
     * @return OrderRepositoryInterface
     */
    public function delete(OrderInterface $order) : OrderRepositoryInterface;

    /**
     * @param int $id
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     * @return OrderRepositoryInterface
     */
    public function deleteById(int $id) : OrderRepositoryInterface;
}
