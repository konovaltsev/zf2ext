zf2extentions
=============

Extentions for Zend Framework 2

RV\zf2ext\Http\Header
---------------------

Example:
```php
use RV\zf2ext\Http\Header;
...
$response->getHeaders()
			->addHeader(Header\Expires::fromValue(Header\Expires::DATE_IN_THE_PAST))
			->addHeader(Header\LastModified::fromValue(Header\LastModified::NOW))
			->addHeader(Header\CacheControl::fromValue(Header\CacheControl::NO_CACHE))
			->addHeader(Header\Pragma::fromValue(Header\Pragma::NO_CACHE))
```
