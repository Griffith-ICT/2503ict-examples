@extends('layouts.master')

@section('title')
Update Item
@stop

@section('content')
<form method="post" action="{{{ url('update_item_action') }}}">
  <input type="hidden" name="id" value="{{{ $item->id }}}"> 
  <table>
    <tr><td>Summary:</td> <td><input type="text" name="summary" value="{{{ $item->summary }}}"></td></tr>
    <tr><td>Details:</td> <td><textarea name="details">{{{ $item->details }}}</textarea></td></tr>
    <tr><td colspan=2><input type="submit" value="Update item"></td></tr>
  </table>
</form> 
@stop