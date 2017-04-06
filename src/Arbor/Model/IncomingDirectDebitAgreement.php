<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\BillPayer;
use \Arbor\Model\PaymentProvider;

class IncomingDirectDebitAgreement extends ModelBase
{

    const BILL_PAYER = 'billPayer';

    const PAYMENT_PROVIDER = 'paymentProvider';

    const PAYMENT_PROVIDER_AGREEMENT_IDENTIFIER = 'paymentProviderAgreementIdentifier';

    const AGREEMENT_START_DATE = 'agreementStartDate';

    const AGREEMENT_END_DATE = 'agreementEndDate';

    const AGREEMENT_REFERENCE = 'agreementReference';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::INCOMING_DIRECT_DEBIT_AGREEMENT;

    /**
     * @param \Arbor\Query\Query $query
     * @return IncomingDirectDebitAgreement[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("IncomingDirectDebitAgreement");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return IncomingDirectDebitAgreement
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::INCOMING_DIRECT_DEBIT_AGREEMENT, $id);
    }

    /**
     * @return BillPayer
     */
    public function getBillPayer()
    {
        return $this->getProperty("billPayer");
    }

    /**
     * @param BillPayer $billPayer
     */
    public function setBillPayer(BillPayer $billPayer = null)
    {
        $this->setProperty("billPayer", $billPayer);
    }

    /**
     * @return PaymentProvider
     */
    public function getPaymentProvider()
    {
        return $this->getProperty("paymentProvider");
    }

    /**
     * @param PaymentProvider $paymentProvider
     */
    public function setPaymentProvider(PaymentProvider $paymentProvider = null)
    {
        $this->setProperty("paymentProvider", $paymentProvider);
    }

    /**
     * @return string
     */
    public function getPaymentProviderAgreementIdentifier()
    {
        return $this->getProperty("paymentProviderAgreementIdentifier");
    }

    /**
     * @param string $paymentProviderAgreementIdentifier
     */
    public function setPaymentProviderAgreementIdentifier($paymentProviderAgreementIdentifier = null)
    {
        $this->setProperty("paymentProviderAgreementIdentifier", $paymentProviderAgreementIdentifier);
    }

    /**
     * @return \DateTime
     */
    public function getAgreementStartDate()
    {
        return $this->getProperty("agreementStartDate");
    }

    /**
     * @param \DateTime $agreementStartDate
     */
    public function setAgreementStartDate(\DateTime $agreementStartDate = null)
    {
        $this->setProperty("agreementStartDate", $agreementStartDate);
    }

    /**
     * @return \DateTime
     */
    public function getAgreementEndDate()
    {
        return $this->getProperty("agreementEndDate");
    }

    /**
     * @param \DateTime $agreementEndDate
     */
    public function setAgreementEndDate(\DateTime $agreementEndDate = null)
    {
        $this->setProperty("agreementEndDate", $agreementEndDate);
    }

    /**
     * @return string
     */
    public function getAgreementReference()
    {
        return $this->getProperty("agreementReference");
    }

    /**
     * @param string $agreementReference
     */
    public function setAgreementReference($agreementReference = null)
    {
        $this->setProperty("agreementReference", $agreementReference);
    }

    /**
     * @return string
     */
    public function getNarrative()
    {
        return $this->getProperty("narrative");
    }

    /**
     * @param string $narrative
     */
    public function setNarrative($narrative = null)
    {
        $this->setProperty("narrative", $narrative);
    }


}
