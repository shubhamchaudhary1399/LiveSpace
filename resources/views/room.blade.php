@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/room.css">
@endsection

@section('title', 'Room | LiveSpace')

@section('content')
<div class="container py-4">
	<div class="row">
		<div class="col-lg-6">
			<div class="img-prop">
				<img src="/uploads/{{$details->img1}}" class="big-img" id="expandedImg">
			</div>
			<div class="helper-images">
				<span class="img-area"><img src="/uploads/{{$details->img1}}" class="small-img" onclick="myFunction(this);"></span>
				<span class="img-area"><img src="/uploads/{{$details->img2}}" class="small-img" onclick="myFunction(this);"></span>
				<span class="img-area"><img src="/uploads/{{$details->img3}}" class="small-img" onclick="myFunction(this);"></span>
				<span class="img-area"><img src="/uploads/{{$details->img4}}" class="small-img" onclick="myFunction(this);"></span>
			</div>
		</div>
		<div class="col-lg-6">
			<h4>{{$details->name}}</h4>
			<p class="alert alert-info" style="width:fit-content;" id="price-info">
				<span style="font-size:22px;" class="final-price">₹{{$details->best_price}}</span>
				<span >
            		<span class="old-price">₹{{intval($details->original_price)}} </span>
              		<?php $dis =  ($details->original_price- $details->best_price)*100/$details->original_price ?>
                        <span class="discount"><?php echo intval($dis);?>% off</span>
              	</span>
            </p>
            <p>{{$details->description}}</p>

            <h4>Facilities</h4>
            <div style="padding:10px;padding-left:0px;">
            	<table>
            		<tbody>
            			<tr>
            				<td style="color:#878787;">View</td>
            				<td>{{$details->view}}</td>
            			</tr>
            			<tr>
            				<td style="color:#878787;">Occupancy</td>
            				<td>{{$details->occupancy}}</td>
            			</tr>
            			<tr>
            				<td style="color:#878787;">Size</td>
            				<td>{{$details->size}} sqft</td>
            			</tr>
            			<tr>
            				<td style="color:#878787;">Type</td>
            				<td>{{$details->type}}</td>
            			</tr>
            		</tbody>
            	</table>
            </div>


            <a href="/bookroom/{{$details->id}}" class="btn btn-default" id="res-btn">Reserve Now</a>

		</div>	
	</div>
	
</div>
<script type="text/javascript" src="/js/room.js"></script>

@endsection


