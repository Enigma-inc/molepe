
@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-primary">

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'zone.store', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('zone-name') ? ' has-error' : '' }}">
                            <label for="zone-name" class="col-md-4 control-label">Zone Name</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('zone-name', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('zone-name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zone-name') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zone-description') ? ' has-error' : '' }}">
                            <label for="zone-description" class="col-md-4 control-label">Zone Description</label>

                            <div class="col-md-6">
                            {!! Form::textarea('zone-description',null,['class' => 'form-control']) !!}
                                @if ($errors->has('zone-description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('zone-description') }}</strong>
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