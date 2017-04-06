<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\AdHocAssessmentBatch;
use \Arbor\Model\Student;
use \Arbor\Model\AdHocAssessment;
use \Arbor\Model\Grade;
use \Arbor\Model\Staff;

class StudentAdHocAssessmentMark extends ModelBase
{

    const AD_HOC_ASSESSMENT_BATCH = 'adHocAssessmentBatch';

    const STUDENT = 'student';

    const AD_HOC_ASSESSMENT = 'adHocAssessment';

    const ASSESSMENT_REFERENCE_DATE = 'assessmentReferenceDate';

    const SCOPE_ENTITY = 'scopeEntity';

    const GRADE = 'grade';

    const NUMBER = 'number';

    const MARKING_STAFF = 'markingStaff';

    const COMPLETED_DATETIME = 'completedDatetime';

    const COMPLETED_STAFF = 'completedStaff';

    const APPROVED_DATETIME = 'approvedDatetime';

    const APPROVED_STAFF = 'approvedStaff';

    protected $_resourceType = ResourceType::STUDENT_AD_HOC_ASSESSMENT_MARK;

    /**
     * @param \Arbor\Query\Query $query
     * @return StudentAdHocAssessmentMark[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("StudentAdHocAssessmentMark");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return StudentAdHocAssessmentMark
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::STUDENT_AD_HOC_ASSESSMENT_MARK, $id);
    }

    /**
     * @return AdHocAssessmentBatch
     */
    public function getAdHocAssessmentBatch()
    {
        return $this->getProperty("adHocAssessmentBatch");
    }

    /**
     * @param AdHocAssessmentBatch $adHocAssessmentBatch
     */
    public function setAdHocAssessmentBatch(AdHocAssessmentBatch $adHocAssessmentBatch = null)
    {
        $this->setProperty("adHocAssessmentBatch", $adHocAssessmentBatch);
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
     * @return AdHocAssessment
     */
    public function getAdHocAssessment()
    {
        return $this->getProperty("adHocAssessment");
    }

    /**
     * @param AdHocAssessment $adHocAssessment
     */
    public function setAdHocAssessment(AdHocAssessment $adHocAssessment = null)
    {
        $this->setProperty("adHocAssessment", $adHocAssessment);
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentReferenceDate()
    {
        return $this->getProperty("assessmentReferenceDate");
    }

    /**
     * @param \DateTime $assessmentReferenceDate
     */
    public function setAssessmentReferenceDate(\DateTime $assessmentReferenceDate = null)
    {
        $this->setProperty("assessmentReferenceDate", $assessmentReferenceDate);
    }

    /**
     * @return ModelBase
     */
    public function getScopeEntity()
    {
        return $this->getProperty("scopeEntity");
    }

    /**
     * @param ModelBase $scopeEntity
     */
    public function setScopeEntity(ModelBase $scopeEntity = null)
    {
        $this->setProperty("scopeEntity", $scopeEntity);
    }

    /**
     * @return Grade
     */
    public function getGrade()
    {
        return $this->getProperty("grade");
    }

    /**
     * @param Grade $grade
     */
    public function setGrade(Grade $grade = null)
    {
        $this->setProperty("grade", $grade);
    }

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->getProperty("number");
    }

    /**
     * @param float $number
     */
    public function setNumber($number = null)
    {
        $this->setProperty("number", $number);
    }

    /**
     * @return Staff
     */
    public function getMarkingStaff()
    {
        return $this->getProperty("markingStaff");
    }

    /**
     * @param Staff $markingStaff
     */
    public function setMarkingStaff(Staff $markingStaff = null)
    {
        $this->setProperty("markingStaff", $markingStaff);
    }

    /**
     * @return \DateTime
     */
    public function getCompletedDatetime()
    {
        return $this->getProperty("completedDatetime");
    }

    /**
     * @param \DateTime $completedDatetime
     */
    public function setCompletedDatetime(\DateTime $completedDatetime = null)
    {
        $this->setProperty("completedDatetime", $completedDatetime);
    }

    /**
     * @return Staff
     */
    public function getCompletedStaff()
    {
        return $this->getProperty("completedStaff");
    }

    /**
     * @param Staff $completedStaff
     */
    public function setCompletedStaff(Staff $completedStaff = null)
    {
        $this->setProperty("completedStaff", $completedStaff);
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDatetime()
    {
        return $this->getProperty("approvedDatetime");
    }

    /**
     * @param \DateTime $approvedDatetime
     */
    public function setApprovedDatetime(\DateTime $approvedDatetime = null)
    {
        $this->setProperty("approvedDatetime", $approvedDatetime);
    }

    /**
     * @return Staff
     */
    public function getApprovedStaff()
    {
        return $this->getProperty("approvedStaff");
    }

    /**
     * @param Staff $approvedStaff
     */
    public function setApprovedStaff(Staff $approvedStaff = null)
    {
        $this->setProperty("approvedStaff", $approvedStaff);
    }


}
