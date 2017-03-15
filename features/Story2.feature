 Feature: Submit email for reminder

 	Background:
 		Given I am on "/"

 	@javascript
	Scenario Outline: In order to be reminded of upcoming shoe releases As a user of the Shoe Store I want to be able to submit my email address
		Then I should see "Welcome to Shoe Store!"
		Then I should see an ".navbar-collapse" element
		Then I should see "January" in the ".navbar-nav" element
		Then I should see "February" in the ".navbar-nav" element
		Then I should see "March" in the ".navbar-nav" element
		Then I should see "April" in the ".navbar-nav" element
		Then I should see "May" in the ".navbar-nav" element
		Then I should see "June" in the ".navbar-nav" element
		Then I should see "July" in the ".navbar-nav" element
		Then I should see "August" in the ".navbar-nav" element
		Then I should see "September" in the ".navbar-nav" element
		Then I should see "October" in the ".navbar-nav" element
		Then I should see "November" in the ".navbar-nav" element
		Then I should see "December" in the ".navbar-nav" element
		Then I should see "All Shoes" in the ".navbar-nav" element
		Then I should see an "div[class='col-md-6'] > form[id='remind_email_form']" element
		When I fill in "<username>" for "email"
		Then I press "remind_email_submit"
		And I should see "Thanks! We will notify you of our new shoes at this email:" in the "div[class='flash flash_success']"

		Examples:
			| username |
			| mhfarooq7@gmail.com |

