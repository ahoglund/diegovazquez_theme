<?php

// Plugin definition
$plugin = array(
  'title' => t('DV Two column'),
  'category' => t('Columns: 2'),
  'icon' => 'dv-twocol.png',
  'theme' => 'panels_dv-twocol',
  'css' => 'dv-twocol.css',
  'panels' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
