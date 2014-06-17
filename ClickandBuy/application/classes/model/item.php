<?php defined('SYSPATH') or die('No direct script access.');

class Model_Item {

	public static $item_table = 'item';
	public static $comment_table = 'comment';
	// add an item to database
	public static function add_item($username, $time, array $item_column) {
		return DB::insert(Model_Item::$item_table, array('username', 'timestamp', 'title_item', 'category', 'price', 'description'))
			->values(array(Cookie::get('username'), $time, $item_column['title_item'], $item_column['category'], (int) $item_column['price'], $item_column['description']))
			->execute();
	}
	// get all item
	public static function get_all_item() {
		return DB::select()
			->from(Model_Item::$item_table)
			->execute()
			->as_array();
	}
	// get all item by category
	public static function get_all_item_by_category($category) {
		return DB::select()
			->from(Model_Item::$item_table)
			->where('category','=',$category)
			->execute()
			->as_array();
	}
	// get all category
	public static function get_all_category() {
		return DB::select('category')
			->distinct(TRUE)
			->from(Model_Item::$item_table)
			->execute()
			->as_array();
	}
	// check whether the item is available
	public static function is_available($username, $time) {
		if (DB::select()
			->from(Model_Item::$item_table)
			->where('username', '=', $username)
			->where('timestamp', '=', $time)
			->execute()
			->as_array() != NULL) {
			return true;
		}
		else
			return false;
	}
	// get items from the specific username
	public static function get_item($username) {
		return DB::select()
			->from(Model_Item::$item_table)
			->where('username', '=', $username)
			->execute()
			->as_array();
	}
	// get an item info from the specific username and timestamp
	public static function get_info($username, $timestamp) {
		return DB::select()
			->from(Model_Item::$item_table)
			->where('username', '=', $username)
			->where('timestamp', '=', $timestamp)
			->execute()
			->as_array();
	}
	// add comment to the item
	public static function add_comment($username, $timestamp, $commentator, $comment) {
		return DB::insert(Model_Item::$comment_table, array('username', 'timestamp', 'commentator', 'comment', 'comment_timestamp'))
			->values(array($username, $timestamp, $commentator, $comment, time()))
			->execute();
	}
	// get comments from the specific item
	public static function get_comment($username, $timestamp) {
		return DB::select()
			->from(Model_Item::$comment_table)
			->where('username', '=', $username)
			->where('timestamp', '=', $timestamp)
			->execute()
			->as_array();
	}
}
