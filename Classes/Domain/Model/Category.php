<?php
namespace Tev\TevFaqs\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

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
}
