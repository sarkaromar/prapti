<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- box header -->
                    <div class="box-header">
                        <h3 class="box-title"><?=$title?> List</h3>
                        <div class="pull-right box-tools">
                            <a class="btn btn-success btn-sm" href="<?=site_url("admin_panel/add_user")?>"  title="Add" data-original-title="Add"><i class="fa fa-user-plus"></i></a>
                        </div>
                    </div>
                    <!-- box content -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>sl.</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Level</th>
                                    <th>Image</th>
                                    <th>Action's</th>
                                </tr>
                                <?php $x = 0; foreach($lists as $list) : $x++ ?>
                                <tr>
                                    <td><?=$x?></td>
                                    <td><?=$list->email?></td>
                                    <td><?=$list->first_name . ' ' . $list->last_name?></td>
                                    <td><?=$list->phn?></td>
                                    <td>
                                        <?php if($list->level == 0){
                                            echo '<span class="label label-primary">Manager</span>';
                                        }elseif($list->level == 1){
                                            echo '<span class="label label-warning">Admin</span>';
                                        }elseif($list->level == 2){
                                            echo '<span class="label label-success">Sup Admin</span>';
                                        }elseif($list->level == -1){
                                            echo '<span class="label label-danger">Banned</span>';
                                        }  ?>
                                    </td>
                                    <td>
                                        <img src="<?=base_url()?>assets/back/images/profile/<?=$list->image ?>" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <a href="<?=site_url('admin_panel/edit_user/' . $list->id) ?>" data-toggle="tooltip" title="Edit" data-original-title="Edit"><i class="fa  fa-file-text"></i></a>
                                        |
                                        <a href="<?=site_url('admin_panel/delete_user/' . $list->id . '/' . $list->image) ?>" onclick="return checkDelete();"><i class="fa fa-trash text-red"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->