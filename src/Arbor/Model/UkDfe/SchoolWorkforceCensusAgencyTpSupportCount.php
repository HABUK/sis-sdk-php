<?php
namespace Arbor\Model\UkDfe;

use \Arbor\Resource\UkDfe\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\UkDfe\SchoolWorkforceCensus;
use \Arbor\Model\EducationalInstitution;
use \Arbor\Model\BusinessRole;

class SchoolWorkforceCensusAgencyTpSupportCount extends ModelBase
{
    const SCHOOL_WORKFORCE_CENSUS = 'schoolWorkforceCensus';

    const EDUCATIONAL_INSTITUTION = 'educationalInstitution';

    const BUSINESS_ROLE = 'businessRole';

    const AGENCY_TP_SUPPORT_CATEGORY = 'agencyTpSupportCategory';

    const SUP_HEAD_COUNT = 'supHeadCount';

    protected $_resourceType = ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_AGENCY_TP_SUPPORT_COUNT;

    /**
     * @param \Arbor\Query\Query $query
     * @return SchoolWorkforceCensusAgencyTpSupportCount[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("UkDfe_SchoolWorkforceCensusAgencyTpSupportCount");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SchoolWorkforceCensusAgencyTpSupportCount
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::UK_DFE_SCHOOL_WORKFORCE_CENSUS_AGENCY_TP_SUPPORT_COUNT, $id);
    }

    /**
     * @return SchoolWorkforceCensus
     */
    public function getSchoolWorkforceCensus()
    {
        return $this->getProperty("schoolWorkforceCensus");
    }

    /**
     * @param SchoolWorkforceCensus $schoolWorkforceCensus
     */
    public function setSchoolWorkforceCensus(SchoolWorkforceCensus $schoolWorkforceCensus = null)
    {
        $this->setProperty("schoolWorkforceCensus", $schoolWorkforceCensus);
    }

    /**
     * @return EducationalInstitution
     */
    public function getEducationalInstitution()
    {
        return $this->getProperty("educationalInstitution");
    }

    /**
     * @param EducationalInstitution $educationalInstitution
     */
    public function setEducationalInstitution(EducationalInstitution $educationalInstitution = null)
    {
        $this->setProperty("educationalInstitution", $educationalInstitution);
    }

    /**
     * @return BusinessRole
     */
    public function getBusinessRole()
    {
        return $this->getProperty("businessRole");
    }

    /**
     * @param BusinessRole $businessRole
     */
    public function setBusinessRole(BusinessRole $businessRole = null)
    {
        $this->setProperty("businessRole", $businessRole);
    }

    /**
     * @return string
     */
    public function getAgencyTpSupportCategory()
    {
        return $this->getProperty("agencyTpSupportCategory");
    }

    /**
     * @param string $agencyTpSupportCategory
     */
    public function setAgencyTpSupportCategory($agencyTpSupportCategory = null)
    {
        $this->setProperty("agencyTpSupportCategory", $agencyTpSupportCategory);
    }

    /**
     * @return int
     */
    public function getSupHeadCount()
    {
        return $this->getProperty("supHeadCount");
    }

    /**
     * @param int $supHeadCount
     */
    public function setSupHeadCount($supHeadCount = null)
    {
        $this->setProperty("supHeadCount", $supHeadCount);
    }
}
