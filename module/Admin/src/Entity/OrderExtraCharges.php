<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderExtraCharges
 *
 * @ORM\Table(name="order_extra_charges", indexes={@ORM\Index(name="fk_order_extra_charges_order_id_idx", columns={"order_id"}), @ORM\Index(name="fk_order_extra_charges_extra_charges_id_idx", columns={"extra_charges_id"})})
 * @ORM\Entity
 */
class OrderExtraCharges
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
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount = '0';

    /**
     * @var \Admin\Entity\ExtraCharges
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\ExtraCharges")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extra_charges_id", referencedColumnName="id")
     * })
     */
    private $extraCharges;

    /**
     * @var \Admin\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;



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
     * Set amount
     *
     * @param float $amount
     *
     * @return OrderExtraCharges
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
     * Set extraCharges
     *
     * @param \Admin\Entity\ExtraCharges $extraCharges
     *
     * @return OrderExtraCharges
     */
    public function setExtraCharges(\Admin\Entity\ExtraCharges $extraCharges = null)
    {
        $this->extraCharges = $extraCharges;

        return $this;
    }

    /**
     * Get extraCharges
     *
     * @return \Admin\Entity\ExtraCharges
     */
    public function getExtraCharges()
    {
        return $this->extraCharges;
    }

    /**
     * Set order
     *
     * @param \Admin\Entity\Order $order
     *
     * @return OrderExtraCharges
     */
    public function setOrder(\Admin\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \Admin\Entity\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
