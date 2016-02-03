<?php
/**
 * Recaptcha Default Configuration
 *
 * @author   cake17
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://blog.cake-websites.com/
 */
return [
    'Recaptcha' => [
        // Register API keys at https://www.google.com/recaptcha/admin
        'sitekey' => '6LdxFhcTAAAAAHbds8IrDO_nL92O_dywwh1W32BO',
        'secret' => '6LdxFhcTAAAAANVzx-ZvABzBqmV-8ufD9_IHvRPG',
        // reCAPTCHA supported 40+ languages listed
        // here: https://developers.google.com/recaptcha/docs/language
        'lang' => 'es',
        // either light or dark
        'theme' => 'light',
        // either image or audio
        'type' => 'image',
    ]
];
