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
                            {foreach from=$entities item=entity}
                                <tr class="even pointer ">
                                     <td class="a-center ">
                                        <input type="checkbox" class="flat" name="table_records">
                                    </td>
                                    <td>{$entity->id}</td>
                                    <td>{$entity->name}</td>
                                    <td>{$entity->description}</td>
                                    <td>{$entity->createdBy}</td>
                                    <td>{$entity->createdAt}</td>
                                   <!-- <td>
                                        <a href="index.php?a=delete-entity&id={$entity->id}">Delete</a>
                                    </td> -->
                                   <td class=" last"><a href="#">View</a>
                                </tr>
                            {/foreach}                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="entities/modal-create.tpl"}