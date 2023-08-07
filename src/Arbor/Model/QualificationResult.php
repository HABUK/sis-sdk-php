<?php
namespace Arbor\Model;

use Arbor\Resource\ResourceType;
use Arbor\Query\Query;
use Arbor\Model\UkJcq\QualificationResultImportJob;

class QualificationResult extends \ModelBase
{
    public const QUALIFICATION_ASPECT = 'qualificationAspect';

    public const QUALIFICATION_GRADE = 'qualificationGrade';

    public const NUMERIC_VALUE = 'numericValue';

    public const STUDENT = 'student';

    public const CANDIDATE_REGISTRATION = 'candidateRegistration';

    public const CANDIDATE_ENTRY = 'candidateEntry';

    public const CANDIDATE_ASSESSABLE_ENTRY = 'candidateAssessableEntry';

    public const RESULT_DATETIME = 'resultDatetime';

    public const EMBARGO_DATETIME = 'embargoDatetime';

    public const IMPORT_JOB = 'importJob';

    public const QUALIFICATION_AVAILABILITY_INSTANCE = 'qualificationAvailabilityInstance';

    public const MISSING_RESULT_REASON = 'missingResultReason';

    public const PARTIAL_ABSENCE = 'partialAbsence';

    public const ENDORSEMENT_GRADE = 'endorsementGrade';

    protected $_resourceType = ResourceType::QUALIFICATION_RESULT;

    /**
     * @param Query $query
     * @return QualificationResult[] | Collection
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

        $query->setResourceType(ResourceType::QUALIFICATION_RESULT);

        return $gateway->query($query);
    }

    /**
     * @param int $id
     * @return QualificationResult
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if ($gateway === null) {
            throw new Exception('You must call ModelBase::setDefaultGateway() prior to calling ModelBase::retrieve()');
        }

        return $gateway->retrieve(ResourceType::QUALIFICATION_RESULT, $id);
    }

    /**
     * @return QualificationAspect
     */
    public function getQualificationAspect()
    {
        return $this->getProperty('qualificationAspect');
    }

    /**
     * @param QualificationAspect $qualificationAspect
     */
    public function setQualificationAspect(\QualificationAspect $qualificationAspect = null)
    {
        $this->setProperty('qualificationAspect', $qualificationAspect);
    }

    /**
     * @return QualificationGrade
     */
    public function getQualificationGrade()
    {
        return $this->getProperty('qualificationGrade');
    }

    /**
     * @param QualificationGrade $qualificationGrade
     */
    public function setQualificationGrade(\QualificationGrade $qualificationGrade = null)
    {
        $this->setProperty('qualificationGrade', $qualificationGrade);
    }

    /**
     * @return float
     */
    public function getNumericValue()
    {
        return $this->getProperty('numericValue');
    }

    /**
     * @param float $numericValue
     */
    public function setNumericValue(float $numericValue = null)
    {
        $this->setProperty('numericValue', $numericValue);
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
     * @return CandidateRegistration
     */
    public function getCandidateRegistration()
    {
        return $this->getProperty('candidateRegistration');
    }

    /**
     * @param CandidateRegistration $candidateRegistration
     */
    public function setCandidateRegistration(\CandidateRegistration $candidateRegistration = null)
    {
        $this->setProperty('candidateRegistration', $candidateRegistration);
    }

    /**
     * @return CandidateEntry
     */
    public function getCandidateEntry()
    {
        return $this->getProperty('candidateEntry');
    }

    /**
     * @param CandidateEntry $candidateEntry
     */
    public function setCandidateEntry(\CandidateEntry $candidateEntry = null)
    {
        $this->setProperty('candidateEntry', $candidateEntry);
    }

    /**
     * @return CandidateAssessableEntry
     */
    public function getCandidateAssessableEntry()
    {
        return $this->getProperty('candidateAssessableEntry');
    }

    /**
     * @param CandidateAssessableEntry $candidateAssessableEntry
     */
    public function setCandidateAssessableEntry(\CandidateAssessableEntry $candidateAssessableEntry = null)
    {
        $this->setProperty('candidateAssessableEntry', $candidateAssessableEntry);
    }

    /**
     * @return \DateTime
     */
    public function getResultDatetime()
    {
        return $this->getProperty('resultDatetime');
    }

    /**
     * @param \DateTime $resultDatetime
     */
    public function setResultDatetime(\DateTime $resultDatetime = null)
    {
        $this->setProperty('resultDatetime', $resultDatetime);
    }

    /**
     * @return \DateTime
     */
    public function getEmbargoDatetime()
    {
        return $this->getProperty('embargoDatetime');
    }

    /**
     * @param \DateTime $embargoDatetime
     */
    public function setEmbargoDatetime(\DateTime $embargoDatetime = null)
    {
        $this->setProperty('embargoDatetime', $embargoDatetime);
    }

    /**
     * @return QualificationResultImportJob
     */
    public function getImportJob()
    {
        return $this->getProperty('importJob');
    }

    /**
     * @param QualificationResultImportJob $importJob
     */
    public function setImportJob(\QualificationResultImportJob $importJob = null)
    {
        $this->setProperty('importJob', $importJob);
    }

    /**
     * @return QualificationAvailabilityInstance
     */
    public function getQualificationAvailabilityInstance()
    {
        return $this->getProperty('qualificationAvailabilityInstance');
    }

    /**
     * @param QualificationAvailabilityInstance $qualificationAvailabilityInstance
     */
    public function setQualificationAvailabilityInstance(\QualificationAvailabilityInstance $qualificationAvailabilityInstance = null)
    {
        $this->setProperty('qualificationAvailabilityInstance', $qualificationAvailabilityInstance);
    }

    /**
     * @return string
     */
    public function getMissingResultReason()
    {
        return $this->getProperty('missingResultReason');
    }

    /**
     * @param string $missingResultReason
     */
    public function setMissingResultReason(string $missingResultReason = null)
    {
        $this->setProperty('missingResultReason', $missingResultReason);
    }

    /**
     * @return int
     */
    public function getPartialAbsence()
    {
        return $this->getProperty('partialAbsence');
    }

    /**
     * @param int $partialAbsence
     */
    public function setPartialAbsence(int $partialAbsence = null)
    {
        $this->setProperty('partialAbsence', $partialAbsence);
    }

    /**
     * @return QualificationGrade
     */
    public function getEndorsementGrade()
    {
        return $this->getProperty('endorsementGrade');
    }

    /**
     * @param QualificationGrade $endorsementGrade
     */
    public function setEndorsementGrade(\QualificationGrade $endorsementGrade = null)
    {
        $this->setProperty('endorsementGrade', $endorsementGrade);
    }
}
