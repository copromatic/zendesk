<?php
/**
 *
 * User: Plopleo
 * Date: 5/08/2015
 * Time: 10:39 AM
 *
 */

namespace Dlin\Zendesk\Entity;


class ArticleRequester extends BaseEntity
{
    /**
     * @var integer
     */
    protected $locale_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     * @required
     */
    protected $email;

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;

    }

    /**
     * @param int $locale_id
     */
    public function setLocaleId($locale_id)
    {
        $this->locale_id = $locale_id;
        return $this->addChange('locale_id');
    }

    /**
     * @return int
     */
    public function getLocaleId()
    {
        return $this->locale_id;
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}