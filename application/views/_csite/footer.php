    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                    <div class="footer-head">
                        <div class="footer-logo">
                            <h2><span>KECAMATAN</span><br>SIRIMAU</h2>
                        </div>
                        <p>Teluk Ambon, Kel Karang Panjang, Sirimau, Kota Ambon, Maluku</p>
                        <div class="footer-icons">
                        <ul>
                            <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="fa fa-google"></i></a>
                            </li>
                            <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4 style="text-align:centerq">Penanganan, Pengaduan, Saran dan Masukan</h4>
                            <ol>
                                <li>Melalui Kotak Saran dan Pengaduan</li>
                                <li>Melalui SMS Pelayanan PEMKOT Nomor 08114706999</li>
                                <li>Melalui Questionaire Kepuasan pelayanan masyarakat</li>
                                <li>Melalui Nomor HP Tim Penanganan Pengaduan</li>
                            <ol>                                                      
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Link Terkait</h4>
                            <div class="flicker-img">
                                <table>
                                    <tr>
                                        <td><a href="http://malukuprov.go.id" target="_blank"><img src="<?= site_url() ?>assets/images/logo-maluku.png" alt=""></a></td>
                                        <td><a href="http://ambon.go.id" target="_blank"><img src="<?= site_url() ?>assets/images/logo-ambon.png" alt=""></a></td>
                                        <td><a href="http://bpprd.ambon.go.id/public" target="_blank"><img src="<?= site_url() ?>assets/images/logo-bpprd.jpg" alt=""></a></td>
                                    </tr>
                                    <tr>                                                                
                                        <td><a href="http://dpmptsp.ambon.go.id/" target="_blank"><img src="<?= site_url() ?>assets/images/logo-dpmptsp.png" alt=""></a></td>                                                                                                                         
                                        <td><a href="http://lapor.go.id" target="_blank"><img src="<?= site_url() ?>assets/images/link-lapor.png" alt=""></a></td>
                                        <td><a href="http://dukcapil.kemendagri.go.id/" target="_blank"><img src="<?= site_url() ?>assets/images/link-ditjen-capil.png" alt=""></a></td>                                                                                
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>
		<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
		<div class="footer-area-bottom">
				<div class="container">
						<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="copyright text-center">
												<p>
													© Copyright <strong>KECAMATAN SIRIMAU</strong>. <!--?php=date('Y')?-->
												</p>
										</div>
								</div>
						</div>
				</div>
		</div>
    <script src="<?=base_url()?>assets/js/jquery/jquery.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/owlcarousel/owl.carousel.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/venobox/venobox.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/jquery/jquery.knob.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/wow/wow.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/parallax/parallax.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/easing/easing.min.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/jquery/jquery.nivo.slider.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/jquery/jquery.appear.js?c=" type="text/javascript" charset="utf-8"></script>
		<script src="<?=base_url()?>assets/js/isotope/isotope.pkgd.min.js?c=" type="text/javascript" charset="utf-8"></script>
        <script src="<?=base_url()?>assets/js/main.js?c=" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.orgchart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" type="text/javascript"></script>
        <script type="text/javascript">
            
            
            var testData = [<?php 
                foreach($orgChart as $dt) {
                    echo "{id: ".$dt['id'].", id_peg: ".$dt['id_p'].", jabatan: '".$dt['nama_jb']."', name: '".$dt['nama']."', parent: ".$dt['id_parent']."},";
                }
                ?>];
                
            $(function(){
                org_chart = $('#orgChart').orgChart({
                    data: testData,
                    showControls: true,
                    allowEdit: true,
                    onAddNode: function(node){ 
                        log('Created new node on node '+node.data.id);
                        org_chart.newNode(node.data.id); 
                    },
                    onDeleteNode: function(node){
                        log('Deleted node '+node.data.id);
                        org_chart.deleteNode(node.data.id); 
                    },
                    onClickNode: function(node){
                        log('Clicked node '+node.data.id);
                    }

                });
            });

            // just for example purpose
            function log(text){
                $('#consoleOutput').append('<p>'+text+'</p>')
            }
        </script>

        <script type="text/javascript">
            var lakiData = {
                label: 'Laki-laki',
                data: [<?php 
                $this->db->select('sum(laki) as lk');
                $this->db->where('tl_key', 'penduduk');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->lk.",";
                }?>],
                backgroundColor: 'rgba(0, 99, 132, 0.6)',
                borderColor: 'rgba(0, 99, 132, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-laki"
            }
            var perempuanData = {
                label: 'peremuan',
                data: [<?php 
                $this->db->select('sum(perempuan) as pr');
                $this->db->where('tl_key', 'penduduk');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->pr.",";
                }?>],
                backgroundColor: 'rgba(99, 132, 0, 0.6)',
                borderColor: 'rgba(99, 132, 0, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-perempuan"
            }
            var totData = {
                label: 'Total',
                data: [<?php 
                $this->db->select('sum(total) as tot');
                $this->db->where('tl_key', 'penduduk');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->tot.",";
                }?>],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-tot"
            }


            var ctx1 = document.getElementById("cpenduduk").getContext('2d');
            var myChart1 = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: [<?php 
                $this->db->select('kl_text');
                $this->db->where('tl_key', 'penduduk');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                
                foreach ($laki as $key => $value) {
                    echo "'".$value->kl_text."',";
                }?>],
                    datasets: [lakiData, perempuanData, totData],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var lakiData2 = {
                label: 'Laki-laki',
                data: [<?php 
                $this->db->select('sum(laki) as lk');
                $this->db->where('tl_key', 'umur');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->lk.",";
                }?>],
                backgroundColor: 'rgba(0, 99, 132, 0.6)',
                borderColor: 'rgba(0, 99, 132, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-laki"
            }
            var perempuanData2 = {
                label: 'peremuan',
                data: [<?php 
                $this->db->select('sum(perempuan) as pr');
                $this->db->where('tl_key', 'umur');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->pr.",";
                }?>],
                backgroundColor: 'rgba(99, 132, 0, 0.6)',
                borderColor: 'rgba(99, 132, 0, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-perempuan"
            }
            var totData2 = {
                label: 'Total',
                data: [<?php 
                $this->db->select('sum(total) as tot');
                $this->db->where('tl_key', 'umur');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->tot.",";
                }?>],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-tot"
            }


            var ctx2 = document.getElementById("cumur").getContext('2d');
            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: [<?php 
                $this->db->select('kl_text');
                $this->db->where('tl_key', 'umur');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                
                foreach ($laki as $key => $value) {
                    echo "'".$value->kl_text."',";
                }?>],
                    datasets: [lakiData2, perempuanData2, totData2],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var lakiData3 = {
                label: 'Laki-laki',
                data: [<?php 
                $this->db->select('sum(laki) as lk');
                $this->db->where('tl_key', 'pendidikan');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $this->db->order_by('id', 'asc');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->lk.",";
                }?>],
                backgroundColor: 'rgba(0, 99, 132, 0.6)',
                borderColor: 'rgba(0, 99, 132, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-laki"
            }
            var perempuanData3 = {
                label: 'peremuan',
                data: [<?php 
                $this->db->select('sum(perempuan) as pr');
                $this->db->where('tl_key', 'pendidikan');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->order_by('id', 'asc');
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->pr.",";
                }?>],
                backgroundColor: 'rgba(99, 132, 0, 0.6)',
                borderColor: 'rgba(99, 132, 0, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-perempuan"
            }
            var totData3 = {
                label: 'Total',
                data: [<?php 
                $this->db->select('sum(total) as tot');
                $this->db->where('tl_key', 'pendidikan');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->order_by('id', 'asc');
                $this->db->group_by('kl_text');
                $laki = $this->db->get('kependudukan_kl')->result();             
                foreach ($laki as $key => $value) {
                    echo $value->tot.",";
                }?>],
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
                // yAxisID: "y-axis-tot"
            }


            var ctx3 = document.getElementById("cpendidikan").getContext('2d');
            var myChart3 = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: [<?php 
                $this->db->select('kl_text');
                $this->db->where('tl_key', 'pendidikan');
                $this->db->where('id_desa', $pemerintah->desa_id);
                $this->db->group_by('kl_text');
                $this->db->order_by('id', 'asc');
                $laki = $this->db->get('kependudukan_kl')->result();             
                
                foreach ($laki as $key => $value) {
                    echo "'".$value->kl_text."',";
                }?>],
                    datasets: [lakiData3, perempuanData3, totData3],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });


        
            <?php 
                $this->db->select('iv.nama_infra, sum(iv.value) jml, ji.jenis_infra');
                $this->db->join('jenis_infra ji', 'ji.id_infra = iv.id_jenis_infra');
                $this->db->where('iv.id_desa', $pemerintah->desa_id);
                // $this->db->where('tl_key', 'pendidikan');
                // $this->db->order_by('id', 'asc');
                $this->db->group_by('nama_infra');
                $dt = $this->db->get('infrastruktur_v iv')->result();
                // var_dump($dt);
            ?>

                var infraData = {
                    label: 'Infrastruktur',
                    data: [<?php foreach($dt as $val){ echo $val->jml.",";}?>],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            
        

            var ctx4 = document.getElementById("cinfra").getContext('2d');
            var myChart4 = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: [<?php foreach($dt as $val){ echo "'".$val->nama_infra."',";}?>],
                    datasets: [infraData],
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        </script>
	</body>
</html>
