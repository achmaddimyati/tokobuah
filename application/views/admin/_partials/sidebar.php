<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="nav-item">
                              <a class="nav-link"  href="<?php echo site_url('admin/overview') ?>" <?php echo $this->uri->segment(2) == '' ? 'active' : ''?>>
                                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                  Overview
                              </a>
                            </div>

                            <div class="nav-item dropdown ">
                              <a class="nav-link collapsed" href="#" <?php echo $this->uri->segment(2) == 'products' ? 'active' : ''?> data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                  <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                  Products
                                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>
                              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                  <nav class="sb-sidenav-menu-nested nav">
                                      <a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">New Product</a>
                                      <a class="nav-link" href="<?php echo site_url('admin/products') ?>">List Product</a>
                                  </nav>
                              </div>
                            </div>

                            <div class="nav-item">
                              <a class="nav-link" href="#">
                                  <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                  Users
                              </a>
                            </div>

                            <div class="nav-item">
                              <a class="nav-link" href="#">
                                  <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                  Settings
                              </a>
                            </div>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
