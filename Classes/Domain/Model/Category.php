<?php
namespace Tev\TevFaqs\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * FAQ category entity.
 */
class Category extends AbstractEntity
{
    /**
     * Title.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title;

    /**
     * FAQs.
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tev\TevFaqs\Domain\Model\Faq>
     * @lazy
     */
    protected $faqs;

    /**
     * Constructor.
     *
     * Init object storage.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faqs = new ObjectStorage;
    }

    /**
     * Returns the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title.
     *
     * @param  string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get FAQs.
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Tev\TevFaqs\Domain\Model\Faq>
     */
    public function getFaqs()
    {
        return $this->faqs;
    }
}
