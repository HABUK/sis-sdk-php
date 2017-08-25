<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class ApplicationAppeal extends ModelBase
{
    const APPLICATION = 'application';

    const NARRATIVE = 'narrative';

    const LODGED_DATE = 'lodgedDate';

    const WITHDRAWN_DATE = 'withdrawnDate';

    const HEARING_DATE = 'hearingDate';

    const DECISION_DATETIME = 'decisionDatetime';

    const DECISION = 'decision';

    protected $_resourceType = ResourceType::APPLICATION_APPEAL;

    /**
     * @param Query $query
     * @return ApplicationAppeal[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::APPLICATION_APPEAL);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return ApplicationAppeal
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::APPLICATION_APPEAL, $id);
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->getProperty('application');
    }

    /**
     * @param Application $application
     */
    public function setApplication(Application $application = null)
    {
        $this->setProperty('application', $application);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty('narrative');
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty('narrative', $narrative);
    }

    /**
     * @return \DateTime
     */
    public function getLodgedDate()
    {
        return $this->getProperty('lodgedDate');
    }

    /**
     * @param \DateTime $lodgedDate
     */
    public function setLodgedDate(\DateTime $lodgedDate = null)
    {
        $this->setProperty('lodgedDate', $lodgedDate);
    }

    /**
     * @return \DateTime
     */
    public function getWithdrawnDate()
    {
        return $this->getProperty('withdrawnDate');
    }

    /**
     * @param \DateTime $withdrawnDate
     */
    public function setWithdrawnDate(\DateTime $withdrawnDate = null)
    {
        $this->setProperty('withdrawnDate', $withdrawnDate);
    }

    /**
     * @return \DateTime
     */
    public function getHearingDate()
    {
        return $this->getProperty('hearingDate');
    }

    /**
     * @param \DateTime $hearingDate
     */
    public function setHearingDate(\DateTime $hearingDate = null)
    {
        $this->setProperty('hearingDate', $hearingDate);
    }

    /**
     * @return \DateTime
     */
    public function getDecisionDatetime()
    {
        return $this->getProperty('decisionDatetime');
    }

    /**
     * @param \DateTime $decisionDatetime
     */
    public function setDecisionDatetime(\DateTime $decisionDatetime = null)
    {
        $this->setProperty('decisionDatetime', $decisionDatetime);
    }

    /**
     * @return string
     */
    public function getDecision()
    {
        return $this->getProperty('decision');
    }

    /**
     * @param string $decision
     */
    public function setDecision($decision = null)
    {
        $this->setProperty('decision', $decision);
    }
}
