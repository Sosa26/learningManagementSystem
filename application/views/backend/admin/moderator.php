<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo $page_title; ?>
                <a href = "<?php echo site_url('admin/moderator_form/add_moderator_form'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i><?php echo get_phrase('add_moderator'); ?></a>
            </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
              <h4 class="mb-3 header-title"><?php echo get_phrase('moderators'); ?></h4>
              <div class="table-responsive-sm mt-4">
                <table id="basic-datatable" class="table table-striped table-centered mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th><?php echo get_phrase('photo'); ?></th>
                      <th><?php echo get_phrase('name'); ?></th>
                      <th><?php echo get_phrase('email'); ?></th>
                      <th><?php echo get_phrase('enrolled_courses'); ?></th>
                      <th><?php echo get_phrase('actions'); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       foreach ($moderator->result_array() as $key => $moderator): ?>
                          <tr>
                              <td><?php echo $key+1; ?></td>
                              <td>
                                  <img src="<?php echo $this->main_model->get_user_image_url($moderator['id']);?>" alt="" height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
                              </td>
                              <td><?php echo $moderator['first_name'].' '.$moderator['last_name']; ?></td>
                              <td><?php echo $moderator['email']; ?></td>
                              <td>
                                 <?php
                                    $enrolled_courses = $this->crud_model->enrol_history_by_user_id($moderator['id']);?>
                                    <ul>
                                        <?php foreach ($enrolled_courses->result_array() as $enrolled_course):
                                            $course_details = $this->crud_model->get_course_by_id($enrolled_course['course_id'])->row_array();?>
                                            <li><?php echo $course_details['title']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                              </td>
                              <td>
                                  <div class="dropright dropright">
                                    <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo site_url('admin/moderator_form/edit_moderator_form/'.$moderator['id']) ?>"><?php echo get_phrase('edit'); ?></a></li>
                                        <li><a class="dropdown-item" href="#" onclick="confirm_modal('<?php echo site_url('admin/moderator/delete/'.$moderator['id']); ?>');"><?php echo get_phrase('delete'); ?></a></li>
                                    </ul>
                                </div>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
