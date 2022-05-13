<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class PostalAddressOccupancy extends ModelBase
{

    const POSTAL_ADDRESS = 'postalAddress';

    const OCCUPANT = 'occupant';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const POSTAL_ADDRESS_TYPE = 'postalAddressType';

    const IS_CORRESPONDENCE_ADDRESS = 'isCorrespondenceAddress';

    protected $_resourceType = ResourceType::POSTAL_ADDRESS_OCCUPANCY;

    /**
     * @param Query $query
     * @return PostalAddressOccupancy[] | Collection
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

        $query->setResourceType(ResourceType::POSTAL_ADDRESS_OCCUPANCY);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return PostalAddressOccupancy
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::POSTAL_ADDRESS_OCCUPANCY, $id);
    }

    /**
     * @return PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->getProperty('postalAddress');
    }

    /**
     * @param PostalAddress $postalAddress
     */
    public function setPostalAddress(PostalAddress $postalAddress = null)
    {
        $this->setProperty('postalAddress', $postalAddress);
    }

    /**
     * @return ModelBase
     */
    public function getOccupant()
    {
        return $this->getProperty('occupant');
    }

    /**
     * @param ModelBase $occupant
     */
    public function setOccupant(ModelBase $occupant = null)
    {
        $this->setProperty('occupant', $occupant);
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->getProperty('effectiveDate');
    }

    /**
     * @param \DateTime $effectiveDate
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->setProperty('effectiveDate', $effectiveDate);
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->getProperty('endDate');
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->setProperty('endDate', $endDate);
    }

    /**
     * @return string
     */
    public function getPostalAddressType()
    {
        return $this->getProperty('postalAddressType');
    }

    /**
     * @param string $postalAddressType
     */
    public function setPostalAddressType($postalAddressType = null)
    {
        $this->setProperty('postalAddressType', $postalAddressType);
    }

    /**
     * @return bool
     */
    public function getIsCorrespondenceAddress()
    {
        return $this->getProperty('isCorrespondenceAddress');
    }

    /**
     * @param bool $isCorrespondenceAddress
     */
    public function setIsCorrespondenceAddress($isCorrespondenceAddress = null)
    {
        $this->setProperty('isCorrespondenceAddress', $isCorrespondenceAddress);
    }


}
