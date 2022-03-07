<?php
namespace Mageants\Hello\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'test_table';

	protected $_cacheTag = 'test_table';

	protected $_eventPrefix = 'test_table';

	protected function _construct()
	{
		$this->_init('Mageants\Hello\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
