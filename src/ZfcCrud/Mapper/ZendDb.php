<?php

namespace ZfcCrud\Mapper;

use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator\HydratorInterface;

class ZendDb implements DbMapperInterface
{
    public function findAll(HydratorInterface $hydrator = null)
    {
        //@todo implement functionality
    }

    public function findById($id)
    {
        //@todo implement functionality
    }

    public function create($entity)
    {
        //@todo implement functionality
    }

    public function update($entity)
    {
        //@todo implement functionality
    }

    public function delete($entity)
    {
        //@todo implement functionality
    }
}