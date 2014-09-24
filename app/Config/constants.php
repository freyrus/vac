<?php

/*
 * VARIOUS PATH CONSTANTS
 */
define("BASE_URL", 'http' . (empty($_SERVER['HTTPS']) ? '' : 's') . '://' . $_SERVER['HTTP_HOST'] . dirname(dirname(dirname($_SERVER['PHP_SELF']))));

define("AVP_DIR", dirname(dirname(dirname(__FILE__))));
define("HOME_DIR", dirname(dirname(__FILE__)));
define("HOME_URL", 'http' . (empty($_SERVER['HTTPS']) ? '' : 's') . '://' . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['PHP_SELF'])));

define("THUMBNAIL_80_URL", HOME_URL . "/webroot/img/user_uploads/gallery/thumbnails_80x80/");
define("THUMBNAIL_80_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/thumbnails_80x80/");

define("THUMBNAIL_150_URL", HOME_URL . "/webroot/img/user_uploads/gallery/thumbnails_150x150/");
define("THUMBNAIL_150_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/thumbnails_150x150/");

define("SMALL_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/gallery/small/");
define("SMALL_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/small/");

define("LARGE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/gallery/large/");
define("LARGE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/large/");

define("ORG_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/gallery/");
define("ORG_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/");

/* Resort Gallery Folder Path and Urls */
define("RESORT_THUMBNAIL_80_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_80x80/");
define("RESORT_THUMBNAIL_80_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_80x80/");

define("RESORT_THUMBNAIL_91_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_91x65/");
define("RESORT_THUMBNAIL_91_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_91x65/");

define("RESORT_THUMBNAIL_150_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_150x150/");
define("RESORT_THUMBNAIL_150_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_150x150/");

define("RESORT_THUMBNAIL_158_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_158x106/");
define("RESORT_THUMBNAIL_158_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_158x106/");

define("RESORT_THUMBNAIL_202_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_202x144/");
define("RESORT_THUMBNAIL_202_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_202x144/");

define("RESORT_THUMBNAIL_196_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_288x196/");
define("RESORT_THUMBNAIL_196_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_288x196/");

define("RESORT_THUMBNAIL_161_URL", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_288x161/");
define("RESORT_THUMBNAIL_161_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_288x161/");

define("RESORT_XLARGE_SLIDER_URL", HOME_URL . "/webroot/img/user_uploads/resort/slider_957x381/");
define("RESORT_XLARGE_SLIDER_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/slider_957x381/");

define("RESORT_LARGE_SLIDER_URL", HOME_URL . "/webroot/img/user_uploads/resort/slider_701x456/");
define("RESORT_LARGE_SLIDER_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/slider_701x456/");

define("RESORT_SMALL_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/resort/small/");
define("RESORT_SMALL_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/small/");

define("RESORT_LARGE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/resort/large/");
define("RESORT_LARGE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/large/");

define("RESORT_ORG_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/resort/");
define("RESORT_ORG_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/resort/");

define("THUMBNAIL_80_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/thumbnails_80x80/");
define("THUMBNAIL_80_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/thumbnails_80x80/");

define("THUMBNAIL_150_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/thumbnails_150x150/");
define("THUMBNAIL_150_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/thumbnails_150x150/");

define("IMAGE_291_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/image_291x194/");
define("IMAGE_291_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/image_291x194/");

define("IMAGE_202_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/image_202x144/");
define("IMAGE_202_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/image_202x144/");

define("IMAGE_288_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/image_288x161/");
define("IMAGE_288_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/image_288x161/");

define("IMAGE_622_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/image_622x268/");
define("IMAGE_622_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/image_622x268/");

define("IMAGE_701_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/image_701x456/");
define("IMAGE_701_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/image_701x456/");

define("SMALL_IMAGE_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/small/");
define("SMALL_IMAGE_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/small/");

define("LARGE_IMAGE_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/large/");
define("LARGE_IMAGE_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/large/");


define("ORG_IMAGE_URL_BANNER_HOME", HOME_URL . "/webroot/img/org_banner_img/");
define("ORG_IMAGE_DIR_BANNER_HOME", HOME_DIR . "/webroot/img/org_banner_img/");


define("ORG_IMAGE_URL_EVENT", HOME_URL . "/webroot/img/user_uploads/event/");
define("ORG_IMAGE_DIR_EVENT", HOME_DIR . "/webroot/img/user_uploads/event/");

define("THUMBNAIL_80_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_80x80/");
define("THUMBNAIL_80_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_80x80/");

define("THUMBNAIL_158_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_158x106/");
define("THUMBNAIL_158_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_158x106/");

define("IMAGE_701_URL_Cruise", HOME_URL . "/webroot/img/user_uploads/cruise/image_701x456/");
define("IMAGE_701_DIR_Cruise", HOME_DIR . "/webroot/img/user_uploads/cruise/image_701x456/");

define("THUMBNAIL_150_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_150x150/");
define("THUMBNAIL_150_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_150x150/");

define("THUMBNAIL_144_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_202x144/");
define("THUMBNAIL_144_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_202x144/");

define("SMALL_IMAGE_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/small/");
define("SMALL_IMAGE_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/small/");

define("LARGE_IMAGE_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/large/");
define("LARGE_IMAGE_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/large/");

define("ORG_IMAGE_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/");
define("ORG_IMAGE_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/");

define("THUMBNAIL_80_URL_DECK", HOME_URL . "/webroot/img/user_uploads/deck/thumbnails_80x80/");
define("THUMBNAIL_80_DIR_DECK", HOME_DIR . "/webroot/img/user_uploads/deck/thumbnails_80x80/");

define("THUMBNAIL_150_URL_DECK", HOME_URL . "/webroot/img/user_uploads/deck/thumbnails_150x150/");
define("THUMBNAIL_150_DIR_DECK", HOME_DIR . "/webroot/img/user_uploads/deck/thumbnails_150x150/");

define("SMALL_IMAGE_URL_DECK", HOME_URL . "/webroot/img/user_uploads/deck/small/");
define("SMALL_IMAGE_DIR_DECK", HOME_DIR . "/webroot/img/user_uploads/deck/small/");

define("LARGE_IMAGE_URL_DECK", HOME_URL . "/webroot/img/user_uploads/deck/large/");
define("LARGE_IMAGE_DIR_DECK", HOME_DIR . "/webroot/img/user_uploads/deck/large/");

define("ORG_IMAGE_URL_DECK", HOME_URL . "/webroot/img/user_uploads/deck/");
define("ORG_IMAGE_DIR_DECK", HOME_DIR . "/webroot/img/user_uploads/deck/");

//define("THUMBNAIL_80_URL_EVENT", HOME_URL."/webroot/img/user_uploads/event/thumbnails_80x80/");
//define("THUMBNAIL_80_DIR_EVENT", HOME_DIR."/webroot/img/user_uploads/event/thumbnails_80x80/");
//
//define("THUMBNAIL_150_URL_EVENT", HOME_URL."/webroot/img/user_uploads/event/thumbnails_150x150/");
//define("THUMBNAIL_150_DIR_EVENT", HOME_DIR."/webroot/img/user_uploads/event/thumbnails_150x150/");
//
//define("SMALL_IMAGE_URL_EVENT", HOME_URL."/webroot/img/user_uploads/event/small/");
//define("SMALL_IMAGE_DIR_EVENT", HOME_DIR."/webroot/img/user_uploads/event/small/");
//
//define("LARGE_IMAGE_URL_EVENT", HOME_URL."/webroot/img/user_uploads/event/large/");
//define("LARGE_IMAGE_DIR_EVENT", HOME_DIR."/webroot/img/user_uploads/event/large/");
//
//define("ORG_IMAGE_URL_EVENT", HOME_URL."/webroot/img/user_uploads/event/");
//define("ORG_IMAGE_DIR_EVENT", HOME_DIR."/webroot/img/user_uploads/event/");

define("THUMBNAIL_80_URL_RESORT", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_80x80/");
define("THUMBNAIL_80_DIR_RESORT", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_80x80/");

define("THUMBNAIL_150_URL_RESORT", HOME_URL . "/webroot/img/user_uploads/resort/thumbnails_150x150/");
define("THUMBNAIL_150_DIR_RESORT", HOME_DIR . "/webroot/img/user_uploads/resort/thumbnails_150x150/");

define("SMALL_IMAGE_URL_RESORT", HOME_URL . "/webroot/img/user_uploads/resort/small/");
define("SMALL_IMAGE_DIR_RESORT", HOME_DIR . "/webroot/img/user_uploads/resort/small/");

define("LARGE_IMAGE_URL_RESORT", HOME_URL . "/webroot/img/user_uploads/resort/large/");
define("LARGE_IMAGE_DIR_RESORT", HOME_DIR . "/webroot/img/user_uploads/resort/large/");

define("ORG_IMAGE_URL_RESORT", HOME_URL . "/webroot/img/user_uploads/resort/");
define("ORG_IMAGE_DIR_RESORT", HOME_DIR . "/webroot/img/user_uploads/resort/");

define("THUMBNAIL_80_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/thumbnails_80x80/");
define("THUMBNAIL_80_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/thumbnails_80x80/");

define("THUMBNAIL_150_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/thumbnails_150x150/");
define("THUMBNAIL_150_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/thumbnails_150x150/");

define("THUMBNAIL_93_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/thumbnails_150x93/");
define("THUMBNAIL_93_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/thumbnails_150x93/");

define("SMALL_IMAGE_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/small/");
define("SMALL_IMAGE_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/small/");

define("LARGE_IMAGE_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/large/");
define("LARGE_IMAGE_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/large/");

define("ORG_IMAGE_URL_RESORTROOM", HOME_URL . "/webroot/img/user_uploads/resortroom/");
define("ORG_IMAGE_DIR_RESORTROOM", HOME_DIR . "/webroot/img/user_uploads/resortroom/");

define("SLIDER_THUMBNAIL_80_URL", HOME_URL . "/webroot/img/user_uploads/slider/thumbnails_80x80/");
define("SLIDER_THUMBNAIL_80_DIR", HOME_DIR . "/webroot/img/user_uploads/slider/thumbnails_80x80/");

define("SLIDER_MEDIUM_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/slider/medium/");
define("SLIDER_MEDIUM_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/slider/medium/");

define("SLIDER_LARGE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/slider/large/");
define("SLIDER_LARGE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/slider/large/");

define("SLIDER_XLARGE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/slider/xlarge/");
define("SLIDER_XLARGE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/slider/xlarge/");

define("SLIDER_ORG_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/slider/");
define("SLIDER_ORG_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/slider/");

define("SLIDER_IMAGE_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/slider_957x381/");
define("SLIDER_IMAGE_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/slider_957x381/");

define("SLIDER701_IMAGE_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/slider_701x456/");
define("SLIDER701_IMAGE_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/slider_701x456/");

define("THUMBNAIL_288_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_288x196/");
define("THUMBNAIL_288_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_288x196/");

define("THUMBNAIL_161_URL_CRUISE", HOME_URL . "/webroot/img/user_uploads/cruise/thumbnails_288x161/");
define("THUMBNAIL_161_DIR_CRUISE", HOME_DIR . "/webroot/img/user_uploads/cruise/thumbnails_288x161/");

define("THUMBNAIL_288_URL", HOME_URL . "/webroot/img/user_uploads/gallery/thumbnails_288x196/");
define("THUMBNAIL_288_DIR", HOME_DIR . "/webroot/img/user_uploads/gallery/thumbnails_288x196/");

define("BANNER_URL", HOME_URL . "/webroot/img/user_uploads/banner/");
define("BANNER_DIR", HOME_DIR . "/webroot/img/user_uploads/banner/");

define("BANNER_THUMB_URL", HOME_URL . "/webroot/img/user_uploads/banner/thumb/");
define("BANNER_THUMB_DIR", HOME_DIR . "/webroot/img/user_uploads/banner/thumb/");

define("TESTIMONIAL_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/testimonials/");
define("TESTIMONIAL_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/testimonials/");

define("PAGEIMAGE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/pageimages/");
define("PAGEIMAGE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/pageimages/");

define("PAGEIMAGE_IMAGE_ORG_DIR", HOME_DIR . "/webroot/img/user_uploads/pageimages/org/");
define("PAGEIMAGE_IMAGE_ORG_URL", HOME_URL . "/webroot/img/user_uploads/pageimages/org/");

define("PAGEIMAGE_IMAGE_289_DIR", HOME_DIR . "/webroot/img/user_uploads/pageimages/img289/");
define("PAGEIMAGE_IMAGE_289_URL", HOME_URL . "/webroot/img/user_uploads/pageimages/img289/");

define("EVENTFEATURE_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/eventfeatures/");
define("EVENTFEATURE_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/eventfeatures/");

define("SPECIAL_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/specials/");
define("SPECIAL_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/specials/");

define("SPECIAL_IMAGE_THUMB_DIR", HOME_DIR . "/webroot/img/user_uploads/specials/thumb/");
define("SPECIAL_IMAGE_THUMB_URL", HOME_URL . "/webroot/img/user_uploads/specials/thumb/");
/*
 * VARIOUS IMAGE SIZES
 */
define("LARGE_IMAGE_WIDTH", 800);
define("LARGE_IMAGE_HEIGHT", 600);

define("SMALL_IMAGE_WIDTH", 250);
define("SMALL_IMAGE_HEIGHT", 250);

define("SLIDER_XLARGE_IMAGE_WIDTH", 957);
define("SLIDER_XLARGE_IMAGE_HEIGHT", 381);

define("SLIDER_LARGE_IMAGE_WIDTH", 701);
define("SLIDER_LARGE_IMAGE_HEIGHT", 456);

define("SLIDER_MEDIUM_IMAGE_WIDTH", 202);
define("SLIDER_MEDIUM_IMAGE_HEIGHT", 144);

define("IMAGE_196_IMAGE_WIDTH", 288);
define("IMAGE_196_IMAGE_HEIGHT", 196);

define("IMAGE_91_IMAGE_WIDTH", 91);
define("IMAGE_91_IMAGE_HEIGHT", 65);

define("IMAGE_93_IMAGE_WIDTH", 150);
define("IMAGE_93_IMAGE_HEIGHT", 93);

define("IMAGE_291_IMAGE_WIDTH", 291);
define("IMAGE_291_IMAGE_HEIGHT", 194);

define("IMAGE_202_IMAGE_WIDTH", 202);
define("IMAGE_202_IMAGE_HEIGHT", 144);

define("IMAGE_288_IMAGE_WIDTH", 288);
define("IMAGE_288_IMAGE_HEIGHT", 161);

define("IMAGE_622_IMAGE_WIDTH", 622);
define("IMAGE_622_IMAGE_HEIGHT", 268);

define("IMAGE_701_IMAGE_WIDTH", 701);
define("IMAGE_701_IMAGE_HEIGHT", 456);

define("BANNER_IMAGE_WIDTH", 961);
define("BANNER_IMAGE_HEIGHT", 81);

define("BANNER_THUMB_WIDTH", 100);
define("BANNER_THUMB_HEIGHT", 100);

define("TESTIMONIAL_IMAGE_WIDTH", 100);
define("TESTIMONIAL_IMAGE_HEIGHT", 100);

define("EVENTFEATURE_IMAGE_WIDTH", 100);
define("EVENTFEATURE_IMAGE_HEIGHT", 100);

define("SPECIAL_IMAGE_WIDTH", 288);
define("SPECIAL_IMAGE_HEIGHT", 180);

/*
 * Event Itinerary PDF file path
 */
define("EVENT_PDF_URL", HOME_URL. "/webroot/img/user_uploads/events_itineraries/");
define("EVENT_PDF_DIR", HOME_DIR. "/webroot/img/user_uploads/events_itineraries/");

/*
 * Card Types
 */
define('CARD_TYPES', serialize(array('MasterCard' => 'MasterCard','Visa' => 'Visa','Amex' => 'Amex','Discover' => 'Discover')));


/*
 * PayPal API details - Visa & Mastercard.
 */
define('API_USERNAME', 'info_api1.hedokamasutra.com');
define('API_PASSWORD', '7RNYZDXCPZX3426P');
define('API_SIGNATURE', 'AFcWxV21C7fd0v3bYYYRCpSSRl31AE81M0aBqO-vQ.oFMt-OGxqbjSZb');

/*
 * PayPal API details - Amex/ Discovery/Debit.
 */
define('API_USERNAME_NEW', 'rick_api1.vacationparties.com');
define('API_PASSWORD_NEW', 'HJRSSCAZKLMRBMHT');
define('API_SIGNATURE_NEW', 'AjkLRWJQZeGVkkaLmZ0moPyGTdZsA8kY.zk6o3c3yHcF20j5IRVv678r');


//FOR TESTING PURPOSE.
define('API_USERNAME_SANDBOX', 'sdk-three_api1.sdk.com');
define('API_PASSWORD_SANDBOX', 'QFZCWN5HZM8VBG7Q');
define('API_SIGNATURE_SANDBOX', 'A-IzJhZZjhg29XQ2qnhapuwxIDzyAZQ92FRP5dqBzVesOkzbdUONzmOU');


/**
 * Affiliate Image and pdf upload path
 */
define("THUMBNAIL_80_AFFILIATE_URL", HOME_URL . "/webroot/img/user_uploads/affiliates/thumbnails_80x80/");
define("THUMBNAIL_80_AFFILIATE_DIR", HOME_DIR . "/webroot/img/user_uploads/affiliates/thumbnails_80x80/");

define("ORG_AFFILIATE_URL", HOME_URL . "/webroot/img/user_uploads/affiliates/org/");
define("ORG_AFFILIATE_DIR", HOME_DIR . "/webroot/img/user_uploads/affiliates/org/");

define("AFFILITE_PDF_URL", HOME_URL. "/webroot/img/user_uploads/affiliates/pdf/");
define("AFFILITE_PDF_DIR", HOME_DIR. "/webroot/img/user_uploads/affiliates/pdf/");

//Client image path

define("CLIENT_CARD_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/clients/");
define("CLIENT_CARD_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/clients/");




///////*************Resort Promo**************//////////
define("ORG_IMAGE_URL_PROMO", HOME_URL . "/webroot/img/user_uploads/resort_promo/");
define("ORG_IMAGE_DIR_PROMO", HOME_DIR . "/webroot/img/user_uploads/resort_promo/");

define("THUMBNAIL_80_IMAGE_URL_PROMO", HOME_URL . "/webroot/img/user_uploads/resort_promo/thumbnails_80x80/");
define("THUMBNAIL_80_IMAGE_DIR_PROMO", HOME_DIR . "/webroot/img/user_uploads/resort_promo/thumbnails_80x80/");




define("RESELLER_BANNER_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/reseller_banner/");

define("RESELLER_THEME_IMAGE_URL", HOME_URL . "/webroot/img/user_uploads/reseller_theme/");
define("RESELLER_THEME_IMAGE_DIR", HOME_DIR . "/webroot/img/user_uploads/reseller_theme/");


define("EVENT_CATEGORY_IMAGE_URL", HOME_URL . "/webroot/img/sub_category/");
define("EVENT_CATEGORY_IMAGE_DIR", HOME_DIR . "/webroot/img/sub_category/");
