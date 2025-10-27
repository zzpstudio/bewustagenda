<?php
/**
 * Bewust Netwerk events API > json / xml download agenda Bewust Netwerk.
 *
 * @copyright   Copyright (c) 2025, ZZPstudio
 */
require 'bewustnetwerk/agenda.php';

$config = [
  'user_id'   => '',
  'api_id'    => '',
  'api_key'   => '',
  'data_type' => '',
  'api_url'   => '',
];

$output = ( new bewustnetwerk\agenda($config) )
->set_filter('datum','all')
->get_agenda();
echo $output;
?>
