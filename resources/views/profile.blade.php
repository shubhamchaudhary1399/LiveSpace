@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/profile.css">
<link rel="stylesheet" type="text/css" href="/css/rooms.css">
@endsection

@section('title', 'Profile | LiveSpace')

@section('content')
<div class="container py-4">
	<div class="card" style="max-width: 500px; margin: auto;">
    	<div class="card-header text-center my-card">{{ __('Update Profile') }}</div>

        	<div class="card-body">
        		@if(\Session::has('success'))
					<div class="alert alert-success">
						<p>{{\Session::get('success')}}</p>
						
					</div>

				@endif
            	<form method="POST" action="{{ url('/user/profile') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="profile-img" class="col-form-label text-md-right">{{ __('Profile Image') }}</label>

                    <div>
                    	<img src="/uploads/{{Auth::user()->userImg}}" style="height: 160px; width: 160px;">
                    </div>
                    <div>Currently: {{Auth::user()->userImg}}</div>
                    <div>Change: </div>  
                    <div class="col">
						<i class="material-icons">insert_photo</i>
						<input type="file" name="img" id="profile-img" class="form-control" onchange="loadImg1(event)">
						<div class="col">
							<img class="room-image" src="" id="output1">
						</div>
					</div>
                </div>

                <button class="btn btn-default my-btn">Update</button>
        		</form>
    		</div>
	</div>
</div>
<script type="text/javascript">
	function loadImg1(event){
	var output = document.getElementById('output1');
    output.src = URL.createObjectURL(event.target.files[0]);
}
</script>


@endsection