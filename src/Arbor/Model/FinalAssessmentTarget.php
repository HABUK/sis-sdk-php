<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\Student;
use \Arbor\Model\Assessment;
use \Arbor\Model\Grade;

class FinalAssessmentTarget extends ModelBase
{

    const STUDENT = 'student';

    const ASSESSMENT = 'assessment';

    const GRADE = 'grade';

    const LOWER_GRADE_POINT_SCALE_VALUE = 'lowerGradePointScaleValue';

    const UPPER_GRADE_POINT_SCALE_VALUE = 'upperGradePointScaleValue';

    const STATISTICAL_GRADE_POINT_SCALE_VALUE = 'statisticalGradePointScaleValue';

    const LOCKED = 'locked';

    protected $_resourceType = ResourceType::FINAL_ASSESSMENT_TARGET;

    /**
     * @param \Arbor\Query\Query $query
     * @return FinalAssessmentTarget[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("FinalAssessmentTarget");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return FinalAssessmentTarget
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::FINAL_ASSESSMENT_TARGET, $id);
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
     * @return Assessment
     */
    public function getAssessment()
    {
        return $this->getProperty("assessment");
    }

    /**
     * @param Assessment $assessment
     */
    public function setAssessment(Assessment $assessment = null)
    {
        $this->setProperty("assessment", $assessment);
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
    public function getLowerGradePointScaleValue()
    {
        return $this->getProperty("lowerGradePointScaleValue");
    }

    /**
     * @param float $lowerGradePointScaleValue
     */
    public function setLowerGradePointScaleValue($lowerGradePointScaleValue = null)
    {
        $this->setProperty("lowerGradePointScaleValue", $lowerGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getUpperGradePointScaleValue()
    {
        return $this->getProperty("upperGradePointScaleValue");
    }

    /**
     * @param float $upperGradePointScaleValue
     */
    public function setUpperGradePointScaleValue($upperGradePointScaleValue = null)
    {
        $this->setProperty("upperGradePointScaleValue", $upperGradePointScaleValue);
    }

    /**
     * @return float
     */
    public function getStatisticalGradePointScaleValue()
    {
        return $this->getProperty("statisticalGradePointScaleValue");
    }

    /**
     * @param float $statisticalGradePointScaleValue
     */
    public function setStatisticalGradePointScaleValue($statisticalGradePointScaleValue = null)
    {
        $this->setProperty("statisticalGradePointScaleValue", $statisticalGradePointScaleValue);
    }

    /**
     * @return bool
     */
    public function getLocked()
    {
        return $this->getProperty("locked");
    }

    /**
     * @param bool $locked
     */
    public function setLocked($locked = null)
    {
        $this->setProperty("locked", $locked);
    }


}
