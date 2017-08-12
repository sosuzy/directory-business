@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">region</div>
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}} </div>

                @endif

                <div class="panel-body"> 
                  
                   <table class="table">
                       <tr>
                           <th>region</th>
                           <th>Action</th>
                       </tr>
                       @foreach($regions as $region)
                       <tr>
                           <td> {{ $region->name}}</td>
                           <td>
                            {!! Form::open(array('route' => ['region.destroy',$region->id],'method'=>'DELETE')) !!}
                            
                               {{ link_to_route('region.edit','Edit',[$region->id], ['class'=> 'btn btn-primary'])}}
                              
                              
                               {!! Form::button('delete',['class'=> 'btn btn-danger','type'=>'submit']) !!} 
                              {!! Form::close() !!}
                                              
                                </td>

                       </tr>
                        @endforeach
                   </table>
                   </div>
            </div>
            {{ link_to_route('region.create','Add region',null, ['class'=> 'btn btn-primary'])}}
        </div>
       
        </ul>
    </div>

    </div>
</div>
@endsection
