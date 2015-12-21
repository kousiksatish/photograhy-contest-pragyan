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

@stop           
@section('content')
<div class="section-header">
    <h2 class="section-title text-center wow fadeInDown">Admin Login</h2>
    <p class="text-center wow fadeInDown"></p>
</div>
<div class="row">


<div class="media service-box wow fadeInRight">
<p>
{!! Form::open(array("url"=>action('RegisterController@adminCheck'),"class"=>"form-horizontal"))!!}
	<div class="form-group">
    <label class="control-label col-sm-2" for="username"><center>Username</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="username" placeholder="User Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password"><center>Password</center></label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
  </div>
<div class="form-group">
  <label class="control-label col-sm-2"><center></center></label>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>

{!! Form::close() !!}

</p>

@stop
