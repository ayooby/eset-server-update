@extends('admin.layout')

@section('content')
<title>Admin panel index</title>
{{-- Show alert for success user creation --}}
@if(Session::has('alert'))
<div class="container">
  <div class="alert alert-dismissable alert-info">
    <button contenteditable="false" type="button" class="close" data-dismiss="alert"
    aria-hidden="true">×</button>
    <strong>Well done! </strong>  {{ Session::get('alert') }}</div>
  </div>
  @endif

{{-- Show errors --}}
  @if (count($errors) > 0)
  <div class="container">
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
  <form class="form-horizontal" role="form" method="POST"
  action="{{ route('admin.store') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  @include('admin.dashboard._form')

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-block btn-lg btn-success">New User</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>

@stop

@section('scripts')
<script>
  $(function() {
    $("#posts-table").DataTable({
      order: [[0, "desc"]]
    });
  });
</script>
@stop