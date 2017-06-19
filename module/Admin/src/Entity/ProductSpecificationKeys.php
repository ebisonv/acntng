<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSpecificationKeys
 *
 * @ORM\Table(name="product_specification_keys", indexes={@ORM\Index(name="fk_product_specification_keys_product_specification_categor_idx", columns={"product_specification_category_id"})})
 * @ORM\Entity
 */
class ProductSpecificationKeys
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="keyname", type="string", length=55, nullable=false)
     */
    private $keyname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="list_all", type="boolean", nullable=false)
     */
    private $listAll = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="field_type", type="boolean", nullable=false)
     */
    private $fieldType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enable_filter", type="boolean", nullable=false)
     */
    private $enableFilter = '0';

    /**
     * @var \Admin\Entity\ProductSpecificationCategory
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\ProductSpecificationCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_specification_category_id", referencedColumnName="id")
     * })
     */
    private $productSpecificationCategory;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set keyname
     *
     * @param string $keyname
     *
     * @return ProductSpecificationKeys
     */
    public function setKeyname($keyname)
    {
        $this->keyname = $keyname;

        return $this;
    }

    /**
     * Get keyname
     *
     * @return string
     */
    public function getKeyname()
    {
        return $this->keyname;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProductSpecificationKeys
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set listAll
     *
     * @param boolean $listAll
     *
     * @return ProductSpecificationKeys
     */
    public function setListAll($listAll)
    {
        $this->listAll = $listAll;

        return $this;
    }

    /**
     * Get listAll
     *
     * @return boolean
     */
    public function getListAll()
    {
        return $this->listAll;
    }

    /**
     * Set fieldType
     *
     * @param boolean $fieldType
     *
     * @return ProductSpecificationKeys
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return boolean
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set enableFilter
     *
     * @param boolean $enableFilter
     *
     * @return ProductSpecificationKeys
     */
    public function setEnableFilter($enableFilter)
    {
        $this->enableFilter = $enableFilter;

        return $this;
    }

    /**
     * Get enableFilter
     *
     * @return boolean
     */
    public function getEnableFilter()
    {
        return $this->enableFilter;
    }

    /**
     * Set productSpecificationCategory
     *
     * @param \Admin\Entity\ProductSpecificationCategory $productSpecificationCategory
     *
     * @return ProductSpecificationKeys
     */
    public function setProductSpecificationCategory(\Admin\Entity\ProductSpecificationCategory $productSpecificationCategory = null)
    {
        $this->productSpecificationCategory = $productSpecificationCategory;

        return $this;
    }

    /**
     * Get productSpecificationCategory
     *
     * @return \Admin\Entity\ProductSpecificationCategory
     */
    public function getProductSpecificationCategory()
    {
        return $this->productSpecificationCategory;
    }
}
