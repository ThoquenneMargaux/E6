<?php

namespace mttl\gsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use mttl\gsbBundle\Entity\Fichefrais;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="LigneFraisForfait", indexes={@ORM\Index(name="idFicheFrais", columns={"idFicheFrais"}), @ORM\Index(name="idFraisForfait", columns={"idFraisForfait"})})
 * @ORM\Entity(repositoryClass="mttl\gsbBundle\Entity\LignefraisforfaitRepository")
 */
class Lignefraisforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLigneFraisForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlignefraisforfait;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFicheFrais", referencedColumnName="idFicheFrais")
     * })
     */
    private $idfichefrais;

    /**
     * @var \Fraisforfait
     *
     * @ORM\ManyToOne(targetEntity="Fraisforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFraisForfait", referencedColumnName="idFraisForfait")
     * })
     */
    private $idfraisforfait;



    /**
     * Get idlignefraisforfait
     *
     * @return integer 
     */
    public function getIdlignefraisforfait()
    {
        return $this->idlignefraisforfait;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignefraisforfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idfichefrais
     *
     * @param \mttl\gsbBundle\Entity\Fichefrais $idfichefrais
     * @return Lignefraisforfait
     */
    public function setIdfichefrais(\mttl\gsbBundle\Entity\Fichefrais $idfichefrais = null)
    {
        $this->idfichefrais = $idfichefrais;

        return $this;
    }

    /**
     * Get idfichefrais
     *
     * @return \mttl\gsbBundle\Entity\Fichefrais 
     */
    public function getIdfichefrais()
    {
        return $this->idfichefrais;
    }

    /**
     * Set idfraisforfait
     *
     * @param \mttl\gsbBundle\Entity\Fraisforfait $idfraisforfait
     * @return Lignefraisforfait
     */
    public function setIdfraisforfait(\mttl\gsbBundle\Entity\Fraisforfait $idfraisforfait = null)
    {
        $this->idfraisforfait = $idfraisforfait;

        return $this;
    }

    /**
     * Get idfraisforfait
     *
     * @return \mttl\gsbBundle\Entity\Fraisforfait 
     */
    public function getIdfraisforfait()
    {
        return $this->idfraisforfait;
    }
    
    

}
