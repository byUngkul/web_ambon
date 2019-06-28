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
                            <!-- recent start -->
                            <div class="left-blog">
                            <?php if(count($recent)>0) { ?> 
                                     <h4> Sebelumnya</h4>
                                    <div class="recent-post">
                                        <!-- start single post -->
                                        <?php foreach($recent as $key) {?>  
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="<?= site_url('/kegiatan/view/'.$key->slug) ?>">
                                                        <img src="<?= site_url('assets/images/articles/'.$key->post_image) ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="<?= site_url('/kegiatan/view/'.$key->slug) ?>"><?=$key->title?></a></p>
                                                </div>
                                            </div>
                                        <?php } ?>                                  
                                </div>
                                <?php } ?>                          
                            </div>
                            <!-- recent end -->
                        </div>
                    </div>
                </div>
                <!-- End left sidebar -->
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- single-blog start -->
                        <article class="blog-post-wrapper">
                            <div class="post-thumbnail">
                                <center><img src="<?= site_url('assets/images/articles/'.$post['post_image']); ?>" alt=""></center>
                            </div>
                            <div class="post-information">
                                <h2><?=$post['title']?></h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-user"></i><?= $post['name'] ?></span>
                                    <?php $date_added = date('d-M-Y',strtotime($post['created_at']))?>
                                    <span><i class="fa fa-clock-o"></i><?= $date_added ?></span>                                    
                                    <span><i class="fa fa-comments-o"></i>0 komentar</span>
                                    <span><i class="fa fa-map-marker"></i><?= $post['nama']; ?></span>
                                </div>
                                    <div class="entry-content">
                                        <?=$post['body']?>
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>
                            <div class="single-post-comments">
                                <div class="comments-area">
                                    <div class="comments-heading">
                                        <h3>0 komentar</h3>
                                    </div>
                                    <div class="comments-list">
                                        <ul>
                                            <li class="threaded-comments">
                                                <?php if($comments): ?>
                                                    <?php foreach($comments as $comment): ?>
                                                        <div class="comments-details">
                                                            <div class="comments-list-img">
                                                                <img src="img/blog/b02.jpg" alt="post-author">
                                                            </div>
                                                            <div class="comments-content-wrap">
                                                                    <span>
                                                                        <b><a href="#"><?= $comment['name'] ?></a></b>
                                                                            Post author
                                                                            <span class="post-time"><?= $comment['created_at'] ?></span>                                                        
                                                                    </span>
                                                                    <p><?= $comment['body'] ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <p>No Comments To Display</p>
                                                <?php endif; ?>
                                            </li>																					                                        
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Komentar </h3>
                                    <span class="email-notes">Email anda tidak akan ditampilkan. Isian wajib terisi ditandai *</span>
                                            <?php echo validation_errors(); ?>
                                            <form method="post" action="<?= site_url('komentar/create/').$post['id']; ?>">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Nama *</p>
                                                <input type="text" name="name">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Email *</p>
                                                <input type="email" name="email">
                                            </div>
                                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <p>Website</p>
                                                <input type="text">
                                            </div> -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                <p>Komentar</p>
                                                    <textarea id="message-box" name="body" cols="30" rows="10"></textarea>
                                                    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
                                                <input type="submit" value="Kirim Komentar">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                          <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    