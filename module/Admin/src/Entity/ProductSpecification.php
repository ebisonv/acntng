<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSpecification
 *
 * @ORM\Table(name="product_specification", indexes={@ORM\Index(name="fk_product_specification_product_id_idx", columns={"product_id"}), @ORM\Index(name="fk_product_specification_product_specification_key_id_idx", columns={"product_specification_key_id"})})
 * @ORM\Entity
 */
class ProductSpecification
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
     * @ORM\Column(name="spec_val", type="string", length=255, nullable=true)
     */
    private $specVal;

    /**
     * @var \Admin\Entity\Products
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Admin\Entity\ProductSpecificationKeys
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\ProductSpecificationKeys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_specification_key_id", referencedColumnName="id")
     * })
     */
    private $productSpecificationKey;



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
     * Set specVal
     *
     * @param string $specVal
     *
     * @return ProductSpecification
     */
    public function setSpecVal($specVal)
    {
        $this->specVal = $specVal;

        return $this;
    }

    /**
     * Get specVal
     *
     * @return string
     */
    public function getSpecVal()
    {
        return $this->specVal;
    }

    /**
     * Set product
     *
     * @param \Admin\Entity\Products $product
     *
     * @return ProductSpecification
     */
    public function setProduct(\Admin\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Admin\Entity\Products
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set productSpecificationKey
     *
     * @param \Admin\Entity\ProductSpecificationKeys $productSpecificationKey
     *
     * @return ProductSpecification
     */
    public function setProductSpecificationKey(\Admin\Entity\ProductSpecificationKeys $productSpecificationKey = null)
    {
        $this->productSpecificationKey = $productSpecificationKey;

        return $this;
    }

    /**
     * Get productSpecificationKey
     *
     * @return \Admin\Entity\ProductSpecificationKeys
     */
    public function getProductSpecificationKey()
    {
        return $this->productSpecificationKey;
    }
}
