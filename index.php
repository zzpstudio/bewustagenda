<?php
/**
 * Bewust Agenda API > json / xml download agenda Bewust Netwerk.
 *
 * @copyright   Copyright (c) 2014, ZZPstudio <erwin@zzpstudio.nl>
 */
require 'bewustagenda/api.php';

$config = [
  'user_id'   => '',
  'api_id'    => '',
  'api_key'   => '',
  'data_type' => '',
  'api_url'   => '',
];

$output = ( new bewustagenda\api($config) )
->set_filter('datum','all')
->get_agenda();
echo $output;
?>
