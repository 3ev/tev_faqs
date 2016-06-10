<?php
namespace Tev\TevFaqs\Domain\Repository;

use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

/**
 * Repository for FAQ category entities.
 */
class CategoryRepository extends Repository
{

    /**
     * Configuration manager.
     *
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface
     * @inject
     */
    protected $cm;


    /**
     * {@inheritdoc}
     */
    public function initializeObject()
    {
        $config = $this->cm->getConfiguration(
            ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK,
            'tevfaqs'
        );

        $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
        $querySettings->setStoragePageIds([$config['persistence']['storagePid']]);
        $this->setDefaultQuerySettings($querySettings);

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
