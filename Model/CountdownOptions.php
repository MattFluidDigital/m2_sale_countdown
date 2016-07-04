<?php
namespace Fluid\Countdown\Model;

class CountdownOptions extends \Magento\Framework\DataObject implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Generate list of countdown types for system config
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => 'repeat',
                'label' => 'Repeat Countdown',
            ],
            [
                'value' => 'single',
                'label' => 'One Off Countdown',
            ]

        ];
        return $options;
    }
}