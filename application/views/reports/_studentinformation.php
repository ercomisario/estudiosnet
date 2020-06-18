
<div class="row">
            <div class="col-md-12">
                <div class="box box-primary border0 mb0 margesection">
                    <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-search"></i>  <?php echo $this->lang->line('report')." ".$this->lang->line('student_information')?></h3>

            </div>
                    <div class="">
                        <ul class="reportlists">
                        	<?php
                        	 if ($this->rbac->hasPrivilege('student_report', 'can_view')) {
                                ?>
                                <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/student_report'); ?>"><a href="<?php echo base_url(); ?>student/studentreport"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('student_report'); ?></a></li>
                                <?php
                            }
                             if ($this->rbac->hasPrivilege('guardian_report', 'can_view')) {
                                ?>

                                <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/guardian_report'); ?>"><a href="<?php echo base_url(); ?>student/guardianreport"><i class="fa fa-file-text-o"></i>
                                        <?php echo $this->lang->line('guardian_report'); ?></a></li>
                                <?php
                            } 
                             if ($this->rbac->hasPrivilege('student_history', 'can_view')) {
                               
                            ?>

                            <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/student_history'); ?>"><a href="<?php echo base_url() ?>admin/users/admissionreport"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('student_history'); ?></a></li>
                        <?php } ?>
                        
                         <?php if($this->rbac->hasPrivilege('student_login_credential_report','can_view')){   ?>
                        <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/student_login_credential'); ?>"><a href="<?php echo base_url(); ?>admin/users/logindetailreport"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('login_credential')." ".$this->lang->line('student'); ?></a></li>
                      <?php } ?>

                        <?php if($this->rbac->hasPrivilege('class_subject_report','can_view')){
                          ?>
                          <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/class_subject_report'); ?>"><a href="<?php echo base_url(); ?>report/class_subject"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('report')." ".$this->lang->line('class')." ".$this->lang->line('subject'); ?></a></li>
                          <?php   } if($this->rbac->hasPrivilege('admission_report','can_view')){ ?>
                         

                         <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/admission_report'); ?>"><a href="<?php echo base_url(); ?>report/admission_report"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('report')." ".$this->lang->line('admission'); ?></a></li>
                     <?php } if($this->rbac->hasPrivilege('sibling_report','can_view')){ ?>

                         <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/sibling_report'); ?>"><a href="<?php echo base_url(); ?>report/sibling_report"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('report')." ".$this->lang->line('sibling'); ?></a></li>
                       <?php } 
                       if($this->rbac->hasPrivilege('student_profile','can_view')){ ?>
                          <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/student_profile'); ?>"><a href="<?php echo base_url(); ?>report/student_profile"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('profile')." ".$this->lang->line('student'); ?></a></li><?php 
                        }if($this->rbac->hasPrivilege('homehork_evaluation_report','can_view')){ ?>
                         <li class="col-lg-4 col-md-4 col-sm-6 <?php echo set_SubSubmenu('Reports/student_information/evaluation_report'); ?>"><a href="<?php echo base_url(); ?>homework/evaluation_report"><i class="fa fa-file-text-o"></i> <?php echo $this->lang->line('evaluation_report')." ".$this->lang->line('homework'); ?></a></li>
                       <?php }  ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>