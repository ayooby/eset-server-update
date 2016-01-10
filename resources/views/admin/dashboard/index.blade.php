@extends('admin.layout')

@section('content')
<title>Admin panel index</title>


<div class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-primary text-left">
          <div class="panel-heading">
            <h3 class="panel-title">Activated user list</h3>
          </div>
          <div class="panel-body">
            <p>List of activated users</p>
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th class="info text-center">ID</th>
                  <th class="info text-center">Username</th>
                  <th class="info text-center">Activeted @</th>
                  <th class="info text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @if ( count($active_users) > 0)
                @foreach ($active_users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->activated_at }}</td>
                  <td class="text-center">
                    <a class="btn btn-danger btn-xs"><i class="fa fa-2x fa-fw fa-remove"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <ul class="pagination pagination-sm">
            {!! $active_users->render() !!}
            </ul>
            @else
            <tr>
              <td>-</td>
              <td>-</td>
              <td class="text-center">
                <a class="btn btn-danger btn-xs"><i class="fa fa-2x fa-fw fa-remove"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
        @endif

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Deactivated User list</h3>
      </div>
      <div class="panel-body">
        <p>List of deactivated users&nbsp;</p>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="info text-center">Id</th>
              <th class="info text-center">Username</th>
              <th class="info text-center">Deactivetd @</th>
              <th class="info text-center">Action</th>
            </tr>
          </thead>
          <tbody>
           @if ( count($deactive_users) > 0)
           @foreach ($deactive_users as $user)
           <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->activated_at }}</td>
            <td class="text-center">
              <a class="btn btn-danger btn-xs"><i class="fa fa-2x fa-fw fa-remove"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <ul class="pagination pagination-sm">
      {!! $deactive_users->render() !!}
      </ul>
      @else
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td class="text-center">
          <a class="btn btn-danger btn-xs disabled"><i class="fa fa-2x fa-fw fa-remove"></i></a>
        </td>
      </tr>
    </tbody>
  </table>
  @endif

</div>
</div>
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