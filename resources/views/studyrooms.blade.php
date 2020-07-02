@extends('layouts.app')
@section('header')
<link rel="stylesheet" type="text/css" href="/css/search.css">
@endsection

@section('title', 'StudyRooms | LiveSpace')

@section('content')
<div class="container py-4">
    @if(!empty($detils))
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
            <div class="col">
                Sorry currenly no rooms available for Students
            </div>
        </div>
    </div>
    @endif
 
</div>
@endsection