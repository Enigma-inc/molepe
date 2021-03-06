@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-primary">
                <div class="panel-heading">Assign Asset Accountability</div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => ['accountability.store', $asset->id], 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('restrictions') ? ' has-error' : '' }}">
                            <label for="restrictions" class="col-md-4 control-label">Restrictions</label>

                            <div class="col-md-6">
                            {!! Form::textarea('restrictions',null,['class' => 'form-control']) !!}
                                @if ($errors->has('restrictions'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('restrictions') }}</strong>
                                </span> 
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('custodian') ? 'has-error' : ''}}">
                            <label for="custodian" class="col-md-4 control-label">Custodian</label>
                            <div class="col-md-6">
                                <select name="custodian" id="custodian" class="form-control">
                                    <option value=""></option>
                                    @foreach($custodians as $custodian)
                                        <option value="{{$custodian->id}}">{{$custodian->name}} {{$custodian->last_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('custodian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('custodian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('department') ? 'has-error' : ''}}">
                            <label for="department" class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select name="department" id="department" class="form-control">
                                    <option value=""></option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('section') ? 'has-error' : ''}}">
                            <label for="section" class="col-md-4 control-label">Section</label>
                            <div class="col-md-6">
                                <select name="section" id="section" class="form-control">
                                    <option value=""></option>
                                    @foreach($sections as $section)
                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('section'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('costCenter') ? 'has-error' : ''}}">
                            <label for="costCenter" class="col-md-4 control-label">Cost Center</label>
                            <div class="col-md-6">
                                <select name="costCenter" id="costCenter" class="form-control">
                                    <option value=""></option>
                                    @foreach($costCenters as $costCenter)
                                        <option value="{{$costCenter->id}}">{{$costCenter->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('costCenter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('costCenter') }}</strong>
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