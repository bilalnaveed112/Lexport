<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $config['recaptcha_secret'] = '6Lfvg2EUAAAAAJU3gsQsoww5x0uaHXuRDTFPYJhv';
$config['recaptcha_secret'] = getenv('RECAPTCHA_SECRET_KEY');
