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
                <!-- box -->
                <div class="box">
                    <!-- box header -->
                    <div class="box-header">
                        <h3 class="box-title"><?=$title?></h3>
                    </div>
                    <!-- add form -->
                    <?=form_open_multipart(site_url("admin_panel/do_add_user"), array("class" => "form-horizontal"))?>
                        <div class="box-body">
                            <!-- full name --> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Full name <sup style="color: red">*</sup></label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text"  placeholder="first name" value="<?=set_value('first_name')?>" name="first_name" required>
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text"  placeholder="last name (optional)" value="<?=set_value('last_name')?>" name="last_name">
                                </div>
                            </div>
                            <!-- email -->
                            <?php 
                                if(form_error('email')){ 
                                    echo "<div class='form-group has-error' >";
                                }else{    
                                    echo "<div class='form-group' >";
                                } 
                            ?>
                                <label class="col-sm-2 control-label">Email <sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="email" name="email" value="<?=set_value('email')?>" placeholder="example@domain.com" required>
                                </div>
                                <span class="help-block">
                                    <?=form_error('email')?>
                                </span>
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Address <sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" placeholder="address here..." name="address" rows="2" required><?=set_value('add')?></textarea>
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Phone <sup style="color: red">*</sup></label>
                                <div class="col-sm-3">
                                    <input class="form-control" id="inputphn" type="text" value="<?=set_value('phn')?>" name="phn" placeholder="phone number" required>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Image <sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" required>
                                </div>
                            </div>
                            <hr />
                            <!-- password -->
                            <?php 
                                if(form_error('password')){ 
                                    echo "<div class='form-group has-error' >";
                                }else{    
                                    echo "<div class='form-group' >";
                                } 
                            ?>
                                <label for="inputPassword" class="col-sm-2 control-label">Password <sup style="color: red">*</sup></label>
                                <div class="col-sm-3">
                                    <input class="form-control" id="inputPassword" type="password" value="" placeholder="password" name="password" required>
                                </div>
                                <span class="help-block">
                                    <?=form_error('password')?>
                                </span>
                            </div>
                            <!-- con pass -->
                            <?php 
                                if(form_error('con_password')){ 
                                    echo "<div class='form-group has-error' >";
                                }else{    
                                    echo "<div class='form-group' >";
                                } 
                            ?>
                                <label for="inputConassword" class="col-sm-2 control-label">Password Confirmation <sup style="color: red">*</sup></label>
                                <div class="col-sm-3">
                                    <input class="form-control" id="inputConassword" type="password" value="" placeholder="confirm password" name="con_password" required>
                                </div>
                                <span class="help-block">
                                    <?=form_error('con_password')?>
                                </span>
                            </div>
                            <!--  level -->
                            <div class="form-group">
                                <label for="inputuserlevel" class="col-sm-2 control-label">Level <sup style="color: red">*</sup></label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="level">
                                        <option value="0">Manager</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Super Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-success">Add User</button>
                                </div>
                            </div>
                        </div>
                    <?=form_close()?>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->