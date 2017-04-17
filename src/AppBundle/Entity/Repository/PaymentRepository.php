<?php

namespace AppBundle\Entity\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use AppBundle\Entity\Tax;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PaymentRepository extends EntityRepository
{
    public function getPaymentsDatesByUserId(int $userId)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT t.date FROM AppBundle:Tax t WHERE t.user = :user_id ORDER BY t.date DESC');
        $query->setParameter('user_id', $userId);

        return $query->getResult();
    }
}
