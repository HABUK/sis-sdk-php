<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\StandardizedAssessmentBatch;

class StandardizedAssessmentBatchTarget extends ModelBase
{
    const STANDARDIZED_ASSESSMENT_BATCH = 'standardizedAssessmentBatch';

    const TARGET = 'target';

    protected $_resourceType = ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return StandardizedAssessmentBatchTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("StandardizedAssessmentBatchTarget");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StandardizedAssessmentBatchTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::STANDARDIZED_ASSESSMENT_BATCH_TARGET, $id);
    }

    /**
     * @return StandardizedAssessmentBatch
     */
    public function getStandardizedAssessmentBatch()
    {
        return $this->getProperty("standardizedAssessmentBatch");
    }

    /**
     * @param StandardizedAssessmentBatch $standardizedAssessmentBatch
     */
    public function setStandardizedAssessmentBatch(StandardizedAssessmentBatch $standardizedAssessmentBatch = null)
    {
        $this->setProperty("standardizedAssessmentBatch", $standardizedAssessmentBatch);
    }

    /**
     * @return ModelBase
     */
    public function getTarget()
    {
        return $this->getProperty("target");
    }

    /**
     * @param ModelBase $target
     */
    public function setTarget(ModelBase $target = null)
    {
        $this->setProperty("target", $target);
    }
}
