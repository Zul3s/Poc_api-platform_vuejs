<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Carbon\Carbon;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ApiResource(
 *   collectionOperations={"get"={"method"="GET"}},
 *   itemOperations={"get"={"method"="GET"}}
 * )
 *
 * @ORM\Entity(repositoryClass="App\Repository\SecurityAlertRepository")
 */
class SecurityAlert
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     nullable=false,
     *     unique=true
     * )
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     nullable=false
     * )
     * @Assert\NotBlank
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     nullable=false
     * )
     * @Assert\NotBlank
     */
    private $description;

    /**
     * @var Carbon
     *
     * @Gedmo\Timestampable(on="create")
     *
     * @ORM\Column(
     *     type="datetimetz",
     *     nullable=false
     * )
     */
    private $createAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return SecurityAlert
     */
    public function setTitle(string $title): SecurityAlert
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return SecurityAlert
     */
    public function setLink(string $link): SecurityAlert
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return SecurityAlert
     */
    public function setDescription(string $description): SecurityAlert
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->createAt;
    }

    /**
     * @param Carbon $createdAt
     * @return SecurityAlert
     */
    public function setCreatedAt(Carbon $createdAt): SecurityAlert
    {
        $this->createAt = $createdAt;
        return $this;
    }
}
