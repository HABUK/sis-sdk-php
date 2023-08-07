<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;

class SenNote extends \ModelBase
{
    public const STUDENT = 'student';

    public const SUMMARY = 'summary';

    public const CONTENT = 'content';

    public const NOTE_DATE = 'noteDate';

    protected $_resourceType = ResourceType::SEN_NOTE;

    /**
     * @param Query $query
     * @return SenNote[] | Collection
     * @throws Exception
     */
    public static function query(\Query $query = null)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::query()');
        }

        if ($query === null) {
            $query = new Query();
        }

        $query->setResourceType(ResourceType::SEN_NOTE);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return SenNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::SEN_NOTE, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty('student');
    }

    /**
     * @param Student $student
     */
    public function setStudent(\Student $student = null)
    {
        $this->setProperty('student', $student);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty('summary');
    }

    /**
     * @param string $summary
     */
    public function setSummary(string $summary = null)
    {
        $this->setProperty('summary', $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty('content');
    }

    /**
     * @param string $content
     */
    public function setContent(string $content = null)
    {
        $this->setProperty('content', $content);
    }

    /**
     * @return \DateTime
     */
    public function getNoteDate()
    {
        return $this->getProperty('noteDate');
    }

    /**
     * @param \DateTime $noteDate
     */
    public function setNoteDate(\DateTime $noteDate = null)
    {
        $this->setProperty('noteDate', $noteDate);
    }
}
