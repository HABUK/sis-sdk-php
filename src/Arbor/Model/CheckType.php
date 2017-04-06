<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class CheckType extends ModelBase
{

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const CHECK_NAME = 'checkName';

    const IS_REQUESTED = 'isRequested';

    const HAS_EXPIRY_DATE = 'hasExpiryDate';

    const HAS_REFERENCE_NUMBER = 'hasReferenceNumber';

    const EVIDENCE_REQUIRED = 'evidenceRequired';

    const RELATED_ENTITY_TYPE = 'relatedEntityType';

    const REQUEST_FROM_ALL_STAFF = 'requestFromAllStaff';

    const REQUEST_FROM_TEACHING_STAFF = 'requestFromTeachingStaff';

    protected $_resourceType = ResourceType::CHECK_TYPE;

    /**
     * @param \Arbor\Query\Query $query
     * @return CheckType[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CheckType");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CheckType
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CHECK_TYPE, $id);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->getProperty("code");
    }

    /**
     * @param string $code
     */
    public function setCode($code = null)
    {
        $this->setProperty("code", $code);
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->getProperty("active");
    }

    /**
     * @param bool $active
     */
    public function setActive($active = null)
    {
        $this->setProperty("active", $active);
    }

    /**
     * @return int
     */
    public function getDataOrder()
    {
        return $this->getProperty("dataOrder");
    }

    /**
     * @param int $dataOrder
     */
    public function setDataOrder($dataOrder = null)
    {
        $this->setProperty("dataOrder", $dataOrder);
    }

    /**
     * @return string
     */
    public function getCheckName()
    {
        return $this->getProperty("checkName");
    }

    /**
     * @param string $checkName
     */
    public function setCheckName($checkName = null)
    {
        $this->setProperty("checkName", $checkName);
    }

    /**
     * @return bool
     */
    public function getIsRequested()
    {
        return $this->getProperty("isRequested");
    }

    /**
     * @param bool $isRequested
     */
    public function setIsRequested($isRequested = null)
    {
        $this->setProperty("isRequested", $isRequested);
    }

    /**
     * @return bool
     */
    public function getHasExpiryDate()
    {
        return $this->getProperty("hasExpiryDate");
    }

    /**
     * @param bool $hasExpiryDate
     */
    public function setHasExpiryDate($hasExpiryDate = null)
    {
        $this->setProperty("hasExpiryDate", $hasExpiryDate);
    }

    /**
     * @return bool
     */
    public function getHasReferenceNumber()
    {
        return $this->getProperty("hasReferenceNumber");
    }

    /**
     * @param bool $hasReferenceNumber
     */
    public function setHasReferenceNumber($hasReferenceNumber = null)
    {
        $this->setProperty("hasReferenceNumber", $hasReferenceNumber);
    }

    /**
     * @return bool
     */
    public function getEvidenceRequired()
    {
        return $this->getProperty("evidenceRequired");
    }

    /**
     * @param bool $evidenceRequired
     */
    public function setEvidenceRequired($evidenceRequired = null)
    {
        $this->setProperty("evidenceRequired", $evidenceRequired);
    }

    /**
     * @return string
     */
    public function getRelatedEntityType()
    {
        return $this->getProperty("relatedEntityType");
    }

    /**
     * @param string $relatedEntityType
     */
    public function setRelatedEntityType($relatedEntityType = null)
    {
        $this->setProperty("relatedEntityType", $relatedEntityType);
    }

    /**
     * @return string
     */
    public function getRequestFromAllStaff()
    {
        return $this->getProperty("requestFromAllStaff");
    }

    /**
     * @param string $requestFromAllStaff
     */
    public function setRequestFromAllStaff($requestFromAllStaff = null)
    {
        $this->setProperty("requestFromAllStaff", $requestFromAllStaff);
    }

    /**
     * @return string
     */
    public function getRequestFromTeachingStaff()
    {
        return $this->getProperty("requestFromTeachingStaff");
    }

    /**
     * @param string $requestFromTeachingStaff
     */
    public function setRequestFromTeachingStaff($requestFromTeachingStaff = null)
    {
        $this->setProperty("requestFromTeachingStaff", $requestFromTeachingStaff);
    }


}
