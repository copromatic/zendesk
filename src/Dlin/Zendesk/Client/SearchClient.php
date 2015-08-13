<?php
/**
 *
 * User: Plopleo
 * Date: 12/08/2015
 * Time: 10:39 AM
 *
 */

namespace Dlin\Zendesk\Client;


class SearchClient extends BaseClient
{
    /**
     * Return entity class type.
     *
     * @return string
     */
    public function getType(){
        return null;
    }

    /**
     * List search result
     *
     * @param $query
     * @param null $page
     * @return string
     */
    public function getAll($query, $page = null){
        if($page != null){
            return $this->getInJson('help_center/articles/search.json?query='.$query.'&page='.$page);
        }else{
            return $this->getInJson('help_center/articles/search.json?query='.$query);

        }
    }

}