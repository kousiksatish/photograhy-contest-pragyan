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



<table class="table table-striped" id="registration_list">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>College</th>
			<th>Degree</th>
			<th>City</th>
			<th>Dept</th>
			<th>Year</th>
			<th>Submissions</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($registrants as $registration)


			<tr>
				<td>{{$registration->name}}</td>
				<td>{{$registration->email}}</td>
				<td>{{$registration->mobile}}</td>
				<td>{{$registration->coll_name}}</td>
				<td>{{$registration->coll_degree}}</td>
				<td>{{$registration->coll_city}}</td>
				<td>{{$registration->coll_dept}}</td>
				<td>{{$registration->coll_year}}</td>

				<td><button class= "btn btn-primary" data-toggle="modal" data-target="#modal{{$registration->id}}">See submissions</button></td>
				

				
			</tr>
		
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
	</tbody>
</table>
{!! $registrants->render() !!}


</div>

@stop
