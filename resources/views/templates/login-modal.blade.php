<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
      </div>
      <div class="modal-body contactform">
        <form>
          <div class="loader">
            <img src="images/loader.gif">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <br/><span class="error login-email-error"></span>
            <input type="text" class="form-control text-box-popup" id="login-email" name="login_email">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password:</label>
            <br/><span class="error login-password-error"></span>
            <input type="password" class="form-control text-box-popup" id="login-password" name="login_password">
          </div>
          <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>" id='login_token'>
        </form>
      </div>
      <div class="modal-footer">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-primary btn-size" onClick="doLogin()">Login</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-default btn-size" data-dismiss="modal">Close</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
