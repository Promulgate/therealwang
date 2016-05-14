<?php
  /**
   * Implements hook_theme().
   */
  function wangrealestate_theme($existing, $type, $theme, $path) {
    $hooks = array();
    $tpl_path = $path . '/tpl';

    $hooks['wre_header'] = array(
      'template' => 'wre-header',
      'path' => $tpl_path,
    );

    $hooks['wre_footer'] = array(
      'template' => 'wre-footer',
      'path' => $tpl_path,
    );

    return $hooks;
  }

  /**
   * Implements hook_preprocess_page().
   */
  function wangrealestate_preprocess_page(&$variables) {
    $node = $variables['node'];

    // Create render arrays for the header and footer.
    $variables['wre_header'] = array(
      '#theme' => 'wre_header',
    );
    $variables['wre_footer'] = array(
      '#theme' => 'wre_footer',
    );

    // Add node specific CSS.
    if (empty($node->type)) {
      return;
    }

    drupal_add_css(drupal_get_path('theme', 'wangrealestate') . '/css/wre-header-footer.css',
      array(
        'group' => CSS_THEME,
        'type' => 'file',
        'weight' => 0,
      )
    );
    drupal_add_css(drupal_get_path('theme', 'wangrealestate') . '/css/wre-global.css',
      array(
        'group' => CSS_THEME,
        'type' => 'file',
        'weight' => 0,
      )
    );

    $prefix = 'wre-';
    $css_file = NULL;
    switch ($node->type) {
      case 'estate':
        $css_file = $prefix . 'estate';
        break;
    }

    if ($css_file) {
      drupal_add_css(drupal_get_path('theme', 'wangrealestate') . '/css/' . $css_file . '.css',
        array(
          'group' => CSS_THEME,
          'type' => 'file',
          'weight' => 10,
        )
      );
    }

    $variables['styles'] = drupal_get_css();
  }
