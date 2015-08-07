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
     * FAQ repository.
     *
     * @var \Tev\TevFaqs\Domain\Repository\FaqRepository
     * @inject
     */
    protected $faqRepository;

    /**
     * Show an individual FAQ category, with a navigation menu for the others.
     *
     * @return string
     */
    public function showAction()
    {
        if (!$this->request->hasArgument('category') || !strlen($this->request->getArgument('category'))) {
            $category = $this->categoryRepository->findDefault();
        } else {
            $category = $this->categoryRepository->findByUid($this->request->getArgument('category'));
        }

        if ($category) {
            $this->view
                ->assign('category', $category)
                ->assign('categoryUid', $category->getUid())
                ->assign('faqs', $this->faqRepository->findAllByCategory($category)->toArray())
                ->assign('url', $this->uriBuilder->getRequest()->getRequestUri())
                ->render();
        } else {
            $this->view
                ->assign('category', false)
                ->assign('categoryUid', false);
        }

        return $this->view
            ->assign('categories', $this->categoryRepository->findAllOrderedByTitle())
            ->render();
    }
}
