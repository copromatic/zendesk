<?php
/**
 *
 * User: Plopleo
 * Date: 6/08/2015
 * Time: 15:42 AM
 *
 */

namespace Dlin\Zendesk\Client;


use Dlin\Zendesk\Entity\Category;
use Dlin\Zendesk\Search\CategoryFilter;

class CategoryClient extends BaseClient
{

    /**
     * Return entity class type.
     *
     * @return string
     */
    public function getType(){
        return '\Dlin\Zendesk\Entity\Category';
    }

    /**
     * Return a categorie by ID
     *
     * @param $id
     * @return \Dlin\Zendesk\Entity\Category
     */
    public function getOneById($id){
        return $this->getOne("help_center/categories/$id.json");
    }

    /**
     * List categories
     *
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getAll($page=1, $per_page=100){
        return $this->getCollection('help_center/categories.json', 'categories',$page, $per_page);
    }

    /**
     * Search categories
     *
     * @param CategoryFilter $query
     * @param int $page
     * @param int $per_page
     * @param null $sort_by
     * @param string $sort_order
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function search(CategoryFilter $query, $page=1, $per_page=100, $sort_by=null, $sort_order='asc'){

        $endPoint = 'search.json?query='.rawurlencode(implode(' ',$query->toArray()));

        return $this->getCollection($endPoint, 'results', $page, $per_page, $sort_by, $sort_order);
    }


    /**
     * @param Category $categorie
     * @return \Dlin\Zendesk\Result\ChangeResult|null
     */
    public function save(Category $categorie){

        return parent::saveEntity($categorie, 'help_center/categories.json');
    }




    /**
     *
     * Delete one given categorie
     *
     * @param Category $categorie
     * @return bool
     */
    public function delete(Category $categorie){
        return parent::deleteById($categorie->getId(), 'help_center/categories');
    }


}