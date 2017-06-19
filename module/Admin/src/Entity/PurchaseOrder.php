<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseOrder
 *
 * @ORM\Table(name="purchase_order", indexes={@ORM\Index(name="fk_purchase_order_create_by_idx", columns={"create_by"}), @ORM\Index(name="fk_purchase_order_approved_by_idx", columns={"approved_by"}), @ORM\Index(name="fk_purchase_order_update_by_idx", columns={"update_by"}), @ORM\Index(name="fk_purchase_order_shop_id_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class PurchaseOrder
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
     * @ORM\Column(name="seller_details", type="string", length=255, nullable=true)
     */
    private $sellerDetails;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="datetime", nullable=false)
     */
    private $purchaseDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="purchase_status", type="boolean", nullable=false)
     */
    private $purchaseStatus;

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
     * @var \Admin\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="create_by", referencedColumnName="id")
     * })
     */
    private $createBy;

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
     * Set sellerDetails
     *
     * @param string $sellerDetails
     *
     * @return PurchaseOrder
     */
    public function setSellerDetails($sellerDetails)
    {
        $this->sellerDetails = $sellerDetails;

        return $this;
    }

    /**
     * Get sellerDetails
     *
     * @return string
     */
    public function getSellerDetails()
    {
        return $this->sellerDetails;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return PurchaseOrder
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set purchaseStatus
     *
     * @param boolean $purchaseStatus
     *
     * @return PurchaseOrder
     */
    public function setPurchaseStatus($purchaseStatus)
    {
        $this->purchaseStatus = $purchaseStatus;

        return $this;
    }

    /**
     * Get purchaseStatus
     *
     * @return boolean
     */
    public function getPurchaseStatus()
    {
        return $this->purchaseStatus;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
     * Set createBy
     *
     * @param \Admin\Entity\Users $createBy
     *
     * @return PurchaseOrder
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
     * Set shop
     *
     * @param \Admin\Entity\Shop $shop
     *
     * @return PurchaseOrder
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
     * @return PurchaseOrder
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
