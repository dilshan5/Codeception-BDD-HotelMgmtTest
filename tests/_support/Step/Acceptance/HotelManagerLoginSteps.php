<?php

namespace Step\Acceptance;

use Page\HotelManagerLoginPage as HotelManagerLoginPage;

class HotelManagerLoginSteps extends \AcceptanceTester
{
    /**
     * @Then I type email as :arg1
     */
    public function iTypeEmailAs($userName)
    {
        $I = $this;
        $I->fillField(HotelManagerLoginPage::$emailTextField, $userName); //enter email
    }

    /**
     * @Then I type password as :arg1
     */
    public function iTypePasswordAs($password)
    {
        $I = $this;
        $I->fillField(HotelManagerLoginPage::$passwordTextField, $password);//enter password
    }

    /**
     * @Then I should see :arg1 error message as :arg2
     */
    public function iShouldSeeErrorMessageAs($errorType, $errorMessage)
    {
        $I = $this;

        //Verify the error message for invalid email,password and invalid credentials
        if ($errorType == 'password')
            $I->seeElement(HotelManagerLoginPage::$passwordErrorMessage);
        elseif ($errorType == 'email')
            $I->seeElement(HotelManagerLoginPage::$emailErrorMessage);
        else
            $I->seeElement(HotelManagerLoginPage::$generalErrorMessage);

        //verify the error message
        $I->see($errorMessage);
    }


}