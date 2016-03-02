<?php

namespace NoPro\Bluemoon\Model\Config;

class ChooseGroup implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return [
            [
	     'value' => 0,
                'label' => __('-- None --')
            ],
            [
                'value' => 'w1',
                'label' => __('Field #1')
            ],
            [
                'value' => 'w2',
                'label' => __('Field #2')
            ],
            [
                'value' => 'w3',
                'label' => __('Field #3')
            ],
            [
                'value' => 'w4',
                'label' => __('Field #4')
	     ],
            [
                'value' => 'w5',
                'label' => __('Field #5')
	     ],
            [
                'value' => 'w6',
                'label' => __('Field #6')
	     ],
            [
                'value' => 'w7',
                'label' => __('Field #7')
	     ]
        ];
    }
}
