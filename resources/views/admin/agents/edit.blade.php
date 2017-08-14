@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit agent</div>

                <div class="panel-body"> 
                  {!! Form::model($agent,array('route' => ['agents.update',$agent->id],'method'=>'PUT')) !!}
   <div class="form-group">
       {!! Form::label('name','Agent Name') !!}
          {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
      <div class="form-group">
       {!! Form::label('email','Email') !!}
          {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <!--$user_region[0]->name-->
     @foreach($user_region as $ur)
     <p>{{$ur->name}}</p>
     @endforeach
       <select name="region" class="form-control" >
      @foreach($regions as $region)
        <option value="{{ $region->name }} "> {{ $region->name }} </option>
      @endforeach
</select>
   
    <div class="form-group">
   
     {!! Form::button('Edit',['type'=>'submit']) !!}      
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
