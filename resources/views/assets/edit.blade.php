 @extends('layouts.app')
 @section('content')
      <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit an Asset</div>
                <div class="panel-body">
                {!! Form::model($asset,['method'=>'PATCH','route' => ['asset.identification.update', $asset->id],'class'=>'form-horizontal']) !!}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Asset Description</label>

                            <div class="col-md-6">
                            {!! Form::textarea('description',null,['class' => 'form-control'])!!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('indentifier') ? ' has-error' : '' }}">
                            <label for="indentifier" class="col-md-4 control-label">Asset Specific Identifiers</label>

                            <div class="col-md-6">                            
                            {!! Form::text('specific_identifiers', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('indentifier'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('indentifier') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dimensions') ? ' has-error' : '' }}">
                            <label for="dimensions" class="col-md-4 control-label">Dimensions/Capacity</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('dimensions', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('dimensions'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dimensions') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('construction') ? ' has-error' : '' }}">
                            <label for="construction" class="col-md-4 control-label">Asset Construction</label></label>

                            <div class="col-md-6">                            
                            {!! Form::text('construction', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('construction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('construction') }}</strong>
                                    </span> 
                                @endif
                            </div>
                        </div>
                        <div class="margin-bottom-40 form-group{{$errors->has('subclass') ? 'has-error' : ''}}">
                            <label for="subclass" class="col-md-4 control-label">Asset Subclass</label>
                            <div class="col-md-6">
                                <select name="subclass" id="subclass" class="form-control">
                                  <option value="{{$selectedAssetClass->id}}">{{$selectedAssetClass->name}}</option>
                                    @foreach($assetSubclasses as $assetSubclass)
                                        @if($selectedAssetClass->name!=$assetSubclass->name)
                                            <option value="{{$assetSubclass->id}}">{{$assetSubclass->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('subclass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subclass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                  
                        <div class="margin-bottom-40 form-group{{$errors->has('parent') ? 'has-error' : ''}}">
                            <label for="parent" class="col-md-4 control-label">Parent Class</label>
                            <div class="col-md-6">
                                <select name="parent" id="parent" class="form-control">
                                    
                                    @foreach($parentAssets as $parentAsset)
                                        <option value="{{$parentAsset->id}}">{{$parentAsset->asset_number}} - {{$parentAsset->description}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('parent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('zone') ? 'has-error' : ''}}">
                            <label for="zone" class="col-md-4 control-label">Asset Zone</label>
                            <div class="col-md-6">
                                <select name="zone" id="zone" class="form-control">
                                    <option value="{{$selectedZone->id}}">{{$selectedZone->name}}</option>                                
                                        @foreach($assetZones as $assetZone)
                                            @if($selectedZone->name!= $assetZone->name)
                                                <option value="{{$assetZone->id}}">{{$assetZone->name}}</option>
                                            @endif
                                        @endforeach
                                </select>
                                @if($errors->has('zone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="margin-bottom-40 form-group{{$errors->has('location') ? 'has-error' : ''}}">
                            <label for="location" class="col-md-4 control-label">Asset Location</label>
                            <div class="col-md-6">
                                <select name="location" id="location" class="form-control">
                                    <option value="{{$selectedLocation->id}}">{{$selectedLocation->name}}</option>
                                        @foreach($assetLocations as $assetLocation)
                                            @if($selectedLocation->name != $assetLocation->name)
                                                <option value="{{$assetLocation->id}}">{{$assetLocation->name}}</option>
                                            @endif
                                        @endforeach
                                </select>
                                @if($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="margin-bottom-40 form-group{{$errors->has('group') ? 'has-error' : ''}}">
                            <label for="group" class="col-md-4 control-label">Asset Functional Group</label>
                            <div class="col-md-6">
                                <select name="group" id="group" class="form-control">
                                    <option value="{{$selectedFunctionGroup->id}}">{{$selectedFunctionGroup->name}}</option>
                                    @foreach($assetGroups as $assetGroup)
                                        @if($selectedFunctionGroup->name != $assetGroup->name)
                                            <option value="{{$assetGroup->id}}">{{$assetGroup->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
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