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
    'title' => E::ts('Enable One Column Dashboard Layout'),
    'description' => E::ts('Apply a one-column layout to the main CiviCRM dashboard.'),
    'html_attributes' => [],
    'settings_pages' => [
      'display' => [
        'title'  => E::ts('Dashboard Tweaks'),
        'weight' => 1000,
      ],
    ],
  ],

  // Optional custom CSS textarea
  'dashboardtweaks_custom_css' => [
    'name' => 'dashboardtweaks_custom_css',
    'type' => 'Text',
    'html_type' => 'textarea',
    'default' => '',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Custom Dashboard CSS'),
    'description' => E::ts('Optional CSS rules to append to the dashboard layout.'),
    'html_attributes' => [
      'rows' => 5,
      'cols' => 60,
      'placeholder' => E::ts('/* Add additional dashboard CSS here */'),
    ],
    'settings_pages' => [
      'display' => [
        'title'  => E::ts('Dashboard Tweaks'),
        'weight' => 1001,
      ],
    ],
  ],
];
