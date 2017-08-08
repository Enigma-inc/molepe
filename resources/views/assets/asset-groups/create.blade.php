
@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default">

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'asset-group.store', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('asset-group-name') ? ' has-error' : '' }}">
                            <label for="asset-group-name" class="col-md-4 control-label">Asset-Group Name</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('asset-group-name', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('asset-group-name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-group-name') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('asset-group-description') ? ' has-error' : '' }}">
                            <label for="asset-group-description" class="col-md-4 control-label">Asset-Group Description</label>

                            <div class="col-md-6">
                            {!! Form::textarea('asset-group-description',null,['class' => 'form-control']) !!}
                                @if ($errors->has('asset-group-description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('asset-group-description') }}</strong>
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