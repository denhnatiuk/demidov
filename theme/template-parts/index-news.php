<?php
/**
 * Template part to display latest news
 *
 * @package WordPress
 * @subpackage Demidov
 * @since 0.1
 * @version 0.1
 */

?>
      <div class="row">
          
        <?php if ( is_home() || ( is_front_page() && is_home() ) ) : ?>  
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2> There are posts but template parts aren't found </h2>         
                    <?php get_template_part( 'template-parts/post/content', get_post_format() ); ?>                 
                    <?php get_template_part( 'template-parts/navigation/navigation', 'pagination' ); ?>  
        
        
            <?php endwhile; ?>
        
            <?php else : ?>
                <h2> There are no posts.</h2> 
            <?php endif; ?> 
        <?php else : ?>
            <h2> THIS IS not home or front </h2>   
        <?php endif; ?> 
          
          
        <div class="container-fluid news">
          <div class="row">
            <h2 class="section-header ">Наши новости</h2>
            <div class="col-md-3">
              <a href="" class="news-item white">
                <div class="news-item-label">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="news-date">11.08.2018</span>
                </div>
                <div class="news-item-description">
                  <h3 class="news-item-header">Завершены реконструкционные работы для театра оперы и балета</h3>
                  <p class="news-item-text">создайте своё идеальное решение</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="news-item white">
                <div class="news-item-label">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="news-date">11.08.2018</span>
                </div>
                <div class="news-item-description">
                  <h3 class="news-item-header">Завершены реконструкционные работы для театра оперы и балета</h3>
                  <p class="news-item-text">создайте своё идеальное решение</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="news-item white">
                <div class="news-item-label">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="news-date">11.08.2018</span>
                </div>
                <div class="news-item-description">
                  <h3 class="news-item-header">Завершены реконструкционные работы для театра оперы и балета</h3>
                  <p class="news-item-text">создайте своё идеальное решение</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="news-item white">
                <div class="news-item-label">
                  <span class="glyphicon glyphicon-calendar"></span>
                  <span class="news-date">11.08.2018</span>
                </div>
                <div class="news-item-description">
                  <h3 class="news-item-header">Завершены реконструкционные работы для театра оперы и балета</h3>
                  <p class="news-item-text">создайте своё идеальное решение</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>