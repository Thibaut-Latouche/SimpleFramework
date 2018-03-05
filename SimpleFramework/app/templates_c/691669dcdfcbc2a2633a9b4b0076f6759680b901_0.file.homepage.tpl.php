<?php
/* Smarty version 3.1.31, created on 2018-03-04 01:32:58
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/homepage/homepage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9b3eba9fda80_99635122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '691669dcdfcbc2a2633a9b4b0076f6759680b901' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/homepage/homepage.tpl',
      1 => 1503818639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:homepage/stats/stats.tpl' => 1,
    'file:homepage/recentsActivities/recentsActivities.tpl' => 1,
  ),
),false)) {
function content_5a9b3eba9fda80_99635122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:homepage/stats/stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<hr/>
<?php $_smarty_tpl->_subTemplateRender("file:homepage/recentsActivities/recentsActivities.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
