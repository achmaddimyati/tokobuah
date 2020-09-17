<!DOCTYPE html>
<html lang="en">
    <head>
        <!--bagian head.php-->
        <?php $this->load->view('admin/_partials/head.php') ?>
    </head>
    <body class="sb-nav-fixed">
        <!--bagian navbar.php-->
        <?php $this->load->view('admin/_partials/navbar.php') ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!--bagian sidebar.php-->
                <?php $this->load->view('admin/_partials/sidebar.php') ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <!--bagian breadcumb.php-->
                        <?php $this->load->view('admin/_partials/breadcumb.php') ?>
<!--DataTable-->
                          <div class="card mb-3">
                            <div class="card-header">
                              <a href="<?php echo site_url('admin/products/add') ?>">Add New</a>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                  <table class="table table-hover" id="dataTable" width="100" cellspacing='0'>
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Photo</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($products as $product) :   ?>
                                      <tr>
                                        <td width='150'>
                                            <?php echo $product -> name ?>
                                        </td>
                                        <td width='150'>
                                            <?php echo $product -> price ?>
                                        </td>
                                        <td width='150'>
                                            <img src="<?php echo base_url('upload/product/'.$product -> image) ?>" width = "64" alt="">
                                        </td>
                                        <td class = "small">
                                            <?php echo substr($product -> description, 0 , 120); ?> ...
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/products/edit/'.$product -> product_id) ?>"
                                            class="btn btn-small"><i class="fas fa-edit"></i> Edit </a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product -> product_id) ?>')"
											                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                      </tr>
                                    <?php endforeach; ?>
                                    </tbody>

                                  </table>

                                </div>

                            </div>

                          </div>

                          <!--bagian footer.php-->
                          <?php $this->load->view('admin/_partials/footer.php') ?>
                      </div>
                  </div>
          <!--bagian modals.php-->
          <?php $this->load->view('admin/_partials/modals.php') ?>
          <!--bagian js.php-->
          <?php $this->load->view('admin/_partials/js.php') ?>
          <script>
            function deleteConfirm(url){
            	$('#btn-delete').attr('href', url);
            	$('#deleteModal').modal();
            }
          </script>
    </body>
</html>
