<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoAddToBlackListRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfUserblackliststruct $usersBlackListArray
     */
    protected $usersBlackListArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfUserblackliststruct $usersBlackListArray
     */
    public function __construct($sessionHandle = null, $usersBlackListArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->usersBlackListArray = $usersBlackListArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoAddToBlackListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfUserblackliststruct
     */
    public function getUsersBlackListArray()
    {
      return $this->usersBlackListArray;
    }

    /**
     * @param ArrayOfUserblackliststruct $usersBlackListArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoAddToBlackListRequest
     */
    public function setUsersBlackListArray($usersBlackListArray)
    {
      $this->usersBlackListArray = $usersBlackListArray;
      return $this;
    }

}
