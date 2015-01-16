@extends('layouts.master')

@section('title')
Item List
@stop

@section('content')
<h1>Items</h1>
<a href="{{{ url("add_item") }}}">Add Item</a>
@if ($items)
<ul>
@foreach ($items as $item)
    <li><a href="{{{ url("item_detail/$item->id") }}}">{{{ $item->summary }}}</a></li>
@endforeach
</ul>
@else
<p>No items found.</p>
@endif
@stop