<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    /**
     * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="lastname")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, name="firstname")
     */
    private $firstname;

    /**
     * @ORM\Column(type="date")
     */
    private $reservationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ticketType;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tariff;

    /**
     * @ORM\Column(type="date")
     */
    private $birthdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

	/**
	 * @ORM\Column(type="string", length=255, name="reservation_code")
	 */
	private $reservationCode;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $email;

	public function __construct()
	{
		$this->reservationDate = new \Datetime();
	}

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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Reservation
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Reservation
     */
    public function setFirstname($firstname)
    {
        $this->firstname= $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set reservationDate
     *
     * @param \DateTime $reservationDate
     *
     * @return Reservation
     */
    public function setReservationDate($reservationDate)
    {
        $this->reservationDate = $reservationDate;

        return $this;
    }

    /**
     * Get reservationDate
     *
     * @return \DateTime
     */
    public function getReservationDate()
    {
        return $this->reservationDate;
    }

    /**
     * Set ticketType
     *
     * @param boolean $ticketType
     *
     * @return Reservation
     */
    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Get ticketType
     *
     * @return bool
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Set tariff
     *
     * @param boolean $tariff
     *
     * @return Reservation
     */
    public function setTariff($tariff)
    {
    	// True = Journée & False = Demi-journée
        $this->tariff = $tariff;

        return $this;
    }

    /**
     * Get tariff
     *
     * @return bool
     */
    public function getTariff()
    {
        return $this->tariff;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Reservation
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Reservation
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
	 * Set reservationCode
	 *
	 * @param string $reservationCode
	 *
	 * @return Reservation
	 */
	public function setResevationCode($reservationCode)
	{
		$this->reservationCode = $reservationCode;

		return $this;
	}

	/**
	 * Get reservationCode
	 *
	 * @return string
	 */
	public function getReservationCode()
	{
		return $this->reservationCode;
	}

    /**
     * Set reservationCode
     *
     * @param string $reservationCode
     *
     * @return Reservation
     */
    public function setReservationCode($reservationCode)
    {
        $this->reservationCode = $reservationCode;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
