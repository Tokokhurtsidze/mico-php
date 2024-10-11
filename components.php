<!--------------------- TESTIMONIAL ----------------->

<?php function testimonial_section ($testimonials) { ?>

<!-- client section -->
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2><span>Testimonial</span></h2>
        </div>
    </div>

    <div class="container px-0">
        <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="box">
                            <div class="client_info">
                                <div class="client_name">
                                    <h5><?php echo $testimonial['name']; ?></h5>
                                    <h6><?php echo $testimonial['title']; ?></h6>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p><?php echo $testimonial['quote']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end client section --> 
<?php

} ?>

<!------------------------ TREATMENT ---------------------->

<?php

function treatment_section($treatments) { ?>

 <!-- Dynamic treatment section -->
 <section class="treatment_section layout_padding">
      <div class="side_img">
          <?php img('images/treatment-side-img.jpg'); ?>
      </div>
      <div class="container">
          <div class="heading_container heading_center">
              <?php h2('Hospital <span>Treatment</span>'); ?>
          </div>
          <div class="row">
              <?php foreach ($treatments as $treatment) : ?>
                  <div class="col-md-6 col-lg-3">
                      <div class="box">
                          <div class="img-box">
                              <?php img($treatment['image']); ?>
                          </div>
                          <div class="detail-box">
                              <?php h4($treatment['title']); ?>
                              <?php p($treatment['description']); ?>
                              <?php a('Read More', $treatment['link']); ?>
                          </div>
                      </div>
                  </div>
              <?php endforeach; ?>
          </div>
      </div>
  </section>
  <!-- end treatment section --> 
<?php

}?>
   

  <!--------------------------- INFO ------------------------->

<?php 

function info_section($contact_info, $social_links, $useful_links, $posts, $news) {
?>
  <!-- Dynamic info section -->
  <section class="info_section">
    <div class="container">
        <div class="info_top">
            <div class="info_logo">
                <a href="#">
                    <?php img('images/logo.png'); ?>
                </a>
            </div>
            <div class="info_form">
                <form action="">
                    <input type="email" placeholder="Your email">
                    <button>Subscribe</button>
                </form>
            </div>
        </div>

        <div class="info_bottom layout_padding2">
            <div class="row info_main_row">
                <div class="col-md-6 col-lg-3">
                    <h5>Address</h5>
                    <div class="info_contact">
                        <?php foreach ($contact_info as $contact) : ?>
                            <a href="<?php echo $contact['link']; ?>">
                                <i class="fa <?php echo $contact['icon']; ?>" aria-hidden="true"></i>
                                <span><?php echo $contact['text']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="social_box">
                        <?php foreach ($social_links as $social) : ?>
                            <a href="<?php echo $social['link']; ?>">
                                <i class="fa <?php echo $social['icon']; ?>" aria-hidden="true"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="info_links">
                        <h5>Useful link</h5>
                        <div class="info_links_menu">
                            <?php foreach ($useful_links as $link) : ?>
                                <?php a($link['text'], $link['link'], $link['class'] ?? ''); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                        <h5>LATEST POSTS</h5>
                        <?php foreach ($posts as $post) : ?>
                            <div class="post_box">
                                <div class="img-box">
                                    <?php img($post['image']); ?>
                                </div>
                                <?php p($post['title']); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="info_post">
                        <h5>News</h5>
                        <?php foreach ($news as $news_item) : ?>
                            <div class="post_box">
                                <div class="img-box">
                                    <?php img($news_item['image']); ?>
                                </div>
                                <?php p($news_item['title']); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end info section -->

<?php
} ?>







