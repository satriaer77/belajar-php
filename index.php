<?php require_once('templates/main-start.php'); ?>

<!-- ======= CONTENT ======= -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                      <div class="widget-user-header text-white"
                          style="background: url('https://i.pinimg.com/564x/8f/92/20/8f9220d90a8678bbaa6990de8cc9e810.jpg') center center;background-size: cover;">
                        <h3 class="widget-user-username text-right">Isyana Sarasvati</h3>
                        <h5 class="widget-user-desc text-right">Singer (Swift Engineer)</h5>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle" src="https://i.pinimg.com/564x/11/00/01/1100015362599f90fc16ac201f621ef0.jpg" alt="User Avatar">
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">3,200</h5>
                              <span class="description-text">SALES</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header">13,000</h5>
                              <span class="description-text">FOLLOWERS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4">
                            <div class="description-block">
                              <h5 class="description-header">35</h5>
                              <span class="description-text">PRODUCTS</span>
                            </div>
                            <!-- /.description-block -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                    </div>
                    <!-- /.widget-user -->

                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            To Do List
                        </h3>
        
                        <div class="card-tools">
                            <ul class="pagination pagination-sm">
                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                            </ul>
                        </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                            
                            <li>
                                <span class="handle">
                                    <i class="fas fa-ellipsis-v"></i>
                                    <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                    <label for="todoCheck2"></label>
                                </div>
                                <span class="text">Check Pesan Baru</span>
                                <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                <div class="tools">
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                    <i class="fas fa-ellipsis-v"></i>
                                    <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                    <label for="todoCheck3"></label>
                                </div>
                                <span class="text">Check Rekap Sales</span>
                                <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                <div class="tools">
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                            <li>
                                <span class="handle">
                                    <i class="fas fa-ellipsis-v"></i>
                                    <i class="fas fa-ellipsis-v"></i>
                                </span>
                                <div  class="icheck-primary d-inline ml-2">
                                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                    <label for="todoCheck4"></label>
                                </div>
                                <span class="text">Check Order Baru</span>
                                <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                <div class="tools">
                                    <i class="fas fa-edit"></i>
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>
                        </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                        <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                        </div>
                    </div>
                    <!-- /.card -->
                
                </div>

                <div class="col-md-8">

                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                          <h3 class="card-title">Direct Chat</h3>
          
                          <div class="card-tools">
                            <span title="3 New Messages" class="badge badge-primary">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                              <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- Conversations are loaded here -->
                          <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Lily Collins</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="https://i.pinimg.com/736x/02/e1/63/02e163ff1503f9e246b40fae11e94763.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Kak udah cek message belum
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
          
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Isyana Sarasvati</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="https://i.pinimg.com/564x/11/00/01/1100015362599f90fc16ac201f621ef0.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Udah Kak Lily
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
          
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Jung Eun Bi</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="https://i.pinimg.com/564x/3d/bd/bc/3dbdbc7734d1d902307c3eda8df8cff1.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Wah Albumnya bagus banget kak :))
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
          
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Isyana Sarasvati</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="https://i.pinimg.com/564x/11/00/01/1100015362599f90fc16ac201f621ef0.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Makasihh Kak Eun Bi
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
          
                          </div>
                          <!--/.direct-chat-messages-->
          
                          <!-- Contacts are loaded here -->
                          <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="https://i.pinimg.com/564x/3d/bd/bc/3dbdbc7734d1d902307c3eda8df8cff1.jpg" alt="User Avatar">
          
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Jung Eun Bi
                                      <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Iya kak</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="https://i.pinimg.com/736x/02/e1/63/02e163ff1503f9e246b40fae11e94763.jpg" alt="User Avatar">
          
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Lily Collins
                                      <small class="contacts-list-date float-right">2/23/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Baikk kak</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                            </ul>
                            <!-- /.contacts-list -->
                          </div>
                          <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <form action="#" method="post">
                            <div class="input-group">
                              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-primary">Send</button>
                              </span>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-footer-->
                      </div>
                      <!--/.direct-chat -->
                </div>


            </div>

            


        </div>
    </section>
</div>


<!-- ======= END CONTENT ======= -->


<?php require_once('templates/main-end.php'); ?>