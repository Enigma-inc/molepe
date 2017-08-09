
@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default">

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'assetClass.store', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Asset Name</label>

                            <div class="col-md-6">
                            {!! Form::text('name',null,['class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Asset Class Description</label>

                            <div class="col-md-6">
                            {!! Form::textarea('description',null,['class' => 'form-control', 'rows' => 5]) !!}
                                @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-md-offset-4">
                            <div>
                                <button class="btn btn-primary " type="submit">
                                    Submit
                                </button>
                            </div>
                        </div> 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection