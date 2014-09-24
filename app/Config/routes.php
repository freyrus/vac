<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
//Router::connect('/', array('controller' => 'Contacts', 'action' => 'home'));
Router::connect('/', array('controller' => 'Users', 'action' => 'home'));
Router::connect('/admin', array('controller' => 'users', 'action' => 'login', 'admin' => true));
// Router::connect('/contact-us', array('controller' => 'pages', 'action' => 'view', 'slug' => "contact-us"));
Router::connect('/page/:slug', array('controller' => 'pages', 'action' => 'view'), array('pass' => array('slug')));

Router::connect('/events/confirm_reservation', array('controller' => 'events', 'action' => 'confirm_reservation'));
Router::connect('/events/process_order', array('controller' => 'events', 'action' => 'process_order'));
Router::connect('/events/payment', array('controller' => 'events', 'action' => 'payment'));
Router::connect('/events/paypal', array('controller' => 'events', 'action' => 'paypal'));
Router::connect('/events/paypalAccount', array('controller' => 'events', 'action' => 'paypal_account'));
Router::connect('/events/expressCheckout', array('controller' => 'events', 'action' => 'expressCheckout'));


// event iframe
Router::connect('/events/eventsiframe', array('controller' => 'events', 'action' => 'eventsiframe'));
Router::connect('/events/single_eventiframe', array('controller' => 'events', 'action' => 'single_eventiframe'));
Router::connect('/events/event_categoryiframe', array('controller' => 'events', 'action' => 'event_categoryiframe'));
Router::connect('/events/event_itineraryiframe', array('controller' => 'events', 'action' => 'event_itineraryiframe'));
Router::connect('/events/book_nowiframe', array('controller' => 'events', 'action' => 'book_nowiframe'));
Router::connect('/events/payment_formiframe', array('controller' => 'events', 'action' => 'payment_formiframe'));
Router::connect('/events/confirm_reservationiframe', array('controller' => 'events', 'action' => 'confirm_reservationiframe'));
Router::connect('/events/paypaliframe', array('controller' => 'events', 'action' => 'paypaliframe'));
Router::connect('/events/cancelpaymentiframe', array('controller' => 'events', 'action' => 'cancelpaymentiframe'));
Router::connect('/events/expresscheckoutiframe', array('controller' => 'events', 'action' => 'expresscheckoutiframe'));
Router::connect('/events/change_currency_iframe', array('controller' => 'events', 'action' => 'change_currency_iframe'));
Router::connect('/events/payDoDirectiframe', array('controller' => 'events', 'action' => 'payDoDirectiframe'));
Router::connect('/events/authenticationiframe', array('controller' => 'events', 'action' => 'authenticationiframe'));
Router::connect('/events/category', array('controller' => 'events', 'action' => 'category'));
Router::connect('/events/all_eventcategory', array('controller' => 'events', 'action' => 'all_eventcategory'));
Router::connect('/events/category_events', array('controller' => 'events', 'action' => 'category_events'));
Router::connect('/events/getsingleeventdetail', array('controller' => 'events', 'action' => 'getsingleeventdetail'));
Router::connect('/events/search_results_iframe', array('controller' => 'events', 'action' => 'search_results_iframe'));

//Other Section
Router::connect('/deals', array('controller' => 'events', 'action' => 'deals'));
//Router::connect('/gallery', array('controller' => 'events', 'action' => 'gallery'));
Router::connect('/community', array('controller' => 'events', 'action' => 'community'));
Router::connect('/oppertunity', array('controller' => 'events', 'action' => 'oppertunity'));
Router::connect('/contact', array('controller' => 'contact', 'action' => 'index'));
Router::connect('/link', array('controller' => 'events', 'action' => 'link'));
Router::connect('/blog', array('controller' => 'events', 'action' => 'blog'));
Router::connect('/specials', array('controller' => 'events', 'action' => 'specials'));

Router::connect('/demoGallery1', array('controller' => 'Contacts', 'action' => 'demoGallery1'));
Router::connect('/demoGallery2', array('controller' => 'Contacts', 'action' => 'demoGallery2'));


//Cruises iframe
//Router::connect('/cruises/reseller_gallery', array('controller' => 'cruises', 'action' => 'reseller_gallery'));
Router::connect('/cruises/thanks_frame/:id', array('controller' => 'cruises', 'action' => 'thanks_frame'), array('pass' => array('id')));
Router::connect('/cruises/view_cruises/:category/:slug', array('controller' => 'cruises', 'action' => 'view_cruises'), array('pass' => array('category', 'slug')));
Router::connect('/cruises/reseller_index', array('controller' => 'cruises', 'action' => 'reseller_index'));
Router::connect('/cruises/:category', array('controller' => 'cruises', 'action' => 'index'), array('pass' => array('category')));
Router::connect('/cruises/country/:country', array('controller' => 'cruises', 'action' => 'country'), array('pass' => array('country')));
Router::connect('/cruises/:category/:slug', array('controller' => 'cruises', 'action' => 'view'), array('pass' => array('category', 'slug')));
Router::connect('/cruises/videos/:slug', array('controller' => 'cruises', 'action' => 'view_video'), array('pass' => array('slug')));



Router::connect('/events/search_results', array('controller' => 'events', 'action' => 'search_results'));
//Router::connect('/events/:slug', array('controller' => 'events', 'action' => 'index'), array('pass' => array('slug')));

//Router::connect('/signature-events/:slug', array('controller' => 'events', 'action' => 'view'), array('pass' => array('slug')));
Router::connect('/events/:slug', array('controller' => 'events', 'action' => 'all_events'), array('pass' => array('slug')));

Router::connect('/other-events/:slug', array('controller' => 'events', 'action' => 'all_events'), array('pass' => array('slug')));
Router::connect('/past-events/:slug', array('controller' => 'events', 'action' => 'all_events'), array('pass' => array('slug')));
//Router::connect('/events-for-everyone/:slug', array('controller' => 'events', 'action' => 'details'), array('pass' => array('slug')));
Router::connect('/events-details/:slug', array('controller' => 'events', 'action' => 'details'), array('pass' => array('slug')));

Router::connect('/other-events/:slug', array('controller' => 'events', 'action' => 'view_other'), array('pass' => array('slug')));
Router::connect('/events/rooms/:slug', array('controller' => 'events', 'action' => 'room_details'), array('pass' => array('slug')));
Router::connect('/events/quoteform/:slug', array('controller' => 'events', 'action' => 'quoteform'), array('pass' => array('slug')));
Router::connect('/events/videos/:slug', array('controller' => 'events', 'action' => 'view_video'), array('pass' => array('slug')));
Router::connect('/events/pdf/:slug', array('controller' => 'events', 'action' => 'downloadPdf'), array('pass' => array('slug')));
Router::connect('/cruises/:category', array('controller' => 'cruises', 'action' => 'index'), array('pass' => array('category')));
Router::connect('/cruises/country/:country', array('controller' => 'cruises', 'action' => 'country'), array('pass' => array('country')));
Router::connect('/cruises/:category/:slug', array('controller' => 'cruises', 'action' => 'view'), array('pass' => array('category', 'slug')));
Router::connect('/cruises/videos/:slug', array('controller' => 'cruises', 'action' => 'view_video'), array('pass' => array('slug')));
Router::connect('/resort/:category', array('controller' => 'resorts', 'action' => 'index'), array('pass' => array('category')));
Router::connect('/resort_all/:category', array('controller' => 'resorts', 'action' => 'index_all'), array('pass' => array('category')));
Router::connect('/resorts/country/:country', array('controller' => 'resorts', 'action' => 'country'), array('pass' => array('country')));
Router::connect('/resort/:category/:slug', array('controller' => 'resorts', 'action' => 'view'), array('pass' => array('category', 'slug')));
Router::connect('/resorts/videos/:slug', array('controller' => 'resorts', 'action' => 'view_video'), array('pass' => array('slug')));
Router::connect('/resorts/view-promos/:slug', array('controller' => 'resorts', 'action' => 'view_promos'), array('pass' => array('slug')));
Router::connect('/gallery/:slug', array('controller' => 'galleries', 'action' => 'view'), array('pass' => array('slug')));
Router::connect('/gallery', array('controller' => 'galleries', 'action' => 'index'));
Router::connect('/newsletter/*', array('controller' => 'newsletterSubscribers'));
Router::connect('/faq/*', array('controller' => 'faqs'));


// resorts iframe
Router::connect('/resorts/view_resorts_iframe/:category/:slug', array('controller' => 'resorts', 'action' => 'view_resorts_iframe'), array('pass' => array('category', 'slug')));
Router::connect('/resorts/resorts_view_promos_iframe/:slug', array('controller' => 'resorts', 'action' => 'resorts_view_promos_iframe'), array('pass' => array('slug')));
Router::connect('/resorts/resorts_details_iframe/:slug', array('controller' => 'resorts', 'action' => 'resorts_details_iframe'), array('pass' => array('slug')));
Router::connect('/resorts/resort_reservation_iframe/:room_slug', array('controller' => 'resorts', 'action' => 'resort_reservation_iframe'), array('pass' => array('room_slug')));
Router::connect('/resorts/resorts_list_iframe/:id', array('controller' => 'resorts', 'action' => 'resorts_list_iframe'), array('pass' => array('id')));


App::uses('Affiliate', 'Model');
$affiliate = new Affiliate();
$affiliate->unbindModel(
        array('hasMany' => array('Order', 'AffiliatePaymentOption'))
);
$something = $affiliate->find('all', array('fields' => array('Affiliate.name')));
foreach ($something as $name) {
    Router::connect('/' . $name['Affiliate']['name'], array('controller' => 'users', 'action' => 'iframe'));
}

//Router::connect('/resorts/category/:slug', array('controller' => 'resorts', 'action' => 'index' ), array('pass' => array('slug')));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
//Router::connect('/pages/home', array('controller' => 'pages', 'action' => 'home'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
