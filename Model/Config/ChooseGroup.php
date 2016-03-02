<?php

namespace NoPro\Bluemoon\Model\Config;

class ChooseGroup implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
      return array(
		   array('value' => 0,    'label' => __('-- None --')),
		   array('value' => 'w1', 'label' => __('Field #1')),
		   array('value' => 'w2', 'label' => __('Field #2')),
		   array('value' => 'w3', 'label' => __('Field #3')),
		   array('value' => 'w4', 'label' => __('Field #4')),
		   array('value' => 'w5', 'label' => __('Field #5')),
		   array('value' => 'w6', 'label' => __('Field #6')),
		   array('value' => 'w7', 'label' => __('Field #7'))
		   );
    }
}
