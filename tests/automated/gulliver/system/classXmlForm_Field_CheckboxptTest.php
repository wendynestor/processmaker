<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:30.
*/

class classXmlForm_Field_CheckboxptTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var XmlForm_Field_Checkboxpt
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new XmlForm_Field_Checkboxpt();
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
        $this->assertTrue( count($methods) == 24);
    }

    /**
    * @covers XmlForm_Field_Checkboxpt::render
    * @todo   Implement testrender().
    */
    public function testrender()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('render', $methods ), 'exists method render' );
        $r = new ReflectionMethod('XmlForm_Field_Checkboxpt', 'render');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Checkboxpt::renderGrid
    * @todo   Implement testrenderGrid().
    */
    public function testrenderGrid()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('renderGrid', $methods ), 'exists method renderGrid' );
        $r = new ReflectionMethod('XmlForm_Field_Checkboxpt', 'renderGrid');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'values');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Checkboxpt::maskValue
    * @todo   Implement testmaskValue().
    */
    public function testmaskValue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('maskValue', $methods ), 'exists method maskValue' );
        $r = new ReflectionMethod('XmlForm_Field_Checkboxpt', 'maskValue');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
