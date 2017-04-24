<?php
namespace Arbor\Model\Group;

use \Arbor\Resource\Group\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Group\Institution;
use \Arbor\Model\SchoolPhase;

class SchoolPhaseAssignment extends ModelBase
{
    const INSTITUTION = 'institution';

    const SCHOOL_PHASE = 'schoolPhase';

    const START_DATE = 'startDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::GROUP_SCHOOL_PHASE_ASSIGNMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolPhaseAssignment[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Group_SchoolPhaseAssignment");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolPhaseAssignment
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::GROUP_SCHOOL_PHASE_ASSIGNMENT, $id);
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->getProperty("institution");
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution(Institution $institution = null)
    {
        $this->setProperty("institution", $institution);
    }

    /**
     * @return SchoolPhase
     */
    public function getSchoolPhase()
    {
        return $this->getProperty("schoolPhase");
    }

    /**
     * @param SchoolPhase $schoolPhase
     */
    public function setSchoolPhase(SchoolPhase $schoolPhase = null)
    {
        $this->setProperty("schoolPhase", $schoolPhase);
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->getProperty("startDate");
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->setProperty("startDate", $startDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty("endDate");
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty("endDate", $endDate);
    }
}
