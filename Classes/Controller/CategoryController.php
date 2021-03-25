<?php
namespace Tev\TevFaqs\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for the FAQ category operations.
 */
class CategoryController extends ActionController
{
    /**
     * Category repository.
     *
     * @var \Tev\TevFaqs\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository;

    /**
     * Show an individual FAQ category, with a navigation menu for the others.
     *
     * @return string
     */
    public function showAction()
    {
        $selectedCategories = array_filter(explode(',', $this->settings['categories']));
        if (count($selectedCategories)) {
            $categories = $this->categoryRepository->findByUids($selectedCategories);
        } else {
            $categories = $this->categoryRepository->findAll();
        }

        if (!$this->request->hasArgument('category') || !strlen($this->request->getArgument('category'))) {
            $category = $categories->getFirst();
        } else {
            $category = $this->categoryRepository->findByUid($this->request->getArgument('category'));
        }

        if ($category) {
            $this->view
                ->assign('category', $category)
                ->assign('categoryUid', $category->getUid())
                ->assign('url', $this->uriBuilder->getRequest()->getRequestUri())
                ->render();
        } else {
            $this->view
                ->assign('category', false)
                ->assign('categoryUid', false);
        }

        return $this->view
            ->assign('categories', $categories)
            ->render();
    }
}
