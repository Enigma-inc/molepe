@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
            <button class="btn btn-primary col-xs-12 col-sm-6 col-md-4 pull-right" data-toggle="modal" data-target="#myModal">Add Department</button>
            <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content--> 
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Department</h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['method'=>'POST','route' => ['department.store'],'class'=>'form-horizontal']) !!}
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-2 control-label">Name</label>

                                    <div class="col-md-10">                            
                                    {!! Form::text('name',null, ['class' => 'form-control']) !!}
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
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
                <div class="panel-heading">Available Departments</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>                            
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($departments as $department)
                            <tr>
                                <td>
                                    {{$department->name}}
                                </td>
                            </tr>
                         @endforeach
                           
                        </tbody>
                    </table>
                    <div class="row text-center">
                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection