 @extends('layouts.app')
 @section('content')
      <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit an Asset</div>
                <div class="panel-body">
                {!! Form::model($accountability,['method'=>'PATCH','route' => ['asset.accountability.update', $accountability->id],'class'=>'form-horizontal']) !!}
                        {{ csrf_field() }}

                        <div class="margin-bottom-40 form-group{{$errors->has('custodian') ? 'has-error' : ''}}">
                            <label for="custodian" class="col-md-4 control-label">Custodian</label>
                            <div class="col-md-6">
                                <select name="custodian" id="custodian" class="form-control">
                                  <option value="{{$selectedCustodian->id}}">{{$selectedCustodian->name}}</option>
                                    @foreach($custodians as $custodian)
                                        @if($selectedCustodian->name!=$custodian->name)
                                            <option value="{{$custodian->id}}">{{$custodian->name}}</option>
                                        @endif
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
                                  <option value="{{$selectedDepartment->id}}">{{$selectedDepartment->name}}</option>
                                    @foreach($departments as $department)
                                        @if($selectedDepartment->name!=$department->name)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       
                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-xs-12">
                                     Submit
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
  @endsection