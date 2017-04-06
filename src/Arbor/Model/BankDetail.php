<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Bank;

class BankDetail extends ModelBase
{

    const ACCOUNT_HOLDER = 'accountHolder';

    const EFFECTIVE_DATE = 'effectiveDate';

    const END_DATE = 'endDate';

    const BANK = 'bank';

    const ACCOUNT_NAME = 'accountName';

    const ACCOUNT_NUMBER = 'accountNumber';

    const SORT_CODE = 'sortCode';

    protected $_resourceType = ResourceType::BANK_DETAIL;

    /**
     * @param \Arbor\Query\Query $query
     * @return BankDetail[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("BankDetail");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return BankDetail
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::BANK_DETAIL, $id);
    }

    /**
     * @return ModelBase
     */
    public function getAccountHolder()
    {
        return $this->getProperty("accountHolder");
    }

    /**
     * @param ModelBase $accountHolder
     */
    public function setAccountHolder(ModelBase $accountHolder = null)
    {
        $this->setProperty("accountHolder", $accountHolder);
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

    /**
     * @return Bank
     */
    public function getBank()
    {
        return $this->getProperty("bank");
    }

    /**
     * @param Bank $bank
     */
    public function setBank(Bank $bank = null)
    {
        $this->setProperty("bank", $bank);
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->getProperty("accountName");
    }

    /**
     * @param string $accountName
     */
    public function setAccountName($accountName = null)
    {
        $this->setProperty("accountName", $accountName);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->getProperty("accountNumber");
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber = null)
    {
        $this->setProperty("accountNumber", $accountNumber);
    }

    /**
     * @return string
     */
    public function getSortCode()
    {
        return $this->getProperty("sortCode");
    }

    /**
     * @param string $sortCode
     */
    public function setSortCode($sortCode = null)
    {
        $this->setProperty("sortCode", $sortCode);
    }


}
