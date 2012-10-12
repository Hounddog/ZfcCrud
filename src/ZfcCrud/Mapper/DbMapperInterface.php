<?php

namespace ZfcCrud\Mapper;
use Zend\Stdlib\Hydrator\HydratorInterface;

interface DbMapperInterface
{
    public function findAll($where = null, HydratorInterface $hydrator = null);

    public function findById($id);

    public function create($entity);

    public function update($entity);

    public function delete($entity);
}