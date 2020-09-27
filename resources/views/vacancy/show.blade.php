@extends('layouts.app')

@section('title')Vacancy page @endsection

@section('content')
    <br><br>
    <div class="content_wr free-vacancies">
        <div class="in">
            <div class="content uk-width-1-1 uk-width-2-3@m">
                <div class="vc_detail">
                    <div class="preview">
                        <div class="top-info">
                            <br>
                            <h1 class="uk-margin-bottom">{{$vacancy->name}}</h1>
                            <div class="vc_info">
                                <a target="_blank" href="#">{{$vacancy->company_name}}</a>
                                <span
                                    class="vacancy-id">№{{$vacancy->id}}, {{ Carbon\Carbon::createFromTimestamp(strtotime($vacancy['created_at']))->format('d.m.Y') }}</span>
                            </div>
                        </div>
                        <div class="summary">
                            <div class="col city_ico">
                                <span>Город</span>:
                                <span>{{$vacancy->city->name}}</span>
                            </div>
                            <div class="col education_ico">
                                <span>Образование</span>:
                                <span>{{$vacancy->education->name}}</span>
                            </div>
                            <div class="clear"></div>
                            <div class="col expirience_ico">
                                <span>Опыт работы</span>:
                                <span>{{$vacancy->experience->name}}</span>
                            </div>
                            <div class="col salary_ico">
                                <span>Зарплата</span>:
                                <span>{{$vacancy->salary}} USD</span>
                            </div>
                            <div class="clear"></div>

                            <div class="col uk-hidden@s">
                                <span>№</span>
                                <span>{{$vacancy->id}}, {{ Carbon\Carbon::createFromTimestamp(strtotime($vacancy['created_at']))->format('d.m.Y') }}</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="in">
                            <div class="full-desc">{{$vacancy->description}}</div>
                            <br> E-mail: <a href="mailto:{{$vacancy->email}}">{{$vacancy->email}}</a>
                            <br>Telefon: {{$vacancy->phone}}
                        </div>
                        <div class="contacts">
                            <div class="row">
                                <span>Телефон:</span>
                                <span class="contacts-entry">{{$vacancy->phone}}</span>
                            </div>
                            <div class="clear"></div>
                            <div class="row">
                                <span>E-mail:</span>
                                <span>
                                    <a href="mailto: {{$vacancy->email}}">{{$vacancy->email}}</a>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="sidebar uk-visible@m uk-width-1-3@m ">

                <div class="uk-text-center uk-margin-top-small">
                    Side Bar
                </div>
            </div>
            <div class="clear ssv"></div>
        </div>
    </div>
@endsection
