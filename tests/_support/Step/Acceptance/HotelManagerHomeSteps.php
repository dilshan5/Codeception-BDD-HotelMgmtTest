<?php

namespace Step\Acceptance;

use Page\HotelManagerHomePage as HotelManagerHomePage;

class HotelManagerHomeSteps extends \AcceptanceTester
{
    /**
     * @Given I am on Hotel Manager home page
     */
    public function iAmOnHotelManagerHomePage()
    {
        $I = $this;
        $I->amGoingTo('Open Home page');
        $I->amOnPage(HotelManagerHomePage::$URL); //check the browser url
        $I->seeInTitle(HotelManagerHomePage::$pageTitle);//check the browser title

    }

    /**
     * @When I navigate to :arg1 page
     */
    public function iNavigateToPage($arg1)
    {
        $I = $this;
        $I->click($arg1); //click anything that is clickable on the webpage
    }

}