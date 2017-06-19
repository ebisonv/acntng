<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExtraCharges
 *
 * @ORM\Table(name="extra_charges", indexes={@ORM\Index(name="fk_extra_charges_organisation_id_idx", columns={"organisation_id"})})
 * @ORM\Entity
 */
class ExtraCharges
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
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var float
     *
     * @ORM\Column(name="percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $percent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="parent_id", type="string", length=155, nullable=false)
     */
    private $parentId = '0';

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
     * @return ExtraCharges
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
     * Set type
     *
     * @param boolean $type
     *
     * @return ExtraCharges
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return ExtraCharges
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set percent
     *
     * @param float $percent
     *
     * @return ExtraCharges
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return ExtraCharges
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set organisation
     *
     * @param \Admin\Entity\Organisation $organisation
     *
     * @return ExtraCharges
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
}
