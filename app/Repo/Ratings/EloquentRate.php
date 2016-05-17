<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 4/28/2016
 * Time: 8:00 PM
 */

namespace App\Repo\Ratings;


use App\Rating;

class EloquentRate implements RateRepository
{
    /**
     * @var Rating
     */
    private $model;

    /**
     * EloquentRate constructor.
     * @param Rating $model
     */
    public function __construct(Rating $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attribute
     * @return mixed
     */
    public function create(array $attribute)
    {
        return $this->model->create($attribute);
    }

    /**
     * @param $review_id
     * @param $score
     * @return mixed
     */
    public function update($review_id, $score)
    {
        $save = $this->model->whereReviewId($review_id)->update(['score'=>$score]);
        return $save;
    }
}