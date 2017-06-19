<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderItems
 *
 * @ORM\Table(name="order_items", indexes={@ORM\Index(name="fk_order_items_stock_id_idx", columns={"stock_id"})})
 * @ORM\Entity
 */
class OrderItems
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
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

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
     * @ORM\Column(name="total_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalPrice = '0';

    /**
     * @var \Admin\Entity\Stock
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Stock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stock_id", referencedColumnName="id")
     * })
     */
    private $stock;



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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderItems
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
     * @return OrderItems
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
     * @return OrderItems
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
     * Set totalPrice
     *
     * @param float $totalPrice
     *
     * @return OrderItems
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set stock
     *
     * @param \Admin\Entity\Stock $stock
     *
     * @return OrderItems
     */
    public function setStock(\Admin\Entity\Stock $stock = null)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return \Admin\Entity\Stock
     */
    public function getStock()
    {
        return $this->stock;
    }
}
