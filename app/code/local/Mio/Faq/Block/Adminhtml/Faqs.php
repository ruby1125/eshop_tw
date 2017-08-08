<?php
class Mio_Faq_Block_Adminhtml_Faqs extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_faqs';
        $this->_blockGroup = 'miofaq';
        $this->_headerText = 'FAQ 管理';
        
        parent::__construct();
    }
}