<?php

namespace Arbor\Query;

use Arbor\Model\ModelBase;

class Query
{
    protected $_resourceType = null;
    /**@var array $_propertyFilters*/
    protected $_propertyFilters = array();
    /**@var array $_userTagFilters*/
    protected $_userTagFilters = array();
    /**@var int $_pageNumber*/
    protected $_pageNumber = null;
    /**@var int $_pageSize*/
    protected $_pageSize = null;
    /**@var string $_orderProperty*/
    protected $_orderProperty = null;
    /**@var string $_orderDirection*/
    protected $_orderDirection = null;
    /**@var array $_taggings*/
    protected $_taggings = array();

    const OPERATOR_EQUALS = "equals";
    const OPERATOR_FROM = "from";
    const OPERATOR_TO = "to";
    const OPERATOR_AFTER = "after";
    const OPERATOR_BEFORE = "before";
    const OPERATOR_SEARCH = "search";
    const OPERATOR_IN = "in";

    public function __construct($resourceType=null, $propertyFilters=array(), $userTagFilters=array(), $pageNumber=null,
                                $pageSize=null, $taggingsFilter = array())
    {
        $this->setResourceType($resourceType);
        $this->setPropertyFilters($propertyFilters);
        $this->setUserTagFilters($userTagFilters);
        $this->setPageNumber($pageNumber);
        $this->setTaggings($taggingsFilter);
    }
    /**
     * @param string $orderDirection
     */
    public function setOrderDirection($orderDirection)
    {
        $this->_orderDirection = $orderDirection;
    }

    /**
     * @return string
     */
    public function getOrderDirection()
    {
        return $this->_orderDirection;
    }

    /**
     * @param string $orderProperty
     */
    public function setOrderProperty($orderProperty)
    {
        $this->_orderProperty = $orderProperty;
    }

    /**
     * @return string
     */
    public function getOrderProperty()
    {
        return $this->_orderProperty;
    }

    /**
     * @param int $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->_pageNumber = $pageNumber;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->_pageNumber;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->_pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->_pageSize;
    }

    /**
     * @param array $propertyFilters
     */
    public function setPropertyFilters($propertyFilters)
    {
        $this->_propertyFilters = $propertyFilters;
    }

    /**
     * @return array
     */
    public function getPropertyFilters()
    {
        return $this->_propertyFilters;
    }

    /**
     * @param string $propertyName
     * @param string $operator
     * @param mixed $value
     * @throws Exception
     */
    public function addPropertyFilter($propertyName, $operator, $value)
    {
        /* Moved to get query string method
        //Allow the value to be another model
        if($value instanceof ModelBase)
        {
            $resourceUrl = $value->getResourceUrl();
            if(empty($resourceUrl))
            {
                throw new Exception("Model user in filters must be connected and have a resource URL set");
            }
            $value = $resourceUrl;
        }
        elseif($value instanceof \DateTime)
        {
            $value = $value->format("Y-m-d H:i:s");
        }
        $value = urlencode($value);
        $propertyName = urlencode($propertyName);
        */
        //Add filter
        $this->_propertyFilters[] =
            array(
                "propertyName"=>$propertyName,
                "operator"=>$operator,
                "value"=>$value
            );
    }

    /**
     * @param string $tagName
     * @param string $value
     */
    public function addUserTagFilter($tagName, $value)
    {
        if($value instanceof \DateTime)
        {
            $value = $value->format("Y-m-d H:i:s");
        }

        $this->_userTagFilters[] =
            array(
                "tagName"=>$tagName,
                "value"=>$value
            );
    }

    /**
     * @param array $userTagFilters
     */
    public function setUserTagFilters($userTagFilters)
    {
        $this->_userTagFilters = $userTagFilters;
    }

    /**
     * @return array
     */
    public function getUserTagFilters()
    {
        return $this->_userTagFilters;
    }

    public function getQueryString()
    {
        $queryString = new \Guzzle\Http\QueryString();

        foreach($this->getPropertyFilters() AS $propertyFilter)
        {
            //Allow the value to be another model
            if($propertyFilter["value"] instanceof ModelBase)
            {
                $resourceUrl = $propertyFilter["value"]->getResourceUrl();
                if(empty($resourceUrl))
                {
                    throw new Exception("Model user in filters must be connected and have a resource URL set");
                }
                $propertyFilter["value"] = $resourceUrl;
            }
            elseif($propertyFilter["value"] instanceof \DateTime)
            {
                $propertyFilter["value"] = $propertyFilter["value"]->format("Y-m-d H:i:s");
            }elseif(is_null($propertyFilter["value"]))
            {
                $propertyFilter["value"]='NULL';
            }

            $queryString->add(
                'filters.' . $propertyFilter['propertyName'] . "." . $propertyFilter['operator'],
                $propertyFilter['value']
            );
        }

        foreach($this->getUserTagFilters() AS $userTagFilter)
        {
            $queryString->add('filters.tags.' . $userTagFilter['tagName'], $userTagFilter['value']);
        }

        if(!is_null($this->getPageNumber())) $queryString->add('page', $this->getPageNumber());
        if(!is_null($this->getPageSize())) $queryString->add('page-size', $this->getPageSize());
        
        foreach($this->getTaggings() AS $tag)
        {
            $queryString->add('filters.self.tagged', $tag);
        }

        return (string) $queryString;
    }

    /**
     * @param null $resourceType
     */
    public function setResourceType($resourceType)
    {
        $this->_resourceType = $resourceType;
    }

    /**
     * @return null
     */
    public function getResourceType()
    {
        return $this->_resourceType;
    }

    public function getTaggings()
    {
        return $this->_taggings;
    }

    public function setTaggings($taggings)
    {
        $this->_taggings = $taggings;
    }


}