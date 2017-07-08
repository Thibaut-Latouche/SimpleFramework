<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Habitat Drouais</title>
         <!-- Favicon -->
        <link rel="shortcut icon" href="app/ui/images/ico.png">        
        <!-- Scripts -->
        <script type="text/javascript" src="app/ui/js/jquery.js"></script>             
        <script type="text/javascript" src="app/ui/js/public.js"></script>   
        <!-- Stylesheets -->
        <link rel="stylesheet" href="app/ui/css/bootstrap.min.css" />
        <link rel="stylesheet" href="app/ui/css/bootstrap-theme.min.css" />
    </head>
    <body>        
        <div class="container">           
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                            <div class="row-fluid user-row">
                            </div>
                            <div class="error-login" style="text-align: center;font-weight:600;color:red;padding-top:30px;">                                
                            </div>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form" class="form-signin" id="formlogin">
                                <fieldset>
                                    <label class="panel-login">
                                        <div class="login_result"></div>
                                    </label>
                                    <input class="form-control" placeholder="<?php echo $dico["DIC_GLOBAL_USERNAME"];?>" id="username" name="auth_login" type="text">
                                    <input class="form-control" placeholder="<?php echo $dico["DIC_GLOBAL_PASSWORD"];?>" id="password" name="auth_pass" type="password">
                                    <br></br>
                                    <button type="button" class="btn btn-lg btn-block btn-regie">
                                        <?php echo $dico["DIC_GLOBAL_LOGIN"];?>
                                    </button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>    
        <script>
            ctrlPublic = new PublicCtrl();
            ctrlPublic.init(ctrlPublic);
        </script>
    </body>
</html>
