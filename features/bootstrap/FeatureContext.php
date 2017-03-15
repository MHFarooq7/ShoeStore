<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext 
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @BeforeScenario
    
    public function beforeScenario()
    {
      $this->getSession()->getDriver()->resizeWindow(1440, 900);
    }
     */

    /**
     * @AfterStep
     */
    public function takeScreenshotAfterFailedStep($event)
    {
      if ($event->getResult() == 4) {
        if ($this->getSession()->getDriver() instanceof \Behat\Mink\Driver\Selenium2Driver) {
          $screenshot = $this->getSession()->getDriver()->getScreenshot();
          file_put_contents('/tmp/screenshot.png', $screenshot);
        }
      }
    }

    /**
     * @Then /^I should see the link "([^"]*)"$/
     */
    /**
     * @When /^I click on the element with xpath "([^"]*)"$/
     */
    public function iClickOnTheElementWithXpath($xpath)
    {
        $session = $this->getSession(); //get the mink session
        $element = $session->getPage()->find(
            'xpath',
            $session->getSelectorsHandler()->selectorToXpath('xpath', $xpath)
            ); //runs the actual query and returns the element
        //errors must not pass silently
        if (null == $element) {
            Throw new \InvalidArgumentException(sprintf('Could not evaluate xpath: "%s"',$xpath));
    }
    // ok Lets click on it
    $element->click();
}


        
   /**
     * @Then /^I wait (\d+) seconds$/
     */
    public function iWaitSeconds()
    {
        $this->getSession()->wait(5000);
    }
     /**
     * @Given /^I should see the option "([^"]*)" selected in "([^"]*)" dropdown$/
     */
   public function iShouldSeeTheOptionSelectedInDropdown($option, $field) {
    $selector = $field;
    // Some fields do not have label, so set the selector here
    if (strtolower($field) == "default notification") {
      $selector = "edit-projects-default";
    }
    $chk = $this->getSession()->getPage()->findField($field);
    // Make sure that the dropdown $field and the value $option exists in the dropdown
    $optionObj = $chk->findAll('xpath', '//option[@selected="selected"]');
    // Check if at least one value is selected
    if (empty($optionObj)) {
      throw new \Exception("The field '" . $field . "' does not have any options selected");
    }
    $found = false;
    foreach ($optionObj as $opt) {
      if ($opt->getText() == $option) {
        $found = true;
        break;
      }
    }
    if (!$found) {
      throw new \Exception("The field '" . $field . "' does not have the option '" . $option . "' selected");
    }

  }
    /**
     * @Then /^I should not see "([^"]*)" in the "([^"]*)"$/
     */
    public function iShouldNotSeeInThe($arg1, $arg2)
    {
        throw new PendingException();
    }
        /**
     * @Then /^I should see "([^"]*)" \+ "([^"]*)" in the "([^"]*)"$/
     */
    public function iShouldSeeInThe($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }
     /**
     * @Then /^I should see "([^"]*)" in the "([^"]*)"$/
     */
    public function iShouldSeeInThe2($arg1, $arg2)
    {
        throw new PendingException();
    }

  
  
}
