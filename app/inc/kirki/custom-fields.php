<?php
if(class_exists('Kirki')) {
  Kirki::add_config( 'flyrbord', array(
  	'capability'    => 'edit_theme_options',
  	'option_type'   => 'theme_mod',
  ) );

  Kirki::add_section( 'top_bar', array(
      'title'          => __( 'Top Bar' ),
      'description'    => __( 'Manage content displayed above the main menu' ),
      'panel'          => '', // Not typically needed.
      'priority'       => 20,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'        => 'toggle',
  	'settings'    => 'show_top_bar',
  	'label'       => __( 'Show bar above main menu', 'flyrbord' ),
  	'section'     => 'top_bar',
  	'default'     => '1',
  	'priority'    => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
  	'type'     => 'text',
  	'settings' => 'announcement_text',
  	'label'    => __( 'Special Announcement', 'flyrbord' ),
  	'section'  => 'top_bar',
  	'default'  => esc_attr__( '', 'flyrbord' ),
  	'priority' => 10,
  ) );


  Kirki::add_section( 'social_media', array(
      'title'          => __( 'Social Media' ),
      'description'    => __( 'Add / edit links to your social media accounts. Note: to remove an account, leave the field empty' ),
      'panel'          => '', // Not typically needed.
      'priority'       => 160,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'facebook_account_link',
    'label'    => __( 'Facebook', 'flyrbord' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'twitter_account_link',
    'label'    => __( 'Twitter', 'flyrbord' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'pinterest_account_link',
    'label'    => __( 'Pinterest', 'flyrbord' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'instagram_account_link',
    'label'    => __( 'Instagram', 'flyrbord' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'linkedin_account_link',
    'label'    => __( 'LinkedIn', 'flyrbord' ),
    'section'  => 'social_media',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_section( 'contact_info', array(
      'title'          => __( 'Contact Info' ),
      'description'    => __( 'Add / edit company contact info' ),
      'panel'          => '', // Not typically needed.
      'priority'       => 220,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'phone_number',
    'label'    => __( 'Phone Number', 'flyrbord' ),
    'section'  => 'contact_info',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );

  Kirki::add_field( 'flyrbord', array(
    'type'     => 'text',
    'settings' => 'public_email',
    'label'    => __( 'Public Email', 'flyrbord' ),
    'section'  => 'contact_info',
    'default'  => esc_attr__( '', 'flyrbord' ),
    'priority' => 10,
  ) );
}