<?php
class Mio_Product_Block_Product extends Mage_Core_Block_Template
{
    public function __construct()
    {
        $pro = Mage::getModel('adminhtml/category')->load($this->getCategoryId());
        parent::__construct();
        $this->setTemplate('product/bestsellers.phtml');
    }
}