<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class StaffContractPostRate extends ModelBase
{
    const STAFF_CONTRACT_POST = 'staffContractPost';

    const RATE = 'rate';

    const RATE_FREQUENCY = 'rateFrequency';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    protected $_resourceType = ResourceType::STAFF_CONTRACT_POST_RATE;

    /**
     * @param Query $query
     * @return StaffContractPostRate[] | Collection
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

        $query->setResourceType(ResourceType::STAFF_CONTRACT_POST_RATE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return StaffContractPostRate
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::STAFF_CONTRACT_POST_RATE, $id);
    }

    /**
     * @return StaffContractPost
     */
    public function getStaffContractPost()
    {
        return $this->getProperty('staffContractPost');
    }

    /**
     * @param StaffContractPost $staffContractPost
     */
    public function setStaffContractPost(StaffContractPost $staffContractPost = null)
    {
        $this->setProperty('staffContractPost', $staffContractPost);
    }

    /**
     * @return string
     */
    public function getRate()
    {
        return $this->getProperty('rate');
    }

    /**
     * @param string $rate
     */
    public function setRate($rate = null)
    {
        $this->setProperty('rate', $rate);
    }

    /**
     * @return string
     */
    public function getRateFrequency()
    {
        return $this->getProperty('rateFrequency');
    }

    /**
     * @param string $rateFrequency
     */
    public function setRateFrequency($rateFrequency = null)
    {
        $this->setProperty('rateFrequency', $rateFrequency);
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
}
