<?php
/**
 * Created by PhpStorm.
 * User: Jessryll
 * Date: 5/14/2016
 * Time: 12:54 PM
 */

namespace App\Http\Selectors;


class Types
{
    /**
     * @param $view
     */
    public function compose($view)
    {
        $view->with(['types'=>[0=>'COLLECTION',1=>'PACKAGE']]);
    }
}