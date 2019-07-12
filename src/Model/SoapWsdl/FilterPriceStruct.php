<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class FilterPriceStruct
{

    /**
     * @var float $filterPriceFrom
     */
    protected $filterPriceFrom = null;

    /**
     * @var float $filterPriceTo
     */
    protected $filterPriceTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFilterPriceFrom()
    {
      return $this->filterPriceFrom;
    }

    /**
     * @param float $filterPriceFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilterPriceStruct
     */
    public function setFilterPriceFrom($filterPriceFrom)
    {
      $this->filterPriceFrom = $filterPriceFrom;
      return $this;
    }

    /**
     * @return float
     */
    public function getFilterPriceTo()
    {
      return $this->filterPriceTo;
    }

    /**
     * @param float $filterPriceTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilterPriceStruct
     */
    public function setFilterPriceTo($filterPriceTo)
    {
      $this->filterPriceTo = $filterPriceTo;
      return $this;
    }

}
