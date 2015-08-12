<?php
/**
 *
 * User: Plopleo
 * Date: 6/08/2015
 * Time: 15:16 AM
 *
 */

namespace Dlin\Zendesk\Entity;



class Category extends BaseEntity
{

    const ISO8601_DATE = 'Y-m-d\TH:i:sP';

    /**
     * Automatically assigned when creating categories
     * @var integer
     * @readonly
     */
    protected $id;

    /**
     * The name of the category
     * @var string
     */
    protected $name;

/**
     * The description of the category
     * @var string
     */
    protected $description;

/**
     * The locale that the category is displayed in
     * @var string
     */
    protected $locale;

/**
     * The source (default) locale of the category
     * @var string
     * @readonly
     */
    protected $source_locale;

/**
     * The API url of this category
     * @var string
     * @readonly
     */
    protected $url;

/**
     * The url of this category in Help Center
     * @var string
     * @readonly
     */
    protected $html_url;

/**
     * Whether the category is out of date
     * @var boolean
     * @readonly
     */
    protected $outdated;

/**
     * The position of this category relative to other categories
     * @var integer
     */
    protected $position;

/**
     * The ids of all translations of this category
     * @var array
     * @readonly
     */
    protected $translation_ids;

/**
     * The time at which the category was created
     * @var string
     * @readonly
     */
    protected $created_at;

/**
     * The time at which the category was last updated
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