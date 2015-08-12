<?php
/**
 *
 * User: Plopleo
 * Date: 6/08/2015
 * Time: 15:36 AM
 *
 */

namespace Dlin\Zendesk\Search;

/**
 * Class CategoryFilter
 * @package Dlin\Zendesk\Search
 */
class CategoryFilter extends BaseFilter {

    public function getType(){
        return 'categorie';
    }

    protected $id;
    protected $name;
    protected $description;
    protected $locale;
    protected $source_locale;
    protected $outdated;
    protected $position;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @param mixed $outdated
     */
    public function setOutdated($outdated)
    {
        $this->outdated = $outdated;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
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