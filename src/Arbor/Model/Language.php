<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;

class Language extends ModelBase
{
    const D00011_ALPHA3 = 'd00011Alpha3';

    const D00011_ALPHA4 = 'd00011Alpha4';

    const CODE = 'code';

    const ACTIVE = 'active';

    const DATA_ORDER = 'dataOrder';

    const LABEL = 'label';

    const ISO6391_ALPHA2 = 'iso6391Alpha2';

    const ISO6392_ALPHA3 = 'iso6392Alpha3';

    const ISO6392_ALPHA3_TERMINOLOGY = 'iso6392Alpha3Terminology';

    const PARENT_CODE = 'parentCode';

    protected $_resourceType = ResourceType::LANGUAGE;

    /**
     * @param \Arbor\Query\Query $query
     * @return Language[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("Language");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return Language
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::LANGUAGE, $id);
    }

    /**
     * @return string
     */
    public function getD00011Alpha3()
    {
        return $this->getProperty("d00011Alpha3");
    }

    /**
     * @param string $d00011Alpha3
     */
    public function setD00011Alpha3($d00011Alpha3 = null)
    {
        $this->setProperty("d00011Alpha3", $d00011Alpha3);
    }

    /**
     * @return string
     */
    public function getD00011Alpha4()
    {
        return $this->getProperty("d00011Alpha4");
    }

    /**
     * @param string $d00011Alpha4
     */
    public function setD00011Alpha4($d00011Alpha4 = null)
    {
        $this->setProperty("d00011Alpha4", $d00011Alpha4);
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
    public function getLabel()
    {
        return $this->getProperty("label");
    }

    /**
     * @param string $label
     */
    public function setLabel($label = null)
    {
        $this->setProperty("label", $label);
    }

    /**
     * @return string
     */
    public function getIso6391Alpha2()
    {
        return $this->getProperty("iso6391Alpha2");
    }

    /**
     * @param string $iso6391Alpha2
     */
    public function setIso6391Alpha2($iso6391Alpha2 = null)
    {
        $this->setProperty("iso6391Alpha2", $iso6391Alpha2);
    }

    /**
     * @return string
     */
    public function getIso6392Alpha3()
    {
        return $this->getProperty("iso6392Alpha3");
    }

    /**
     * @param string $iso6392Alpha3
     */
    public function setIso6392Alpha3($iso6392Alpha3 = null)
    {
        $this->setProperty("iso6392Alpha3", $iso6392Alpha3);
    }

    /**
     * @return string
     */
    public function getIso6392Alpha3Terminology()
    {
        return $this->getProperty("iso6392Alpha3Terminology");
    }

    /**
     * @param string $iso6392Alpha3Terminology
     */
    public function setIso6392Alpha3Terminology($iso6392Alpha3Terminology = null)
    {
        $this->setProperty("iso6392Alpha3Terminology", $iso6392Alpha3Terminology);
    }

    /**
     * @return string
     */
    public function getParentCode()
    {
        return $this->getProperty("parentCode");
    }

    /**
     * @param string $parentCode
     */
    public function setParentCode($parentCode = null)
    {
        $this->setProperty("parentCode", $parentCode);
    }
}
