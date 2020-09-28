<?php

namespace App\Http\Controllers;


use App\Models\VacancyFilter;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Requests\VacancyListRequest;
use App\Models\Vacancy;
use Illuminate\View\View;

class VacancyController extends ApiController
{
    /**
     * VacancyController constructor.
     * @param Vacancy $model
     * @param VacancyListRequest $request
     */
    public function __construct(Vacancy $model, VacancyListRequest $request)
    {
        $this->model = $model;
        $this->request = $request;
        $this->filter = new VacancyFilter($this->model, $request);
    }

    /**
     * @param VacancyListRequest $request
     * @return Factory|View
     */
    public function index(VacancyListRequest $request)
    {
        $vacancy = new Vacancy();

        $result = (new VacancyFilter($vacancy, $request))->apply()->paginate(5)->appends($request->all());

        ($result->lastPage() < $result->currentPage()) && abort(404);

        return view(
            'vacancy.index',
            [
                'vacancies' => $result
            ]
        );
    }

    /**
     * @param null $id
     * @return Factory|View
     */
    public function show($id = null)
    {
        $data = Vacancy::find($id);

        (!$data) && abort(404);

        return view(
            'vacancy.show',
            [
                'vacancy' => $data
            ]
        );
    }
}
