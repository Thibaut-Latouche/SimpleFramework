<?php
/* Smarty version 3.1.31, created on 2018-03-04 11:02:26
  from "/var/www/html/SimpleFramework/SimpleFramework/app/templates/entities/modal-create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9bc4325e8260_85614977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa0eef3b8a81a2751389f84e56a80e7f02a1f09' => 
    array (
      0 => '/var/www/html/SimpleFramework/SimpleFramework/app/templates/entities/modal-create.tpl',
      1 => 1503818639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9bc4325e8260_85614977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modal-create-entity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Entity</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="index.php?a=create-entity">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="entity-name" name="name" placeholder="Name">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="entity-description" name="description" placeholder="Description">
    </div>
  </div>  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>       
      </div>
    </div>
  </div>
</div>
<?php }
}
