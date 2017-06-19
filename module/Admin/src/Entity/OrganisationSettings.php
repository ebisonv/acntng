<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrganisationSettings
 *
 * @ORM\Table(name="organisation_settings", indexes={@ORM\Index(name="fk_organisation_settings_organisation_id_idx", columns={"organisation_id"})})
 * @ORM\Entity
 */
class OrganisationSettings
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
     * Set organisation
     *
     * @param \Admin\Entity\Organisation $organisation
     *
     * @return OrganisationSettings
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
