<?php

namespace Arbor\Service;
use Arbor\Api\Gateway\RestGateway;
use Arbor\Model\Hydrator;
use Arbor\Model\ModelBase;
use Arbor\Model\Student;
use Guzzle\Http\Message\Response;

class StandardizedAssessmentMarks
{
    const MARK_STUDENT = "student";
    const MARK_ASSESSMENT_CODE = "assessmentCode";
    const MARK_RESULT_DATE = "resultDate";
    const MARK_RESULT = "result";

    /**@var \Arbor\Api\Gateway\RestGateway $_gateway*/
    protected $_gateway;
    protected $_hydrator;
    protected $_marks = array();

    public function __construct($gateway=null)
    {
        if(is_null($gateway))$gateway = ModelBase::getDefaultGateway();
        $this->setGateway($gateway);
        $this->_hydrator = new Hydrator();
    }

    /**
     * @param $student
     * @param \DateTime $resultDate
     * @param $assessmentCode
     * @param null $result
     */
    public function setMark($student, $resultDate, $assessmentCode, $result = null)
    {
        $this->_marks[] = array(
            self::MARK_STUDENT => $student,
            self::MARK_RESULT_DATE => $resultDate,
            self::MARK_ASSESSMENT_CODE => $assessmentCode,
            self::MARK_RESULT =>$result
        );
    }

    public function saveMarks()
    {
        $payload = array();

        $payload['request']['marks'] = [];

        foreach($this->_marks AS $mark)
        {
            $markPayload = [];

            //Convert models to REST representations
            $markPayload[self::MARK_STUDENT] = $this->getHydrator()->extractArray($mark[self::MARK_STUDENT], true);
            $markPayload[self::MARK_RESULT] = $mark[self::MARK_RESULT];
            $markPayload[self::MARK_ASSESSMENT_CODE] = $mark[self::MARK_ASSESSMENT_CODE];

            //Convert date to Y-m-d H:i:s string
            /**@var \DateTime $resultDate*/
            $resultDate = $mark[self::MARK_RESULT_DATE];
            if(!$resultDate instanceof \DateTime) throw new \InvalidArgumentException("ResultDate must be an PHP DateTime object");
            $markPayload[self::MARK_RESULT_DATE] = $resultDate->format("Y-m-d H:i:s");


            $payload['request']['marks'][] = $markPayload;
        }

        $response = $this->getGateway()->sendRequest(
            RestGateway::HTTP_METHOD_POST, "/rest-v2/standardized-assessment-mark", json_encode($payload));

        if($response instanceof Response && $response->getStatusCode() == 200)
        {
            $this->_marks = array();
        }
    }

    /**
     * @param \Arbor\Api\Gateway\RestGateway $gateway
     */
    public function setGateway($gateway)
    {
        $this->_gateway = $gateway;
    }

    /**
     * @return \Arbor\Api\Gateway\RestGateway
     */
    public function getGateway()
    {
        return $this->_gateway;
    }

    /**
     * @return Hydrator
     */
    public function getHydrator()
    {
        return $this->_hydrator;
    }
}