<?php
/**
 *
 * User: Plopleo
 * Date: 7/08/2015
 * Time: 09:45 AM
 *
 */

namespace Dlin\Zendesk\Entity;



class Section extends BaseEntity
{
    const ISO8601_DATE = 'Y-m-d\TH:i:sP';


    /**
     * Automatically assigned when creating section
     * @var integer
     * @readonly
     */
    protected $id;

    /**
     * The name of the section
     * @var string
     */
    protected $name;

    /**
     * The description of the section
     * @var string
     * @readonly
     */
    protected $description;

    /**
     * The locale in which the section is displayed
     * @var string
     */
    protected $locale;

    /**
     * The source (default) locale of the section
     * @var string
     * @readonly
     */
    protected $source_locale;

    /**
     * The API url of this section
     * @var string
     * @readonly
     */
    protected $url;

    /**
     * The url of this section in HC
     * @var string
     * @readonly
     */
    protected $html_url;

    /**
     * The id of the category to which this section belongs
     * @var integer
     */
    protected $category_id;

    /**
     * Whether the section is out of date
     * @var boolean
     * @readonly
     */
    protected $outdated;

    /**
     * The position of this section in the section list. By default the section is added to the end of the list
     * @var integer
     */
    protected $position;

    /**
     * The ids of all translations of this section
     * @var array
     * @readonly
     */
    protected $translation_ids;

    /**
     * The time at which the section was created
     * @var string
     * @readonly
     */
    protected $created_at;

    /**
     * The time at which the section was last updated
     * @var string
     * @readonly
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @return int
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return boolean
     */
    public function isOutdated()
    {
        return $this->outdated;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return array
     */
    public function getTranslationIds()
    {
        return $this->translation_ids;
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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this->addChange('name');
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this->addChange('description');
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
     * @param int $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this->addChange('category_id');
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
     * Checks this ticket is creatable
     */
    public function checkCreatable(){
        parent::checkCreatable();
        $this->checkFieldsSet(array('name', 'description'));
    }



}