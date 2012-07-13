<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbMaintenance.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 20:28:28.
*/

class classDataBaseMaintenanceTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var DataBaseMaintenance
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new DataBaseMaintenance();
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
    * @covers DataBaseMaintenance::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('DataBaseMaintenance', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'host');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'user');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'passwd');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::setUser
    * @todo   Implement testsetUser().
    */
    public function testsetUser()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setUser', $methods ), 'exists method setUser' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'setUser');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'user');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::setPasswd
    * @todo   Implement testsetPasswd().
    */
    public function testsetPasswd()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setPasswd', $methods ), 'exists method setPasswd' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'setPasswd');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'passwd');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::setHost
    * @todo   Implement testsetHost().
    */
    public function testsetHost()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setHost', $methods ), 'exists method setHost' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'setHost');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'host');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::setTempDir
    * @todo   Implement testsetTempDir().
    */
    public function testsetTempDir()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setTempDir', $methods ), 'exists method setTempDir' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'setTempDir');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tmpDir');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::getTempDir
    * @todo   Implement testgetTempDir().
    */
    public function testgetTempDir()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getTempDir', $methods ), 'exists method getTempDir' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'getTempDir');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::status
    * @todo   Implement teststatus().
    */
    public function teststatus()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('status', $methods ), 'exists method status' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'status');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::connect
    * @todo   Implement testconnect().
    */
    public function testconnect()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('connect', $methods ), 'exists method connect' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'connect');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbname');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::setDbName
    * @todo   Implement testsetDbName().
    */
    public function testsetDbName()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('setDbName', $methods ), 'exists method setDbName' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'setDbName');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbname');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::selectDataBase
    * @todo   Implement testselectDataBase().
    */
    public function testselectDataBase()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('selectDataBase', $methods ), 'exists method selectDataBase' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'selectDataBase');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbname');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::query
    * @todo   Implement testquery().
    */
    public function testquery()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('query', $methods ), 'exists method query' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'query');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sql');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::error
    * @todo   Implement testerror().
    */
    public function testerror()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('error', $methods ), 'exists method error' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'error');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::getTablesList
    * @todo   Implement testgetTablesList().
    */
    public function testgetTablesList()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getTablesList', $methods ), 'exists method getTablesList' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'getTablesList');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::dumpData
    * @todo   Implement testdumpData().
    */
    public function testdumpData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('dumpData', $methods ), 'exists method dumpData' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'dumpData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'table');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::restoreData
    * @todo   Implement testrestoreData().
    */
    public function testrestoreData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('restoreData', $methods ), 'exists method restoreData' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'restoreData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'backupFile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::backupData
    * @todo   Implement testbackupData().
    */
    public function testbackupData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('backupData', $methods ), 'exists method backupData' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'backupData');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::backupSqlData
    * @todo   Implement testbackupSqlData().
    */
    public function testbackupSqlData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('backupSqlData', $methods ), 'exists method backupSqlData' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'backupSqlData');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::restoreAllData
    * @todo   Implement testrestoreAllData().
    */
    public function testrestoreAllData()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('restoreAllData', $methods ), 'exists method restoreAllData' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'restoreAllData');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'type');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::createDb
    * @todo   Implement testcreateDb().
    */
    public function testcreateDb()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('createDb', $methods ), 'exists method createDb' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'createDb');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'dbname');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'drop');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::restoreFromSql2
    * @todo   Implement testrestoreFromSql2().
    */
    public function testrestoreFromSql2()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('restoreFromSql2', $methods ), 'exists method restoreFromSql2' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'restoreFromSql2');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sqlfile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::lockTables
    * @todo   Implement testlockTables().
    */
    public function testlockTables()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('lockTables', $methods ), 'exists method lockTables' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'lockTables');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::unlockTables
    * @todo   Implement testunlockTables().
    */
    public function testunlockTables()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('unlockTables', $methods ), 'exists method unlockTables' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'unlockTables');
        $params = $r->getParameters();
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::dumpSqlInserts
    * @todo   Implement testdumpSqlInserts().
    */
    public function testdumpSqlInserts()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('dumpSqlInserts', $methods ), 'exists method dumpSqlInserts' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'dumpSqlInserts');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'table');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::backupDataBase
    * @todo   Implement testbackupDataBase().
    */
    public function testbackupDataBase()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('backupDataBase', $methods ), 'exists method backupDataBase' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'backupDataBase');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'outfile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::restoreFromSql
    * @todo   Implement testrestoreFromSql().
    */
    public function testrestoreFromSql()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('restoreFromSql', $methods ), 'exists method restoreFromSql' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'restoreFromSql');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sqlfile');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'type');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == 'file');
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::getSchemaFromTable
    * @todo   Implement testgetSchemaFromTable().
    */
    public function testgetSchemaFromTable()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('getSchemaFromTable', $methods ), 'exists method getSchemaFromTable' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'getSchemaFromTable');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'tablename');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

    /**
    * @covers DataBaseMaintenance::removeCommentsIntoString
    * @todo   Implement testremoveCommentsIntoString().
    */
    public function testremoveCommentsIntoString()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('removeCommentsIntoString', $methods ), 'exists method removeCommentsIntoString' );
        $r = new ReflectionMethod('DataBaseMaintenance', 'removeCommentsIntoString');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'str');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->markTestIncomplete('This test has not been implemented yet.');

    } 

  } 
