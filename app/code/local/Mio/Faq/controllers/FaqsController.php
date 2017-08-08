<?php
class Mio_Faq_FaqsController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
		//cho 'faqs index ...';
		$this->loadLayout();
		$this->renderLayout();
	}
}