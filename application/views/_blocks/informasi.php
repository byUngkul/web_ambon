<!-- Start Informasi area -->
    <div id="informasi" class="faq-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Informasi</h2>                                                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="tab-menu">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#p-view-1" role="tab" data-toggle="tab">Pelayanan Perizinan</a>
                            </li>
                            <li>
                                <a href="#p-view-2" role="tab" data-toggle="tab">Pelayanan Non Perizinan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="p-view-1">
                            <div class="tab-inner" style="margin-top:15px">                                    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_izin">
                                              <!-- Panel Default -->
                                              <?php 
                                                $pelayanan = $this->pelayanan_m->get_data(null, 'yes', 'perizinan')->result_array();
                                                foreach($pelayanan as $key=>$dt): 
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="check-title">
                                                            <a data-toggle="collapse" data-parent="#accordion_izin" href="#izin<?=$key?>">
                                                                <span class="acc-icons"></span><?php echo $key+1 ."&nbsp;". $dt['title'] ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="izin<?=$key?>" class="panel-collapse collapse">
                                                      <div class="panel-body">
                                                          <?= $dt['deskripsi']?>
                                                      </div>
                                                    </div>
                                                </div>
                                              <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>                                            
                                </div>                                         
                            </div>
                        </div>                                
                        <div class="tab-pane" id="p-view-2">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <?php 
                                                $pelayanan = $this->pelayanan_m->get_data(null, 'yes', 'non_perizinan')->result_array();
                                                foreach($pelayanan as $key=>$dt): 
                                                ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="check-title">
                                                            <a data-toggle="collapse" data-parent="#accordion_izin" href="#nonizin<?=$key?>">
                                                                <span class="acc-icons"></span><?php echo $key+1 ."&nbsp;". $dt['title'] ?>                                                                </a>
                                                        </h4>
                                                    </div>
                                                    <div id="nonizin<?=$key?>" class="panel-collapse collapse">
                                                      <div class="panel-body">
                                                          <?= $dt['deskripsi']?>
                                                      </div>
                                                    </div>
                                                </div>
                                              <?php endforeach; ?>
                                                    
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