<?php
/* Smarty version 3.1.31, created on 2018-03-04 01:32:58
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/homepage/stats/stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9b3ebaa024f6_60519773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f176a83b52d69b18049ff3cd34f47f46c50b0c6a' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/homepage/stats/stats.tpl',
      1 => 1503818639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9b3ebaa024f6_60519773 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row tile_count">
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Developers</span>
        <div class="count"><?php echo $_smarty_tpl->tpl_vars['countDevelopers']->value;?>
</div>        
    </div>  
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Entities</span>
        <div class="count">1</div>        
    </div>  
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Roles</span>
        <div class="count">1</div>        
    </div>  
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
        <div class="count"><?php echo $_smarty_tpl->tpl_vars['countUsers']->value;?>
</div>        
    </div>  
</div><?php }
}
