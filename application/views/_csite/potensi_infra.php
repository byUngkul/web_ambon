<!-- Start Desa area -->
<div id="kependudukan" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Potensi dan Infrastruktur</h2>
                    </div>
                </div>
            </div>
            <!-- visi misi landasan hukum -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#potensi" role="tab" data-toggle="tab" aria-expanded="true">Potensi</a>
                            </li>
                            <li>
                                <a href="#infras" role="tab" data-toggle="tab" aria-expanded="true">Infrastruktur</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="potensi">
                            <div class="tab-inner" style="margin-top:15px">                                    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_izin">
                                              <!-- Panel Default -->
                                              <h4>Potensi

                                              </h4> <hr>              
                                        <?php
                                            $qry2 = $this->db->get('jenis_potensi')->result_array();
                                            foreach($qry2 as $key=>$pt) {
                                        ?>
                                            <h6><?= $pt['nama']?></h6><hr>
                                            <xol>
                                              <?php
                                                $this->db->where('id_desa', $pemerintah->desa_id);
                                                $this->db->where('id_jp', $pt['id_jp']);
                                                $qry = $this->db->get('potensi_v');
                                                foreach($qry->result_array() as $pt_v){
                                              ?>
                                                <li><?= $pt_v['nama_p'] ?></li>
                                              <?php } ?>
                                            </xol><br>
																				<?php } ?>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                         
                            </div>
                        </div>                                
                        <div class="tab-pane" id="infras">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Infrastruktur</h4><hr>
                                              <div class="col-md-10" style="width: 80%; text-align: center;">
																								<canvas id="cinfra"></canvas>
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
    </div>
    <!-- End Desa area -->