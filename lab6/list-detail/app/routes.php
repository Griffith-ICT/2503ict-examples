<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('item_list', function()
{
  $items = get_items();
  return View::make('items.item_list')->withItems($items);
});

/* Displays item with the given id. */
Route::get('item_detail/{id}', function ($id)
{
  $item = get_item($id);
	return View::make('items.item_detail')->withItem($item);
}); 

Route::get('add_item', function()
{
  return View::make('items.add_item');
});

Route::post('add_item_action', function()
{
  $summary = Input::get('summary');
  $details = Input::get('details');

  $id = add_item($summary, $details);

  // If successfully created then display newly created item
  if ($id) 
  {
    return Redirect::to(url("item_detail/$id"));
  } 
  else
  {
    die("Error adding item");
  }
});

Route::get('update_item/{id}', function($id)
{

});

Route::post('update_item_action', function()
{

});

Route::get('delete_item_action/{id}', function($id)
{

});



function get_items()
{
  $sql = "select * from item";
  $items = DB::select($sql);
  return $items;
}

/* Gets item with the given id */
function get_item($id)
{
	$sql = "select id, summary, details from item where id = ?";
	$items = DB::select($sql, array($id));

	// If we get more than one item or no items display an error
	if (count($items) != 1) 
	{
    die("Invalid query or result: $query\n");
  }

	// Extract the first item (which should be the only item)
  $item = $items[0];
	return $item;
}

function add_item($summary, $details) 
{
  $sql = "insert into item (summary, details) values (?, ?)";

  DB::insert($sql, array($summary, $details));

  $id = DB::getPdo()->lastInsertId();

  return $id;
}
