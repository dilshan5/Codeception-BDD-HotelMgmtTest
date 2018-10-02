<?php

namespace Step\Acceptance;

use Page\HotelManagerProPage as HotelManagerProPage;

class HotelManagerProSteps extends \AcceptanceTester
{
    /**
     * @When I click on PRO logo on home page
     */
    public function iClickOnPROLogoOnHomePage()
    {
        $I = $this;
        $I->click(HotelManagerProPage::$proLink);
        $I->seeCurrentUrlEquals(HotelManagerProPage::$URL);//verify the browser url
    }

    /**
     * @Then I verify :arg1 button
     */
    public function iVerifyButton($arg1)
    {
        $I = $this;
        $I->waitForElementVisible(HotelManagerProPage::$videoFrame, 5);
        $I->moveMouseOver(HotelManagerProPage::$videoFrame);//mouse hover over the video frame
        $I->canSeeElement(HotelManagerProPage::$uTubeVideoLink); //verify the utube video
        $I->click(HotelManagerProPage::$closeVideo);//close the video
    }

    /**
     * @When I click :arg1 button
     */
    public function iClickButton($arg1)
    {
        $I = $this;
        $I->click($arg1);
    }

    /**
     * @Then I search :arg1 as a hotel name and select :arg2 th hotel
     */
    public function iSearchAsAHotelNameAndSelectThHotel($hotelName, $selector)
    {
        $I = $this;
        $I->fillField(HotelManagerProPage::$hotelNameTextField, $hotelName);//enter hotel name
        $I->waitForElementVisible(HotelManagerProPage::$autocompletionDropdown, 5); // secs
        $I->click('ul.hotel-search__list.js-hotel-search-results li:nth-child(' . $selector . ')');//select the hotel
    }

    /**
     * @Then I fill out the consultation request form
     */
    public function iFillOutTheConsultationRequestForm()
    {
        $I = $this;
        $I->submitForm(
            HotelManagerProPage::$regiterForm,
            [
                HotelManagerProPage::$contactName => 'Mark',
                HotelManagerProPage::$contactEmail => 'aberes@gamil.com',
                HotelManagerProPage::$jobPosition => '4',
                HotelManagerProPage::$locale => 'AF',
                HotelManagerProPage::$telephoneNumber => '023 658 7458'
            ],
            HotelManagerProPage::$submitButton
        );
    }

    /**
     * @Then I check the confirmation message
     */
    public function iCheckTheConfirmationMessage()
    {
        $I = $this;
        $I->waitForElementVisible(HotelManagerProPage::$successMessage, 15);//wait until success message appear
        $I->see('Thank you for your request! We\'ll get in touch with you shortly.');
    }

}