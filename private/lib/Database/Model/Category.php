<?php declare(strict_types=1);

namespace App\Database\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * This model class represents a single database record from the `categories` table.
 *
 * @ORM\Entity
 * @ORM\Table(name="categories",indexes={@Index(name="search_by_userid", columns={"userId"})})
 */
class Category extends AbstractModel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected int $id;

    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="userId", referencedColumnName="id")
     */
    protected User $referencedUser;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected string $name;

    /**
     * @ORM\Column(type="string")
     */
    protected string $description;

    /**
     * @ORM\Column(type="integer")
     */
    protected int $createdTimestamp;

    /**
     * @ORM\Column(type="integer")
     */
    protected int $lastUpdatedTimestamp;

    public function getReferencedUser(): User
    {
        return $this->referencedUser;
    }

    public function setReferencedUser(User $user): void
    {
        $this->referencedUser = $user;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
