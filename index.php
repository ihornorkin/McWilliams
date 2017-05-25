<?php get_header(); ?>
    <main class="l-wrapper">
      <!--BEGIN posts wrapper-->
      <section class="l-posts-wrapper">
      <?php 
      for( $i = 1; $i < 5; $i++ ){
        $main_page_id = get_theme_mod('total_featured_page'.$i); 
        $section_desc = get_theme_mod('section_desc'.$i); 
        $main_img = get_theme_mod('main_img'.$i);
      
      if($main_page_id){
        $args = array( 
            'page_id' => absint($main_page_id) 
        );
        $query = new WP_Query($args);
        if( $query->have_posts() ): while($query->have_posts()) : $query->the_post();
        ?>
        <article class="m-blog-article">
          <figure class="m-blog-article__figure">
          </figure><img src="<?php echo $main_img; ?>" alt="alt" class="m-blog-article__image m-blog-article__image--right" title=""/>
          <div class="m-heading m-heading--linear">
            <h1><?php the_title(); ?></h1>
          </div>
          <p class="lg"><?php echo esc_html($section_desc); ?></p>
          <a href="<?php echo esc_url(get_permalink()); ?>" class="m-btn">LEARN MORE.</a>
        </article>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        }
      }
      ?>
      </section>
      <!--END posts wrapper-->
      <!--BEGIN contact form-->
      <section class="l-contact-form">
        <div class="l-contact-form__description">
          <h2>BECOME PART OF THE McWILLIAM’S COMMUNITY.</h2>
          <p>Join our mailing list for our latest news, offers and events.</p>
        </div>
        <div class="l-contact-form__form">
          <form action="" class="m-contact-form">
            <div class="m-input-group"><input type="text" placeholder="Name" class="m-contact-form__input"/>
            </div>
            <div class="m-input-group"><input type="text" placeholder="e-mail" class="m-contact-form__input"/>
            </div>
            <button class="m-btn">SIGN UP</button>
          </form>
        </div>
      </section>
      <!--END contact form-->
    </main>
<?php get_footer(); ?>