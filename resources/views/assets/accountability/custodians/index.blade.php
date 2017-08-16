@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <button class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right" data-toggle="modal" data-target="#myModal">Add Custodian</button>
            <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content--> 
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Custodian</h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['method'=>'POST','route' => ['custodian.store'],'class'=>'form-horizontal']) !!}
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-2 control-label">First Name</label>

                                    <div class="col-md-10">                            
                                    {!! Form::text('name',null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                        </span> 
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-2 control-label">Last Name</label>

                                    <div class="col-md-10">                            
                                    {!! Form::text('last_name',null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('last_name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                        </span> 
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-2 control-label">Email</label>

                                    <div class="col-md-10">                            
                                    {!! Form::text('email',null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                        </span> 
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-2 control-label">Phone</label>

                                    <div class="col-md-10">                            
                                    {!! Form::text('phone',null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                        </span> 
                                        @endif
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            {!! Form::close() !!}                                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Available Custodians</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th> 
                                <th>Last Name</th> 
                                <th>Email</th>  
                                <th>Phone</th>                            
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($custodians as $custodian)
                            <tr>
                                <td>
                                    {{$custodian->name}}
                                </td>
                                <td>
                                    {{$custodian->last_name}}
                                </td>
                                <td>
                                    {{$custodian->email}}
                                </td>
                                <td>
                                    {{$custodian->phone}}
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $custodians->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection