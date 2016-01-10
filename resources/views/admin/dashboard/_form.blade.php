<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" role="form">
          <div class="form-group has-feedback">
            <div class="col-sm-2">
              <label for="username" class="control-label">Username</label>
            </div>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control input-lg" id="username" placeholder="Username">
              <span class="fa form-control-feedback fa-user"></span>
            </div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-sm-2">
              <label for="inputPassword3" class="control-label">Password</label>
            </div>
            <div class="col-sm-10">
              <input type="text" name="password" class="form-control input-lg" id="inputPassword3" placeholder="Password">
              <span class="fa form-control-feedback fa-lock"></span>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
              <p class="help-block text-danger">Enter Password or generate password
                <button class="btn btn-success btn-xs">Generate
                  <i class="fa fa-fw fa-gears"></i>
                </button>
              </p>
            </div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-sm-2">
              <label class="control-label">Duration</label>
            </div>
            <div class="col-sm-10">
              <input type="text" class="form-control input-lg" name="duration" placeholder="Duration in month">
              <span class="fa form-control-feedback fa-calendar"></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2">
              <label for="inputEmail3" class="control-label">Status</label>
            </div>
            <div class="col-sm-offset-2 col-sm-10">
              <div class="radio">
                <label class="radio-inline">
                 <input name="status" type="radio" checked="" value="1">
                 Active
               </label>
             </div>
             <div class="radio">
              <label class="radio">
               <input name="status" type="radio" value="0">
               Deactive
             </label>
           </div>
         </div>
         <div class="col-sm-offset-2 col-sm-10">
          <p class="help-block">if checked &nbsp;user is availabe.</p>
        </div>
      </div>
      
