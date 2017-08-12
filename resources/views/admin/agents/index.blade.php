@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">agent</div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}} </div>

                @endif

                <div class="panel-body"> 
                  
                   <table class="table">
                       <tr>
                           <th>agent</th>
                           <th>Action</th>
                       </tr>
                       @foreach($agents as $agent)
                       <tr>
                           <td> {{ $agent->name }}</td>
                           <td>
                            {!! Form::open(array('route' => ['agents.destroy',$agent->id],'method'=>'DELETE')) !!}
                            
                               {{ link_to_route('agents.edit','Edit',[$agent->id], ['class'=> 'btn btn-primary'])}}
                              
                              
                               {!! Form::button('delete',['class'=> 'btn btn-danger','type'=>'submit']) !!} 
                              {!! Form::close() !!}
                                              
                                </td>

                       </tr>
                        @endforeach
                   </table>
                   </div>
            </div>
            {{ link_to_route('agents.create','Add agent',null, ['class'=> 'btn btn-primary'])}}
        </div>
       
        </ul>
    </div>

    </div>
</div>
@endsection
