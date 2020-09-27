@extends('layouts.app')

@section('title')Main page @endsection

@section('content')
    <div class="in categories_page">
        <div class="content">
            <h2 class="all-vac-title">Все вакансии</h2>

            <div class="b_info10 vacancy-list">
                @foreach($vacancies as $vacancy)
                    <div class="preview vacancy-block">
                        <h3 class="vacancy-block__heading uk-margin-remove-top">
                            <a href="{{route('vacancy-show', ['id' => $vacancy->id])}}"
                               class="vacancy vacancy-block__name">{{ Illuminate\Support\Str::limit($vacancy['name'], 60) }}</a>
                        </h3>
                        <p class="vacancy-block__company-name">
                            <a href="#" target="_blank">
                                {{$vacancy['company_name']}}
                            </a> •
                            {{$vacancy->city->name}}
                        </p>
                        <p class="vacancy-block__requirements">
                            {{ Illuminate\Support\Str::limit($vacancy['description'], 250) }}
                        </p>
                        <span
                            class="vacancy-block__date">{{ Carbon\Carbon::createFromTimestamp(strtotime($vacancy['created_at']))->diffForHumans() }}</span>
                        <span class="vacancy-block__salary">{{ $vacancy['salary'] }} USD</span>
                        <a href="{{route('vacancy-show', ['id' => $vacancy->id])}}" class="cat_red_btn">Подробнее</a>
                    </div>
                @endforeach
            </div>
            {{$vacancies->links()}}
            <br>
            <br>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <span class="ssv" style="display: none"></span>
    </div>
@endsection
