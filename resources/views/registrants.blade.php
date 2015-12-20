<!DOCTYPE html>
<html>
	<head>
		<title>Registrations</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
		#content
		{
			margin-top:5%;
		}
		</style>
	</head>
	<body>
		<div id="content" class="container-fluid">
			<h1>Pragyan HD</h1>
			<div class="panel">
				<div class="panel-heading">Registrations Received</div>
				<div class="panel-body">
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
								<th>Photo1</th>
								<th>Photo2</th>
								<th>Photo3</th>
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
									<td><img class="img-responsive" alt="" src="{{asset($registration->img1_url)}}"/><br/>
										{{$registration->desc1}}
									</td>
									<td>
										@if($registration->img2_url!="")
											<img class="img-responsive" alt="" src="{{asset($registration->img2_url)}}"/>
										@endif
										<br/>{{$registration->desc2}}
									</td>
									<td>
										@if($registration->img3_url!="")
											<img class="img-responsive" alt="" src="{{asset($registration->img3_url)}}"/>
										@endif
										<br/>{{$registration->desc3}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{!! $registrants->render() !!}
				</div>
			</div>
		</div>
	</body>
</html>
