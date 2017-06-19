<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="fk_products_organisation_id_idx", columns={"organisation_id"}), @ORM\Index(name="fk_products_create_by_idx", columns={"create_by"}), @ORM\Index(name="fk_products_product_category_id_idx", columns={"product_category_id"})})
 * @ORM\Entity
 */
class Products
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
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="volumetric_weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $volumetricWeight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_edit", type="boolean", nullable=true)
     */
    private $allowEdit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=false)
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \Admin\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_by", referencedColumnName="id")
     * })
     */
    private $createBy;

    /**
     * @var \Admin\Entity\Organisation
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Organisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="organisation_id", referencedColumnName="id")
     * })
     */
    private $organisation;

    /**
     * @var \Admin\Entity\ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\ProductCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_category_id", referencedColumnName="id")
     * })
     */
    private $productCategory;



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
     * Set code
     *
     * @param string $code
     *
     * @return Products
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
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
     * Set description
     *
     * @param string $description
     *
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return Products
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set volumetricWeight
     *
     * @param float $volumetricWeight
     *
     * @return Products
     */
    public function setVolumetricWeight($volumetricWeight)
    {
        $this->volumetricWeight = $volumetricWeight;

        return $this;
    }

    /**
     * Get volumetricWeight
     *
     * @return float
     */
    public function getVolumetricWeight()
    {
        return $this->volumetricWeight;
    }

    /**
     * Set allowEdit
     *
     * @param boolean $allowEdit
     *
     * @return Products
     */
    public function setAllowEdit($allowEdit)
    {
        $this->allowEdit = $allowEdit;

        return $this;
    }

    /**
     * Get allowEdit
     *
     * @return boolean
     */
    public function getAllowEdit()
    {
        return $this->allowEdit;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Products
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Products
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Products
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createBy
     *
     * @param \Admin\Entity\Users $createBy
     *
     * @return Products
     */
    public function setCreateBy(\Admin\Entity\Users $createBy = null)
    {
        $this->createBy = $createBy;

        return $this;
    }

    /**
     * Get createBy
     *
     * @return \Admin\Entity\Users
     */
    public function getCreateBy()
    {
        return $this->createBy;
    }

    /**
     * Set organisation
     *
     * @param \Admin\Entity\Organisation $organisation
     *
     * @return Products
     */
    public function setOrganisation(\Admin\Entity\Organisation $organisation = null)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \Admin\Entity\Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set productCategory
     *
     * @param \Admin\Entity\ProductCategory $productCategory
     *
     * @return Products
     */
    public function setProductCategory(\Admin\Entity\ProductCategory $productCategory = null)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return \Admin\Entity\ProductCategory
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }
}
