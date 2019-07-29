<!-- Start Profil area -->
<div id="profil" class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Profil</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-well start-->                
                <div class="col-md-12 col-sm-6 col-xs-12">                        
                    <div class="single-awesome-project">
                      <div class="row">
                          <div class="col-md-3">      
                            <div class="awesome-img">
                            <?php 
                                $ketua_gank = $this->desas_m->get_organisasi('yes', NULL, '0')->row_array(); 
                                // var_dump($ketua_gank);
                            ?>
                                <center>
                                    <a href="<?= site_url('assets/images/pegawai/'.$ketua_gank['image']) ?>">
                                        <img class="thumbnail" src="<?= site_url('assets/images/pegawai/'.$ketua_gank['image']) ?>" alt="">
                                    </a>
                                </center>
                                
                            </div>
                          </div>
                          <br>
                          <div class="col-md-9">
                          <?= $kecamatan->profil ?>
                          </div>
                      </div>
                    </div> 
                       
                                       
                </div>
                <!-- single-well end-->
               
                <!-- End col-->
            </div>
            <br>
            <?php $this->load->view('_blocks/organ'); ?>
            <br>
            <!-- visi misi landasan hukum -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#landasan-hukum" role="tab" data-toggle="tab" aria-expanded="true">Landasan Hukum</a>
                            </li>
                            <li>
                                <a href="#tugas-dan-fungsi" role="tab" data-toggle="tab" aria-expanded="true">Tugas Dan Fungsi</a>
                            </li>
                            <li>
                                <a href="#visi-dan-misi" role="tab" data-toggle="tab" aria-expanded="true">Visi Dan Misi</a>
                            </li>
                            <li>
                                <a href="#keadaan-geografis" role="tab" data-toggle="tab" aria-expanded="true">Keadaan Geografis</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="landasan-hukum">
                            <div class="tab-inner" style="margin-top:15px">                                    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_izin">
                                              <!-- Panel Default -->
                                              <h4>Landasan Hukum</h4> <hr>
                                              <?= $kecamatan->landasan_hukum ?>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                         
                            </div>
                        </div>                                
                        <div class="tab-pane" id="tugas-dan-fungsi">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Tugas dan Fungsi</h4><hr>
                                              <?= $kecamatan->tugas_fungsi ?>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                    
                            </div>
                        </div>
                        <div class="tab-pane" id="visi-dan-misi">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Visi dan Misi</h4> <hr>
                                              <?= $kecamatan->visi_misi ?>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                    
                            </div>
                        </div>
                        <div class="tab-pane" id="keadaan-geografis">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Keadaan Geografis</h4>
                                              <div class="single-awesome-project">
                                                <div class="awesome-img">
                                                  <a href="#"><img src="<?= site_url('assets/images/peta/'.$kecamatan->peta)?>" alt=""></a>
                                                  <div class="add-actions text-center">
                                                    <div class="project-dec">
                                                      <a class="venobox vbox-item" data-gall="myGallery" href="<?= site_url('assets/images/peta/'.$kecamatan->peta)?>">
                                                        <h4>Peta</h4>
                                                        <hr>
                                                        <span><?= $kecamatan->nama ?></span>
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>      
                                              
                                              <?= $kecamatan->geografis ?>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                    
                            </div>
                        </div>                                                           
                    </div>
                </div>                                                        
            </div>   
        </div>
    </div>
    <!-- End Profil area -->

    		
		 
	