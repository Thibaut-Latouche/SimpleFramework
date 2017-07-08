<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>DSI - Irrigation Management System</title>
         <!-- Favicon -->
        <link rel="shortcut icon" href="ui/images/ico.png">        
        <!-- StyleSheets -->
        <link rel='stylesheet' href='app/ui/css/bootstrap.min.css' />
        <link rel='stylesheet' href='app/ui/css/bootstrap-theme.min.css'/>
        <link rel="stylesheet" href="app/ui/css/font-awesome.min.css" />
        <link rel='stylesheet' href='app/ui/css/style.css'/>               
        <link rel="stylesheet" href="app/ui/css/simple-sidebar.css"/>
        <link rel="stylesheet" href="app/ui/css/bootstrap-switch.min.css"/>
        <link rel="stylesheet" href="app/ui/css/weather-icons.min.css"/>
        <link rel="stylesheet" href="app/ui/css/saphir.css"/>
        <link rel="stylesheet" href='app/ui/css/statbox.css'/>
        <link rel="stylesheet" href='app/ui/css/administrateur.css'/>
        <link rel="stylesheet" href="app/ui/css/timeTo.css"/>
        <link rel="stylesheet" href="app/ui/css/stat-panel.css"/>
        <link rel='stylesheet' href='app/ui/css/superviseur.css'/>
        <!-- Scripts -->
        <script type="text/javascript" src="app/ui/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="app/ui/js/ui/bootstrap.min.js"></script>      
        <script type="text/javascript" src="app/ui/js/ui/bootstrap-switch.min.js"></script>                
        <script type="text/javascript" src="app/ui/js/ui/jquery.timeTo.min.js"></script>                       
        <script type='text/javascript' src='app/ui/js/ui/bootstrap-notify.min.js'></script>
    </head>
    <body>       
        <!--Sidebar-->
        <div id="wrapper" class="toggled">
            <div id="sidebar-wrapper">
               <?php echo $sidebar;?>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#menu-toggle" id="menu-toggle" class="navbar-brand">
                                <i class="fa fa-navicon fa-2x fa-fw icon-toggle-sidebar"></i>
                            </a>
                            <a class="navbar-brand" href="#"><?php echo $titre; ?></a>                                              
                        </div>                    
                        <?php echo $zoneConnexion;?>
                    </div>
                </nav>        
                <div class="container mainContainer">
                    <?php echo $c; ?>
                </div>             
            </div> 
        </div>
    </body>  
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</html>
