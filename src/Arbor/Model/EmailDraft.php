<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class EmailDraft extends ModelBase
{
    const SENDING_PROFILE = 'sendingProfile';

    const SUBJECT = 'subject';

    const BODY = 'body';

    const CUSTOM_REPORT = 'customReport';

    const SENDING_STARTED_DATETIME = 'sendingStartedDatetime';

    const RECIPIENTS_RESOLVED_DATETIME = 'recipientsResolvedDatetime';

    const SENDING_COMPLETED_DATETIME = 'sendingCompletedDatetime';

    protected $_resourceType = ResourceType::EMAIL_DRAFT;

    /**
     * @param Query $query
     * @return EmailDraft[] | Collection
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

        $query->setResourceType(ResourceType::EMAIL_DRAFT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return EmailDraft
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::EMAIL_DRAFT, $id);
    }

    /**
     * @return SendingProfile
     */
    public function getSendingProfile()
    {
        return $this->getProperty('sendingProfile');
    }

    /**
     * @param SendingProfile $sendingProfile
     */
    public function setSendingProfile(SendingProfile $sendingProfile = null)
    {
        $this->setProperty('sendingProfile', $sendingProfile);
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->getProperty('subject');
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject = null)
    {
        $this->setProperty('subject', $subject);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->getProperty('body');
    }

    /**
     * @param string $body
     */
    public function setBody($body = null)
    {
        $this->setProperty('body', $body);
    }

    /**
     * @return CustomReport
     */
    public function getCustomReport()
    {
        return $this->getProperty('customReport');
    }

    /**
     * @param CustomReport $customReport
     */
    public function setCustomReport(CustomReport $customReport = null)
    {
        $this->setProperty('customReport', $customReport);
    }

    /**
     * @return \DateTime
     */
    public function getSendingStartedDatetime()
    {
        return $this->getProperty('sendingStartedDatetime');
    }

    /**
     * @param \DateTime $sendingStartedDatetime
     */
    public function setSendingStartedDatetime(\DateTime $sendingStartedDatetime = null)
    {
        $this->setProperty('sendingStartedDatetime', $sendingStartedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getRecipientsResolvedDatetime()
    {
        return $this->getProperty('recipientsResolvedDatetime');
    }

    /**
     * @param \DateTime $recipientsResolvedDatetime
     */
    public function setRecipientsResolvedDatetime(\DateTime $recipientsResolvedDatetime = null)
    {
        $this->setProperty('recipientsResolvedDatetime', $recipientsResolvedDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getSendingCompletedDatetime()
    {
        return $this->getProperty('sendingCompletedDatetime');
    }

    /**
     * @param \DateTime $sendingCompletedDatetime
     */
    public function setSendingCompletedDatetime(\DateTime $sendingCompletedDatetime = null)
    {
        $this->setProperty('sendingCompletedDatetime', $sendingCompletedDatetime);
    }
}
