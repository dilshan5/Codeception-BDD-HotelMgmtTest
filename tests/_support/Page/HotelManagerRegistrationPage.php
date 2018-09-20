<?php

namespace Page;

class HotelManagerRegistrationPage
{
    // include url of current page
    public static $URL = '/hotelmanager/register';

    public static $regiterForm = 'form.os-registration__form.form-personal-data.js-form-recaptcha-validate';
    public static $hotelNameTextField = '#registration[hotel_input]';
    public static $autocompletionDropdown = 'ul.os-hotel-search__list.js-os-hotel-search-results';
    public static $nameTitle = 'RegistrationForm[personalData][title]';
    public static $firstName = 'RegistrationForm[personalData][firstName]';
    public static $lastName = 'RegistrationForm[personalData][lastName]';
    public static $position = 'RegistrationForm[personalData][position]';
    public static $location = 'RegistrationForm[personalData][phone][locale]';
    public static $telephoneNumber = 'RegistrationForm[personalData][phone][number]';
    public static $emailAddress = 'RegistrationForm[personalData][email]';
    public static $userPassword = 'RegistrationForm[personalData][password]';
    public static $checkTerms = 'RegistrationForm[personalData][terms]';
    public static $submitButton = 'Create your free account';
}
