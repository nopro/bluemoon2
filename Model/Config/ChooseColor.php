<?php

namespace NoPro\Bluemoon\Model\Config;

class ChooseColor implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'blue',
                'label' => __('Blue'),
            ],
            [
                'value' => 'black',
                'label' => __('Black'),
            ],
            [
                'value' => 'white',
                'label' => __('White'),
            ],
            [
                'value' => 'silver',
                'label' => __('Silver'),
            ]
        ];
    }
}
