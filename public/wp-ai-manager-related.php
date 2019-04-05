<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://enfocandoelfuturo.com
 * @since      1.1.0
 *
 * @package    WP_AI_MANAGER
 */

/**
 * The public-facing functionality of the plugin.
 *
 *
 * @since      1.1.0
 * @package    WP_AI_MANAGER
 * @author     Miguel Angel Rubio <miguel@enfocandoelfuturo.com>
 */
class WP_AI_MANAGER_PUBLIC_RELATED {
  public static function add_related_to_post( $content ) {
    return $content . self::get_related_posts();
  }

  function get_related_posts() {
    $args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 4,
        );

    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {

      $string .= '<ul>';
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
      }
      $string .= '</ul>';
      /* Restore original Post Data */
      wp_reset_postdata();
    }

    return $string;
  }
}
