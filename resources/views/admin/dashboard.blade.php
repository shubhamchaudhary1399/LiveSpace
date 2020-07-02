@extends('layouts.appAdmin')

@section('header')
@endsection

@section('title', 'Dashboard | Admin')

@section('content')
	<div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-2 col-md-3">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-bt active" href="/admin/dashboard">
							<i class="material-icons">dashboard</i>
							<span class="mt-aside pl-3">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt" href="/admin/rooms">
							<i class="material-icons">vpn_key</i>
							<span class="mt-aside pl-3">Rooms</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt" href="/admin/bookings">
							<i class="material-icons">book</i>
							<span class="mt-aside pl-3">Bookings</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-10 col-md-9">
				<div class="container-fluid">
					<h4 class="text-secondary">Dashboard</h4>
					<hr>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-b" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4>2</h4>
											</div>
										</div>
									</div>
									
									<div>
										<span>New Bookings in Last 7 Days</span>
									</div>	
								</div>
								<div class="card-footer">
									<a href="#"><span>View Details</span></a>		
								</div>
							</div>		
						</div>

						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-o" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4>2</h4>
											</div>
										</div>
									</div>
									
									<div>
										<span>Bookings with pending payments</span>
									</div>	
								</div>
								<div class="card-footer">
									<a href="#"><span>View Details</span></a>		
								</div>
							</div>		
						</div>

						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-g" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4>2</h4>
											</div>
										</div>
									</div>
									
									<div>
										<span>Paid bookings</span>
									</div>	
								</div>
								<div class="card-footer">
									<a href="#"><span>View Details</span></a>		
								</div>
							</div>		
						</div>
					</div>
				</div>
				
			</div>	
		</div>
	</div>
	
@endsection