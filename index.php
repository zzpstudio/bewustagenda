<?php
/**
 * Bewust Netwerk events API > json / xml download agenda Bewust Netwerk.
 *
 * @copyright   Copyright (c) 2025, ZZPstudio
 */
require 'bewustnetwerk/events.php';

$config = [
  'user_id'   => '',
  'api_id'    => '',
  'api_key'   => '',
  'data_type' => '',
  'api_url'   => '',
];

$output = ( new bewustnetwerk\events($config) )
->set_filter('datum','all')
->getAgenda();
echo $output;
?>
