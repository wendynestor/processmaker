<?php

class Services_Rest_ShadowTable
{
    /**
     * Implementation for 'GET' method for Rest API
     *
     * @param  mixed $shdUid Primary key
     *
     * @return array $result Returns array within multiple records or a single record depending if
     *                       a single selection was requested passing id(s) as param
     */
    protected function get($shdUid=null)
    {
        $result = array();
        try {
            if (func_num_args() == 0) {
                $criteria = new Criteria('workflow');

                $criteria->addSelectColumn(ShadowTablePeer::SHD_UID);
                $criteria->addSelectColumn(ShadowTablePeer::ADD_TAB_UID);
                $criteria->addSelectColumn(ShadowTablePeer::SHD_ACTION);
                $criteria->addSelectColumn(ShadowTablePeer::SHD_DETAILS);
                $criteria->addSelectColumn(ShadowTablePeer::USR_UID);
                $criteria->addSelectColumn(ShadowTablePeer::APP_UID);
                $criteria->addSelectColumn(ShadowTablePeer::SHD_DATE);
                
                $dataset = AppEventPeer::doSelectRS($criteria);
                $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);

                while ($dataset->next()) {
                    $result[] = $dataset->getRow();
                }
            } else {
                $record = ShadowTablePeer::retrieveByPK($shdUid);
                $result = $record->toArray(BasePeer::TYPE_FIELDNAME);
            }
        } catch (Exception $e) {
            throw new RestException(412, $e->getMessage());
        }
        
        return $result;
    }

    /**
     * Implementation for 'POST' method for Rest API
     *
     * @param  mixed $shdUid Primary key
     *
     * @return array $result Returns array within multiple records or a single record depending if
     *                       a single selection was requested passing id(s) as param
     */
    protected function post($shdUid, $addTabUid, $shdAction, $shdDetails, $usrUid, $appUid, $shdDate)
    {
        try {
            $result = array();
            $obj = new ShadowTable();

            $obj->setShdUid($shdUid);
            $obj->setAddTabUid($addTabUid);
            $obj->setShdAction($shdAction);
            $obj->setShdDetails($shdDetails);
            $obj->setUsrUid($usrUid);
            $obj->setAppUid($appUid);
            $obj->setShdDate($shdDate);
            
            $obj->save();
        } catch (Exception $e) {
            throw new RestException(412, $e->getMessage());
        }
    }

    /**
     * Implementation for 'PUT' method for Rest API
     *
     * @param  mixed $shdUid Primary key
     *
     * @return array $result Returns array within multiple records or a single record depending if
     *                       a single selection was requested passing id(s) as param
     */
    protected function put($shdUid, $addTabUid, $shdAction, $shdDetails, $usrUid, $appUid, $shdDate)
    {
        try {
            $obj = ShadowTablePeer::retrieveByPK($shdUid);

            $obj->setAddTabUid($addTabUid);
            $obj->setShdAction($shdAction);
            $obj->setShdDetails($shdDetails);
            $obj->setUsrUid($usrUid);
            $obj->setAppUid($appUid);
            $obj->setShdDate($shdDate);
            
            $obj->save();
        } catch (Exception $e) {
            throw new RestException(412, $e->getMessage());
        }
    }

    /**
     * Implementation for 'DELETE' method for Rest API
     *
     * @param  mixed $shdUid Primary key
     *
     * @return array $result Returns array within multiple records or a single record depending if
     *                       a single selection was requested passing id(s) as param
     */
    protected function delete($shdUid)
    {
        $conn = Propel::getConnection(ShadowTablePeer::DATABASE_NAME);
        
        try {
            $conn->begin();
        
            $obj = ShadowTablePeer::retrieveByPK($shdUid);
            if (! is_object($obj)) {
                throw new RestException(412, 'Record does not exist.');
            }
            $obj->delete();
        
            $conn->commit();
        } catch (Exception $e) {
            $conn->rollback();
            throw new RestException(412, $e->getMessage());
        }
    }


}
