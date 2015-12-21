@extends('mainbase')

@section('navbar')
 <li class="scroll"><a href={{action('RegisterController@index')}}>Home</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Pattern</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Prizes</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Details</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Imp Dates</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Rules</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Judging</a></li>
 <li class="scroll"><a href={{action('RegisterController@index')}}>Sponsors</a></li>
 <li class="scroll active"><a href="#register">Admin</a></li>
 <li class="scroll"><a href={{action('RegisterController@logout')}}>Logout</a></li>
@stop
@section('content')
<div class="section-header">
    <h2 class="section-title text-center wow fadeInDown">Admin Login</h2>
    <p class="text-center wow fadeInDown"></p>
</div>
<div class="row">


		@foreach($registrants as $registration)


<div class="panel panel-primary">
<div class="panel-heading">
{{$registration->name}}, {{$registration->coll_name}}, {{$registration->coll_city}}
</div>
<div class="panel-body">
<div class="col-sm-9">
Mobile : {{$registration->mobile}}<br>
Email : {{$registration->email}}<br>
Degree : {{$registration->coll_degree}}<br>
Department : {{$registration->coll_dept}}<br>
Year : {{$registration->coll_year}}<br>

</div>
<div class="col-sm-3">

<button class= "btn btn-primary" data-toggle="modal" data-target="#modal{{$registration->id}}">See submission</button>

</div>
</div>
</div>
		
<div id="modal{{$registration->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$registration->name}}, {{$registration->coll_name}}, {{$registration->coll_city}}</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      	<div class="col-md-4">
        @if($registration->img1_url!="")
			<img class="img-responsive" alt="" src="{{asset($registration->img1_url)}}"/>
		@endif
		<br/>{{$registration->desc1}}
		</div>

		<div class="col-md-4">
        @if($registration->img2_url!="")
			<img class="img-responsive" alt="" src="{{asset($registration->img2_url)}}"/>
		@endif
		<br/>{{$registration->desc2}}
		</div>

		<div class="col-md-4">
		@if($registration->img3_url!="")
			<img class="img-responsive" alt="" src="{{asset($registration->img3_url)}}"/>
		@endif
		<br/>{{$registration->desc3}}
		</div>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
	
{!! $registrants->render() !!}




@stop
