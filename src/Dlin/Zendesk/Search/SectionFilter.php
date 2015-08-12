<?php
/**
 *
 * User: Plopleo
 * Date: 7/08/2015
 * Time: 10:20 AM
 *
 */

namespace Dlin\Zendesk\Search;

/**
 * Class SectionFilter
 * @package Dlin\Zendesk\Search
 */
class SectionFilter extends BaseFilter {

    public function getType(){
        return 'section';
    }

    protected $id;
    protected $name;
    protected $description;
    protected $locale;
    protected $source_locale;
    protected $category;
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
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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