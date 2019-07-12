<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class CatInfoType
{

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @var int $catParent
     */
    protected $catParent = null;

    /**
     * @var int $catPosition
     */
    protected $catPosition = null;

    /**
     * @var int $catIsProductCatalogueEnabled
     */
    protected $catIsProductCatalogueEnabled = null;

    /**
     * @var boolean $catIsLeaf
     */
    protected $catIsLeaf = null;

    /**
     * @param int $catId
     * @param string $catName
     * @param int $catParent
     * @param int $catPosition
     * @param int $catIsProductCatalogueEnabled
     */
    public function __construct($catId = null, $catName = null, $catParent = null, $catPosition = null, $catIsProductCatalogueEnabled = null)
    {
      $this->catId = $catId;
      $this->catName = $catName;
      $this->catParent = $catParent;
      $this->catPosition = $catPosition;
      $this->catIsProductCatalogueEnabled = $catIsProductCatalogueEnabled;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
      return $this->catId;
    }

    /**
     * @param int $catId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatId($catId)
    {
      $this->catId = $catId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatName()
    {
      return $this->catName;
    }

    /**
     * @param string $catName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatName($catName)
    {
      $this->catName = $catName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatParent()
    {
      return $this->catParent;
    }

    /**
     * @param int $catParent
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatParent($catParent)
    {
      $this->catParent = $catParent;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatPosition()
    {
      return $this->catPosition;
    }

    /**
     * @param int $catPosition
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatPosition($catPosition)
    {
      $this->catPosition = $catPosition;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatIsProductCatalogueEnabled()
    {
      return $this->catIsProductCatalogueEnabled;
    }

    /**
     * @param int $catIsProductCatalogueEnabled
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatIsProductCatalogueEnabled($catIsProductCatalogueEnabled)
    {
      $this->catIsProductCatalogueEnabled = $catIsProductCatalogueEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCatIsLeaf()
    {
      return $this->catIsLeaf;
    }

    /**
     * @param boolean $catIsLeaf
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CatInfoType
     */
    public function setCatIsLeaf($catIsLeaf)
    {
      $this->catIsLeaf = $catIsLeaf;
      return $this;
    }

}
