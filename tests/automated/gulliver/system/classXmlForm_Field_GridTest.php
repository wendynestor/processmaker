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

class classXmlForm_Field_GridTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var XmlForm_Field_Grid
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new XmlForm_Field_Grid();
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
        $this->assertTrue( count($methods) == 27);
    }

    /**
    * @covers XmlForm_Field_Grid::XmlForm_Field_Grid
    * @todo   Implement testXmlForm_Field_Grid().
    */
    public function testXmlForm_Field_Grid()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('XmlForm_Field_Grid', $methods ), 'exists method XmlForm_Field_Grid' );
        $r = new ReflectionMethod('XmlForm_Field_Grid', 'XmlForm_Field_Grid');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'xmlnode');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'language');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'home');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Grid::parseFile
    * @todo   Implement testparseFile().
    */
    public function testparseFile()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('parseFile', $methods ), 'exists method parseFile' );
        $r = new ReflectionMethod('XmlForm_Field_Grid', 'parseFile');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'home');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'language');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Grid::render
    * @todo   Implement testrender().
    */
    public function testrender()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('render', $methods ), 'exists method render' );
        $r = new ReflectionMethod('XmlForm_Field_Grid', 'render');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'values');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Grid::renderGrid
    * @todo   Implement testrenderGrid().
    */
    public function testrenderGrid()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('renderGrid', $methods ), 'exists method renderGrid' );
        $r = new ReflectionMethod('XmlForm_Field_Grid', 'renderGrid');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'values');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'owner');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'therow');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '-1');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers XmlForm_Field_Grid::flipValues
    * @todo   Implement testflipValues().
    */
    public function testflipValues()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('flipValues', $methods ), 'exists method flipValues' );
        $r = new ReflectionMethod('XmlForm_Field_Grid', 'flipValues');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'values');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
