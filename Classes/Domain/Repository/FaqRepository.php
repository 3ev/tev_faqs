<?php
namespace Tev\TevFaqs\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
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
        $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);

        $this->defaultOrderings = [
            'sorting' => QueryInterface::ORDER_ASCENDING
        ];
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
