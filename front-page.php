<?php
	// header.phpを読み込む
	get_header();
?>

<section id="top">



                    <div class="section-top-inner">
                        <h1 class="title">WIP<span>__work in progress</span></h1>

                        <div class="img-wapper"><img src="<?php echo get_template_directory_uri(); ?>/images/img-top.jpg"></div>
                        <!-- <div>キャッチコピーてきな一言</div> -->
                    </div>
                </section>
                


              
            <main>


                <section id="work">
                        <div class="section-work-inner">
                          <h2 class="sec-title">WORK</h2>
                          <h3 class="site-title"><a href=""></a>サイトタイトル</a></h3>
                        <div class="work-img-wrapper"><a href="#"><img src="images/img-top.jpg"></a></div>
                        
                        <h3 class="site-title">サイトタイトル</h3>
                        <div class="work-img-wrapper"><img src="images/img-top.jpg"></div>
                        
                        </div>
                   

                </section>
                <section id="blog">
                        <div class="section-blog-inner">
                            <h2 class="sec-title">BLOG</h2>
                            
                            <div class="article-aside-wrapper">
                                    <div class="blog-2col-wrapper">
                                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                            <article class="blog-card">
                                                <a href="<?php the_permalink(); ?>">
                                                <div class="blog-img-wrapper">
                                                <?php
                                                    if( has_post_thumbnail() ):
                                                        the_post_thumbnail();
                                                    else :
                                                        // no thumbnails
                                                    endif;
                                                ?>
                    
                                                
                                                </div>
                                                <p class="blog-date">2020/00/00</p>
                                                <h3 class="blog-title"><?php the_title(); ?></h3>
                                                <p class="blog-txt"><?php the_excerpt(); ?></p>
                                                </a>
                                            </article>
                                            <?php endwhile; endif; ?>



        
                                            <!-- <article class="blog-card">
                                                    <a href="#">
                                                    <div class="blog-img-wrapper"><img src=""></div>
                                                    <p class="blog-date">2020/00/00</p>
                                                    <h3 class="blog-title">ブログタイトル</h3>
                                                    <p class="blog-txt">ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭</p>
                                                    </a>
                                            </article>
        
                                            <article class="blog-card">
                                                        <a href="#">
                                                        <div class="blog-img-wrapper"><img src="" ></div>
                                                        <p class="blog-date">2020/00/00</p>
                                                        <h3 class="blog-title">ブログタイトル</h3>
                                                        <p class="blog-txt">ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭</p>
                                                        </a>
                                            </article>
        
                                            <article class="blog-card">
                                                    <a href="#">
                                                    <div class="blog-img-wrapper"><img src="" ></div>
                                                    <p class="blog-date">2020/00/00</p>
                                                    <h3 class="blog-title">ブログタイトル</h3>
                                                    <p class="blog-txt">ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭ブログの冒頭</p>
                                                    </a>
                                            </article> -->
        
                                    </div>
        
                                    <?php
	                                // sidebar.phpを読み込む
	                                get_sidebar();
                                    ?>

                            </div>
                            <!-- article-aside-wrapper -->
                            
                        </div> 
                        <!-- section-blog-inner -->
                </section>
            </main>

            <?php
	// footer.phpを読み込む
	get_footer();
?>
