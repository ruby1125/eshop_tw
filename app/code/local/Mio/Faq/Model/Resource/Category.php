<?php
class Mio_Faq_Model_Resource_Category extends Mage_Core_Model_Resource_Db_Abstract
{
	public function _construct()
	{
		$this->_init('miofaq/category', 'entity_id');
	}
}