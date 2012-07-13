<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.functionTest.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:28.
*/

class classfunctionTestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var functionTest
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new functionTest();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having 
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $this->assertTrue( count($methods) == 2);
    }

    /**
    * @covers functionTest::functionTest
    * @todo   Implement testfunctionTest().
    */
    public function testfunctionTest()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('functionTest', $methods ), 'exists method functionTest' );
        $r = new ReflectionMethod('functionTest', 'functionTest');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbc');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers functionTest::sample
    * @todo   Implement testsample().
    */
    public function testsample()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('sample', $methods ), 'exists method sample' );
        $r = new ReflectionMethod('functionTest', 'sample');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'testCase');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'testDomain');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'limeTestObject');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
