
@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default">

                <div class="panel-body">
                {!! Form::model($assetsubclass,['method' => 'PATCH', 'route' => ['assetsubclass.update',$assetsubclass->id], 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Asset Subclass Name</label>

                            <div class="col-md-6">
                            {!! Form::text('name',null,['class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('min_useful_life') ? ' has-error' : '' }}">
                            <label for="min_useful_life" class="col-md-4 control-label">Min Useful Life</label>

                            <div class="col-md-6">
                            {!! Form::text('min_useful_life',null,['class' => 'form-control', 'rows' => 5]) !!}
                                @if ($errors->has('min_useful_life'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('min_useful_life') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('max_useful_life') ? ' has-error' : '' }}">
                            <label for="max_useful_life" class="col-md-4 control-label">Max Useful Life</label>

                            <div class="col-md-6">
                            {!! Form::text('max_useful_life',null,['class' => 'form-control', 'rows' => 5]) !!}
                                @if ($errors->has('max_useful_life'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('max_useful_life') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('asset-class') ? 'has-error' : ''}}">
                            <label for="asset-class" class="col-md-4 control-label">Asset Class</label>
                            <div class="col-md-6">
                                <select name="asset-class" id="asset-class" class="form-control">
                                    <option value=""></option>
                                    @foreach($assetclasses as $assetclass)
                                        <option value="{{$assetclass->id}}">{{$assetclass->name}} - {{$assetclass->description}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('asset-class'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asset-class') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Asset Subclass Description</label>

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