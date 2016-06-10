<?php
namespace Tev\TevFaqs\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use Tev\TevFaqs\Domain\Model\Category;

/**
 * Repository for FAQ entities.
 */
class FaqRepository extends Repository
{
    /**
     * {@inheritdoc}
     */
    public function initializeObject()
    {
    }

    /**
     * Find all FAQs by the given category.
     *
     * @param  \Tev\TevFaqs\Domain\Model\Category $category
     * @return \TYPO3\CMS\Extbase\Persistence\QueryResult
     */
    public function findAllByCategory(Category $category)
    {
        return $this->findByCategory($category->getUid());
    }
}
