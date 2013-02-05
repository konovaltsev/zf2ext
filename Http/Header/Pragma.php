<?php
/**
 * Header "Pragma"
 */
namespace RV\zf2ext\Http\Header;

class Pragma extends \Zend\Http\Header\Pragma implements ValueInterface
{
	use FromValue;

	const NO_CACHE = 'no-cache';

	protected $value;

	public function setValue($value)
	{
		$this->value = $value;
	}
}
