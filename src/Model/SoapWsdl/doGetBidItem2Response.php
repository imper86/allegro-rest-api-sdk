<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetBidItem2Response
{

    /**
     * @var ArrayOfBidliststruct2 $biditemList
     */
    protected $biditemList = null;

    /**
     * @param ArrayOfBidliststruct2 $biditemList
     */
    public function __construct($biditemList = null)
    {
      $this->biditemList = $biditemList;
    }

    /**
     * @return ArrayOfBidliststruct2
     */
    public function getBiditemList()
    {
      return $this->biditemList;
    }

    /**
     * @param ArrayOfBidliststruct2 $biditemList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetBidItem2Response
     */
    public function setBiditemList($biditemList)
    {
      $this->biditemList = $biditemList;
      return $this;
    }

}
