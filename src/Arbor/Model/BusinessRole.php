<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class BusinessRole extends ModelBase
{

    const SWF_CENSUS_IDENTIFIER = 'swfCensusIdentifier';

    const MANAGED_BY_CLIENT = 'managedByClient';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const BUSINESS_ROLE_NAME = 'businessRoleName';

    const USER_DEFINED_NAME = 'userDefinedName';

    const BUSINESS_ROLE_DESCRIPTION = 'businessRoleDescription';

    const USER_DEFINED_DESCRIPTION = 'userDefinedDescription';

    const INTERNAL_STAFF = 'internalStaff';

    const TEACHING_STAFF = 'teachingStaff';

    const CUSTOMER_MANAGES_DEFAULT_USER_ROLES = 'customerManagesDefaultUserRoles';

    protected $_resourceType = ResourceType::BUSINESS_ROLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return BusinessRole[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BusinessRole");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BusinessRole
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BUSINESS_ROLE, $id);
    }

    /**
     * @return string
     */
    public function getSwfCensusIdentifier()
    {
        return $this->getProperty("swfCensusIdentifier");
    }

    /**
     * @param string $swfCensusIdentifier
     */
    public function setSwfCensusIdentifier($swfCensusIdentifier = null)
    {
        $this->setProperty("swfCensusIdentifier", $swfCensusIdentifier);
    }

    /**
     * @return bool
     */
    public function getManagedByClient()
    {
        return $this->getProperty("managedByClient");
    }

    /**
     * @param bool $managedByClient
     */
    public function setManagedByClient($managedByClient = null)
    {
        $this->setProperty("managedByClient", $managedByClient);
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
    public function getBusinessRoleName()
    {
        return $this->getProperty("businessRoleName");
    }

    /**
     * @param string $businessRoleName
     */
    public function setBusinessRoleName($businessRoleName = null)
    {
        $this->setProperty("businessRoleName", $businessRoleName);
    }

    /**
     * @return string
     */
    public function getUserDefinedName()
    {
        return $this->getProperty("userDefinedName");
    }

    /**
     * @param string $userDefinedName
     */
    public function setUserDefinedName($userDefinedName = null)
    {
        $this->setProperty("userDefinedName", $userDefinedName);
    }

    /**
     * @return string
     */
    public function getBusinessRoleDescription()
    {
        return $this->getProperty("businessRoleDescription");
    }

    /**
     * @param string $businessRoleDescription
     */
    public function setBusinessRoleDescription($businessRoleDescription = null)
    {
        $this->setProperty("businessRoleDescription", $businessRoleDescription);
    }

    /**
     * @return string
     */
    public function getUserDefinedDescription()
    {
        return $this->getProperty("userDefinedDescription");
    }

    /**
     * @param string $userDefinedDescription
     */
    public function setUserDefinedDescription($userDefinedDescription = null)
    {
        $this->setProperty("userDefinedDescription", $userDefinedDescription);
    }

    /**
     * @return bool
     */
    public function getInternalStaff()
    {
        return $this->getProperty("internalStaff");
    }

    /**
     * @param bool $internalStaff
     */
    public function setInternalStaff($internalStaff = null)
    {
        $this->setProperty("internalStaff", $internalStaff);
    }

    /**
     * @return bool
     */
    public function getTeachingStaff()
    {
        return $this->getProperty("teachingStaff");
    }

    /**
     * @param bool $teachingStaff
     */
    public function setTeachingStaff($teachingStaff = null)
    {
        $this->setProperty("teachingStaff", $teachingStaff);
    }

    /**
     * @return bool
     */
    public function getCustomerManagesDefaultUserRoles()
    {
        return $this->getProperty("customerManagesDefaultUserRoles");
    }

    /**
     * @param bool $customerManagesDefaultUserRoles
     */
    public function setCustomerManagesDefaultUserRoles($customerManagesDefaultUserRoles = null)
    {
        $this->setProperty("customerManagesDefaultUserRoles", $customerManagesDefaultUserRoles);
    }


}
