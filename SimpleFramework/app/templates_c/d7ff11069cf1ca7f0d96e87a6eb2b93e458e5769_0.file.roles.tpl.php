<?php
/* Smarty version 3.1.31, created on 2018-03-04 11:03:03
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/roles/roles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9bc457909877_39280761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ff11069cf1ca7f0d96e87a6eb2b93e458e5769' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/roles/roles.tpl',
      1 => 1503818639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bc457909877_39280761 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Projects <small>Listing design</small></h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Roles</h2>                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- start project list -->
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 20%">Role Name</th>
                                <th>Role Members</th>                               
                                <th style="width: 20%">#Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
</td>
                                <td>
                                    <a><?php echo $_smarty_tpl->tpl_vars['role']->value->getName();?>
</a>
                                    <br />
                                    <small>Created 01.01.2015</small>
                                </td>
                                <td>
                                    <ul class="list-inline">                                                                  
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value->getUsers(), 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                                        <li>
                                            <img title="<?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstname();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastname();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->getLastname();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getLastname();?>
"
                                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" class="avatar" alt="Avatar">
                                        </li>                                    
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </td>                             
                                <td>                                 
                                    <a href="index.php?a=edit-role&id=<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="index.php?a=delete-rolee&id=<?php echo $_smarty_tpl->tpl_vars['role']->value->getId();?>
" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>     
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </tbody>
                    </table>
                    <!-- end project list -->

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
