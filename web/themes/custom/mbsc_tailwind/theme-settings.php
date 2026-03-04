<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for mbsc_tailwind theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function mbsc_tailwind_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['mbsc_tailwind'] = [
    '#type' => 'details',
    '#title' => t('mbsc_tailwind'),
    '#open' => TRUE,
  ];

  $form['mbsc_tailwind']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
