<?php
$desa_id = $pemerintah->desa_id;
// var_dump($desa_id);
?>
<div id="preloader"></div>     
       
       <!-- header end -->    <!-- Start Slider Area -->
       <div id="beranda" class="slider-area">
           <div class="bend niceties preview-2">
               <div id="ensign-nivoslider" class="slides">
                     <img src="<?= site_url('assets/images/slider/slider1.jpg')?>" title="#slider-direction-0"/>
                     <img src="<?= site_url('assets/images/slider/slider2.jpg')?>" title="#slider-direction-1"/>
                     <img src="<?= site_url('assets/images/slider/slider3.jpg')?>" title="#slider-direction-2"/>
                     <img src="<?= site_url('assets/images/slider/slider4.jpg')?>" title="#slider-direction-3"/>
                     <img src="<?= site_url('assets/images/slider/slider5.jpg')?>" title="#slider-direction-4"/>
         </div>
         <div id="slider-direction-0" class="slider-direction">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="slider-content">
                   <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                     <h2></h2>
                   </div>
                   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1></h1>
                   </div>
                   <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>  
         <div id="slider-direction-1" class="slider-direction">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="slider-content">
                   <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                     <h2></h2>
                   </div>
                   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1></h1>
                   </div>
                   <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                       </div>
                 </div>
               </div>
             </div>
           </div>
         </div>  
         <div id="slider-direction-2" class="slider-direction">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="slider-content">
                   <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                     <h2></h2>
                   </div>
                   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1></h1>
                   </div>
                   <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                       </div>
                 </div>
               </div>
             </div>
           </div>
         </div>  
         <div id="slider-direction-3" class="slider-direction">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="slider-content">
                   <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                     <h2></h2>
                   </div>
                   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1></h1>
                   </div>
                   <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                       </div>
                 </div>
               </div>
             </div>
           </div>
         </div>  
         <div id="slider-direction-4" class="slider-direction">
           <div class="container">
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="slider-content">
                   <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                     <h2></h2>
                   </div>
                   <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                     <h1></h1>
                   </div>
                   <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                       </div>
                 </div>
               </div>
             </div>
           </div>
         </div>  
       </div>
       </div>    
       <!-- Start Profil area -->
       <?php $this->load->view('_csite/profile') ?>
       <!-- End Profil area -->    
       
       <!-- Start Informasi area -->
       <?php $this->load->view('_csite/informasi') ?>
       <!-- End Informasi area -->
   
       <!-- Start Desa area -->
       <?php $this->load->view('_csite/desa') ?>
       <!-- End Desa area -->
   
       <!-- Start Desa area -->
       <?php $this->load->view('_csite/potensi_infra') ?>
       <!-- End Desa area -->
   
       
       
       <!-- End Service area -->
   
       
   
       <!-- Start Kegiatan area -->   
       <div id="kegiatan" class="blog-area">
           <div class="blog-inner area-padding">
               <div class="blog-overly"></div>
               <div class="container ">
                   <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="section-headline text-center">
                               <h2>Kegiatan</h2>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                   <?php 
                      $this->db->select('posts.*, desa.desa_id, desa.nama as nama_desa, desa.slug as slug_ds');
                      $this->db->order_by('posts.id', 'DESC');
                      $this->db->join('categories', 'categories.id = posts.category_id');
                      $this->db->join('desa', 'desa.desa_id = posts.desa_id');
                      $this->db->where('posts.desa_id', $desa_id);
                      $artikel = $this->db->get('posts')->result();
                      // var_dump($artikel);
                       foreach($artikel as $post) :
                           $create_at = date("d-M-Y", strtotime($post->created_at));
                   ?>
                         <div class="col-md-4 col-sm-4 col-xs-12">
                               <div class="single-blog">
                                   <div class="single-blog-img">
                                       <a href="<?= site_url('/ciste/view/'.$post->slug) ?>">
                                           <img src="<?= site_url('assets/images/articles/'.$post->post_image); ?>" alt="">
                                       </a>
                                   </div>
                                   <div class="blog-meta">
                                       <span class="comments-type">
                                           <i class="fa fa-comment-o"></i>
                                           <a href="#">0 komentar</a>
                                       </span>
                                       <span class="date-type"><i class="fa fa-calendar"></i><?= $create_at ?></span>
                                   </div>
                                   <div class="blog-text">
                                       <h4><a href="<?= site_url('/csite/view/'.$post->slug) ?>"><?= $post->title?></a></h4>
                                       <p style="text-align:justify"><?= word_limiter($post->body, 35) ?><a href="#">...baca Selengkapnya</a></p>
                                   </div>                                
                               </div>
                           </div>          
                   <?php endforeach; ?>     
                     <div class="single-blog">
                           <center><span><a href="<?php echo base_url();?>pemerintahan/<?= $slug ?>/kegiatan" class="ready-btn">Kegiatan Selengkapnya</a></span></center>
                       </div>
                   </div>
               </div>                <!-- End Right Blog-->
           </div>
       </div>  
       
      
   
       <!-- awesome-portfolio end -->        
       <div id="kontak" class="contact-area">
           <div class="contact-inner area-padding">
               <div class="contact-overly"></div>
               <div class="container ">
                   <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12">
                           <div class="section-headline text-center">
                               <h2>Kontak</h2>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <!-- Start contact icon column -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="contact-icon text-center">
                               <div class="single-icon">
                                   <i class="fa fa-mobile"></i>
                                   <p>
                                       Telepon : <?= $pemerintah->no_telp_1 ?> / <?= $pemerintah->no_telp_2 ?><br>
                                       <span>Senin s/d Jumat 08.00 - 15.00 WITA.</span>
                                   </p>
                               </div>
                           </div>
                       </div>
                       <!-- Start contact icon column -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="contact-icon text-center">
                               <div class="single-icon">
                                   <i class="fa fa-envelope-o"></i>
                                   <p>
                                       Email : <a href="mailto:<?= $pemerintah->email ?>" target="_top"><?= $pemerintah->email ?></a><br>
                                   </p>
                               </div>
                           </div>
                       </div>
                        <!-- Start contact icon column -->
                       <div class="col-md-4 col-sm-4 col-xs-12">
                           <div class="contact-icon text-center">
                               <div class="single-icon">
                                   <i class="fa fa-map-marker"></i>
                                   <p>
                                       Lokasi Kantor: <br>
                                       <span><?= $pemerintah->alamat ?></span>
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <!-- Start Google Map -->
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div id="googleMap" style="width:100%;height:400px;"></div>
                           <script>
                               function myMap() 
                               {
                                   var mapProp= 
                                   {
                                       center:new google.maps.LatLng(-3.694986,128.1869601),
                                       zoom:15,
                                   };
                                   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                               }
                           </script>                
                           <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_6U38bgntYFEIIF9umRIhHRh4Rd1s4h4&callback=myMap"></script>                               
                       </div>
                       <!-- End Google Map -->
                       <!-- Start  contact -->
                       <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="form contact-form">
                               <div id="sendmessage">Your message has been sent. Thank you!</div>
                               <div id="errormessage"></div>
                               <form action="" method="post" role="form" class="contactForm">
                                   <div class="form-group">
                                       <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                       <div class="validation"></div>
                                   </div>
                                   <div class="form-group">
                                       <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                                       <div class="validation"></div>
                                   </div>
                                   <div class="form-group">
                                       <input type="text" class="form-control" name="subject" id="subject" placeholder="Pesan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                       <div class="validation"></div>
                                   </div>
                                   <div class="form-group">
                                       <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ketik yang ingin disampaikan disini" placeholder="Ketik pesan disini"></textarea>
                                       <div class="validation"></div>
                                   </div>
                                   <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                               </form>
                           </div>
                       </div>
                       <!-- End Left contact -->
                   </div>
               </div>
           </div>
       </div>
       