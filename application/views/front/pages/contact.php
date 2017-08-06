<div class="slidermar12"></div>
    
    <div class="slidermar12"></div>
    <div class="featured_section128">
        <div class="container">
            <div class="col-md-6">
                <?=form_open(site_url("send_msg"), array("class" => "form-horizontal"))?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="full name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email: </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="example@gamil.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subject: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sub"  placeholder="subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message: </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="7" name="msg" placeholder="write here..." required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                <?=form_close()?>
                
                <?php $s = $this->session->flashdata('success');
                if (!empty($s)) { ?>
                    <!-- notice -->
                    <h3 style="color:green; font-weight: bold"><?=$this->session->flashdata('success')?></h3>
                <?php } ?>
                <?php $d = $this->session->flashdata('danger');
                if (!empty($d)) { ?>
                    <!-- notice -->
                    <h3 style="color:red; font-weight: bold"><?=$this->session->flashdata('danger')?></h3>
                <?php } ?>
                    
            </div>
            <div class="col-md-6">
                <div class="box">
                    <span>
                        <strong>Prapti Trade</strong> <br /><br />
                        <b>Level - 15, Planners Tower, Dhka - 1206</b><br />
                        <b>Telephone:  01713927837</b><br />
                        <b>E-mail: mail@praptitrade.com</b><br />
                        <b>Website: www.praptitrade.com</b><br />
                    </span>
                </div>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>
    <div class="featured_section67 stwo">
        <div class="fgmapfull2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0176378732594!2d90.39087361456167!3d23.74675043459118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd9229dd1b%3A0xa8db185ff232d183!2sPlanner&#39;s+Tower%2C+13%2FA%2C+Bipanon+C%2FA%2C+Bir+Uttam+C.+R.+Datta+Road+Mymensingh+Ln%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1495364712617" frameborder="0" style="border:0"></iframe>
        </div>
    </div><!-- end featured section 67 -->
    
    