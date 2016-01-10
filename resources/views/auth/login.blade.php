@extends('auth.layout')

@section('content')
<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1>User Login</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <form class="form-horizontal" role="form" method="POST"
       action="{{ route('auth_login') }}">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="form-group has-feedback">
        <div class="col-sm-2">
          <label for="username" class="control-label">Username</label>
        </div>
        <div class="col-sm-10">
          <input type="text" name="username" class="form-control input-lg" id="username"
          placeholder="Username">
          <span class="fa form-control-feedback fa-user"></span>
        </div>
      </div>
      <div class="form-group has-feedback">
        <div class="col-sm-2">
          <label for="inputPassword3" class="control-label">Password</label>
        </div>
        <div class="col-sm-10">
          <input type="text" name="password" class="form-control input-lg" id="inputPassword3"
          placeholder="Password">
          <span class="fa form-control-feedback fa-lock"></span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-block btn-lg btn-success">Login</button>
        </div>
      </div>
    </form>
    @if($errors->has())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif
  </div>
</div>
</div>
</div>
@stop