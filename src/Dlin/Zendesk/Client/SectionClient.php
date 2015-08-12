<?php
/**
 *
 * User: Plopleo
 * Date: 7/08/2015
 * Time: 10:31 AM
 *
 */

namespace Dlin\Zendesk\Client;


use Dlin\Zendesk\Entity\Section;
use Dlin\Zendesk\Search\SectionFilter;

class SectionClient extends BaseClient
{

    /**
     * Return entity class type.
     *
     * @return string
     */
    public function getType(){
        return '\Dlin\Zendesk\Entity\Section';
    }

    /**
     * Return a section by ID
     *
     * @param $id
     * @return \Dlin\Zendesk\Entity\Section
     */
    public function getOneById($id){
        return $this->getOne("help_center/sections/$id.json");
    }

    /**
     * List sections
     *
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getAll($page=1, $per_page=100){
        return $this->getCollection('help_center/sections.json', 'sections',$page, $per_page);
    }


    /**
     * List of sections by categorie
     *
     * @param $categorie_id
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getSectionsByCategorie($categorie_id, $page=1, $per_page=100){
        return $this->getCollection("help_center/categories/$categorie_id/sections.json",'sections', $page, $per_page);
    }



    /**
     * Search sections
     *
     * @param SectionFilter $query
     * @param int $page
     * @param int $per_page
     * @param null $sort_by
     * @param string $sort_order
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function search(SectionFilter $query, $page=1, $per_page=100, $sort_by=null, $sort_order='asc'){

        $endPoint = 'search.json?query='.rawurlencode(implode(' ',$query->toArray()));

        return $this->getCollection($endPoint, 'results', $page, $per_page, $sort_by, $sort_order);
    }


    /**
     * @param Section $section
     * @return \Dlin\Zendesk\Result\ChangeResult|null
     */
    public function save(Section $section){

        return parent::saveEntity($section, 'help_center/sections.json');
    }




    /**
     *
     * Delete one given section
     *
     * @param Section $section
     * @return bool
     */
    public function delete(Section $section){
        return parent::deleteById($section->getId(), 'help_center/sections');
    }


}