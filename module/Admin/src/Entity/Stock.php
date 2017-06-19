<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock", indexes={@ORM\Index(name="fk_stock_purchase_order_item_id_idx", columns={"purchase_order_item_id"}), @ORM\Index(name="fk_stock_product_id_idx", columns={"product_id"}), @ORM\Index(name="fk_stock_locationt_id_idx", columns={"location_id"}), @ORM\Index(name="fk_stock_create_by_idx", columns={"create_by"}), @ORM\Index(name="fk_stock_update_by_idx", columns={"update_by"}), @ORM\Index(name="fk_stock_shop_id_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class Stock
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
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

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
     * @var \Admin\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_by", referencedColumnName="id")
     * })
     */
    private $createBy;

    /**
     * @var \Admin\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     * })
     */
    private $location;

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
     * @var \Admin\Entity\PurchaseOrderItems
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\PurchaseOrderItems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_order_item_id", referencedColumnName="id")
     * })
     */
    private $purchaseOrderItem;

    /**
     * @var \Admin\Entity\Shop
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Shop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     * })
     */
    private $shop;

    /**
     * @var \Admin\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="update_by", referencedColumnName="id")
     * })
     */
    private $updateBy;



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
     * Set price
     *
     * @param float $price
     *
     * @return Stock
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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Stock
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
     * Set notes
     *
     * @param string $notes
     *
     * @return Stock
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Stock
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
     * @return Stock
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
     * Set createBy
     *
     * @param \Admin\Entity\Users $createBy
     *
     * @return Stock
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
     * Set location
     *
     * @param \Admin\Entity\Location $location
     *
     * @return Stock
     */
    public function setLocation(\Admin\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \Admin\Entity\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set product
     *
     * @param \Admin\Entity\Products $product
     *
     * @return Stock
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
     * Set purchaseOrderItem
     *
     * @param \Admin\Entity\PurchaseOrderItems $purchaseOrderItem
     *
     * @return Stock
     */
    public function setPurchaseOrderItem(\Admin\Entity\PurchaseOrderItems $purchaseOrderItem = null)
    {
        $this->purchaseOrderItem = $purchaseOrderItem;

        return $this;
    }

    /**
     * Get purchaseOrderItem
     *
     * @return \Admin\Entity\PurchaseOrderItems
     */
    public function getPurchaseOrderItem()
    {
        return $this->purchaseOrderItem;
    }

    /**
     * Set shop
     *
     * @param \Admin\Entity\Shop $shop
     *
     * @return Stock
     */
    public function setShop(\Admin\Entity\Shop $shop = null)
    {
        $this->shop = $shop;

        return $this;
    }

    /**
     * Get shop
     *
     * @return \Admin\Entity\Shop
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * Set updateBy
     *
     * @param \Admin\Entity\Users $updateBy
     *
     * @return Stock
     */
    public function setUpdateBy(\Admin\Entity\Users $updateBy = null)
    {
        $this->updateBy = $updateBy;

        return $this;
    }

    /**
     * Get updateBy
     *
     * @return \Admin\Entity\Users
     */
    public function getUpdateBy()
    {
        return $this->updateBy;
    }
}
