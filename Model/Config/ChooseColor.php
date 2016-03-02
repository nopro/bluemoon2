<?php

namespace NoPro\Bluemoon\Model\Config;

class ChooseColor implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return array(
		     array('value' => 'blue',   'label' => __('Blue')),
		     array('value' => 'black',  'label' => __('Black')),
		     array('value' => 'white',  'label' => __('White')),
		     array('value' => 'silver', 'label' => __('Silver'))
		     );
    }
}
