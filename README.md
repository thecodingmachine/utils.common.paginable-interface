What is this package
====================

This package contains an interface used by many objects to declare they have the ability
to paginate the result set they represent.

If your objects represent a resultset (for instance your object is a resultset from a query to a database), 
and if you can paginate this result set (return only a part of the result using an offset and a limit), 
then your object should implement *PaginateInterface*.

```php
interface PaginableInterface {
	
	/**
	 * Paginates the result set.
	 * 
	 * @param int $limit
	 * @param int $offset
	 */
	public function paginate($limit, $offset = 0);
}
```

Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
