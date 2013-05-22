<?php 
namespace Mouf\Utils\Common;

/**
 * This interface is implemented by any object that represent dataset that can be paginated.
 * An object implementing this interface will expose a "paginate($limit, $offset)" method.
 * 
 * @author David Négrier
 */
interface PaginableInterface {
	
	/**
	 * Paginates the result set.
	 * 
	 * @param int $limit
	 * @param int $offset
	 */
	public function paginate($limit, $offset = 0);
}