@extends('layouts.master')

@section('title')
Add Item
@stop

@section('content')
<form method="post" action="add_item_action">
    <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary"></td></tr>
    <tr><td>Details:</td> <td><textarea name="details"></textarea></td></tr>
    <tr><td colspan=2><input type="submit" value="Add item"></td></tr>
    </table>
</form> 
@stop