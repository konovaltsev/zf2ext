<?php
/**
 * Header "Last-Modified"
 */
namespace RV\zf2ext\Http\Header;

class LastModified extends \Zend\Http\Header\LastModified implements ValueInterface
{
	use FromValue;

	const NOW = 'now';

	public function setValue($value)
	{
		if($value == self::NOW)
		{
			$value = gmdate("D, d M Y H:i:s")." GMT";
		}
		$this->setDate($value);
	}
}
