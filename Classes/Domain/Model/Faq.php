<?php
namespace Tev\TevFaqs\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * FAQ entity.
 */
class Faq extends AbstractEntity
{
    /**
     * Code.
     *
     * @var string
     */
    protected $code;

    /**
     * Question.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $question;

    /**
     * Answer.
     *
     * @var string
     * @validate NotEmpty
     */
    protected $answer;

    /**
     * Category.
     *
     * @var \Tev\TevFaqs\Domain\Model\Category
     * @lazy
     */
    protected $category;

    /**
     * Returns the code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the code.
     *
     * @param  string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Returns the question.
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets the question.
     *
     * @param  string $question
     * @return void
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * Returns the answer.
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets the answer.
     *
     * @param  string $answer
     * @return void
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * Returns the category.
     *
     * @return \Tev\TevFaqs\Domain\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category.
     *
     * @param  \Tev\TevFaqs\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }
}
