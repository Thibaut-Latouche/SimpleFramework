<?php
/* Smarty version 3.1.31, created on 2018-03-04 11:02:26
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/entities/list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9bc4325e11b9_02076648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a19a3042b2ca40578b2c6db5e39d30e8c1a208' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/entities/list.tpl',
      1 => 1503818639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:entities/modal-create.tpl' => 1,
  ),
),false)) {
function content_5a9bc4325e11b9_02076648 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Entities </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title" ># </th>
                                <th class="column-title" >Name </th>
                                <th class="column-title" >Description </th>
                                <th class="column-title" >Created At </th>
                                <th class="column-title" >Created By </th>
                                <th class="column-title no-link last" ><span class="nobr">Action</span></th>     
                                <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entities']->value, 'entity');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                <tr class="even pointer ">
                                     <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['entity']->value->id;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['entity']->value->name;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['entity']->value->description;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['entity']->value->createdBy;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['entity']->value->createdAt;?>
</td>
                                   <!-- <td>
                                        <a href="index.php?a=delete-entity&id=<?php echo $_smarty_tpl->tpl_vars['entity']->value->id;?>
">Delete</a>
                                    </td> -->
                                   <td class=" last"><a href="#">View</a>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:entities/modal-create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
