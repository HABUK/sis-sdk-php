<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\DetentionType;
use \Arbor\Model\TimetableSlot;

class DetentionSession extends ModelBase
{

    const START_DATETIME = 'startDatetime';

    const END_DATETIME = 'endDatetime';

    const LOCATION_TEXT = 'locationText';

    const LOCATION = 'location';

    const SCHEDULED_BY = 'scheduledBy';

    const DETENTION_TYPE = 'detentionType';

    const TIMETABLE_SLOT = 'timetableSlot';

    protected $_resourceType = ResourceType::DETENTION_SESSION;

    /**
     * @param \Arbor\Query\Query $query
     * @return DetentionSession[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("DetentionSession");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return DetentionSession
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::DETENTION_SESSION, $id);
    }

    /**
     * @return \DateTime
     */
    public function getStartDatetime()
    {
        return $this->getProperty("startDatetime");
    }

    /**
     * @param \DateTime $startDatetime
     */
    public function setStartDatetime(\DateTime $startDatetime = null)
    {
        $this->setProperty("startDatetime", $startDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->getProperty("endDatetime");
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime(\DateTime $endDatetime = null)
    {
        $this->setProperty("endDatetime", $endDatetime);
    }

    /**
     * @return string
     */
    public function getLocationText()
    {
        return $this->getProperty("locationText");
    }

    /**
     * @param string $locationText
     */
    public function setLocationText($locationText = null)
    {
        $this->setProperty("locationText", $locationText);
    }

    /**
     * @return ModelBase
     */
    public function getLocation()
    {
        return $this->getProperty("location");
    }

    /**
     * @param ModelBase $location
     */
    public function setLocation(ModelBase $location = null)
    {
        $this->setProperty("location", $location);
    }

    /**
     * @return ModelBase
     */
    public function getScheduledBy()
    {
        return $this->getProperty("scheduledBy");
    }

    /**
     * @param ModelBase $scheduledBy
     */
    public function setScheduledBy(ModelBase $scheduledBy = null)
    {
        $this->setProperty("scheduledBy", $scheduledBy);
    }

    /**
     * @return DetentionType
     */
    public function getDetentionType()
    {
        return $this->getProperty("detentionType");
    }

    /**
     * @param DetentionType $detentionType
     */
    public function setDetentionType(DetentionType $detentionType = null)
    {
        $this->setProperty("detentionType", $detentionType);
    }

    /**
     * @return TimetableSlot
     */
    public function getTimetableSlot()
    {
        return $this->getProperty("timetableSlot");
    }

    /**
     * @param TimetableSlot $timetableSlot
     */
    public function setTimetableSlot(TimetableSlot $timetableSlot = null)
    {
        $this->setProperty("timetableSlot", $timetableSlot);
    }


}
