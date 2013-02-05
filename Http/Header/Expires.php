<?php
/**
 * Header "Expires"
 */
namespace RV\zf2ext\Http\Header;

class Expires extends \Zend\Http\Header\Expires implements ValueInterface
{
	use ValueTrait;

	const DATE_IN_THE_PAST = 'Mon, 28 Jul 1997 05:00:00 GMT';

	public function setValue($value)
	{
		$this->setDate($value);
	}
}
