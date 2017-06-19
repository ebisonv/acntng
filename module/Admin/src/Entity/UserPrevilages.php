<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPrevilages
 *
 * @ORM\Table(name="user_previlages", indexes={@ORM\Index(name="fk_user_previlages_user_id_idx", columns={"user_id"}), @ORM\Index(name="fk_user_previlages_shop_id_idx", columns={"shop_id"})})
 * @ORM\Entity
 */
class UserPrevilages
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
     * @var boolean
     *
     * @ORM\Column(name="add_product", type="boolean", nullable=false)
     */
    private $addProduct = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_product", type="boolean", nullable=false)
     */
    private $editProduct = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_product", type="boolean", nullable=false)
     */
    private $deleteProduct = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_product", type="boolean", nullable=false)
     */
    private $viewProduct = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="add_user", type="boolean", nullable=false)
     */
    private $addUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="edit_user", type="boolean", nullable=false)
     */
    private $editUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="delete_user", type="boolean", nullable=false)
     */
    private $deleteUser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="view_user", type="boolean", nullable=false)
     */
    private $viewUser = '0';

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
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set addProduct
     *
     * @param boolean $addProduct
     *
     * @return UserPrevilages
     */
    public function setAddProduct($addProduct)
    {
        $this->addProduct = $addProduct;

        return $this;
    }

    /**
     * Get addProduct
     *
     * @return boolean
     */
    public function getAddProduct()
    {
        return $this->addProduct;
    }

    /**
     * Set editProduct
     *
     * @param boolean $editProduct
     *
     * @return UserPrevilages
     */
    public function setEditProduct($editProduct)
    {
        $this->editProduct = $editProduct;

        return $this;
    }

    /**
     * Get editProduct
     *
     * @return boolean
     */
    public function getEditProduct()
    {
        return $this->editProduct;
    }

    /**
     * Set deleteProduct
     *
     * @param boolean $deleteProduct
     *
     * @return UserPrevilages
     */
    public function setDeleteProduct($deleteProduct)
    {
        $this->deleteProduct = $deleteProduct;

        return $this;
    }

    /**
     * Get deleteProduct
     *
     * @return boolean
     */
    public function getDeleteProduct()
    {
        return $this->deleteProduct;
    }

    /**
     * Set viewProduct
     *
     * @param boolean $viewProduct
     *
     * @return UserPrevilages
     */
    public function setViewProduct($viewProduct)
    {
        $this->viewProduct = $viewProduct;

        return $this;
    }

    /**
     * Get viewProduct
     *
     * @return boolean
     */
    public function getViewProduct()
    {
        return $this->viewProduct;
    }

    /**
     * Set addUser
     *
     * @param boolean $addUser
     *
     * @return UserPrevilages
     */
    public function setAddUser($addUser)
    {
        $this->addUser = $addUser;

        return $this;
    }

    /**
     * Get addUser
     *
     * @return boolean
     */
    public function getAddUser()
    {
        return $this->addUser;
    }

    /**
     * Set editUser
     *
     * @param boolean $editUser
     *
     * @return UserPrevilages
     */
    public function setEditUser($editUser)
    {
        $this->editUser = $editUser;

        return $this;
    }

    /**
     * Get editUser
     *
     * @return boolean
     */
    public function getEditUser()
    {
        return $this->editUser;
    }

    /**
     * Set deleteUser
     *
     * @param boolean $deleteUser
     *
     * @return UserPrevilages
     */
    public function setDeleteUser($deleteUser)
    {
        $this->deleteUser = $deleteUser;

        return $this;
    }

    /**
     * Get deleteUser
     *
     * @return boolean
     */
    public function getDeleteUser()
    {
        return $this->deleteUser;
    }

    /**
     * Set viewUser
     *
     * @param boolean $viewUser
     *
     * @return UserPrevilages
     */
    public function setViewUser($viewUser)
    {
        $this->viewUser = $viewUser;

        return $this;
    }

    /**
     * Get viewUser
     *
     * @return boolean
     */
    public function getViewUser()
    {
        return $this->viewUser;
    }

    /**
     * Set shop
     *
     * @param \Admin\Entity\Shop $shop
     *
     * @return UserPrevilages
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
     * Set user
     *
     * @param \Admin\Entity\Users $user
     *
     * @return UserPrevilages
     */
    public function setUser(\Admin\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Admin\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}
