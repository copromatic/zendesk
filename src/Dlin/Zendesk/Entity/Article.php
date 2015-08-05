<?php
/**
 *
 * User: Plopleo
 * Date: 5/08/2015
 * Time: 10:39 AM
 *
 */

namespace Dlin\Zendesk\Entity;



class Article extends BaseEntity
{

    const ISO8601_DATE = 'Y-m-d\TH:i:sP';

    /**
     * Automatically assigned when creating articles
     * @var integer
     * @readonly
     */
    protected $id;

    /**
     *
     * The API url of this article
     * @var string
     * @readonly
     *
     */
    protected $url;


    /**
     *
     * The url of the article in Help Center
     * @var string
     * @readonly
     *
     */
    protected $html_url;

    /**
     *
     * The title of the article
     * @var string
     *
     */
    protected $title;

    /**
     *
     * The body of the article
     * @var string
     *
     */
    protected $body;

    /**
     *
     * The locale that the article is being displayed in
     * @var string
     *
     */
    protected $locale;

    /**
     *
     * The source (default) locale of the article
     * @var string
     * @readonly
     *
     */
    protected $source_locale;

    /**
     *
     * The id of the user who wrote the article (set to the user who made the request on create by default)
     * @var integer
     *
     */
    protected $author_id;

    /**
     *
     * True if comments are disabled; false otherwise
     * @var boolean
     *
     */
    protected $comments_disabled;

    /**
     *
     * Whether the source (default) translation of the article is out of date
     * @var boolean
     * @readonly
     *
     */
    protected $outdated;

    /**
     *
     * An array of label names associated with this article. By default no label names are used. Only available on certain plans
     * @var string
     *
     */
    protected $label_names;

    /**
     *
     * True if the translation for the current locale is a draft; false otherwise. false by default.
     * @var boolean
     *
     */
    protected $draft;

    /**
     *
     * True if this article is promoted; false otherwise. false by default
     * @var boolean
     *
     */
    protected $promoted;

    /**
     *
     * The position of this article in the article list. 0 by default
     * @var integer
     *
     */
    protected $position;

    /**
     *
     * The total sum of votes on this article
     * @var integer
     * @readonly
     *
     */
    protected $vote_sum;

    /**
     *
     * The number of votes cast on this article
     * @var integer
     * @readonly
     *
     */
    protected $vote_count;

    /**
     *
     * The id of the section to which this article belongs
     * @var integer
     *
     */
    protected $section_id;

    /**
     *
     * The time the article was created
     * @var string
     * @readonly
     *
     */
    protected $created_at;

    /**
     *
     * The time the article was last updated
     * @var string
     * @readonly
     *
     */
    protected $updated_at;

    /**
     * @return int
     */
    public function getId()
    {
        return intval($this->id);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->html_url;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getSourceLocale()
    {
        return $this->source_locale;
    }

    /**
     * @return int
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @return boolean
     */
    public function isCommentsDisabled()
    {
        return $this->comments_disabled;
    }

    /**
     * @return boolean
     */
    public function isOutdated()
    {
        return $this->outdated;
    }

    /**
     * @return string
     */
    public function getLabelNames()
    {
        return $this->label_names;
    }

    /**
     * @return boolean
     */
    public function isDraft()
    {
        return $this->draft;
    }

    /**
     * @return boolean
     */
    public function isPromoted()
    {
        return $this->promoted;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getVoteSum()
    {
        return $this->vote_sum;
    }

    /**
     * @return int
     */
    public function getVoteCount()
    {
        return $this->vote_count;
    }

    /**
     * @return int
     */
    public function getSectionId()
    {
        return $this->section_id;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this->addChange('title');
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this->addChange('body');
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this->addChange('locale');
    }

    /**
     * @param int $author_id
     */
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;
        return $this->addChange('author_id');
    }

    /**
     * @param boolean $comments_disabled
     */
    public function setCommentsDisabled($comments_disabled)
    {
        $this->comments_disabled = $comments_disabled;
        return $this->addChange('comments_disabled');
    }

    /**
     * @param string $label_names
     */
    public function setLabelNames($label_names)
    {
        $this->label_names = $label_names;
        return $this->addChange('label_names');
    }

    /**
     * @param boolean $draft
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
        return $this->addChange('draft');
    }

    /**
     * @param boolean $promoted
     */
    public function setPromoted($promoted)
    {
        $this->promoted = $promoted;
        return $this->addChange('promoted');
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this->addChange('position');
    }

    /**
     * @param int $section_id
     */
    public function setSectionId($section_id)
    {
        $this->section_id = $section_id;
        return $this->addChange('section_id');
    }

    /**
     * Checks this ticket is creatable
     */
    public function checkCreatable(){
        parent::checkCreatable();
        $this->checkFieldsSet(array('title', 'body'));
    }



}