<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.testTools.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:31.
*/

class classtestToolsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var testTools
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new testTools();
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
        $this->assertTrue( count($methods) == 7);
    }

    /**
    * @covers testTools::importDB
    * @todo   Implement testimportDB().
    */
    public function testimportDB()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('importDB', $methods ), 'exists method importDB' );
        $r = new ReflectionMethod('testTools', 'importDB');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'host');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'user');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'password');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'database');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
        $this->assertTrue( $params[4]->getName() == 'importFile');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::importLocalDB
    * @todo   Implement testimportLocalDB().
    */
    public function testimportLocalDB()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('importLocalDB', $methods ), 'exists method importLocalDB' );
        $r = new ReflectionMethod('testTools', 'importLocalDB');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'importFile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::callMethod
    * @todo   Implement testcallMethod().
    */
    public function testcallMethod()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('callMethod', $methods ), 'exists method callMethod' );
        $r = new ReflectionMethod('testTools', 'callMethod');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'methodFile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'GET');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'POST');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'SESSION');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::arrayAppend
    * @todo   Implement testarrayAppend().
    */
    public function testarrayAppend()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('arrayAppend', $methods ), 'exists method arrayAppend' );
        $r = new ReflectionMethod('testTools', 'arrayAppend');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'to');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'appendFrom');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::arrayDelete
    * @todo   Implement testarrayDelete().
    */
    public function testarrayDelete()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('arrayDelete', $methods ), 'exists method arrayDelete' );
        $r = new ReflectionMethod('testTools', 'arrayDelete');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'array');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::replaceVariables
    * @todo   Implement testreplaceVariables().
    */
    public function testreplaceVariables()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('replaceVariables', $methods ), 'exists method replaceVariables' );
        $r = new ReflectionMethod('testTools', 'replaceVariables');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'Fields');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'ExternalVariables');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'Array');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers testTools::findValue
    * @todo   Implement testfindValue().
    */
    public function testfindValue()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('findValue', $methods ), 'exists method findValue' );
        $r = new ReflectionMethod('testTools', 'findValue');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'value');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'obj');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
