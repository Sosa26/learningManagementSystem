<style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>

<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo get_phrase('register_yourself'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form hidden">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('login'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('provide_your_valid_login_credentials'); ?>.</div>
                      </div>
                      <form action="<?php echo site_url('login/validate_login/user'); ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('email'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="login-email" placeholder="<?php echo get_phrase('email'); ?>" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="login-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> <?php echo get_phrase('password'); ?>:</label>
                                      <input type="password" class="form-control" name = "password" placeholder="<?php echo get_phrase('password'); ?>" required>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('login'); ?></button>
                          </div>
                          <div class="forgot-pass text-center">
                              <span>or</span>
                              <a href="javascript::" onclick="toggoleForm('forgot_password')"><?php echo get_phrase('forgot_password'); ?></a>
                          </div>
                          <div class="account-have text-center">
                              <?php echo get_phrase('do_not_have_an_account'); ?>? <a href="javascript::" onclick="toggoleForm('registration')"><?php echo get_phrase('sign_up'); ?></a>
                          </div>
                      </form>
                  </div>
                  <div class="user-dashboard-content w-100 register-form">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('registration_form'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('sign_up_and_start_learning'); ?>.</div>
                      </div>
                 
                      <form action="<?php echo site_url('login/register'); ?>" method="post">
                      <ul class="nav nav-tabs">
                            <li class="nav-item">
                            <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_personal_details">Personal Details</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Skills Program</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Code of Conduct</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Qualification SADA documents</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Learner Decleration</a>
                            </li>
                        </ul>

                          <div class="content-box">
                          <div class="tab-pane active" id="personal_details">
                            <div class="panel panel-default">
                              <div class="basic-group">
                              <div class="form-group">
                                      <label for="identificationNo"><span class="input-field-icon"><i class="fa fa-id-card"></i></span> <?php echo get_phrase('identificationNo'); ?>:</label>
                                      <input type="text" class="form-control" name = "identificationNo" id="identificationNo" placeholder="<?php echo get_phrase('ID Number'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="first_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> <?php echo get_phrase('first_name'); ?>:</label>
                                      <input type="text" class="form-control" name = "first_name" id="first_name" placeholder="<?php echo get_phrase('first_name'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="last_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> <?php echo get_phrase('last_name'); ?>:</label>
                                      <input type="text" class="form-control" name = "last_name" id="last_name" placeholder="<?php echo get_phrase('last_name'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="CV"><span class="input-field-icon"><i class="fa fa-file"></i></span> <?php echo get_phrase('CV'); ?>:</label>
                                      <input type="file" class="form-control" name = "CV" id="CV" placeholder="<?php echo get_phrase('CV'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="qualification"><span class="input-field-icon"><i class="fas fa-file"></i></span> <?php echo get_phrase('qualification'); ?>:</label>
                                      <input type="file" class="form-control" name = "qualification" id="qualification" placeholder="<?php echo get_phrase('qualification'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('email'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="registration-email" placeholder="<?php echo get_phrase('email'); ?>" value="" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> <?php echo get_phrase('password'); ?>:</label>
                                      <input type="password" class="form-control" name = "password" id="registration-password" placeholder="<?php echo get_phrase('password'); ?>" value="" required>
                                  </div>
                              </div>
                          </div>
                        </div>
                        </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('sign_up'); ?></button>
                          </div>
                          <div class="account-have text-center">
                              <?php echo get_phrase('already_have_an_account'); ?>? <a href="javascript::" onclick="toggoleForm('login')"><?php echo get_phrase('login'); ?></a>
                          </div>
                      </form>
                  </div>

                  <div class="user-dashboard-content w-100 forgot-password-form hidden">
                      <div class="content-title-box">
                          <div class="title"><?php echo get_phrase('forgot_password'); ?></div>
                          <div class="subtitle"><?php echo get_phrase('provide_your_email_address_to_get_password'); ?>.</div>
                      </div>
                      <form action="<?php echo site_url('login/forgot_password/frontend'); ?>" method="post">
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="forgot-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> <?php echo get_phrase('email'); ?>:</label>
                                      <input type="email" class="form-control" name = "email" id="forgot-email" placeholder="<?php echo get_phrase('email'); ?>" value="" required>
                                      <small class="form-text text-muted"><?php echo get_phrase('provide_your_email_address_to_get_password'); ?>.</small>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn"><?php echo get_phrase('reset_password'); ?></button>
                          </div>
                          <div class="forgot-pass text-center">
                              <?php echo get_phrase('want_to_go_back'); ?>? <a href="javascript::" onclick="toggoleForm('login')"><?php echo get_phrase('login'); ?></a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
  function toggoleForm(form_type) {
    if (form_type === 'login') {
      $('.login-form').show();
      $('.forgot-password-form').hide();
      $('.register-form').hide();
    }else if (form_type === 'registration') {
      $('.login-form').hide();
      $('.forgot-password-form').hide();
      $('.register-form').show();
    }else if (form_type === 'forgot_password') {
      $('.login-form').hide();
      $('.forgot-password-form').show();
      $('.register-form').hide();
    }
  }
</script>
