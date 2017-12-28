<?php /* Smarty version 2.6.27, created on 2017-06-24 10:49:10
         compiled from menu/sidebar-menu.tpl */ ?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li <?php if ($this->_tpl_vars['action'] == 'developer'): ?>class="active"<?php endif; ?>>
                <a href="index.php">
                    <i class="fa fa-home"></i> Home 
                </a>                  
            </li>
            <li <?php if ($this->_tpl_vars['action'] == 'entities'): ?>class="active"<?php endif; ?>>
                <a href="index.php?a=entities">
                    <i class="fa fa-edit"></i> Enities
                </a>                    
            </li>                
            <li <?php if ($this->_tpl_vars['action'] == 'roles'): ?>class="active"<?php endif; ?>>
                <a href="index.php?a=roles">
                    <i class="fa fa-windows"></i> Roles
                </a>                    
            </li>  
            <li <?php if ($this->_tpl_vars['action'] == 'users'): ?>class="active"<?php endif; ?>>
                <a  href="index.php?a=users">
                    <i class="fa fa-users"></i> Users
                </a>                    
            </li>  
            <li <?php if ($this->_tpl_vars['action'] == 'developers'): ?>class="active"<?php endif; ?>>
                <a  href="index.php?a=developers">
                    <i class="fa fa-user"></i> Developers
                </a>                    
            </li>              
            <li <?php if ($this->_tpl_vars['action'] == 'messages'): ?>class="active"<?php endif; ?>>
                <a href="index.php?a=messages">
                    <i class="fa fa-envelope"></i> Message
                </a>                    
            </li>  
            <li <?php if ($this->_tpl_vars['action'] == 'todo'): ?>class="active"<?php endif; ?>>
                <a href="index.php?a=todo">
                    <i class="fa fa-cubes"></i> Todo List
                </a>
            </li>
        </ul>
    </div>
</div>