<?php
/**
 * Header "Cache-Control"
 */
namespace RV\zf2ext\Http\Header;

class CacheControl extends \Zend\Http\Header\CacheControl implements ValueInterface
{
	use ValueTrait;

	const NO_CACHE = 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0';

	public function setValue($value)
	{
		$this->directives = static::parseValue($value);
	}
}
