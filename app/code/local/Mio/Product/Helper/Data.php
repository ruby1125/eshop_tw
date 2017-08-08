<?php
class Mio_Product_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getReviewAmount(){
		return Mage::getStoreConfig('miosync/setting/review_amount');
	}
	
	
	public function getReviewAmount2(){
		return Mage::getStoreConfig('miosync/setting/review_amount');
	}
}