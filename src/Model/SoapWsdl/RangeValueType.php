<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class RangeValueType
{

    /**
     * @var string $rangeValueMin
     */
    protected $rangeValueMin = null;

    /**
     * @var string $rangeValueMax
     */
    protected $rangeValueMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRangeValueMin()
    {
      return $this->rangeValueMin;
    }

    /**
     * @param string $rangeValueMin
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RangeValueType
     */
    public function setRangeValueMin($rangeValueMin)
    {
      $this->rangeValueMin = $rangeValueMin;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangeValueMax()
    {
      return $this->rangeValueMax;
    }

    /**
     * @param string $rangeValueMax
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RangeValueType
     */
    public function setRangeValueMax($rangeValueMax)
    {
      $this->rangeValueMax = $rangeValueMax;
      return $this;
    }

}
