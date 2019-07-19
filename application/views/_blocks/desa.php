<!-- Start Desa area -->
<div id="kependudukan" class="services-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Data Kependudukan</h2>
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
                                <a href="#penduduk" role="tab" data-toggle="tab" aria-expanded="true">Penduduk</a>
                            </li>
                            <li>
                                <a href="#umur" role="tab" data-toggle="tab" aria-expanded="true">Umur</a>
                            </li>
                            <li>
                                <a href="#pendidikan" role="tab" data-toggle="tab" aria-expanded="true">Pendidikan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="penduduk">
                            <div class="tab-inner" style="margin-top:15px">                                    
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_izin">
                                              <!-- Panel Default -->
                                              <h4>Penduduk</h4> <hr>
                                              
                                              <div style="width: 80%; text-align: center;">
																								<canvas id="cpenduduk"></canvas>
																							</div>
                                        <?php
                                            $this->db->select('kl.tl_key, kl.kl_text, sum(kl.laki) as l, sum(kl.perempuan) as p, sum(kl.total) as tot');
                                            $this->db->from('kependudukan_kl kl');
                                            // $this->db->join('kependudukan_tl tl', 'tl.tl_key = kl.tl_key');
                                            $this->db->where('kl.tl_key', 'penduduk');
																						$this->db->group_by('kl.kl_text');
																						$this->db->order_by('id', 'asc');                                                                                                          
																						$qry = $this->db->get()->result_array();
																						$qry2 = $this->db->get_where('kependudukan_tl', array('tl_key'=>'penduduk'))->result_array();
																						
																						// var_dump($qry2);
                                        ?>
																							<table class="table">
																								<thead>
																									<tr>
																										<th></th>
																										<th><?= $qry2[0]['tl_text']?></th>
																										<th style="text-align: right;">Laki-laki</th>
																										<th style="text-align: right;">Perempuan</th>
																										<th style="text-align: right;">Total</th>
																									</tr>
																								</thead>
																								<tbody>
																									<?php foreach($qry as $key=>$row) : ?>
																									<tr>
																										<td><?= ucfirst($row['tl_key']) ?></td>
																										<td><?= $row['kl_text'] ?></td>
																										<td style="text-align: right;"><?= $row['l'] ?></td>
																										<td style="text-align: right;"><?= $row['p'] ?></td>
																										<td style="text-align: right;"><?= $row['tot'] ?></td>
																									</tr>
																					<?php endforeach; ?>
																								</tbody>
																							</table>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                         
                            </div>
                        </div>                                
                        <div class="tab-pane" id="umur">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Umur</h4><hr>
                                              <div style="width: 80%; text-align: center;">
																								<canvas id="cumur"></canvas>
																							</div>
                                        <?php
                                            $this->db->select('kl.tl_key, kl.kl_text, sum(kl.laki) as l, sum(kl.perempuan) as p, sum(kl.total) as tot');
                                            $this->db->from('kependudukan_kl kl');
                                            // $this->db->join('kependudukan_tl tl', 'tl.tl_key = kl.tl_key');
                                            $this->db->where('kl.tl_key', 'umur');
																						$this->db->group_by('kl.kl_text');
																						$this->db->order_by('id', 'asc');                                                                                                                                
																						$qry = $this->db->get()->result_array();
																						$qry2 = $this->db->get_where('kependudukan_tl', array('tl_key'=>'penduduk'))->result_array();
																						
																						// var_dump($qry2);
                                        ?>
																							<table class="table">
																								<thead>
																									<tr>
																										<th></th>
																										<th><?= $qry2[0]['tl_text']?></th>
																										<th style="text-align: right;">Laki-laki</th>
																										<th style="text-align: right;">Perempuan</th>
																										<th style="text-align: right;">Total</th>
																									</tr>
																								</thead>
																								<tbody>
																									<?php foreach($qry as $key=>$row) : ?>
																									<tr>
																										<td><?= ucfirst($row['tl_key']) ?></td>
																										<td><?= $row['kl_text'] ?></td>
																										<td style="text-align: right;"><?= $row['l'] ?></td>
																										<td style="text-align: right;"><?= $row['p'] ?></td>
																										<td style="text-align: right;"><?= $row['tot'] ?></td>
																									</tr>
																					<?php endforeach; ?>
																								</tbody>
																							</table>
                                          </div>
                                        </div>
                                    </div>                                            
                                </div>                                    
                            </div>
                        </div>
                        <div class="tab-pane" id="pendidikan">
                            <div class="tab-inner" style="margin-top:15px">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion_non_izin">
                                              <!-- Panel Default -->
                                              <h4>Pendidikan</h4> <hr>
                                              <div style="width: 80%; text-align: center;">
																								<canvas id="cpendidikan"></canvas>
																							</div>
                                        <?php
                                            $this->db->select('kl.tl_key, kl.kl_text, sum(kl.laki) as l, sum(kl.perempuan) as p, sum(kl.total) as tot');
                                            $this->db->from('kependudukan_kl kl');
                                            // $this->db->join('kependudukan_tl tl', 'tl.tl_key = kl.tl_key');
                                            $this->db->where('kl.tl_key', 'pendidikan');
																						$this->db->group_by('kl.kl_text');
																						$this->db->order_by('id', 'asc');                                                                                   
																						$qry = $this->db->get()->result_array();
																						$qry2 = $this->db->get_where('kependudukan_tl', array('tl_key'=>'penduduk'))->result_array();
																						
																						// var_dump($qry2);
                                        ?>
																							<table class="table">
																								<thead>
																									<tr>
																										<th></th>
																										<th><?= $qry2[0]['tl_text']?></th>
																										<th style="text-align: right;">Laki-laki</th>
																										<th style="text-align: right;">Perempuan</th>
																										<th style="text-align: right;">Total</th>
																									</tr>
																								</thead>
																								<tbody>
																									<?php foreach($qry as $key=>$row) : ?>
																									<tr>
																										<td><?= ucfirst($row['tl_key']) ?></td>
																										<td><?= $row['kl_text'] ?></td>
																										<td style="text-align: right;"><?= $row['l'] ?></td>
																										<td style="text-align: right;"><?= $row['p'] ?></td>
																										<td style="text-align: right;"><?= $row['tot'] ?></td>
																									</tr>
																					<?php endforeach; ?>
																								</tbody>
																							</table>
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