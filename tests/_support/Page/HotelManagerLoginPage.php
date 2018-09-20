<?php

namespace Page;

class HotelManagerLoginPage
{
    // include url of current page
    public static $URL = '/hotelmanager/login';

    public static $emailTextField = 'LoginForm[username]';
    public static $passwordTextField = 'LoginForm[password]';
    public static $emailErrorMessage = 'div.pw div.error-hint.create-pseudo-before.create-pseudo-after';
    public static $passwordErrorMessage = 'div.mail.mb-gutter div.error-hint.create-pseudo-before.create-pseudo-after';
    public static $generalErrorMessage = 'div.alert__message div.error-hint.create-pseudo-before.create-pseudo-after';
}
