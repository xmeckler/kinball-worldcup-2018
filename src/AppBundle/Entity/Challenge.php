<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Challenge
 *
 * @ORM\Table(name="challenge")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChallengeRepository")
 */
class Challenge
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
     * @ORM\Column(name="greyTeam", type="string", length=80)
     */
    private $greyTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="blueTeam", type="string", length=80)
     */
    private $blueTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="blackTeam", type="string", length=80)
     */
    private $blackTeam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=80)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="winner", type="string", length=80, nullable=true)
     */
    private $winner;


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
     * Set greyTeam
     *
     * @param string $greyTeam
     *
     * @return Challenge
     */
    public function setGreyTeam($greyTeam)
    {
        $this->greyTeam = $greyTeam;

        return $this;
    }

    /**
     * Get greyTeam
     *
     * @return string
     */
    public function getGreyTeam()
    {
        return $this->greyTeam;
    }

    /**
     * Set blueTeam
     *
     * @param string $blueTeam
     *
     * @return Challenge
     */
    public function setBlueTeam($blueTeam)
    {
        $this->blueTeam = $blueTeam;

        return $this;
    }

    /**
     * Get blueTeam
     *
     * @return string
     */
    public function getBlueTeam()
    {
        return $this->blueTeam;
    }

    /**
     * Set blackTeam
     *
     * @param string $blackTeam
     *
     * @return Challenge
     */
    public function setBlackTeam($blackTeam)
    {
        $this->blackTeam = $blackTeam;

        return $this;
    }

    /**
     * Get blackTeam
     *
     * @return string
     */
    public function getBlackTeam()
    {
        return $this->blackTeam;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Challenge
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return Challenge
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return Challenge
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set winner
     *
     * @param string $winner
     *
     * @return Challenge
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return string
     */
    public function getWinner()
    {
        return $this->winner;
    }
}
