<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 */
class Tache
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var bool
     */
    private $fait;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $tag;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Tache
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set fait
     *
     * @param boolean $fait
     * @return Tache
     */
    public function setFait($fait)
    {
        $this->fait = $fait;

        return $this;
    }

    /**
     * Get fait
     *
     * @return boolean 
     */
    public function getFait()
    {
        return $this->fait;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Tache
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
     * Set tag
     *
     * @param string $tag
     * @return Tache
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
