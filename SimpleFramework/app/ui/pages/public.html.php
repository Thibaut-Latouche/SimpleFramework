<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Simple Framework</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="app/ui/images/ico.png">        
        <!-- Scripts -->
        <script type="text/javascript" src="app/ui/js/jquery.js"></script>             
        <script type="text/javascript" src="app/ui/js/public.js"></script>   
        <!-- Stylesheets -->
        <link rel="stylesheet" href="app/ui/css/bootstrap.css" />        
        <link rel="stylesheet" href="app/ui/css/default.css" />
        <link rel="stylesheet" href="app/ui/css/public.css" />
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <br/>
                <br/>
                <br/>
                <div class="col-sm-6 col-md-4 col-md-offset-4">                    
                    <div class="account-wall">
                        <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                             alt="">
                        <form class="form-signin" method="POST" action="index.php?a=doLogin">
                            <input type="text" class="form-control" name="auth_login" placeholder="Login" required autofocus>
                            <input type="password" class="form-control" name="auth_pass" placeholder="Password" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                        <br/>
                        <h1 class="text-center login-title">Simple Framework v1.0.0</h1>
                    </div>                                
                </div>
            </div>
        </div>
    </body>
</html>
