<?php
/**
 * Template part for displaying gallery
 *
 * @package WordPress
 * @subpackage Demidov
 * @since 0.1
 * @version 0.1
 */

?>

      <div class="row">
        <div class="container section collection">
          <h2 class="section-header">Коллекции</h2>
          <div class="container">
            <div class="col-md-4">
              <div class="tumbnail kitchen">
                <div class="tumbnail-description">
                  <h3 class="tumbnail-header">Кухни</h3>
                  <p class="tumbnail-text">создайте своё идеальное решение</p>
                  <a href="<?php echo esc_url( home_url( '/kitchen/' ) ); ?>" class="btn btn-lg btn-white center-block">Подробнее</a>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="tumbnail daily">
                <div class="tumbnail-description">
                  <h3 class="tumbnail-header">Дневное пространство</h3>
                  <p class="tumbnail-text">Гостинные, Столовые группы, Кабинеты, Прихожие, Гардеробные, Винотеки, Кинотеатры</p>
                  <a href="<?php echo esc_url( home_url( '/daily/' ) ); ?>" class="btn btn-lg btn-white center-block">Подробнее</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tumbnail sleeproom">

                <div class="tumbnail-description">
                  <h3 class="tumbnail-header">Спальная зона</h3>
                  <p class="tumbnail-text">Лучшее решение для вашего дома</p>
                  <a href="<?php echo esc_url( home_url( '/sleeproom/' ) ); ?>" class="btn btn-lg btn-white center-block">Подробнее</a>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="tumbnail doors">
                <div class="tumbnail-description">
                  <h3 class="tumbnail-header">Двери и арки</h3>
                  <p class="tumbnail-text">Отличный выбор для ценителей качества</p>
                  <a href="<?php echo esc_url( home_url( '/doors/' ) ); ?>" class="btn btn-lg btn-white center-block">Подробнее</a>
                </div>

              </div>
            </div>
            <div class="col-md-4">
              <div class="tumbnail interior">
                
                <div class="tumbnail-description">
                  <h3 class="tumbnail-header">Интерьерные решения</h3>
                  <p class="tumbnail-text">Лестницы, Паркет, Потолки, Панели</p>
                  <a href="<?php echo esc_url( home_url( '/interior/' ) ); ?>" class="btn btn-lg btn-white center-block">Подробнее</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>