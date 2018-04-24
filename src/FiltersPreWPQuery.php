<?php


namespace CalderaLearn\RestSearch;

/**
 * Interface FiltersPreWPQuery
 *
 * Interface that classes filtering WPQuery at the posts_pre_query filter should use
 *
 * @package CalderaLearn\RestSearch
 */
interface FiltersPreWPQuery
{
	/**
	 * Change the results of WP_Query objects
	 *
	 * @uses "posts_pre_query"
	 *
	 * @param $postsOrNull
	 * @return \WP_Post[]
	 */
	public static function callback($postsOrNull);

	/**
	 * Checks if the request should be filtered or not.
	 *
	 * @param array|null $postsOrNull Array of WP_Posts or null.
	 * @return bool
	 */
	public static function shouldFilter($postsOrNull) :bool;

	/**
	 * Remove the filter using this callback
	 *
	 * @return bool
	 */
	public static function removeFilter() :bool;

	/**
	 * Add the filter, using this callback
	 *
	 * @return bool
	 */
	public static function addFilter() : bool;

	/**
	 * Get the priority for the filter
	 *
	 * @return int
	 */
	public static function getFilterPriority() : int;

	/**
	 * Create the array of posts to return
	 *
	 * @return \WP_Post[]
	 */
	public static function getPosts() :array;
}
