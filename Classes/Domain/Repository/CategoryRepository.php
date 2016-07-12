<?php
namespace Tev\TevFaqs\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * Repository for FAQ category entities.
 */
class CategoryRepository extends Repository
{
    /**
     * {@inheritdoc}
     */
    public function initializeObject()
    {
        $this->defaultOrderings = [
            'sorting' => QueryInterface::ORDER_ASCENDING
        ];
    }

    /**
     * Find the default category.
     *
     * @return \Tev\TevFaqs\Domain\Model\Category
     */
    public function findDefault()
    {
        return $this->findAll()->getFirst();
    }

    /**
     * Find by UIDs.
     *
     * @param array $uids List of UIDs
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResult
     */
    public function findByUids($uids)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->in('uid', $uids)
        );

        return $query->execute();
    }

    /**
     * Get all categories, ordered by their title.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResult
     */
    public function findAllOrderedByTitle()
    {
        return $this->createQuery()
            ->setOrderings(['title' => QueryInterface::ORDER_ASCENDING])
            ->execute();
    }
}
