<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\CustomerCreditNote;
use \Arbor\Model\CustomerInvoiceItem;

class CustomerCreditNoteItem extends ModelBase
{
    const CUSTOMER_CREDIT_NOTE = 'customerCreditNote';

    const CUSTOMER_INVOICE_ITEM = 'customerInvoiceItem';

    const CREDIT_AMOUNT = 'creditAmount';

    const QUANTITY_CREDITED = 'quantityCredited';

    const NARRATIVE = 'narrative';

    protected $_resourceType = ResourceType::CUSTOMER_CREDIT_NOTE_ITEM;

    /**
     * @param \Arbor\Query\Query $query
     * @return CustomerCreditNoteItem[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("CustomerCreditNoteItem");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return CustomerCreditNoteItem
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::CUSTOMER_CREDIT_NOTE_ITEM, $id);
    }

    /**
     * @return CustomerCreditNote
     */
    public function getCustomerCreditNote()
    {
        return $this->getProperty("customerCreditNote");
    }

    /**
     * @param CustomerCreditNote $customerCreditNote
     */
    public function setCustomerCreditNote(CustomerCreditNote $customerCreditNote = null)
    {
        $this->setProperty("customerCreditNote", $customerCreditNote);
    }

    /**
     * @return CustomerInvoiceItem
     */
    public function getCustomerInvoiceItem()
    {
        return $this->getProperty("customerInvoiceItem");
    }

    /**
     * @param CustomerInvoiceItem $customerInvoiceItem
     */
    public function setCustomerInvoiceItem(CustomerInvoiceItem $customerInvoiceItem = null)
    {
        $this->setProperty("customerInvoiceItem", $customerInvoiceItem);
    }

    /**
     * @return string
     */
    public function getCreditAmount()
    {
        return $this->getProperty("creditAmount");
    }

    /**
     * @param string $creditAmount
     */
    public function setCreditAmount($creditAmount = null)
    {
        $this->setProperty("creditAmount", $creditAmount);
    }

    /**
     * @return int
     */
    public function getQuantityCredited()
    {
        return $this->getProperty("quantityCredited");
    }

    /**
     * @param int $quantityCredited
     */
    public function setQuantityCredited($quantityCredited = null)
    {
        $this->setProperty("quantityCredited", $quantityCredited);
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
