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
            <!-- profile left -->
            <div class="col-md-6">
                <div class="box box-widget widget-user-2">
                    <div class="widget-user-header bg-blue">
                        <a data-toggle="modal" href="#info<?=$list[0]->id?>">
                            <i class="fa fa-pencil-square-o" style="float:right; color:#fff;" data-toggle="tooltip" data-placement="left" title="" data-original-title="Upadte info"></i>
                        </a>
                        <a data-toggle="modal" href="#pass<?=$list[0]->id?>">
                            <i class="fa fa-key" style="float:right; color:#fff;  margin-right: 8px;" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update Password"></i>
                        </a>
                        <div class="widget-user-image">
                            <img class="profile-user-img img-responsive img-circle" src="<?=base_url()?>assets/back/images/profile/<?=$list[0]->image;?>" alt="<?=$list[0]->first_name.' '.$list[0]->last_name;?>">
                        </div>
                        <h3 class="widget-user-username"><?=$list[0]->first_name.' '.$list[0]->last_name;?></h3>
                        <h5 class="widget-user-desc">
                            Level - 
                            <?php if($list[0]->level == 0){
                                echo '<span class="label label-primary">Manager</span>';
                            }elseif($list[0]->level == 1){
                                echo '<span class="label label-warning">Admin</span>';
                            }elseif($list[0]->level == 2){
                                echo '<span class="label label-success">Super Admin</span>';
                            }elseif($list[0]->level == -1){
                                echo '<span class="label label-danger">Banned</span>';
                            } ?>
                        </h5>
                    </div>
                    <div class="box-footer no-padding">
                        <div class="box-body">
                            <strong><i class="fa fa-envelope margin-r-5"></i>  Email</strong>
                            <p class="text-muted"><?=$list[0]->email?></p>
                            <hr>
                            <strong><i class="fa  fa-phone-square margin-r-5"></i> Phone</strong>
                            <p><?=$list[0]->phn?></p>
                            <hr>
                            <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                            <p class="text-muted"><?=$list[0]->address?></p>
                            <hr>
                            <strong><i class="fa  fa-briefcase margin-r-5"></i> Joined Date</strong>
                            <p><?php $date = nice_date($list[0]->joined_date, 'd-M-Y'); echo $date; ?></p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
            
            <!-- update modal -->
            <div class="modal fade" id="info<?=$list[0]->id?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"> Update</h4>
                        </div>
                        <?=  form_open_multipart(site_url("admin_panel/do_edit_user")); ?>
                            <div class="modal-body">
                                <!-- full name -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> First Name <sup style="color: red">*</sup></label>
                                            <input class="form-control" name="first_name" value="<?=$list[0]->first_name?>" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Last Name <sup style="color: red">*</sup></label>
                                            <input class="form-control" name="last_name" value="<?=$list[0]->last_name?>" type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Email <sup style="color: red">*</sup></label>
                                            <input class="form-control" name="email" value="<?=$list[0]->email; ?>" type="email" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- address -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Address <sup style="color: red">*</sup></label>
                                            <textarea class="form-control" name="address" rows="3" required><?=$list[0]->address?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- phone -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> Phone <sup style="color: red">*</sup></label>
                                            <input class="form-control" name="phn" value="<?=$list[0]->phn?>" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- level -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputlevel"> User Level <sup style="color: red">*</sup></label>
                                            <select class="form-control" name="level">
                                                <option value="0" <?php if($list[0]->level == 0) echo 'selected';?>>Manager</option>
                                                <option value="1" <?php if($list[0]->level == 1) echo 'selected';?>>Admin</option>
                                                <option value="2" <?php if($list[0]->level == 2) echo 'selected';?>>Super Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- image -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image </label>
                                            <input type="file"  name="image"  id="myFile" onchange="imageshow(this);" />
                                            <input type="hidden" name="img" value="<?=$list[0]->image?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <img id="previewImg1" src="<?=base_url()?>assets/back/images/profile/<?=$list[0]->image?>" width="130px" />
                                            <script>
                                                function imageshow(input) {

                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();

                                                        reader.onload = function(e) {
                                                            $('#previewImg1')
                                                                    .attr('src', e.target.result)
                                                                    .width(130);
                                                        }
                                                        reader.readAsDataURL(input.files[0]);

                                                    } else {
                                                        var filename = "";
                                                        filename = "file:\/\/" + input.value;
                                                        document.form2.previewImg1.src = filename;
                                                        document.form2.previewImg1.style.width = "80px";
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input name="id" type="hidden" value="<?=$list[0]->id?>"> 
                                <button type="submit" class="btn btn-primary btn-icon"><i class="fa fa-fw fa-check-square-o"></i> Update</button>
                                <button type="button" class="btn btn-default btn-icon" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Cancel</button>
                            </div>
                        <?=form_close(); ?> 
                    </div> 
                </div>
            </div> 
            <!-- update password -->
            <div class="modal fade" id="pass<?=$list[0]->id?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title"> Update password</h4>
                        </div>
                        <?=form_open(site_url("admin_panel/do_pass_update")); ?>
                            <div class="modal-body">
                                <!-- new password -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label> New Password <sup style="color: red">*</sup></label>
                                            <input  type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- confirm new password -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>  Confirm Password <sup style="color: red">*</sup></label>
                                            <input  type="password" class="form-control" name="con_password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input name="id" type="hidden" value="<?=$list[0]->id?>"> 
                                <button type="submit" class="btn btn-primary btn-icon"><i class="fa fa-fw fa-check-square-o"></i> Update</button>
                                <button type="button" class="btn btn-default btn-icon" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Cancel</button>
                            </div>
                        <?=form_close(); ?> 
                    </div> 
                </div>
            </div>
            
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->