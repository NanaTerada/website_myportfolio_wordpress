
<?php
/*
single page
*/
get_header(); ?>
               

             
            <main>
                <section id="blog">
                        
                            <h2 class="single-sec-title">BLOG</h2>

                            <div class="single-blog-top">
                                    <h2 class="single-sec-title">BLOG</h2>
                                <div class="single-blog-bg-img-wrapper"><?php
                                    if( has_post_thumbnail() ):
                                        the_post_thumbnail();
                                    else :
                                        // no thumbnails
                                    endif;
                                ?>
                                </div>
                                <div class="single-blog-img-wrapper">
                                <?php
                                    if( has_post_thumbnail() ):
                                        the_post_thumbnail();
                                    else :
                                        // no thumbnails
                                    endif;
                                ?>
                                </div>
                            </div>
                            
                            
                            <div class="section-blog-inner">

                            <?php if(have_posts()): while(have_posts()): the_post(); ?>

                                                <p class="blog-date">2020/00/00</p>
                                                <h3 class="blog-title"><?php the_title(); ?></h3>
                                                <p class="single-blog-txt">
                                                    <?php the_content(); ?>
                                                </p>
                            <?php endwhile; endif; ?>

                                                <div class="blog--prev-next">
                                                        
                                                        <div class="blog-next">
                                                        <h4>←prev</h4>
                                                        <div class="blog-prev-next-wrapper"><img src="images/img-top.jpg"></div>
                                                        <p>次のブログのタイトル</p>
                                                        </div>

                                                        <div class="blog-next">
                                                            <h4>next→</h4>
                                                            <div class="blog-prev-next-wrapper"><img src="images/img-top.jpg"></div>
                                                            <p>次のブログのタイトル</p>
                                                            </div>

                                                </div>
                                                
      
        
                                    <aside class="toppage-sidebar sidebar"> 

                                    <?php get_sidebar(); ?>
        
                                    </aside>
                            
                            <!-- article-aside-wrapper -->
                            
                        </div> 
                        <!-- section-blog-inner -->
                </section>
            </main>

            <?php get_footer(); ?>