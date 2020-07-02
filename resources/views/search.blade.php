@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/search.css">
@endsection

@section('title', 'Search | LiveSpace')

@section('content')
<div class="container py-4">
	@if(!empty($details))
	<div class="card-footer" style="padding:12px 30px; border:none; background-color:#fafafa;">
		<div class="row text-center">
            <div class="col-md-6 col-xs-6">
                Search results for: <strong>{{ $query }}</strong>
            </div>
           	<div class="col-md-6 col-xs-6 align-right">
           		Showing 1-{{count($details)}} of total {{count($details)}} results on this page
           	</div>
        </div>
	</div>
		<br>
    @foreach($details as $room)
    <div class="row py-2 row-prop">
    	<div class="col-lg-4 img-prop">
    		<a href="/search/room/{{$room->id}}" target="_blank">
    			<img src="/uploads/{{$room->img1}}" class="room-img"></a>
    	</div>
    	<div class="col-lg-8">
    		<h3 class="room-title">{{$room->name}}</h3>
    		<div>{{$room->description}}</div>
    		<p class="alert alert-info" style="width:fit-content;" id="price-info">
    			<span class="final-price">₹{{intval($room->best_price)}}</span>
    			<span>
    				<span class="old-price">₹{{intval($room->original_price)}}</span>
    				<?php $dis =  ($room->original_price- $room->best_price)*100/$room->original_price ?>
    				<span class="discount"><?php echo intval($dis);?>% off</span>
    			</span>
    		</p>
    	</div>
    </div>
    @endforeach
    @else
    <div class="card-footer" style="padding:12px 30px; border:none; background-color:#fafafa;">
		<div class="row text-center">
            <div class="col-md-6 col-xs-6">
                Search results for: <strong>{{ $query}}</strong>
            </div>
           	<div class="col-md-6 col-xs-6 align-right">
           		Showing 0-0 of total 0 results on this page
           	</div>
        </div>
	</div>
		<br>
	<div style="padding-left: 20px;">
		<p style="color: black; font-size: 18px;"><strong>Do You Mean:</strong></p>
		<p><h6 class="text-danger" style="font-size: 16px; font-weight: 500"><strong>{{$query}}</strong></h6></p>

		<p>We are sorry but we could not find any matches.</p>

		<p>Suggestions:</p>
		<ul>
			<li>Make sure that all words are spelled correctly.</li>
			<li>Try different keywords.</li>
			<li>Try more general keywords.</li>
		</ul>
	</div>
    @endif

</div>
@endsection