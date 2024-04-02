<?php require_once('templates/main-start.php'); ?>
<?php require_once('resources/products.php'); ?>
        <!-- ======= CONTENT ======= -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                      <li class="breadcrumb-item active">Product</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                  <div class="card-body">
                      
                    <div class="d-flex mt-4 justify-content-around">

                      <?php foreach($datas as $data) : ?>
                        <div class="card" style="width: 18rem;">
                          <img src="<?= $data['cover'] ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-bold"><?= $data['title'] ?></h5>
                            <p class="card-text"><?= $data['release-date'] ?></p>
                            <a href="product.php?id=<?= $data['id'] ?>" class="btn btn-dark">Lihat</a>
                          </div>
                        </div>
                      <?php endforeach; ?>

                    </div>
                  </div>



                </div>
            </section>
        </div>


        <!-- ======= END CONTENT ======= -->
        <?php require_once('templates/main-end.php'); ?>

