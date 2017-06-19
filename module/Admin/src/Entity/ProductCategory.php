<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 *
 * @ORM\Table(name="product_category", indexes={@ORM\Index(name="fk_product_category_organisation_id_idx", columns={"organisation_id"}), @ORM\Index(name="fk_product_category_parent_id_idx", columns={"parent_id"})})
 * @ORM\Entity
 */
class ProductCategory
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

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
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;



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
     * @return ProductCategory
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
     * Set organisation
     *
     * @param \Admin\Entity\Organisation $organisation
     *
     * @return ProductCategory
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
     * Set parent
     *
     * @param \Admin\Entity\ProductCategory $parent
     *
     * @return ProductCategory
     */
    public function setParent(\Admin\Entity\ProductCategory $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Admin\Entity\ProductCategory
     */
    public function getParent()
    {
        return $this->parent;
    }
}
