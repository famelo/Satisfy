Feature:
  In order to manage Users
  As a administrator
  I need to be to create, update and delete users

  Scenario: Login
    When I am on homepage
    Then I should see an ".form-signin" element
    When I fill in "__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]" with "mneuhaus"
    And fill in "__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]" with "tigger"
    And press "Login"
    Then I should see an ".off-canvas" element

  Scenario: Let's create a new User
    Given I am on homepage
    When I follow "Nutzermanagement"
    When I follow "Neu"
    Then I should see an ".t3-expose-form" element