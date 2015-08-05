<?php
/**
 *
 * User: Plopleo
 * Date: 5/08/2015
 * Time: 10:39 AM
 *
 */

namespace Dlin\Zendesk\Search;

/**
 * Class ArticleFilter
 * @package Dlin\Zendesk\Search
 */
class ArticleFilter extends BaseFilter {

    public function getType(){
        return 'article';
    }

    protected $id;
    protected $title;
    protected $body;
    protected $locale;
    protected $source_locale;
    protected $author;
    protected $comments_disabled;
    protected $outdated;
    protected $label_names;
    protected $draft;
    protected $promoted;
    protected $position;
    protected $vote_sum;
    protected $vote_count;
    protected $section;
    protected $created;
    protected $updated;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param mixed $source_locale
     */
    public function setSourceLocale($source_locale)
    {
        $this->source_locale = $source_locale;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param mixed $comments_disabled
     */
    public function setCommentsDisabled($comments_disabled)
    {
        $this->comments_disabled = $comments_disabled;
    }

    /**
     * @param mixed $outdated
     */
    public function setOutdated($outdated)
    {
        $this->outdated = $outdated;
    }

    /**
     * @param mixed $label_names
     */
    public function setLabelNames($label_names)
    {
        $this->label_names = $label_names;
    }

    /**
     * @param mixed $draft
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
    }

    /**
     * @param mixed $promoted
     */
    public function setPromoted($promoted)
    {
        $this->promoted = $promoted;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $vote_sum
     */
    public function setVoteSum($vote_sum)
    {
        $this->vote_sum = $vote_sum;
    }

    /**
     * @param mixed $vote_count
     */
    public function setVoteCount($vote_count)
    {
        $this->vote_count = $vote_count;
    }

    /**
     * @param mixed $section
     */
    public function setSection($section)
    {
        $this->section = $section;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }




}