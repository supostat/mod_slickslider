<?php
/**
 * @copyright	Copyright © 2015 - All rights reserved.
 * @license		GNU General Public License v2.0
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();


$el = 'slider';

$dots = $params->get('dots') ? 'true' : 'false';
$autoplay = $params->get('autoplay') ? 'true' : 'false';
$fade = $params->get('fade') ? 'true' : 'false';
$autoplaySpeed =  $params->get('autoplaySpeed');

$slidesToShow = 1;
$slidesToScroll = 1;

$init_slider_script = "
    (function ($) {
        var config = {
            dots : " . $dots .",
            slidesToShow: " . $slidesToShow . ",
            slidesToScroll: " . $slidesToScroll . ",
            autoplay: ". $autoplay .",
            autoplaySpeed: ". $autoplaySpeed .",
            fade: ". $fade ."
        }

        $(function () {
            $('#". $el ."').slick(config);
        });

    })(jQuery);
";

// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_slickslider/assets/css/slick.css");
$doc->addStyleSheet(JURI::root()."modules/mod_slickslider/assets/css/slick-theme.css");
$doc->addScript(JURI::root()."modules/mod_slickslider/assets/js/slick.min.js");
$doc->addScriptDeclaration($init_slider_script);


require JModuleHelper::getLayoutPath('mod_slickslider', $params->get('layout', 'default'));