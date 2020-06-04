<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tile
 */

?>
<?php global $redux_demo; ?>

	</div><!-- #content -->

      <footer class="footer">
        <div class="container">
          <div class="footer-links">
            <div class="minimap">

              <a href="#Main">Главная</a>
              <a href="#About_Us">О компании</a>
              <a href="#Our_Production">Наша продукция</a>
              <a href="#Dilivery">Доставка</a>
<!--               <a href="#Galary">Примеры работ</a> -->
            </div> 
            <div class="contacts">
              <div class="phone">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/Vector.png" alt="">
                <a href="tel:<?php echo $redux_demo ['phone_number']; ?>"><?php echo $redux_demo ['phone_number']; ?></a>
              </div>
              <div class="phone">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/Vector.png" alt="">
                <a href="tel:<?php echo $redux_demo ['phone_number_two']; ?>"><?php echo $redux_demo ['phone_number_two']; ?></a>
              </div>
              <div class="phone">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/Vector.png" alt="">
                <a href="tel:<?php echo $redux_demo ['phone_number_three']; ?>"><?php echo $redux_demo ['phone_number_three']; ?></a>
              </div>
              <div class="whatsapp">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/whatsapp 1.png" alt="">
               <a href="https://wa.me/9679229538/?text=Добрый%20день%20!%20Нужна%20помощь%20при%20выборе%20плитки%20"><?php echo $redux_demo ['phone_number']; ?></a>
              </div>  
              <div class="g-mail">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/G-mail.png" alt="">
                <a href="mailto:tileZwork@gmail.com">tileZwork@gmail.com</a>
              </div>
              <div class="calendar">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/calendar 1.jpg" alt="">
                <p>Пн-Пт: 9:00-18:00 <br> Вс: 9:00-17:00 <br> Вс: 9:00-14:00</p>
              </div>
            </div>
            <div class="adress"><p>Наш адрес: Похвистневский шоссе, 20а</p></div>	

             <!--Google map-->
            <div id="map-container-google-2" class="z-depth-1-half map-container">
          	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1780.8927590512546!2d52.384860315285515!3d53.62365798003808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDM3JzI1LjIiTiA1MsKwMjMnMTMuNCJF!5e1!3m2!1sru!2sru!4v1585466156996!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    <!--Google Maps-->
          </div>	
        

          
        </div>
      </footer>

<?php wp_footer(); ?>

</body>
</html>
