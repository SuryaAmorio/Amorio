<!-- Add User start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Add Company</h1>
            <small>Add New Company Information hdghd</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?>dsds</a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('add_user') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Alert Message -->
        <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
        ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('message');
            }
            $error_message = $this->session->userdata('error_message');
            if (isset($error_message)) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('error_message');
            }
        ?>

        <div class="row">
            <div class="col-sm-12">
                <?php if($this->permission1->method('manage_user','read')->access()){?>
                  <a href="<?php echo base_url('User/manage_user')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>Manage Company</a>
                <?php }?>
            </div>
        </div>


        <div class='row'> 
                    
        </div>
        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                      
                <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Company info</h4>
                        </div>
                        <br>

                       <div class='row'>
                        <div class='col-sm-6'>
                        <table width="800" height="231" border="0" >
                        <tr>
                        <form action="User/company_insert" method="post"  enctype="multipart/form-data">
                            <td><label for="bank_name" class="col-sm-3 col-form-label">Name<i class="text-danger">*</i></label></td>
                            <td><input type="text" class='form-control' name="company_name"></td>
                        </tr>
                        <tr>
                            <td><label for="bank_name" class="col-sm-3 col-form-label">Email<i class="text-danger">*</i></label></td>
                            <td><input type="email" class='form-control' name="email"></td>
                        </tr>
                        <tr>
                            <td><label for="bank_name" class="col-sm-3 col-form-label">Phone<i class="text-danger">*</i></label></td>
                            <td><input type="text" class='form-control'  name="mobile"></td>
                        </tr>
                        <tr>
                            <td><label for="bank_name" class="col-sm-3 col-form-label">Address<i class="text-danger">*</i></label></td>
                            <td><input type="text" class='form-control'  name="address"></td>

                        </tr>
                        <tr>
                            <td><label for="bank_name" class="col-sm-3 col-form-label">Website<i class="text-danger">*</i></label></td>
                            <td><input type="text" class='form-control' name="website"></td>
                            
                        </tr>
                        <tr>
                        

                        </tr>


                        </table>
                        
                            
                        </div>
                        <div class='col-sm-6'></div>
                       </div>
                    </div>
                    <hr>

                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Admin Info</h4>
                        </div>
                    </div>
                    
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 col-form-label"><?php echo display('first_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="first_name" id="first_name" placeholder="<?php echo display('first_name') ?>" ramji />
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="last_name" class="col-sm-3 col-form-label"><?php echo display('last_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="last_name" id="last_name" placeholder="<?php echo display('last_name') ?>" ramji />
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"><?php echo display('email') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="email" ramji="" tabindex="3" class="form-control" name="email" id="email" placeholder="<?php echo display('email') ?>"  />
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label"><?php echo display('password') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="password" tabindex="4" ramji="" class="form-control" id="password" name="password" placeholder="<?php echo display('password') ?>" />
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="user_type" class="col-sm-3 col-form-label"><?php echo display('user_type') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="user_type" id="user_type" tabindex="6" ramji="">
								    <option value="0"><?php echo display('select_one') ?></option>
								    <option value="1"><?php echo display('admin') ?></option>
								    <option value="2"><?php echo display('user') ?></option>
								  </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                                    <input type="hidden" name="uid" value="<?php echo $_SESSION['user_id']; ?>">
                                <input type="submit" id="add-customer" class="btn btn-primary btn-large" name="add-user" value="<?php echo display('save') ?>" tabindex="6"/>
                            </form>
								
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit user end -->



