 Feature: Monthly display for new releases


	Scenario: In order to view upcoming shoes being released every month As a user of the shoe store I want to be able to visit a link for each month and see the shoes being released

		Given I am on "/"
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
		When I follow "January"
		Then the url should match "/months/january"
		Then I should see "January's Shoes" in the ".title > h2" element
		Then I should see an "#jimmy_choo_jimmy_choo_kendall_crystal_pump" element
		Then I should see an "td[class='shoe_image'] > img[alt='']" element
		Then I should see an "tr[class='shoe_result_row'] > td[class='shoe_result_label']" element
		Then I should see an "tr[class='shoe_result_row'] > td[class='shoe_result_value shoe_price']" element