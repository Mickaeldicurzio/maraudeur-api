<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\JobCardRepository")
 */
class JobCard
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Student", inversedBy="jobCard", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $student;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gitLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $webSiteLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkedinLink;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getGitLink(): ?string
    {
        return $this->gitLink;
    }

    public function setGitLink(string $gitLink): self
    {
        $this->gitLink = $gitLink;

        return $this;
    }

    public function getWebSiteLink(): ?string
    {
        return $this->webSiteLink;
    }

    public function setWebSiteLink(?string $webSiteLink): self
    {
        $this->webSiteLink = $webSiteLink;

        return $this;
    }

    public function getLinkedinLink(): ?string
    {
        return $this->linkedinLink;
    }

    public function setLinkedinLink(?string $linkedinLink): self
    {
        $this->linkedinLink = $linkedinLink;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }
}
