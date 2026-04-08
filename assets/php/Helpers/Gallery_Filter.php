<?php

class Gallery_Filter {
  
  public function __construct() {
    add_action('wp_ajax_filter_gallery', [$this, 'filter_gallery']);
    add_action('wp_ajax_nopriv_filter_gallery', [$this, 'filter_gallery']);
  }
  
  public function filter_gallery() {
    check_ajax_referer('filter_gallery_nonce', 'nonce');
    
    $filter = sanitize_text_field($_POST['filter']);
    $html = $this->get_filtered_posts($filter);
    
    echo $html;
    wp_die();
  }
  
  private function get_filtered_posts($filter) {
    $args = $this->build_query_args($filter);
    $query = new WP_Query($args);
    
    return $this->render_posts($query);
  }
  
  private function build_query_args($filter) {
    return [
      'post_type' => 'post',
      'posts_per_page' => -1,
      'tax_query' => [
        [
          'taxonomy' => 'photo-type',
          'field' => 'slug',
          'terms' => $filter
        ]
      ]
    ];
  }
  
  private function render_posts($query) {
    $html = '';
    
    if ($query->have_posts()) {
      while($query->have_posts()) {
        $query->the_post();
        $html .= $this->get_item_markup();
      }
      wp_reset_postdata();
    } else {
      $html = '<p>No items found.</p>';
    }
    
    return $html;
  }
  
  private function get_item_markup() {
    return sprintf(
      '<div class="item">%s</div>',
      get_the_post_thumbnail()
    );
  }
}

new Gallery_Filter();