<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderPayments
 *
 * @ORM\Table(name="order_payments", indexes={@ORM\Index(name="fk_order_payments_order_id_idx", columns={"order_id"})})
 * @ORM\Entity
 */
class OrderPayments
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
     * @ORM\Column(name="payment_refno", type="string", length=155, nullable=true)
     */
    private $paymentRefno;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="method", type="boolean", nullable=true)
     */
    private $method;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="path1", type="string", length=255, nullable=true)
     */
    private $path1;

    /**
     * @var string
     *
     * @ORM\Column(name="path2", type="string", length=255, nullable=true)
     */
    private $path2;

    /**
     * @var string
     *
     * @ORM\Column(name="path3", type="string", length=255, nullable=true)
     */
    private $path3;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_by", type="integer", nullable=true)
     */
    private $createBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true)
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
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

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
     * Set paymentRefno
     *
     * @param string $paymentRefno
     *
     * @return OrderPayments
     */
    public function setPaymentRefno($paymentRefno)
    {
        $this->paymentRefno = $paymentRefno;

        return $this;
    }

    /**
     * Get paymentRefno
     *
     * @return string
     */
    public function getPaymentRefno()
    {
        return $this->paymentRefno;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return OrderPayments
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
     * Set method
     *
     * @param boolean $method
     *
     * @return OrderPayments
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return boolean
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return OrderPayments
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
     * Set path1
     *
     * @param string $path1
     *
     * @return OrderPayments
     */
    public function setPath1($path1)
    {
        $this->path1 = $path1;

        return $this;
    }

    /**
     * Get path1
     *
     * @return string
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Set path2
     *
     * @param string $path2
     *
     * @return OrderPayments
     */
    public function setPath2($path2)
    {
        $this->path2 = $path2;

        return $this;
    }

    /**
     * Get path2
     *
     * @return string
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Set path3
     *
     * @param string $path3
     *
     * @return OrderPayments
     */
    public function setPath3($path3)
    {
        $this->path3 = $path3;

        return $this;
    }

    /**
     * Get path3
     *
     * @return string
     */
    public function getPath3()
    {
        return $this->path3;
    }

    /**
     * Set createBy
     *
     * @param integer $createBy
     *
     * @return OrderPayments
     */
    public function setCreateBy($createBy)
    {
        $this->createBy = $createBy;

        return $this;
    }

    /**
     * Get createBy
     *
     * @return integer
     */
    public function getCreateBy()
    {
        return $this->createBy;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     *
     * @return OrderPayments
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
     * @return OrderPayments
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
     * @return OrderPayments
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
     * Set order
     *
     * @param \Admin\Entity\Order $order
     *
     * @return OrderPayments
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
