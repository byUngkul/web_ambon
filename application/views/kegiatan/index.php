<div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-head-blog">
                        <div class="single-blog-page">
                        <!-- search option start -->
                            <form action="#">
                                <div class="search-option">
                                    <input type="text" placeholder="Cari...">
                                    <button class="button" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                            <!-- search option end -->
                        </div>
                        <div class="single-blog-page">
                            <div class="left-blog">
                                <h4><a href="#">Desa/Negeri/Kelurahan</a></h4>
                                <ul>
                                <?php foreach($desas as $desa) : ?>
                                    <li>                                    
                                      <a href="#"><?= $desa->nama ?></a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->     
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2><?= $title ?></h2>
                            </div>
                        </div>
                    </div>                            
                        <div class="row">
                          <?php 
                            foreach($posts as $p ) :
                              $create_at = date("d-M-Y", strtotime($p['created_at']) );                              
                          ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="<?php echo site_url('/kegiatan/view/'.$p['slug']); ?>">
                                            <img src="<?= site_url('assets/images/articles/'.$p['post_image']); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="author-meta"><i class="fa fa-user"></i><?= $p['name']?></span>                                
                                        <span class="comments-type"><i class="fa fa-comment-o"></i> 0 comments</span>
                                        <span class="date-type"><i class="fa fa-calendar"></i><?= $create_at ?></span>
                                    </div>
                                    <div class="blog-text">
                                        <h4><a href="<?php echo site_url('/kegiatan/view/'.$p['slug']); ?>"><?= $p['title'];?></a></h4>
                                        <p style="text-align:justify"><a href="#"></a> <?php echo $p['body']; ?> </p>                  
                                    </div>
                                    <span>
                                        <a href="<?php echo site_url('/kegiatan/view/'.$p['slug']); ?>" class="ready-btn">Baca Selengkapnya</a>
                                    </span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <div class="pagination-links">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
              </div>
            </div>
        </div>
    </div>    
