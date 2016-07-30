<?php get_header(); ?>

<?php while (have_posts()): $p = tev_post_factory(); ?>

    <div class="hero hero--single" style="background-image:url(<?php echo $p->getFeaturedImageUrl('large');?>);">
        <div class="hero__header container">
            <h1 class="hero__heading"><?php echo $p->getTitle(); ?></h1>
        </div>
    </div>

    <?php $images = $p->field('photos_gallery')->val(); ?>

<?php endwhile; ?>

<section class="full-width-section single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 50px;">

                <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                <div class="masonry-grid">
                        <?php foreach ($images as $image) : ?>
                            <figure class="grid-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="<?php echo $image['url']; ?>" itemprop="contentUrl" data-size="<?php echo $image['sizes']['large-width'].'x'.$image['sizes']['large-height']; ?>">
                                    <img src="<?php echo $image['url']; ?>" itemprop="thumbnail" alt="Image description" />
                                </a>
                                <figcaption itemprop="caption description">Image caption  1</figcaption>
                            </figure>

                         <?php endforeach; ?>
                    </div>

                </div>


                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe.
                         It's a separate element, as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>

                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                <button class="pswp__button pswp__button--share" title="Share"></button>

                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>