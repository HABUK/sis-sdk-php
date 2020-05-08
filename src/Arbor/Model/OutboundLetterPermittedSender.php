<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class OutboundLetterPermittedSender extends ModelBase
{
    const ACTION_TAKER = 'actionTaker';

    const SENDER = 'sender';

    const ALLOW = 'allow';

    protected $_resourceType = ResourceType::OUTBOUND_LETTER_PERMITTED_SENDER;

    /**
     * @param Query $query
     * @return OutboundLetterPermittedSender[] | Collection
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

        $query->setResourceType(ResourceType::OUTBOUND_LETTER_PERMITTED_SENDER);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return OutboundLetterPermittedSender
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::OUTBOUND_LETTER_PERMITTED_SENDER, $id);
    }

    /**
     * @return Staff
     */
    public function getActionTaker()
    {
        return $this->getProperty('actionTaker');
    }

    /**
     * @param Staff $actionTaker
     */
    public function setActionTaker(Staff $actionTaker = null)
    {
        $this->setProperty('actionTaker', $actionTaker);
    }

    /**
     * @return ModelBase
     */
    public function getSender()
    {
        return $this->getProperty('sender');
    }

    /**
     * @param ModelBase $sender
     */
    public function setSender(ModelBase $sender = null)
    {
        $this->setProperty('sender', $sender);
    }

    /**
     * @return bool
     */
    public function getAllow()
    {
        return $this->getProperty('allow');
    }

    /**
     * @param bool $allow
     */
    public function setAllow($allow = null)
    {
        $this->setProperty('allow', $allow);
    }
}
