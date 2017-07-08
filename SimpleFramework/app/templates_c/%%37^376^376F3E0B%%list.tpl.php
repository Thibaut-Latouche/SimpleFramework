<?php /* Smarty version 2.6.27, created on 2017-06-18 23:28:52
         compiled from entities/list.tpl */ ?>
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
                            <?php $_from = $this->_tpl_vars['entities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entity']):
?>
                                <tr class="even pointer ">
                                     <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td><?php echo $this->_tpl_vars['entity']->id; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['entity']->name; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['entity']->description; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['entity']->createdBy; ?>
</td>
                                    <td><?php echo $this->_tpl_vars['entity']->createdAt; ?>
</td>
                                   <!-- <td>
                                        <a href="index.php?a=delete-entity&id=<?php echo $this->_tpl_vars['entity']->id; ?>
">Delete</a>
                                    </td> -->
                                   <td class=" last"><a href="#">View</a>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "entities/modal-create.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>