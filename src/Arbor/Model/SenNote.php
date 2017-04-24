<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;

class SenNote extends ModelBase
{
    const STUDENT = 'student';

    const SUMMARY = 'summary';

    const CONTENT = 'content';

    const NOTE_DATE = 'noteDate';

    protected $_resourceType = ResourceType::SEN_NOTE;

    /**
     * @param \Arbor\Query\Query $query
     * @return SenNote[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if (is_null($query)) {
            $query = new Query();
        }
        $query->setResourceType("SenNote");
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return SenNote
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if (!$gateway) {
            throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        }
        return $gateway->retrieve(ResourceType::SEN_NOTE, $id);
    }

    /**
     * @return Student
     */
    public function getStudent()
    {
        return $this->getProperty("student");
    }

    /**
     * @param Student $student
     */
    public function setStudent(Student $student = null)
    {
        $this->setProperty("student", $student);
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->getProperty("summary");
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary = null)
    {
        $this->setProperty("summary", $summary);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getProperty("content");
    }

    /**
     * @param string $content
     */
    public function setContent($content = null)
    {
        $this->setProperty("content", $content);
    }

    /**
     * @return \DateTime
     */
    public function getNoteDate()
    {
        return $this->getProperty("noteDate");
    }

    /**
     * @param \DateTime $noteDate
     */
    public function setNoteDate(\DateTime $noteDate = null)
    {
        $this->setProperty("noteDate", $noteDate);
    }
}
