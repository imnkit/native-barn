<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model\ResourceModel\Order\Payment;

use Magento\Sales\Api\Data\OrderPaymentInterface;
use Magento\Sales\Api\Data\OrderPaymentSearchResultInterface;
use Magento\Sales\Model\ResourceModel\Order\Collection\AbstractCollection;

/**
 * Flat sales order payment collection
 */
class Collection extends AbstractCollection implements OrderPaymentSearchResultInterface
{
    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'sales_order_payment_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'order_payment_collection';

    /**
     * @param \Magento\Framework\Data\Collection\EntityFactory $entityFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot
     * @param null $connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactory $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $entitySnapshot,
            $connection,
            $resource
        );
    }

    /**
     * Model initialization\
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\Sales\Model\Order\Payment', 'Magento\Sales\Model\ResourceModel\Order\Payment');
    }

    /**
     * Unserialize additional_information in each item
     *
     * @return $this
     */
    protected function _afterLoad()
    {
        foreach ($this->_items as $item) {
            $this->getResource()->unserializeFields($item);
            if (!empty($item->getData(OrderPaymentInterface::ADDITIONAL_INFORMATION))) {
                $additionalInfo = $this->convertAdditionalInfo(
                    $item->getData(OrderPaymentInterface::ADDITIONAL_INFORMATION)
                );
                $item->setData(OrderPaymentInterface::ADDITIONAL_INFORMATION, $additionalInfo);
            }
        }
        return parent::_afterLoad();
    }

    /**
     * Convert multidimensional additional information array to single
     *
     * @param array $info
     * @return array
     */
    private function convertAdditionalInfo($info)
    {
        $result = [];
        foreach ($info as $key => $item) {
            if (is_array($item)) {
                $result += $this->convertAdditionalInfo($item);
                unset($info[$key]);
            } else {
                $result[$key] = $item;
            }
        }

        return $result;
    }
}
