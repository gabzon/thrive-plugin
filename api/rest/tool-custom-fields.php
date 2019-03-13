<?php

add_action( 'rest_api_init', 'register_custom_fields' );
function register_custom_fields(){
  register_rest_field('tool', 'cover_image', [
    'get_callback'    => 'get_tool_cover_image',
    'update_callback' => 'song_update_post_meta_cb',
    'schema'          => null
    ]
  );

  register_rest_field('tool', 'guides', ['get_callback'=>'get_guides']);
  register_rest_field('tool','mindsets',['get_callback'=>'get_mindsets']);
  register_rest_field('tool','branches',['get_callback'=>'get_branches']);
  register_rest_field('tool','roles',['get_callback'=>'get_roles']);
  register_rest_field('tool','attitudes',['get_callback'=>'get_attitudes']);
  register_rest_field('tool','questions',['get_callback'=>'get_questions']);
  register_rest_field('tool','phases',['get_callback'=>'get_phases']);
  register_rest_field('tool','resources',['get_callback'=>'get_resources_list']);
  register_rest_field('tool','category_list',['get_callback'=>'get_cat_list']);
  register_rest_field('tool','tag_list',['get_callback'=>'get_tag_list']);
  register_rest_field('tool','download',['get_callback'=>'download_file']);
}

function get_tool_cover_image( $object, $field_name, $request ) {
  if( $object['featured_media'] ){
      $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
      return $img[0];
  }
  return 'https://os.alipayobjects.com/rmsportal/QBnOOoLaAfKPirc.png';
}

function get_guides($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'guide', array("fields" => "names"));
}

function get_mindsets($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'mindset', array("fields" => "names"));
}

function get_branches($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'branch', array("fields" => "names"));
}

function get_industries($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'industry', array("fields" => "names"));
}

function get_roles($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'role', array("fields" => "names"));
}

function get_attitudes($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'attitude', array("fields" => "names"));
}

function get_questions($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'question', array("fields" => "names"));
}

function get_phases($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'phase', array("fields" => "names"));
}

function get_resources_list($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'resource', array("fields" => "names"));
}

function get_cat_list($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'category', array("fields" => "names"));
}

function get_tag_list($object, $field_name, $request){
  return wp_get_post_terms( $object['id'], 'post_tag', array("fields" => "names"));
}

function download_file($object, $field_name, $request){
  $files = get_post_meta($object['id'], 'tool_version_group', true);
  $last_version = end($files);
  return wp_get_attachment_url($last_version['tool_version_file'][0]);
}

function song_get_post_meta_cb($object, $field_name, $request){
  return get_post_meta($object['id'], $field_name, true);
  return 'hello';
}

function song_update_post_meta_cb($value, $object, $field_name){
  return update_post_meta($object['id'], $field_name, $value);
}



// tool_background_image
// tool_tips_and_tricks
//
// tool_duration_type
// tool_duration_value
//
// tool_participants
//
// tool_quote
// tool_quote_author
//
//
// tool_version_number
// tool_version_date
// tool_version_lang
// tool_version_file
//
//
// // piklist('field', array(
// //   'type'      => 'post-relate',
// //   'scope'     => 'source',
// //   'template'  => 'field',
// // ));
//
// $args = array(
//    'numberposts'  => -1,
//    'post_type'    => 'source'
// );
//
// piklist('field', array(
//   'type'    => 'select',
//   'title'   => 'Chapters',
//   'label'   => __('Source(s)','roots'),
//   'choices' => piklist( get_posts($args), array('ID', 'post_title')),
//   'relate'  => array(
//     'scope' => 'post'
//   ),
//   'attributes' => array('multiple' => 'multiple')
// ));
