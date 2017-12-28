<?php /* Smarty version 2.6.27, created on 2017-06-24 11:29:36
         compiled from developers/developers.tpl */ ?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Developers List</h3>
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
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center"></div>

                        <div class="clearfix"></div>
                        <?php $_from = $this->_tpl_vars['developers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['developer']):
?>
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view">
                                <div class="col-sm-12">                                    
                                    <div class="left col-xs-7">
                                        <h2><?php echo $this->_tpl_vars['developer']->getFirstname(); ?>
 <?php echo $this->_tpl_vars['developer']->getLastname(); ?>
</h2>
                                        <p><strong>Fonction: </strong> <?php echo $this->_tpl_vars['developer']->getFonction(); ?>
 </p>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-building"></i> Address: <?php echo $this->_tpl_vars['developer']->getFonction(); ?>
</li>
                                            <li><i class="fa fa-phone"></i> Phone #: <?php echo $this->_tpl_vars['developer']->getPhone(); ?>
</li>
                                        </ul>
                                    </div>
                                    <div class="right col-xs-5 text-center">
                                        <img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="" class="img-circle img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-12 bottom text-center">
                                    <div class="col-xs-6 col-sm-6 emphasis">
                                        <button type="button" class="btn btn-success btn-xs"> 
                                            <i class="fa fa-comments-o"></i> Send Message
                                         </button>                                        
                                    </div>
                                    <div class="col-xs-62 col-sm-6 emphasis">                                        
                                        <a href="index.php?a=profil&id=<?php echo $this->_tpl_vars['developer']->getId(); ?>
" class="btn btn-primary btn-xs">
                                            <i class="fa fa-user"> </i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>