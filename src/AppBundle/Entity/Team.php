<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=80)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="teamName", type="string", length=80)
     */
    private $teamName;

    /**
     * @var string
     *
     * @ORM\Column(name="flagImg", type="string", length=255)
     */
    private $flagImg;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Team
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set teamName
     *
     * @param string $teamName
     *
     * @return Team
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set flagImg
     *
     * @param string $flagImg
     *
     * @return Team
     */
    public function setFlagImg($flagImg)
    {
        $this->flagImg = $flagImg;

        return $this;
    }

    /**
     * Get flagImg
     *
     * @return string
     */
    public function getFlagImg()
    {
        return $this->flagImg;
    }
}

