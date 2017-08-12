@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}} </div>

                @endif

                <div class="panel-body"> 
                  
                   <table class="table">
                       <tr>
                           <th>Category</th>
                           <th>Action</th>
                       </tr>
                       @foreach($categories as $category)
                       <tr>
                           <td> {{ $category->name}}</td>
                           <td>
                            {!! Form::open(array('route' => ['category.destroy',$category->id],'method'=>'DELETE')) !!}
                            
                               {{ link_to_route('category.edit','Edit',[$category->id], ['class'=> 'btn btn-primary'])}}
                              
                              
                               {!! Form::button('delete',['class'=> 'btn btn-danger','type'=>'submit']) !!} 
                              {!! Form::close() !!}
                                              
                                </td>

                       </tr>
                        @endforeach
                   </table>
                   </div>
            </div>
            {{ link_to_route('category.create','Add Category',null, ['class'=> 'btn btn-primary'])}}
        </div>
       
        </ul>
    </div>

    </div>
</div>
@endsection
