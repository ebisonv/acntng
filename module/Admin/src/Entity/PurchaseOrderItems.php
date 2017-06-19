<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseOrderItems
 *
 * @ORM\Table(name="purchase_order_items", indexes={@ORM\Index(name="fk_purchase_order_items_purchase_order_id_idx", columns={"purchase_order_id"}), @ORM\Index(name="fk_purchase_order_items_product_id_idx", columns={"product_id"})})
 * @ORM\Entity
 */
class PurchaseOrderItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="other_charges", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $otherCharges = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="shipping_cost", type="float", precision=10, scale=0, nullable=false)
     */
    private $shippingCost = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="tax_amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $taxAmount = '0';

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
     * @var \Admin\Entity\PurchaseOrder
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\PurchaseOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_order_id", referencedColumnName="id")
     * })
     */
    private $purchaseOrder;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return PurchaseOrderItems
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set otherCharges
     *
     * @param float $otherCharges
     *
     * @return PurchaseOrderItems
     */
    public function setOtherCharges($otherCharges)
    {
        $this->otherCharges = $otherCharges;

        return $this;
    }

    /**
     * Get otherCharges
     *
     * @return float
     */
    public function getOtherCharges()
    {
        return $this->otherCharges;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return PurchaseOrderItems
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return PurchaseOrderItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set shippingCost
     *
     * @param float $shippingCost
     *
     * @return PurchaseOrderItems
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * Get shippingCost
     *
     * @return float
     */
    public function getShippingCost()
    {
        return $this->shippingCost;
    }

    /**
     * Set taxAmount
     *
     * @param float $taxAmount
     *
     * @return PurchaseOrderItems
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set product
     *
     * @param \Admin\Entity\Products $product
     *
     * @return PurchaseOrderItems
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
     * Set purchaseOrder
     *
     * @param \Admin\Entity\PurchaseOrder $purchaseOrder
     *
     * @return PurchaseOrderItems
     */
    public function setPurchaseOrder(\Admin\Entity\PurchaseOrder $purchaseOrder = null)
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * Get purchaseOrder
     *
     * @return \Admin\Entity\PurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }
}
