What is this package
====================

This package contains an interface used by many objects to declare they represent a single URL.

If your objects represent an URL (for instance your object is a link, they should implement *UrlInterface*.
An object implementing this interface will return a single URL, as a string when the "getUrl()" method is called.

This is a very simple and useful system for classes representing links, pages, etc...

```php
namespace Mouf\Utils;

interface UrlInterface {
	
	/**
	 * Returns the URL represented by this object, as a string.
	 * 
	 * @return string
	 */
	public function getUrl();
}
```

This package comes with a simple **Url** class that implements this interface.

Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
