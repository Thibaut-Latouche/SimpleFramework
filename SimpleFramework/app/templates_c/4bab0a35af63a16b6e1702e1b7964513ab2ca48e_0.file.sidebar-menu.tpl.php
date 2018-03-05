<?php
/* Smarty version 3.1.31, created on 2018-03-05 17:32:36
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/menu/sidebar-menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9d7124296143_50455872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bab0a35af63a16b6e1702e1b7964513ab2ca48e' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/menu/sidebar-menu.tpl',
      1 => 1520267544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9d7124296143_50455872 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">        
        <h5>&nbsp;</h5>
        <ul class="nav side-menu">
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "homepage") {?>class="active"<?php }?>>
                <a href="index.php">
                    <i class="fa fa-home"></i> Home 
                </a>                  
            </li>
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "entities") {?>class="active"<?php }?>>
                <a href="index.php?a=entities">
                    <i class="fa fa-edit"></i> Enities
                </a>                    
            </li>                
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "roles") {?>class="active"<?php }?>>
                <a href="index.php?a=roles">
                    <i class="fa fa-windows"></i> Roles
                </a>                    
            </li>  
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "users") {?>class="active"<?php }?>>
                <a  href="index.php?a=users">
                    <i class="fa fa-users"></i> Users
                </a>                    
            </li>  
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "developers") {?>class="active"<?php }?>>
                <a  href="index.php?a=developers">
                    <i class="fa fa-user"></i> Developers
                </a>                    
            </li>              
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "messages") {?>class="active"<?php }?>>
                <a href="index.php?a=messages">
                    <i class="fa fa-envelope"></i> Message
                </a>                    
            </li>  
            <li <?php if ($_smarty_tpl->tpl_vars['action']->value == "todo") {?>class="active"<?php }?>>
                <a href="index.php?a=todo">
                    <i class="fa fa-cubes"></i> Todo List
                </a>
            </li>
        </ul>
    </div>
</div>
<?php }
}
