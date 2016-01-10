{{-- admin navbar panel --}}
@if (Auth::user())
<div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><span>Admin Dashboard</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>
              <a href="{{ route('admin.create') }}">Add User</a>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search user">
            </div>
            <button type="submit" class="btn btn-default">Find username</button>
          </form>
          <a href="{{ route('auth_logout') }}" class="btn btn-info navbar-btn">Sign out - {{ Auth::user()->username }}</a>
        </div>
      </div>
    </div>
    @endif