<?php
/**
 *
 */

namespace RV\zf2ext\Http\Header;


use Zend\Http\Headers;

trait FromValue
{
	/**
	 * @param $value
	 * @return \Zend\Http\Header\HeaderInterface
	 */
	public static function fromValue($value)
	{
		/** @var FromValue $header  */
		$header = new static();
		$header->setValue($value);
		return $header;
	}
}