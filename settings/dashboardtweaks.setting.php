<?php

use CRM_Dashboardtweaks_ExtensionUtil as E;

return [
  // Toggle one-column layout
  'dashboardtweaks_one_column' => [
    'name' => 'dashboardtweaks_one_column',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Enable One Column Home Dashboard Layout'),
    'description' => E::ts('Apply a one-column layout to the main CiviCRM home dashboard.'),
    'html_attributes' => [],
    'settings_pages' => [
      'display' => [
        'title'  => E::ts('Dashboard Tweaks'),
        'weight' => 615,
      ],
    ],
  ],
];
