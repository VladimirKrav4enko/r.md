<?php

namespace App\Http\Controllers;

use App\Models\VacancyFilter;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Requests\VacancyListRequest;
use App\Models\Vacancy;
use Illuminate\View\View;

class VacancyController extends Controller
{
    /**
     * @param VacancyListRequest $request
     * @return Factory|View
     */
    public function list(VacancyListRequest $request)
    {
        $vacancy = new Vacancy();

        $data = (new VacancyFilter($vacancy, $request))->apply()->paginate(5)->appends($request->all());

        ($data->lastPage() < $data->currentPage()) && abort(404);

        return view(
            'vacancy.list',
            [
                'vacancies' => $data
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
