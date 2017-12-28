<?php /* Smarty version 2.6.27, created on 2017-06-24 12:41:11
         compiled from roles/roles.tpl */ ?>
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
                            <?php $_from = $this->_tpl_vars['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['role']->getId(); ?>
</td>
                                <td>
                                    <a><?php echo $this->_tpl_vars['role']->getName(); ?>
</a>
                                    <br />
                                    <small>Created 01.01.2015</small>
                                </td>
                                <td>
                                    <ul class="list-inline">                                                                  
                                        <?php $_from = $this->_tpl_vars['role']->getUsers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
                                        <li>
                                            <img title="<?php echo $this->_tpl_vars['user']->getFirstname(); ?>
 <?php echo $this->_tpl_vars['user']->getLastname(); ?>
" alt="<?php echo $this->_tpl_vars['user']->getLastname(); ?>
 <?php echo $this->_tpl_vars['user']->getLastname(); ?>
"
                                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" class="avatar" alt="Avatar">
                                        </li>                                    
                                        <?php endforeach; endif; unset($_from); ?>
                                    </ul>
                                </td>                             
                                <td>                                 
                                    <a href="index.php?a=edit-role&id=<?php echo $this->_tpl_vars['role']->getId(); ?>
" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="index.php?a=delete-rolee&id=<?php echo $this->_tpl_vars['role']->getId(); ?>
" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>     
                            <?php endforeach; endif; unset($_from); ?>
                        </tbody>
                    </table>
                    <!-- end project list -->

                </div>
            </div>
        </div>
    </div>
</div>