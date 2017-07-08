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
                            {foreach from=$roles item=role}
                            <tr>
                                <td>{$role->getId()}</td>
                                <td>
                                    <a>{$role->getName()}</a>
                                    <br />
                                    <small>Created 01.01.2015</small>
                                </td>
                                <td>
                                    <ul class="list-inline">                                                                  
                                        {foreach from=$role->getUsers() item=user}
                                        <li>
                                            <img title="{$user->getFirstname()} {$user->getLastname()}" alt="{$user->getLastname()} {$user->getLastname()}"
                                                 src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" class="avatar" alt="Avatar">
                                        </li>                                    
                                        {/foreach}
                                    </ul>
                                </td>                             
                                <td>                                 
                                    <a href="index.php?a=edit-role&id={$role->getId()}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    <a href="index.php?a=delete-rolee&id={$role->getId()}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>     
                            {/foreach}
                        </tbody>
                    </table>
                    <!-- end project list -->

                </div>
            </div>
        </div>
    </div>
</div>