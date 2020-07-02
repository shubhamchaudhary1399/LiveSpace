@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/bookroom.css">
@endsection

@section('title', 'Booking Details | LiveSpace')

@section('content')
<div class="container py-4">
	<h4 class="text-danger text-center">You have selected room in {{$details->name}}</h4>
	<div class="card" style="max-width: 600px; margin: auto;">
    	<div class="card-header text-center my-card">{{ __('Booking Details') }}</div>

        	<div class="card-body">
        		@if(\Session::has('success'))
					<div class="alert alert-success">
						<p>{{\Session::get('success')}}</p>	
					</div>
				@endif

            	<form method="POST" action="/bookroom/{{$details->id}}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                    		<label for="FullName" class="col-form-label text-md-right">{{ __('Full Name*') }}</label>

                    		<input id="FullName" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                		</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                    		<label for="Email" class="col-form-label text-md-right">{{ __('Email*') }}</label>

                    		<input id="Email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" autocomplete="email">
                		</div>
                	</div>
                	
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                    		<label for="Contact" class="col-form-label text-md-right">{{ __('Contact*') }}</label>

                    		<input id="Contact" type="number" class="form-control" name="number" value="{{ Auth::user()->contact }}" autocomplete="number">
                		</div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                            <label for="Address" class="col-form-label text-md-right">{{ __('Address Line1*') }}</label>
                            
                            <input id="Address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div>	
                </div>
                
                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                            <label for="Address2" class="col-form-label text-md-right">{{ __('Address Line2') }}</label>
                            
                            <input id="Address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{ old('address2') }}" autocomplete="address2">

                            @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                            <label for="Zip" class="col-form-label text-md-right">{{ __('Zip*') }}</label>
                            
                            <input id="Zip" type="number" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" autocomplete="zip">

                            @error('zip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div> 	
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
                            <label for="City" class="col-form-label text-md-right">{{ __('City*') }}</label>
                            
                            <input id="City" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city">

                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
                            <label for="State" class="col-form-label text-md-right">{{ __('State*') }}</label>
                            
                            <input id="State" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  autocomplete="state">

                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div> 	
                </div>

                <div class="row">
                	<div class="col-md-12">
                		<div class="form-group">
                            <label for="Requirement" class="col-form-label text-md-right">{{ __('Special Requirements') }}</label>

                            <textarea name="requirements" id="Requirements"  class="form-control" rows="2" cols="40" maxlength="200">{{ old('requirements') }}</textarea>

                            @error('requirements')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                	</div>
                </div>

                <button class="btn btn-default my-btn float-right">Confirm</button>
        		</form>
    		</div>
	</div>
</div>


@endsection