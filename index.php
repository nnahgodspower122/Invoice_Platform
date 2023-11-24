<?php
include('header-login.php');
include('functions.php');

?>

<div class="container" style="padding: 0px; height: 100vh;">
    <div id="response" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>

    <div class="col-md-6 col-md-offset-3">

        <div class="panel panel-default login-panel">
            <div style="text-align: center; margin-top: 20px;">
                <img src="images/logo1.png" style="max-width: 20%; height: auto;" alt="Logo">
                <h1><b>Invoice Platform</b></h1>
            </div>
            <div class="panel-body">
                <form accept-charset="UTF-8" role="form" method="post" id="login_form">
                    <input type="hidden" name="action" value="login">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                                <input class="form-control required" name="username" id="username" type text placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                <input class="form-control required" name="password" type="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                        </div>
                        <button type="button" id="btn-login" class="btn btn-primary btn-block">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>




<?php
	include('footer.php');
?>