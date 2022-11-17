<?php

$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );

echo $data['nickname'];
echo $data['registration_date'];
echo $data['country_id'];
echo $data['user_type'];
echo $data['points'];
echo $data['permalink'];
echo $data['site_id'];