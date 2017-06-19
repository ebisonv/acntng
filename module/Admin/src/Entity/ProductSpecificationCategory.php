<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSpecificationCategory
 *
 * @ORM\Table(name="product_specification_category", indexes={@ORM\Index(name="fk_product_specification_category_product_category_id_idx", columns={"product_category_id"})})
 * @ORM\Entity
 */
class ProductSpecificationCategory
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
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

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
     * Set name
     *
     * @param string $name
     *
     * @return ProductSpecificationCategory
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
     * @return ProductSpecificationCategory
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
     * Set order
     *
     * @param integer $order
     *
     * @return ProductSpecificationCategory
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set productCategory
     *
     * @param \Admin\Entity\ProductCategory $productCategory
     *
     * @return ProductSpecificationCategory
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
