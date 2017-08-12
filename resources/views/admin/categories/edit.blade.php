@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category</div>

                <div class="panel-body"> 
                  {!! Form::model($category,array('route' => ['category.update',$category->id],'method'=>'PUT')) !!}
    <div class="form-group">
       {!! Form::label('name','Category Name') !!}
          {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
   
     {!! Form::button('update',['type'=>'submit']) !!}      
    </div>
{!! Form::close() !!}
                
                   </div>
            </div>
        
        </div>
          @if ( count( $errors ) > 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
    </div>
</div>
@endsection
