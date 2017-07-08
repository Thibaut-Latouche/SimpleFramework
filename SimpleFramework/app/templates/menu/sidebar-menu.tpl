<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li {if $action == "developer"}class="active"{/if}>
                <a href="index.php">
                    <i class="fa fa-home"></i> Home 
                </a>                  
            </li>
            <li {if $action == "entities"}class="active"{/if}>
                <a href="index.php?a=entities">
                    <i class="fa fa-edit"></i> Enities
                </a>                    
            </li>                
            <li {if $action == "roles"}class="active"{/if}>
                <a href="index.php?a=roles">
                    <i class="fa fa-windows"></i> Roles
                </a>                    
            </li>  
            <li {if $action == "users"}class="active"{/if}>
                <a  href="index.php?a=users">
                    <i class="fa fa-users"></i> Users
                </a>                    
            </li>  
            <li {if $action == "developers"}class="active"{/if}>
                <a  href="index.php?a=developers">
                    <i class="fa fa-user"></i> Developers
                </a>                    
            </li>              
            <li {if $action == "messages"}class="active"{/if}>
                <a href="index.php?a=messages">
                    <i class="fa fa-envelope"></i> Message
                </a>                    
            </li>  
            <li {if $action == "todo"}class="active"{/if}>
                <a href="index.php?a=todo">
                    <i class="fa fa-cubes"></i> Todo List
                </a>
            </li>
        </ul>
    </div>
</div>
