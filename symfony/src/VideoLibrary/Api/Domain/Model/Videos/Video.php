<?php
namespace VideoLibrary\Api\Domain\Model\Videos;

class Video
{
    /**
     *
     * @var int
     */
    private  $id;
    /**
     *
     * @var string
     */
    private  $title;
    /**
     *
     * @var string
     */
    private  $duration;

    /**
     * @var Status
     */
    private $status;

    public function __construct(int $id, string $title, int $duration, Status $status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->status = $status;
      /*  $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTime();*/
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

    public function status(): Status
    {
        return $this->status;
    }

    /*public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): \DateTime
    {
        return $this->updatedAt;
    }*/

    

}