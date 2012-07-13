<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.pluginRegistry.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:40.
*/

class classpluginDetailTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var pluginDetail
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new pluginDetail();
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
        $this->assertTrue( count($methods) == 1);
    }

    /**
    * @covers pluginDetail::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('pluginDetail', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sNamespace');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sClassName');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'sFilename');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'sFriendlyName');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'sPluginFolder');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'sDescription');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->assertTrue( $params[6]->getName() == 'sSetupPage');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == '');
        $this->assertTrue( $params[7]->getName() == 'iVersion');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == true);
        $this->assertTrue( $params[7]->getDefaultValue() == '0');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
