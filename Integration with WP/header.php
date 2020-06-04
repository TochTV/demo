<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">


	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>

<body <?php body_class(); ?>>

 <header class="header">
            <div id="nav-container" class="nav-container">

                
                
                <!-- НАВИГАЦИЯ -->


                    <!-- Навигация для десктопа -->

                    <ul class="navigation" id='navigation'>
                     <div class="wrapper-link">
                        <li class="nav__item"><a href="#Main" class="nav__link">Главная</a></li>
                        <li class="nav__item"><a href="#About_Us" class="nav__link">О компании</a></li>
                        <li class="nav__item"><a href="#Our_Production" class="nav__link">Наша продукция</a></li>
                        <li class="nav__item"><a href="#Dilivery" class="nav__link">Доставка</a></li>
<!--                         <li class="nav__item"><a href="#Galary">Примеры работ</a></li> -->
                         <div class="nav-phone">
                          <a href="tel:<?php echo $redux_demo ['phone_number']; ?>">
                             <img class="nav-phone-img" src="<?php echo get_template_directory_uri()?>/assets/img/Vector.png" alt=""><?php echo $redux_demo ['phone_number']; ?>
                          </a>
                          <br>
                            <a href="tel:<?php echo $redux_demo ['phone_number_two']; ?>" class="second-number">
                              <img class="nav-phone-img" src="<?php echo get_template_directory_uri()?>/assets/img/Vector.png" alt=""><?php echo $redux_demo ['phone_number_two']; ?><br><span>позвоните нам</span>
                          </a>
                        </div>
                      </div> 
                    </ul>


                 <!----------------------- Для интерактивного меню WP --------------------------->  
<!--       <?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id' 	=>'primery-menu',
			// 	'menu_class'	=>'navigation',
			// 	'container_id'        => 'wrapper-nav-menu',
			// 	'container_class' 	=>'header',

			;
			?> -->


                    <!-- Кнопка для мобильной навигации -->


                    <div id="menu-togle" class="menu-icon">
                        <div class="menu-icon-line"></div>
                    </div>
  

                    <!-- Мобильная навигация -->


                    <div id="mobile-nav" class="mobile-nav">
                        <div class="mobile-nav__title">Навигация</div>
                        <ul class="mobile-nav__list">
                          <li  id="mobile-nav-main__item" class="mobile-nav-main__item"><a href="#Main" class="mobile-nav__link">Главная</a></li>
                          <li  id="mobile-nav-about__item" class="mobile-nav-about__item"><a href="#About_Us" class="mobile-nav__link">О компании</a></li>
                          <li  id="mobile-nav-product__item" class="mobile-nav-product__item"><a href="#Our_Production" class="mobile-nav__link">Наша продукция</a></li>
                          <li id="mobile-nav-dilivery__item" class="mobile-nav-dilivery__item"><a href="#Dilivery" class="mobile-nav__link">Доставка</a></li>
<!--                           <li  id="mobile-nav-galary__item" class="mobile-nav-galary__item"><a href="#Galary" class="mobile-nav__link">Примеры работ</a></li> -->
                      </ul> 



                </div>
                <!-- // НАВИГАЦИЯ -->

            </div>
    </header>
    <section>
      <a name="Main"></a>
      <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#carouselExampleIndicators" data-sliede-to="0">
            </li>
            <li data-target="#carouselExampleIndicators" data-sliede-to="1">  
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption d-md-block">  
                <h1>КАЧЕСТВЕННАЯ ТРАТУАРНАЯ ПЛИТКА</h1>
                <p>собственного изготовления и по доступным ценам</p>
                <a href="#form" class="btn magnific" id="cons-btn">консультация</a>
                <!----ФОРМА ДЛЯ ОТПРАВКИ -->
                <div class="hidden">
                	<form id="form" class="form" name="form">
        						 <div class="first-row"><p>ОСТАВЬТЕ ЗАЯВКУ НА КОНСУЛЬТАЦИЮ</p></div>
        						 <input type="text" name="name" placeholder="Ваше имя" required><br>
        						 <input type="tel" name="phone" placeholder="+7 (900) 123-45-67 "required ><br>
        						 <button class="btn">Отправить</button> 		
                	</form>
                </div>
              </div>
              <img src="<?php echo get_template_directory_uri()?> /assets/img/desktop-active.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <div class="carousel-caption d-md-block">  
                <h1><span>АКЦИЯ В МАРТЕ</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore culpa, consequatur ab reprehenderit reiciendis laudantium atque. Provident blanditiis voluptatem, corporis! Esse laboriosam voluptatem neque. Provident rem illum, molestias voluptatibus facilis.</p>
                <a href="#form" class="btn magnific">узнать подробнее</a>
              </div>
              <img src="<?php echo get_template_directory_uri()?> /assets/img/desktop-action.jpg" alt="" class="d-block w-100">
            </div>
          </div>
          <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
            </span>
            <span class="sr-only">Previouse</span>
          </a>
          <a href="#carouselExampleIndicators" class="carousel-control-next  " role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
                  <!----------------Спасибо за заявку ---------------->
                <div class="overlay js-overlay-thank-you">
                  <div class="popup js-thank-you">
                      <p><span>Спасибо,<br> ваша заявка принята!<br> </span> Наш менеджер свяжется с Вами в ближайшее время</p>
                  </div>
                </div>
             <!----------/Спасибо за заявку ------------------------------->
    </section>



















