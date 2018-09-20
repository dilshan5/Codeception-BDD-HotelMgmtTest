<?php

namespace Step\Acceptance;

use Page\HotelManagerRegistrationPage as HotelManagerRegistrationPage;

class HotelManagerRegistrationSteps extends \AcceptanceTester
{

    /**
     * @Then I should see registration form
     */
    public function iShouldSeeRegistrationForm()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(HotelManagerRegistrationPage::$URL);
        $I->seeElement(HotelManagerRegistrationPage::$regiterForm);
        $I->seeCurrentUrlEquals(HotelManagerRegistrationPage::$URL);

    }

    /**
     * @Then I search for :arg1 as a hotel name
     */
    public function iSearchForAsAHotelName($hotelName)
    {
        $I = $this;
        $I->fillField(HotelManagerRegistrationPage::$hotelNameTextField, $hotelName);
    }

    /**
     * @Then I select :arg1 th hotel from the dropdown
     */
    public function iSelectThHotelFromTheDropdown($position)
    {
        $I = $this;
        $I->waitForElementVisible(HotelManagerRegistrationPage::$autocompletionDropdown, 5); // secs
        $I->click('ul.os-hotel-search__list.js-os-hotel-search-results li:nth-child(' . $position . ')');
    }

    /**
     * @Then I fill out the hotel registration form
     */
    public function iFillOutTheHotelRegistrationForm()
    {
        $I = $this;
        $I->submitForm(
            HotelManagerRegistrationPage::$regiterForm,
            [
                HotelManagerRegistrationPage::$nameTitle => '0',
                HotelManagerRegistrationPage::$firstName => 'Dilshan',
                HotelManagerRegistrationPage::$lastName => 'Fernando',
                HotelManagerRegistrationPage::$position => '7',
                HotelManagerRegistrationPage::$location => 'AF',
                HotelManagerRegistrationPage::$telephoneNumber => '023 658 7458',
                HotelManagerRegistrationPage::$emailAddress => 'abs@gamil.com',
                HotelManagerRegistrationPage::$userPassword => 'password',
                HotelManagerRegistrationPage::$checkTerms => true
            ],
            HotelManagerRegistrationPage::$submitButton
        );
    }


}