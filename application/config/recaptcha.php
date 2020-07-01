<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

//for production
// $config['recaptcha_site_key'] = '6LfvLWQUAAAAAGvvUiiulVM4-53ySPL8CA3Fmzlu';
// $config['recaptcha_secret_key'] = '6LfvLWQUAAAAACR9StkDDbvecouruct7plFlWw2Y';

//for localhost
$config['recaptcha_site_key'] = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
$config['recaptcha_secret_key'] = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
