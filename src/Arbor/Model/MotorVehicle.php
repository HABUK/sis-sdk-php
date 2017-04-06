<?php
namespace Arbor\Model;

use \Arbor\Resource\ResourceType;
use \Arbor\Api\Gateway\GatewayInterface;
use \Arbor\Query\Query;
use \Arbor\Model\Collection;
use \Arbor\Model\ModelBase;
use \Arbor\Model\Exception;
use \Arbor\Model\MotorVehicleMake;

class MotorVehicle extends ModelBase
{

    const OWNER = 'owner';

    const MOTOR_VEHICLE_TYPE = 'motorVehicleType';

    const MOTOR_VEHICLE_MAKE = 'motorVehicleMake';

    const MODEL = 'model';

    const COLOUR = 'colour';

    const REGISTRATION_NUMBER = 'registrationNumber';

    const PARKING_ALLOCATION_PROVIDED = 'parkingAllocationProvided';

    protected $_resourceType = ResourceType::MOTOR_VEHICLE;

    /**
     * @param \Arbor\Query\Query $query
     * @return MotorVehicle[] | Collection
     * @throws Exception
     */
    public static function query(Query $query = null)
    {
        if(is_null($query)) $query = new Query();
        $query->setResourceType("MotorVehicle");
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->query($query);
    }

    /**
     * @param mixed $id
     * @return MotorVehicle
     * @throws Exception
     */
    public static function retrieve($id)
    {
        $gateway = self::getDefaultGateway();
        if(!$gateway) throw new Exception("You must call ModelBase::setDefaultGateway() prior to calling query()");
        return $gateway->retrieve(ResourceType::MOTOR_VEHICLE, $id);
    }

    /**
     * @return ModelBase
     */
    public function getOwner()
    {
        return $this->getProperty("owner");
    }

    /**
     * @param ModelBase $owner
     */
    public function setOwner(ModelBase $owner = null)
    {
        $this->setProperty("owner", $owner);
    }

    /**
     * @return string
     */
    public function getMotorVehicleType()
    {
        return $this->getProperty("motorVehicleType");
    }

    /**
     * @param string $motorVehicleType
     */
    public function setMotorVehicleType($motorVehicleType = null)
    {
        $this->setProperty("motorVehicleType", $motorVehicleType);
    }

    /**
     * @return MotorVehicleMake
     */
    public function getMotorVehicleMake()
    {
        return $this->getProperty("motorVehicleMake");
    }

    /**
     * @param MotorVehicleMake $motorVehicleMake
     */
    public function setMotorVehicleMake(MotorVehicleMake $motorVehicleMake = null)
    {
        $this->setProperty("motorVehicleMake", $motorVehicleMake);
    }

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->getProperty("model");
    }

    /**
     * @param string $model
     */
    public function setModel($model = null)
    {
        $this->setProperty("model", $model);
    }

    /**
     * @return string
     */
    public function getColour()
    {
        return $this->getProperty("colour");
    }

    /**
     * @param string $colour
     */
    public function setColour($colour = null)
    {
        $this->setProperty("colour", $colour);
    }

    /**
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->getProperty("registrationNumber");
    }

    /**
     * @param string $registrationNumber
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        $this->setProperty("registrationNumber", $registrationNumber);
    }

    /**
     * @return bool
     */
    public function getParkingAllocationProvided()
    {
        return $this->getProperty("parkingAllocationProvided");
    }

    /**
     * @param bool $parkingAllocationProvided
     */
    public function setParkingAllocationProvided($parkingAllocationProvided = null)
    {
        $this->setProperty("parkingAllocationProvided", $parkingAllocationProvided);
    }


}
