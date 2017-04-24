<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\ProgressAssessmentBatchTarget;
use \Arbor\Model\ProgressMeasurementPeriod;

class ProgressAssessmentBatchTargetMeasurementPeriod extends ModelBase
{
    const PROGRESS_ASSESSMENT_BATCH_TARGET = 'progressAssessmentBatchTarget';

    const PROGRESS_MEASUREMENT_PERIOD = 'progressMeasurementPeriod';

    const MARKING_STARTED_DATETIME = 'markingStartedDatetime';

    const MARKING_COMPLETED_DATETIME = 'markingCompletedDatetime';

    const MARKING_FINALIZED_DATETIME = 'markingFinalizedDatetime';

    protected $_resourceType = ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD;

    /**
     * @param \Arbor\Query\Query $query
     * @return ProgressAssessmentBatchTargetMeasurementPeriod[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("ProgressAssessmentBatchTargetMeasurementPeriod");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return ProgressAssessmentBatchTargetMeasurementPeriod
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD, $id);
    }

    /**
     * @return ProgressAssessmentBatchTarget
     */
    public function getProgressAssessmentBatchTarget()
    {
        return $this->getProperty("progressAssessmentBatchTarget");
    }

    /**
     * @param ProgressAssessmentBatchTarget $progressAssessmentBatchTarget
     */
    public function setProgressAssessmentBatchTarget(ProgressAssessmentBatchTarget $progressAssessmentBatchTarget = null)
    {
        $this->setProperty("progressAssessmentBatchTarget", $progressAssessmentBatchTarget);
    }

    /**
     * @return ProgressMeasurementPeriod
     */
    public function getProgressMeasurementPeriod()
    {
        return $this->getProperty("progressMeasurementPeriod");
    }

    /**
     * @param ProgressMeasurementPeriod $progressMeasurementPeriod
     */
    public function setProgressMeasurementPeriod(ProgressMeasurementPeriod $progressMeasurementPeriod = null)
    {
        $this->setProperty("progressMeasurementPeriod", $progressMeasurementPeriod);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingStartedDatetime()
    {
        return $this->getProperty("markingStartedDatetime");
    }

    /**
     * @param \DateTime $markingStartedDatetime
     */
    public function setMarkingStartedDatetime(\DateTime $markingStartedDatetime = null)
    {
        $this->setProperty("markingStartedDatetime", $markingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingCompletedDatetime()
    {
        return $this->getProperty("markingCompletedDatetime");
    }

    /**
     * @param \DateTime $markingCompletedDatetime
     */
    public function setMarkingCompletedDatetime(\DateTime $markingCompletedDatetime = null)
    {
        $this->setProperty("markingCompletedDatetime", $markingCompletedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getMarkingFinalizedDatetime()
    {
        return $this->getProperty("markingFinalizedDatetime");
    }

    /**
     * @param \DateTime $markingFinalizedDatetime
     */
    public function setMarkingFinalizedDatetime(\DateTime $markingFinalizedDatetime = null)
    {
        $this->setProperty("markingFinalizedDatetime", $markingFinalizedDatetime);
    }
}
