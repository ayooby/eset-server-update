@extends('user.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="section">
     
    </div>
  </div>

  <div class="row">

    <div class="jumbotron">
      <h1 class="text-primary">Hello,</h1>
      <p class="text-info">This account will expire at <?php echo $expire_date; ?></p>
      <a class="btn btn-info btn-large btn-lg">Contact Us</a>
    </div>
  </div>
</div>
@stop