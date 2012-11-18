<?php
/*
  $Id: create_account.php,v 1.11 2003/07/05 13:58:31 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Регистрация');

define('HEADING_TITLE', 'Мои данные');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>ВНИМАНИЕ:</b></font></small> Если Вы уже зарегистрированы на нашем сайте, введите, пожалуйста, Ваш логин и пароль&nbsp;<a href="%s"><u>здесь</u></a>.');

define('EMAIL_SUBJECT', 'Добро пожаловать в ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Уважаемый г-н %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Уважаемая г-жа %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Уважаемый г-н %s' . "\n\n");
define('EMAIL_WELCOME', 'Мы рады пригласить Вас в интернет-магазин <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Теперь Вы можете воспользоваться <b>дополнительными услугами</b>, которые мы рады Вам предложить. Эти услуги включают:' . "\n\n" . '<ul>' . '<li><b>Постоянная корзина</b> - Любые товары, добавленные в корзину остаются там до тех пор, пока Вы не решите их приобрести или пока не удалите их из корзины.</li>' . "\n" . '<li><b>Адресная книга</b> - Мы можем доставить приобретенные Вами товары по указанному адресу, а не только на Ваш домашний адрес! Это - отличное предложение, чтобы посылать подарки ко дню рождения или на праздники, Вашим родственникам и друзьям, даже если они живут в другом городе.</li>' . "\n" . '<li><b>История Заказов</b> - Здесь Вы можете посмотреть историю заказов, которые Вы сделали в нашем магазине.</li>' . "\n" . '<li><b>Обзоры продуктов</b> - Теперь наши покупатели могут высказать свое мнение о товарах, приобретенных в нашем магазине. Ваше мнение будет доступно широкой аудитории покупателей, которые наверняка нуждаются в потребительской оценке различных товаров.</li>' . '</ul>' . "\n");
define('EMAIL_CONTACT', 'Если у Вас возникли какие-либо вопросы, пишите: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Внимание:</b> Этот email адрес был предоставлен нам одним из наших клиентов. Если Вы еще не зарегистрировались и не являетесь покупателем нашего магазина, сообщите об этом на ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

