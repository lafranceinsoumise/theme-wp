<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Change WooCommerce checkout page
 */
add_filter('woocommerce_enable_order_notes_field', '__return_false');
add_filter('woocommerce_checkout_fields', __NAMESPACE__ . '\\woocommerce_override_checkout_fields');

function woocommerce_override_checkout_fields($fields)
{
     $new_fields = [
       'billing_first_name' => $fields['billing']['billing_first_name'],
       'billing_last_name' => $fields['billing']['billing_last_name'],
       'billing_address_1' => $fields['billing']['billing_address_1'],
       'billing_postcode' => $fields['billing']['billing_postcode'],
       'billing_city' => $fields['billing']['billing_city'],
       'billing_email' => $fields['billing']['billing_email'],
       'billing_phone' => $fields['billing']['billing_phone'],
     ];

    foreach ($new_fields as $key => $value) {
        $new_fields[$key]['class'][0] = 'form-row-wide';
    }

    $fields['billing'] = $new_fields;

    return $fields;
}
