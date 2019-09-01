@extends('layouts.master')

@section("content")

<h1> Sign Up here easily</h1>
  <div class="row">
    <div class="col-sm-8">
        
<form method="post" action="/createAdvisor">
      {{csrf_field()}}
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password </label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button>
  @include('layouts.error')
</form>
    </div>


    </div>




@endsection