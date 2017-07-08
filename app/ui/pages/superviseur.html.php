<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Compteurs Énergétiques - Supervision</title>
         <!-- Favicon -->
        <link rel="shortcut icon" href="app/ui/images/ico.png">        
        <link rel='stylesheet' href='app/ui/css/bootstrap.min.css' />
        <link rel='stylesheet' href='app/ui/css/bootstrap-theme.min.css'/>
        <link rel="stylesheet" href="app/ui/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="app/ui/css/superviseur.css"/>        
        <script type="text/javascript" src="app/ui/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="app/ui/js/bootstrap.min.js"></script>      
        <script type="text/javascript" src="app/ui/js/jquery.bootstrap-growl.min.js"></script>
    </head>
    <body>       
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="padding:3px;">
                    <img alt="Demand Side Instruments" src="warehouse/corporate-horizontal.png" class="img-responsive" style="max-height: 50px;"/>
                </a>                                              
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control inp-search-field" placeholder="Recherche">
                    </div>
                    <button type="button" class="btn btn-default btn-valid-search">Valider</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home fa-2x fa-fw"></i>
                            Accueil
                        </a>
                    </li>                    
                    <li>
                        <a href="index.php?a=history">
                            <i class="fa fa-list-ul fa-2x fa-fw"></i>
                            Historique
                        </a>
                    </li>                    
                    <li>
                        <a href="index.php?a=counters">
                            <i class="fa fa-cube fa-2x fa-fw"></i>
                            Compteurs
                        </a>
                    </li>                    
                    <li>
                        <a href="index.php?a=user-logout">
                            <i class="fa fa-power-off fa-2x fa-fw"></i>
                            Quitter
                        </a>
                    </li>                    
                </ul>
            </div>
        </nav>
        <div id="main" class="container" style="margin-top: 70px;">
                <div class="main-container">
                    <?php echo $c;?>    
                </div>     
        </div>
    </body>     
</html>
