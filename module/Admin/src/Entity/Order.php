<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", indexes={@ORM\Index(name="fk_order_organisation_id_idx", columns={"organisation_id"}), @ORM\Index(name="fk_order_buyer_id_idx", columns={"buyer_id"}), @ORM\Index(name="fk_order_create_by_idx", columns={"create_by"}), @ORM\Index(name="fk_order_update_by_idx", columns={"update_by"}), @ORM\Index(name="fk_order_approved_by_idx", columns={"approved_by"})})
 * @ORM\Entity
 */
class Order
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
     * @ORM\Column(name="code", type="string", length=155, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=false)
     */
    private $orderDate;

    /**
     * @var float
     *
     * @ORM\Column(name="total_item_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalItemPrice = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="total_shipping_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalShippingPrice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="buyer_address", type="string", length=255, nullable=true)
     */
    private $buyerAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="shipping_address", type="string", length=255, nullable=true)
     */
    private $shippingAddress;

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
     *   @ORM\JoinColumn(name="approved_by", referencedColumnName="id")
     * })
     */
    private $approvedBy;

    /**
     * @var \Admin\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="buyer_id", referencedColumnName="id")
     * })
     */
    private $buyer;

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
     * Set code
     *
     * @param string $code
     *
     * @return Order
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
     * Set orderDate
     *
     * @param \DateTime $orderDate
     *
     * @return Order
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set totalItemPrice
     *
     * @param float $totalItemPrice
     *
     * @return Order
     */
    public function setTotalItemPrice($totalItemPrice)
    {
        $this->totalItemPrice = $totalItemPrice;

        return $this;
    }

    /**
     * Get totalItemPrice
     *
     * @return float
     */
    public function getTotalItemPrice()
    {
        return $this->totalItemPrice;
    }

    /**
     * Set totalShippingPrice
     *
     * @param float $totalShippingPrice
     *
     * @return Order
     */
    public function setTotalShippingPrice($totalShippingPrice)
    {
        $this->totalShippingPrice = $totalShippingPrice;

        return $this;
    }

    /**
     * Get totalShippingPrice
     *
     * @return float
     */
    public function getTotalShippingPrice()
    {
        return $this->totalShippingPrice;
    }

    /**
     * Set buyerAddress
     *
     * @param string $buyerAddress
     *
     * @return Order
     */
    public function setBuyerAddress($buyerAddress)
    {
        $this->buyerAddress = $buyerAddress;

        return $this;
    }

    /**
     * Get buyerAddress
     *
     * @return string
     */
    public function getBuyerAddress()
    {
        return $this->buyerAddress;
    }

    /**
     * Set shippingAddress
     *
     * @param string $shippingAddress
     *
     * @return Order
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return Order
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
     * @return Order
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
     * @return Order
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
     * Set approvedBy
     *
     * @param \Admin\Entity\Users $approvedBy
     *
     * @return Order
     */
    public function setApprovedBy(\Admin\Entity\Users $approvedBy = null)
    {
        $this->approvedBy = $approvedBy;

        return $this;
    }

    /**
     * Get approvedBy
     *
     * @return \Admin\Entity\Users
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * Set buyer
     *
     * @param \Admin\Entity\Customer $buyer
     *
     * @return Order
     */
    public function setBuyer(\Admin\Entity\Customer $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer
     *
     * @return \Admin\Entity\Customer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Set createBy
     *
     * @param \Admin\Entity\Users $createBy
     *
     * @return Order
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
     * @return Order
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
     * Set updateBy
     *
     * @param \Admin\Entity\Users $updateBy
     *
     * @return Order
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
