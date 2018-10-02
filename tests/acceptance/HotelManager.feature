Feature: HotelManager

  Scenario: Hotel Manager - Verify Hotel Registration.
    Given I am on Hotel Manager home page
    When I navigate to "Register" page
    Then I should see registration form
    And I search for "Dusseldorf" as a hotel name
    Then I select "5" th hotel from the dropdown
    And I fill out the hotel registration form

  Scenario: Hotel Manager - Verify Consultation Registration.
    Given I am on Hotel Manager home page
    When I click on PRO logo on home page
    And I click "Watch video" button
    Then I verify "Watch video" button
    And  I click "Request consultation" button
    And I search "Dusseldorf" as a hotel name and select "5" th hotel
    And I fill out the consultation request form
    Then I check the confirmation message

  Scenario: Hotel Manager - Verify Login with Invalid Email address format.
    Given I am on Hotel Manager home page
    When I navigate to "Sign in" page
    Then I type email as "adb@"
    And I click "Log in" button
    Then I should see "email" error message as "This email is invalid. It must be in the format xx@yy.zz"

  Scenario: Hotel Manager - Verify Login with Valid Username and Invalid Password.
    Given I am on Hotel Manager home page
    When I navigate to "Sign in" page
    Then I type email as "test@trivago.com"
    Then I type password as "^%#"
    And I click "Log in" button
    Then I should see "general" error message as "Your username and password combination don't match. If you've forgotten your password, please click on"

  Scenario: Hotel Manager - Verify Login with blank Email field.
    Given I am on Hotel Manager home page
    When I navigate to "Sign in" page
    Then I type email as ""
    And I click "Log in" button
    Then I should see "email" error message as "This field is required"

  Scenario: Hotel Manager - Verify Login with blank Password field.
    Given I am on Hotel Manager home page
    When I navigate to "Sign in" page
    Then I type password as ""
    And I click "Log in" button
    Then I should see "password" error message as "This field is required"

  Scenario: Hotel Manager - Verify Forgot your password link.
    Given I am on Hotel Manager home page
    When I navigate to "Sign in" page
    And I click "Forgot your password?" button
    Then I use "test@trivago.com" for reset password
    And I click "Reset password" button
    Then I verify request has been sent successfully