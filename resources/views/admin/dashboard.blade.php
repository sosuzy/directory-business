@extends('layouts.admin')

@section('content')

<h3>Please insert the informations bellow:</h3>
{{Form::open(array('url'=>'test/register','method'=>'post'))}}
<input type="text" name="name" placeholder="Category"><br><br>
<input type="submit" value="add Category!">

{{Form::close()}}@stop

