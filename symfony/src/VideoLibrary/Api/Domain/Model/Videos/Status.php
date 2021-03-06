<?php
namespace VideoLibrary\Api\Domain\Model\Videos;

class Status
{
     /**
     *
     * @var string
     */
    private  $value;

    const ALLOWED_VALUES = [
        'pending',
        'published',
        'removed'
    ];

    public function __construct(string $value)
    {
        
        if (!in_array($value, self::ALLOWED_VALUES)) {
            throw new InvalidStatusValueException();
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(Status $status)
    {
        return $this->value() === $status->value();
    }
}