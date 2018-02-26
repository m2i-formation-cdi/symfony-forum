<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{

    public function getLastPosts($number){
        $qb = $this->createQueryBuilder('p');

        $qb->select('p.title, p.id')
            ->orderBy('p.createdAt', 'desc')
            ->setMaxResults($number);

        return $qb->getQuery();
    }
}
