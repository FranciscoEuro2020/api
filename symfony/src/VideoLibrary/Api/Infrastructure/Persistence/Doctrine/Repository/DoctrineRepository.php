<?php


namespace VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Repository;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

abstract class DoctrineRepository
{
    /**
     * Undocumented variable
     *
     * @var EntityRepository
     */
    protected $repository;
    /**
     * Undocumented variable
     *
     * @var EntityManager
     */
    protected $entityManager;
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $table;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $this->entityManager->getRepository($this->entityClassName());
        $this->table = $this->entityManager->getClassMetadata($this->entityClassName())->getTableName();
    }

    abstract protected function entityClassName(): string;
}