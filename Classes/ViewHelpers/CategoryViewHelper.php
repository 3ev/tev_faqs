<?php
namespace Tev\TevFaqs\ViewHelpers;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * View helper to list category names for select
 */
class CategoryViewHelper extends AbstractViewHelper
{
    /**
     * Category repository.
     *
     * @var \Tev\TevFaqs\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository;

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $output = [];
        foreach ($this->categoryRepository->findAll() as $item) {
            $output[$item->getUid()] = $item->getTitle();
        }

        return $output;
    }
}
