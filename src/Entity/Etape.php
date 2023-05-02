<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etape
 *
 * @ORM\Table(name="etape", indexes={@ORM\Index(name="oioioiioio", columns={"nc"}), @ORM\Index(name="ioiuoiuoiu", columns={"id_ville"})})
 * @ORM\Entity
 */
class Etape
{
    /**
     * @var int
     *
     * @ORM\Column(name="rang", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rang;

    /**
     * @var int
     *
     * @ORM\Column(name="jr", type="integer", nullable=false)
     */
    private $jr;

    /**
     * @var string
     *
     * @ORM\Column(name="programme", type="string", length=250, nullable=false)
     */
    private $programme;

    /**
     * @var Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id")
     * })
     */
    private $idVille;

    /**
     * @var Circuit
     *
     * @ORM\ManyToOne(targetEntity="Circuit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nc", referencedColumnName="nc")
     * })
     */
    private $nc;

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function getJr(): ?int
    {
        return $this->jr;
    }

    public function setJr(int $jr): self
    {
        $this->jr = $jr;

        return $this;
    }

    public function getProgramme(): ?string
    {
        return $this->programme;
    }

    public function setProgramme(string $programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getIdVille(): ?Ville
    {
        return $this->idVille;
    }

    public function setIdVille(?Ville $idVille): self
    {
        $this->idVille = $idVille;

        return $this;
    }

    public function getNc(): ?Circuit
    {
        return $this->nc;
    }

    public function setNc(?Circuit $nc): self
    {
        $this->nc = $nc;

        return $this;
    }

    public function __toString()
    {
        return $this->nc;
    }


}
