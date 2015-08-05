<?php
/**
 *
 * User: Plopleo
 * Date: 5/08/2015
 * Time: 10:39 AM
 *
 */

namespace Dlin\Zendesk\Client;


use Dlin\Zendesk\Entity\Article;
use Dlin\Zendesk\Entity\ArticleRequester;
use Dlin\Zendesk\Search\ArticleFilter;

class ArticleClient extends BaseClient
{

    /**
     * Return entity class type.
     *
     * @return string
     */
    public function getType(){
        return '\Dlin\Zendesk\Entity\Article';
    }

    /**
     * Return an article by ID
     *
     * @param $id
     * @return \Dlin\Zendesk\Entity\Article
     */
    public function getOneById($id){
        return $this->getOne("help_center/articles/$id.json");
    }

    /**
     * List articles
     *
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getAll($page=1, $per_page=100){
        return $this->getCollection('help_center/articles.json', 'articles',$page, $per_page);
    }


    /**
     * List of articles by categorie
     *
     * @param $categorie_id
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getArticlesByCategorie($categorie_id, $page=1, $per_page=100){
        return $this->getCollection("help_center/categories/$categorie_id/articles.json",'articles', $page, $per_page);
    }

    /**
     * List of articles by section
     *
     * @param $section_id
     * @param int $page
     * @param int $per_page
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function getArticlesBySection($section_id, $page=1, $per_page=100){
        return $this->getCollection("help_center/sections/$section_id/articles.json",'articles', $page, $per_page);
    }




    /**
     * Search articles
     *
     * @param ArticleFilter $query
     * @param int $page
     * @param int $per_page
     * @param null $sort_by
     * @param string $sort_order
     * @return \Dlin\Zendesk\Result\PaginatedResult
     */
    public function search(ArticleFilter $query, $page=1, $per_page=100, $sort_by=null, $sort_order='asc'){

        $endPoint = 'search.json?query='.rawurlencode(implode(' ',$query->toArray()));

        return $this->getCollection($endPoint, 'results', $page, $per_page, $sort_by, $sort_order);
    }


    /**
     * @param Article $article
     * @param ArticleRequester $requester
     * @return \Dlin\Zendesk\Result\ChangeResult|null
     */
    public function save(Article $article, ArticleRequester $requester=null){

        $extraData = $requester ? array('requester'=>$requester) : null;

        return parent::saveEntity($article, 'help_center/articles.json', $extraData);
    }




    /**
     *
     * Delete one given article
     *
     * @param Article $article
     * @return bool
     */
    public function delete(Article $article){
        return parent::deleteById($article->getId(), 'help_center/articles');
    }


}