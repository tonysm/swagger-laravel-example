<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @SWG\Swagger(
 *   basePath="/api/animals",
 *   @SWG\Info(
 *     title="Animals API",
 *     version="1.0.0"
 *   ),
 *   @SWG\Definition(
 *     definition="Error",
 *     required={"code", "message"},
 *     @SWG\Property(
 *       property="code",
 *       type="integer",
 *       format="int32"
 *     ),
 *     @SWG\Property(
 *       property="message",
 *       type="string"
 *     )
 *   ),
 *   @SWG\Definition(
 *     definition="Animal",
 *     required={"id","name","species"},
 *     @SWG\Property(
 *       property="id",
 *       type="integer",
 *       format="int32"
 *     ),
 *     @SWG\Property(
 *       property="name",
 *       type="string"
 *     ),
 *     @SWG\Property(
 *       property="species",
 *       type="string"
 *     )
 *   )
 * )
 */
class AnimalsController extends Controller
{
    /**
     * @SWG\Get(
     *   path="/animals",
     *   summary="List animals",
     *   operationId="getAnimals",
     *   @SWG\Parameter(
     *     name="filter",
     *     in="query",
     *     description="Filter results based on query string value.",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="successful operation", @SWG\Schema(type="array", @SWG\Items(ref="#/definitions/Animal"))),
     *   @SWG\Response(response=406, description="not acceptable", @SWG\Schema(ref="#/definitions/Error")),
     *   @SWG\Response(response=500, description="internal server error", @SWG\Schema(ref="#/definitions/Error"))
     * )
     */
    public function index()
    {
        return [
            ['id' => 123, 'species' => 'cat', 'name' => 'Linus'],
            ['id' => 222, 'species' => 'cat', 'name' => 'Lolla'],
        ];
    }
}
