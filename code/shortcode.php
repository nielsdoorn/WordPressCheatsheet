add_shortcode('coolfeature', 'doCoolFeature');

function doCoolFeature($atts, $content="") {
  $content .= '<div class="coolFeature">Cool!</div>';
}