<?php

namespace App\Http\Controllers;


use App\Models\QueryFilter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class ApiController
 * @property  Model $model
 * @property  QueryFilter $filter
 * @package App\Http\Controllers
 */
abstract class ApiController extends Controller
{

    protected $model;
    protected $request;
    protected $filter;

    public function one($id)
    {
        $data = $this->model->find($id);

        (!$data) && abort(404);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request)
    {
        $limit = (int)$request->get('limit', 100);
        $offset = (int)$request->get('offset', 0);

        $result = ($this->filter)->apply()->limit($limit)->offset($offset)->get();

        return response()->json($result, 200);
    }

}
