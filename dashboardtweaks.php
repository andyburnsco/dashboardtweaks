<?php

require_once 'dashboardtweaks.civix.php';

use CRM_Dashboardtweaks_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function dashboardtweaks_civicrm_config(&$config): void {
  _dashboardtweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function dashboardtweaks_civicrm_install(): void {
  _dashboardtweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function dashboardtweaks_civicrm_enable(): void {
  _dashboardtweaks_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_dashboard().
 *
 * Conditionally load dashboard CSS and optional custom CSS.
 */
function dashboardtweaks_civicrm_dashboard($contactID, &$contentPlacement) {
  $settings = Civi::settings();

  // Load CSS file if the setting is enabled
  if (!empty($settings->get('dashboardtweaks_one_column'))) {
    Civi::resources()->addStyleFile('dashboardtweaks', 'css/main.css');
  }

  // Append any custom CSS defined in settings
  $customCSS = trim($settings->get('dashboardtweaks_custom_css'));
  if (!empty($customCSS)) {
    Civi::resources()->addStyle($customCSS);
  }
}