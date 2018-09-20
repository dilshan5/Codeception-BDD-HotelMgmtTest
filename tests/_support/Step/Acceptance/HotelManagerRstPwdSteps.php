<?php
namespace Step\Acceptance;
use Page\HotelManagerRstPwdPage as HotelManagerRstPwdPage;

class HotelManagerRstPwdSteps extends \AcceptanceTester
{

    /**
     * @Then I use :arg1 for reset password
     */
    public function iUseForResetPassword($email)
    {
        $I = $this;
        $I->fillField(HotelManagerRstPwdPage::$emailAddressTextField, $email);
    }

    /**
     * @Then I verify request has been sent successfully
     */
    public function iVerifyRequestHasBeenSentSuccessfully()
    {
        $I = $this;
        $I->waitForElementVisible(HotelManagerRstPwdPage::$alertMessageContainer, 5);//wait until request to be success
        $I->see('Password reset e-mail sent.');
    }

}