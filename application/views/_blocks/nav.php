<header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                    <!-- Navigation -->
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Brand -->
                                <img src="<?=base_url()?>assets/images/logo-ambon.png" width="60px" style="float:left;margin-top:5px">
                                <a class="navbar-brand page-scroll sticky-logo" href="<?= site_url()?>">                                    
                                    <h1><span><?= $kecamatan->nama ?></span> </h1>
                                </a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">                                
                                <ul class="nav navbar-nav navbar-right">
                                      <li class="active"><a class="page-scroll" href="<?= site_url()?>">Beranda</a></li>
                                      <li ><a class="page-scroll" href="#profil">Profil</a></li>
                                      <li ><a data-toggle="modal" data-target="#dataKelurahan" href="javascript:void(0);">Kelurahan<span class="caret"></span></a></li>
                                      <li ><a class="page-scroll" href="#informasi">Informasi</a></li>
                                      <li ><a class="page-scroll" href="#kependudukan">Kependudukan</a></li>
                                      <li ><a class="page-scroll" href="#kegiatan">Kegiatan</a></li>
                                      <li ><a class="page-scroll" href="#kontak">Kontak</a></li>
                              </ul>
                            </div>
                            <!-- navbar-collapse -->
                        </nav>
                    <!-- END: Navigation -->
                    </div>
                </div>
            </div>
        </div>
    <!-- header-area end -->
    </header>

<!-- modal menu desa / Kelurahan -->
<div class="modal fade" id="dataKelurahan" tabindex="-1" role="dialog" aria-labelledby="dataKelurahan" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-body"> 
		<div class="row">
            <?php foreach($desas as $val): ?>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="pemerintahan/<?= $val->slug?>" class="listgroup-item"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;<?= $val->nama ?></a>
                </div>
            </div>
            <?php endforeach; ?>
			<!-- <div class="col-md-4">
				<div class="list-group">
                    <a class="list-group-item text-t" href="/kelurahan-ahusen/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Ahusen</a>
                    <a class="list-group-item text-t" href="/kelurahan-amantelu/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Amantelu</a>
                    <a class="list-group-item text-t" href="/kelurahan-batu-gajah/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Batu Gajah</a>
                    <a class="list-group-item text-t" href="/kelurahan-batu-meja/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Batu Meja</a>
                    <a class="list-group-item text-t" href="/kelurahan-bumi-asih/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Bumi Asih</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a class="list-group-item text-t" href="/kelurahan-honipopu/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Honipopu</a>
                    <a class="list-group-item text-t" href="/kelurahan-karang -panjang/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Karang Panjang</a>
                    <a class="list-group-item text-t" href="/kelurahan-pandan-kasturi/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Pandan Kasturi</a>
                    <a class="list-group-item text-t" href="/kelurahan-rijali/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Rijali</a>
                    <a class="list-group-item text-t" href="/kelurahan-uritetu/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Uritetu</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a class="list-group-item text-t" href="/kelurahan-waihoka/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Kelurahan Waihoka</a>
                    <a class="list-group-item text-t" href="/negeri-galala/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Negeri Galala</a>
                    <a class="list-group-item text-t" href="/negeri-hative-kecil/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Negeri Hative Kecil</a>
                    <a class="list-group-item text-t" href="/negeri-soya/home"><i class="fa fa-circle-o"></i>&nbsp;&nbsp;Negeri Soya</a>				 
				</div>  
			</div>   -->
		</div>  
      </div> 
    </div>
  </div>
</div>