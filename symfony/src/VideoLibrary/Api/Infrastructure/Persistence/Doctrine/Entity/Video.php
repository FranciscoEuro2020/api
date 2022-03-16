<?php

namespace VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Entity;

use Doctrine\Common\Collections\Collection;

class Video
{
    /**
     * Undocumented variable
     *
     * @var integer
     */
    private  $id;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $title;
    /**
     * Undocumented variable
     *
     * @var integer
     */
    private  $duration;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $status;
  
   /**
    * Undocumented variable
    *
    * @var \DateTimeInterface
    */
    private  $createdAt;
    /**
     * Undocumented variable
     *
     * @var \DateTimeInterface
     */
    private  $updatedAt;

    public function __construct(int $id, string $title, int $duration, string $status,  \DateTimeInterface $createdAt, \DateTimeInterface $updatedAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }


    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function duration(): int
    {
        return $this->duration;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function createdAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function updatedAt(): \DateTimeInterface
    {
        return $this->updatedAt;
    }
}