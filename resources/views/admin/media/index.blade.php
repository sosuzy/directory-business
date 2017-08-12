@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">media</div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}} </div>

                @endif

                <div class="panel-body"> 
                  
                   <table class="table">
                       <tr>
                           <th>media</th>
                           <th>Action</th>
                       </tr>
                       @foreach($medias as $medium)
                       <tr>
                           <td> {{ $medium->name}}</td>
                           <td>
                            {!! Form::open(array('route' => ['media.destroy',$medium->id],'method'=>'DELETE')) !!}
                            
                               {{ link_to_route('media.edit','Edit',[$medium->id], ['class'=> 'btn btn-primary'])}}
                              
                              
                               {!! Form::button('delete',['class'=> 'btn btn-danger','type'=>'submit']) !!} 
                              {!! Form::close() !!}
                                              
                                </td>

                       </tr>
                        @endforeach
                   </table>
                   </div>
            </div>
            {{ link_to_route('media.create','Add media',null, ['class'=> 'btn btn-primary'])}}
        </div>
       
        </ul>
    </div>

    </div>
</div>
@endsection
