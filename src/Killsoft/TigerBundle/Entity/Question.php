<?php

namespace Killsoft\TigerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(name="mail", type="string")
     */
    private $mail;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="username", type="string")
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="12")
     * @ORM\Column(name="phonenumber", type="string", length=12)
     */
    private $phonenumber;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(min="10", max="1000")
     * @ORM\Column(name="subject", type="text")
     */
    private $subject;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * @param $mail
     * @return $this
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }
}