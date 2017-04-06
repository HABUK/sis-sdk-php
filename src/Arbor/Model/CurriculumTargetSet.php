<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Curriculum;

class CurriculumTargetSet extends ModelBase
{

    const CURRICULUM = 'curriculum';

    const TYPE = 'type';

    const NAME = 'name';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::CURRICULUM_TARGET_SET;

    /**
     * @param \Arbor\Query\Query $query
     * @return CurriculumTargetSet[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("CurriculumTargetSet");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CurriculumTargetSet
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::CURRICULUM_TARGET_SET, $id);
    }

    /**
     * @return Curriculum
     */
    public function getCurriculum()
    {
        return $this->getProperty("curriculum");
    }

    /**
     * @param Curriculum $curriculum
     */
    public function setCurriculum(Curriculum $curriculum = null)
    {
        $this->setProperty("curriculum", $curriculum);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getProperty("type");
    }

    /**
     * @param string $type
     */
    public function setType($type = null)
    {
        $this->setProperty("type", $type);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getProperty("name");
    }

    /**
     * @param string $name
     */
    public function setName($name = null)
    {
        $this->setProperty("name", $name);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty("effectiveDate");
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty("effectiveDate", $effectiveDate);
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
