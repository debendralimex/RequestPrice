<?php
namespace Debendra\Customer\Model\Request\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Debendra\Customer\Model\Request;

/**
 * Class Status
 * @package Debendra\Customer\Model\Request\Source
 */
class Status implements OptionSourceInterface
{
    /**
     * @var Request
     */
    private $requestStatus;

    /**
     * Status constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->requestStatus = $request;
    }

    /**
     * Get all available options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->requestStatus->getAnswerStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }

        return $options;
    }
}
