<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UserRole;

class Kpi extends ModelBase
{

    const FEATURE_IDENTIFIER = 'featureIdentifier';

    const PERMISSION_GROUP = 'permissionGroup';

    const VIEW_USER_ROLE = 'viewUserRole';

    const LIST_PERSON_DETAILS_USER_ROLE = 'listPersonDetailsUserRole';

    protected $_resourceType = ResourceType::GROUP_KPI;

    /**
     * @param \Arbor\Query\Query $query
     * @return Kpi[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("Group_Kpi");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Kpi
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::GROUP_KPI, $id);
    }

    /**
     * @return string
     */
    public function getFeatureIdentifier()
    {
        return $this->getProperty("featureIdentifier");
    }

    /**
     * @param string $featureIdentifier
     */
    public function setFeatureIdentifier($featureIdentifier = null)
    {
        $this->setProperty("featureIdentifier", $featureIdentifier);
    }

    /**
     * @return string
     */
    public function getPermissionGroup()
    {
        return $this->getProperty("permissionGroup");
    }

    /**
     * @param string $permissionGroup
     */
    public function setPermissionGroup($permissionGroup = null)
    {
        $this->setProperty("permissionGroup", $permissionGroup);
    }

    /**
     * @return UserRole
     */
    public function getViewUserRole()
    {
        return $this->getProperty("viewUserRole");
    }

    /**
     * @param UserRole $viewUserRole
     */
    public function setViewUserRole(UserRole $viewUserRole = null)
    {
        $this->setProperty("viewUserRole", $viewUserRole);
    }

    /**
     * @return UserRole
     */
    public function getListPersonDetailsUserRole()
    {
        return $this->getProperty("listPersonDetailsUserRole");
    }

    /**
     * @param UserRole $listPersonDetailsUserRole
     */
    public function setListPersonDetailsUserRole(UserRole $listPersonDetailsUserRole = null)
    {
        $this->setProperty("listPersonDetailsUserRole", $listPersonDetailsUserRole);
    }


}
