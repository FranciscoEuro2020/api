<?php
namespace VideoLibrary\Api\Domain\Model\Videos;
use VideoLibrary\Api\Domain\Model\Subtitle\SubtitleCollection;
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
    /**
     * Undocumented variable
     *
     * @var \DateTimeImmutable
     */
    private  $createdAt;
    /**
     *  @var \DateTime
     */

    private  $updatedAt;
   /*private  $subtitles;*/

    public function __construct(int $id, string $title, int $duration, Status $status/*,?SubtitleCollection $subtitles*/)
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
        $this->status = $status;
       /* $this->subtitles = $subtitles;*/
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTime();
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

    public function createdAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
   /* public function subtitles(): ?SubtitleCollection
    {
        return $this->subtitles;
    }*/
    

}