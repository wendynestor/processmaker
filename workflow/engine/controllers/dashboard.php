<?php
/**
 * Dashboard controller
 * @inherits Controller
 * @access public
 */

class Dashboard extends Controller {

  // Class properties
  private $pmDashlet;

  // Class constructor
  public function __construct() {
    G::LoadClass('pmDashlet');
    $this->pmDashlet = new PMDashlet();
  }

  // Functions for the dashboards users module - Start

  public function index($httpData) {
    try {
      $this->setJSVar('dashletsInstances', $this->getDashletsInstancesForCurrentUser());
      $this->includeExtJS('dashboard/index');
      $this->includeExtJSLib('ux/portal');
      G::RenderPage('publish', 'extJs');
    }
    catch (Exception $error) {
      //ToDo: Display a error message
    }
  }

  public function renderDashletInstance($data) {
    try {
      if (!isset($data->DAS_INS_UID)) {
        $data->DAS_INS_UID = '';
      }
      if ($data->DAS_INS_UID == '') {
        throw new Exception('Parameter "DAS_INS_UID" is empty.');
      }
      $this->pmDashlet->setup($data->DAS_INS_UID);

      if (!isset($_REQUEST['w']) ) {
        $width = 300;
      }
      else {
        $width = $_REQUEST['w'];
      }
      $this->pmDashlet->render( $width);
    }
    catch (Exception $error) {
      //ToDo: Render a image with the error message
    }
  }

  private function getDashletsInstancesForCurrentUser() {
    try {
      if (!isset($_SESSION['USER_LOGGED'])) {
        throw new Exception('The session has expired.');
      }
      return $this->pmDashlet->getDashletsInstancesForUser($_SESSION['USER_LOGGED']);
    }
    catch (Exception $error) {
      throw $error;
    }
  }

  // Functions for the dashboards users module - End

  // Functions for the dasboards administration module - Start

  public function dashletsList() {
    try {
      $this->includeExtJS('dashboard/dashletsList');
      $this->setView('dashboard/dashletsList');
      G::RenderPage('publish', 'extJs');
    }
    catch (Exception $error) {
      //ToDo: Display a error message
    }
  }

  public function getDashletsInstances($data) {
    $this->setResponseType('json');
    $result = new stdclass();
    $result->status = 'OK';
    try {
      if (!isset($data->start)) {
        $data->start = null;
      }
      if (!isset($data->limit)) {
        $data->limit = null;
      }
      $result->dashletsInstances = $this->pmDashlet->getDashletsInstances($data->start, $data->limit);
      $result->totalDashletsInstances = $this->pmDashlet->getDashletsInstancesQuantity();
    }
    catch (Exception $error) {
      $result->status = 'ERROR';
      $result->message = $error->getMessage();
    }
    return $result;
  }

  public function dashletInstanceForm($data) {
    try {
      $this->includeExtJS('dashboard/dashletInstanceForm', false);
      $this->setView('dashboard/dashletInstanceForm');
      if (!isset($data->DAS_INS_UID)) {
        $data->DAS_INS_UID = '';
      }
      if ($data->DAS_INS_UID != '') {
        $this->pmDashlet->setup($data->DAS_INS_UID);
        $this->setJSVar('dashletInstance', $this->pmDashlet->getDashletInstance());
        $this->setJSVar('additionaFields', $this->pmDashlet->getAdditionalFields());
      }
      else {
        $this->setJSVar('dashletInstance', new stdclass());
        $this->setJSVar('additionaFields', $this->pmDashlet->getAdditionalFields());
      }
      G::RenderPage('publish', 'extJs');
      return null;
    }
    catch (Exception $error) {
      //ToDo: Display a error message
      error_log($error->getMessage());
    }
  }

  public function saveDashletInstance($data) {
    $this->setResponseType('json');
    $result = new stdclass();
    $result->status = 'OK';
    try {
      $this->pmDashlet->saveDashletInstance(get_object_vars($data));
    }
    catch (Exception $error) {
      $result->status = 'ERROR';
      $result->message = $error->getMessage();
    }
    return $result;
  }

  public function deleteDashletInstance($data) {
    $this->setResponseType('json');
    $result = new stdclass();
    $result->status = 'OK';
    try {
      if (!isset($data->DAS_INS_UID)) {
        $data->DAS_INS_UID = '';
      }
      if ($data->DAS_INS_UID == '') {
        throw new Exception('Parameter "DAS_INS_UID" is empty.');
      }
      $this->pmDashlet->deleteDashletInstance($data->DAS_INS_UID);
    }
    catch (Exception $error) {
      $result->status = 'ERROR';
      $result->message = $error->getMessage();
    }
    return $result;
  }

  public function getOwnersByType($data) {
    $this->setResponseType('json');
    $result = new stdclass();
    $result->status = 'OK';
    try {
      switch ($data->type) {
        case 'USER':
          require_once 'classes/model/Users.php';

          $users = array();

          $usersInstance = new Users();
          $allUsers = $usersInstance->getAll();
          foreach ($allUsers->data as $user) {
            $users[] = array('OWNER_UID' => $user['USR_UID'], 'OWNER_NAME' => $user['USR_FIRSTNAME'] . ' ' . $user['USR_LASTNAME']);
          }

          $result->total = $allUsers->totalCount;
          $result->owners = $users;
        break;
        case 'DEPARTMENT':
          require_once 'classes/model/Department.php';
          require_once 'classes/model/Content.php';

          $departments = array();
          //SELECT
          $criteria = new Criteria('workflow');
          $criteria->setDistinct();
          $criteria->addSelectColumn(DepartmentPeer::DEP_UID);
          $criteria->addSelectColumn(ContentPeer::CON_VALUE);
          //FROM
          $conditions   = array();
          $conditions[] = array(DepartmentPeer::DEP_UID, ContentPeer::CON_ID);
          $conditions[] = array(ContentPeer::CON_CATEGORY, DBAdapter::getStringDelimiter() . 'DEPO_TITLE' . DBAdapter::getStringDelimiter());
          $conditions[] = array(ContentPeer::CON_LANG, DBAdapter::getStringDelimiter() . 'en' . DBAdapter::getStringDelimiter());
          $criteria->addJoinMC($conditions, Criteria::LEFT_JOIN);
          //WHERE
          $criteria->add(DepartmentPeer::DEP_STATUS, 'ACTIVE');
          //ORDER BY
          $criteria->addAscendingOrderByColumn(ContentPeer::CON_VALUE);

          $dataset = DepartmentPeer::doSelectRS($criteria);
          $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);
          $dataset->next();
          while ($row = $dataset->getRow()) {
            $departments[] = array('OWNER_UID' => $row['DEP_UID'], 'OWNER_NAME' => $row['CON_VALUE']);
            $dataset->next();
          }

          $result->total = DepartmentPeer::doCount($criteria);
          $result->owners = $departments;
        break;
        case 'GROUP':
          require_once 'classes/model/Groupwf.php';
          require_once 'classes/model/Content.php';

          $groups = array();
          //SELECT
          $criteria = new Criteria('workflow');
          $criteria->setDistinct();
          $criteria->addSelectColumn(GroupwfPeer::GRP_UID);
          $criteria->addSelectColumn(ContentPeer::CON_VALUE);
          //FROM
          $conditions   = array();
          $conditions[] = array(GroupwfPeer::GRP_UID, ContentPeer::CON_ID);
          $conditions[] = array(ContentPeer::CON_CATEGORY, DBAdapter::getStringDelimiter() . 'GRP_TITLE' . DBAdapter::getStringDelimiter());
          $conditions[] = array(ContentPeer::CON_LANG, DBAdapter::getStringDelimiter() . 'en' . DBAdapter::getStringDelimiter());
          $criteria->addJoinMC($conditions, Criteria::LEFT_JOIN);
          //WHERE
          $criteria->add(GroupwfPeer::GRP_STATUS, 'ACTIVE');
          //ORDER BY
          $criteria->addAscendingOrderByColumn(ContentPeer::CON_VALUE);

          $dataset = GroupwfPeer::doSelectRS($criteria);
          $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);
          $dataset->next();
          while ($row = $dataset->getRow()) {
            $groups[] = array('OWNER_UID' => $row['GRP_UID'], 'OWNER_NAME' => $row['CON_VALUE']);
            $dataset->next();
          }

          $result->total = GroupwfPeer::doCount($criteria);
          $result->owners = $groups;
        break;
      }
    }
    catch (Exception $error) {
      $result->status = 'ERROR';
      $result->message = $error->getMessage();
    }
    return $result;
  }

  public function getDashlets($data) {
    $this->setResponseType('json');
    $result = new stdclass();
    $result->status = 'OK';
    try {
      require_once 'classes/model/Dashlet.php';

      $dashlets = array();

      //SELECT
      $criteria = new Criteria('workflow');
      $criteria->addSelectColumn(DashletPeer::DAS_UID);
      $criteria->addSelectColumn(DashletPeer::DAS_TITLE);
      //ORDER BY
      $criteria->addAscendingOrderByColumn(DashletPeer::DAS_TITLE);

      $dataset = DashletPeer::doSelectRS($criteria);
      $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);
      $dataset->next();
      while ($row = $dataset->getRow()) {
        $dashlets[] = array('DAS_UID' => $row['DAS_UID'], 'DAS_TITLE' => $row['DAS_TITLE']);
        $dataset->next();
      }
      $result->total = DashletPeer::doCount($criteria);
      $result->dashlets = $dashlets;
    }
    catch (Exception $oException) {
      $result->status = 'ERROR';
      $result->message = $error->getMessage();
    }
    return $result;
  }

  // Functions for the dasboards administration module - End
}