@extends('layouts.appAdmin')

@section('header')
    <link rel="stylesheet" type="text/css" href="/css/rooms.css">
@endsection

@section('title', 'Rooms | Admin')

@section('content')

	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-2 col-md-3">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-bt" href="dashboard">
							<i class="material-icons">dashboard</i>
							<span class="mt-aside pl-3">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt active" href="rooms">
							<i class="material-icons">vpn_key</i>
							<span class="mt-aside pl-3">Rooms</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt" href="#">
							<i class="material-icons">book</i>
							<span class="mt-aside pl-3">Bookings</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-10 col-md-9" style="padding-bottom: 20px;">
				<div class="container-fluid">
					<h4 class="text-secondary">Room Details</h4>
					<hr>

					<table class="table table-striped" id="my-table">
        				<thead>
            				<tr>
                				<th>Name</th>
                				<th>Thumbnail</th>
                				<th>View</th>
                				<th>Occupancy</th>
                				<th>Type</th>
                				<th>Size</th>
            				</tr>
        				</thead>
        				<tbody>
            				@foreach($details as $room)
            				<tr>
                				<td>{{$room->name}}</td>
                				<td><img src="/uploads/{{$room->img1}}" style="height: 50px; width: 50px;"></td>
                				<td>{{$room->view}}</td>
                				<td>{{$room->occupancy}}</td>
                				<td>{{$room->type}}</td>
                				<td>{{$room->size}} sqft</td>
            				</tr>
            				@endforeach
        				</tbody>
    				</table>

					<button type="button" class="btn btn-default" id="addroom">Add Room</button>
					<button type="button" class="btn btn-default" style="display: none;" id="back">Back</button>

					@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>	
					</div>
					@endif

					@if(\Session::has('success'))
					<div class="alert alert-success">
						<p>{{\Session::get('success')}}</p>
						
					</div>

					@endif

					<form action="{{ url('/admin/rooms') }}" method="post" id="formnew" style="display: none;" name="room" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-8">
								<div class="card card-room">
									<div class="card-header">
										<h5 class="card-title">Room Details</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="Name">PG Name</label>
													<input type="text" name="name" id="Name" value="{{ old('name') }}" class="form-control">
												</div>				
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="Description">Room Description</label>
													<textarea name="description" id="Description"  class="form-control" rows="10" cols="40" maxlength="1000">{{ old('description') }}</textarea>
												</div>			
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="View">View</label>
													<input type="text" name="view" value="{{ old('view') }}" id="View" class="form-control" placeholder="Example: city view">		
												</div>
											</div>	
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="Occupants">Occupancy</label>
													<select id="Occupants" name="occupancy" value="{{ old('occupancy') }} "class="form-control">
														<option>1</option>
														<option>2</option>
														<option>4</option>
													</select>
												</div>	
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="Size">Size</label>
													<input type="number" name="size" id="Size" class="form-control" value="{{ old('size') }}" placeholder="in sqft">
												</div>	
											</div>	
											<div class="col-md-4">
												<div class="form-group">
													<label for="Type">Type</label>
													<select id="Type" class="form-control" name="type" value="{{ old('type') }}">
														<option>Study Room</option>
														<option>Office Room</option>
														<option>Family Room</option>	
													</select>	
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card card-room">
									<div class="card-header">
										<div class="card-title">
											<h4>Images</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div class="row form-group">
													<div class="col">
														<span class="text-muted mt-icon">1.</span>
														<i class="material-icons">insert_photo</i>
														<input type="file" name="img1" class="form-control" onchange="loadImg1(event)">
														<div class="col">
															<img class="room-image" src="" id="output1">
														</div>
													</div>			
												</div>
											</div>
											<div class="col-6">
												<div class="row form-group">
													<div class="col">
														<span class="text-muted mt-icon">1.</span>
														<i class="material-icons">insert_photo</i>
														<input type="file" name="img2" class="form-control" onchange="loadImg2(event)">
														<div class="col">
															<img class="room-image" src="" id="output2">
														</div>
													</div>			
												</div>
											</div>
											<div class="col-6">
												<div class="row form-group">
													<div class="col">
														<span class="text-muted mt-icon">1.</span>
														<i class="material-icons">insert_photo</i>
														<input type="file" name="img3" class="form-control" onchange="loadImg3(event)">
														<div class="col">
															<img class="room-image" src="" id="output3">
														</div>
													</div>			
												</div>
											</div>
											<div class="col-6">
												<div class="row form-group">
													<div class="col">
														<span class="text-muted mt-icon">1.</span>
														<i class="material-icons">insert_photo</i>
														<input type="file" name="img4" class="form-control" onchange="loadImg4(event)">
														<div class="col">
															<img class="room-image" src="" id="output4">
														</div>
													</div>			
												</div>
											</div>
										</div>						
									</div>
								</div>

								<div class="card card-room">
									<div class="card-header">
										<div class="card-title">
											<h4>Pricing</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Original Price</label>
													<input type="number" name="original_price" class="form-control" value="{{ old('original_price') }}">
													
												</div>
												
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Best Price</label>
													<input type="number" name="best_price" class="form-control" value="{{ old('best_price') }}">
													
												</div>
												
											</div>
										</div>
										
									</div>
									
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" name="" class="btn my-btn float-right">
							</div>
							
							
						</div>
					</form>
						
				</div>
			</div>
			
		</div>
		
	</div>
	
	<script type="text/javascript" src="/js/rooms.js"></script>

@endsection