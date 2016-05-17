<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/28/2016
 * Time: 8:00 PM
 */

namespace App\Repo\Ratings;


interface RateRepository
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute);

    /**
     * @param $review_id
     * @param $score
     * @return mixed
     */
    public function update($review_id,$score);
}