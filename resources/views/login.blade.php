@extends('layout')
@section("content")
<div class="container  custom-login">
	<div class="row ">
		<div class="offset-md-3 col-md-6">
			<form action="/login" method="POST">
  <div class="mb-3 ">
  	@csrf
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
</div>
@endsection
