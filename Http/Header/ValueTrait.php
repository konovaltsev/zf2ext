<?php
namespace RV\zf2ext\Http\Header;

trait ValueTrait
{
	/**
	 * @param $value
	 * @return \Zend\Http\Header\HeaderInterface
	 */
	public static function fromValue($value)
	{
		/** @var ValueInterface $header */
		$header = new static();
		$header->setValue($value);
		return $header;
	}
}