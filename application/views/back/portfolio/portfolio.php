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
        <!-- form row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add <?=$title?> form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?=form_open_multipart(site_url("admin_panel/add_portfolio"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- status -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Status<sup style="color: red">*</sup></label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="status">
                                        <option value="1">Completed</option>
                                        <option value="0">On Going</option>
                                    </select>
                                </div>
                            </div>
                            <!-- name -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Name<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Image<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?=form_close()?>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- list row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- box header -->
                    <?php if(empty($lists)) : ?>
                        <div class="box-header">
                            <h3 class="box-title">No List Found!</h3>
                        </div>
                    <?php else: ?>
                    <div class="box-header">
                        <h3 class="box-title">List</h3>
                    </div>
                    <!-- box content -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                <?php $x = 0; foreach($lists as $list) : $x++?>
                                <tr>
                                    <td><?=$x?></td>
                                    <td>
                                        <?php 
                                            $a = $list->name;
                                            if (strlen($a) > 30) {
                                                $stringCut = substr($a, 0, 30);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <img src="<?=base_url()?>assets/images/portfolio/<?=$list->image?>" alt="<?=$list->name?>" width="80px" height="80px" >
                                    </td>
                                    <td>
                                    <?php if($list->status == 1) {
                                        echo "<span class='btn label-success'>Completed</span>";
                                    } elseif($list->status == 0) {
                                        echo "<span class='btn label-warning'>On Going</span>";
                                    } ?>
                                    </td>
                                    <td>
                                        <a href="<?=site_url('admin_panel/edit_portfolio/' . $list->id) ?>" data-toggle="tooltip" title="Edit" data-original-title="Edit"><i class="fa  fa-file-text"></i></a>
                                        |
                                        <a href="<?=site_url('admin_panel/delete_portfolio/' . $list->id . '/' . $list->image) ?>" onclick="return checkDelete();"><i class="fa fa-trash text-red"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif?>
                </div>  
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->