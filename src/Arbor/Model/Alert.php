<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Trigger;

class Alert extends ModelBase
{
    const TRIGGER = 'trigger';

    const REFERENCE_DATE = 'referenceDate';

    const OBJECT = 'object';

    const SEVERITY = 'severity';

    const ALERT_PARAMS = 'alertParams';

    const SILENCED_DATETIME = 'silencedDatetime';

    const ACTION_DATETIME = 'actionDatetime';

    protected $_resourceType = ResourceType::ALERT;

    /**
     * @param \Arbor\Query\Query $query
     * @return Alert[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Alert");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Alert
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::ALERT, $id);
    }

    /**
     * @return Trigger
     */
    public function getTrigger()
    {
        return $this->getProperty("trigger");
    }

    /**
     * @param Trigger $trigger
     */
    public function setTrigger(Trigger $trigger = null)
    {
        $this->setProperty("trigger", $trigger);
    }

    /**
     * @return \DateTime
     */
    public function getReferenceDate()
    {
        return $this->getProperty("referenceDate");
    }

    /**
     * @param \DateTime $referenceDate
     */
    public function setReferenceDate(\DateTime $referenceDate = null)
    {
        $this->setProperty("referenceDate", $referenceDate);
    }

    /**
     * @return ModelBase
     */
    public function getObject()
    {
        return $this->getProperty("object");
    }

    /**
     * @param ModelBase $object
     */
    public function setObject(ModelBase $object = null)
    {
        $this->setProperty("object", $object);
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->getProperty("severity");
    }

    /**
     * @param string $severity
     */
    public function setSeverity($severity = null)
    {
        $this->setProperty("severity", $severity);
    }

    /**
     * @return string
     */
    public function getAlertParams()
    {
        return $this->getProperty("alertParams");
    }

    /**
     * @param string $alertParams
     */
    public function setAlertParams($alertParams = null)
    {
        $this->setProperty("alertParams", $alertParams);
    }

    /**
     * @return \DateTime
     */
    public function getSilencedDatetime()
    {
        return $this->getProperty("silencedDatetime");
    }

    /**
     * @param \DateTime $silencedDatetime
     */
    public function setSilencedDatetime(\DateTime $silencedDatetime = null)
    {
        $this->setProperty("silencedDatetime", $silencedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getActionDatetime()
    {
        return $this->getProperty("actionDatetime");
    }

    /**
     * @param \DateTime $actionDatetime
     */
    public function setActionDatetime(\DateTime $actionDatetime = null)
    {
        $this->setProperty("actionDatetime", $actionDatetime);
    }
}
