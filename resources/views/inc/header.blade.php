<header id="header" class="header-common ru">
    <div class="floating_head">
        <div class="in">
            <div class="logo">
                <a href="/">
                    <img src="https://www.rabota.md/im/logo1_normal.svg?v=1.18" alt="https://www.rabota.md/"
                         width="139" height="30">
                </a>
            </div>

            <div class="floating_search_cont">
                <div class="rsf search_form v1">
                    <form id="floating_search_container" class="floating-search-form" action="{{route('vacancy-list')}}"
                          method="GET">
                        <div
                            class="s_in_wr index-search uk-inline uk-width-1-1 uk-position-relative search-input-container uk-flex">
                            <div
                                class="input-container uk-position-relative uk-position-relative uk-width-2-3@s uk-inline">
                                <input name="query" id="floating_searchInput" class="s_in" type="text"
                                       value="{{request()->get('query')}}"
                                       placeholder="Ключевые слова..." autocomplete="off">
                            </div>

                            <div class="select-container">
                                <select name="cityId" class="sel2">
                                    <option value="0">Вся Молдова</option>
                                    @foreach($cities as $city)
                                        <option @if(request()->get('cityId') == $city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="select-container">
                                <select name="categoryId" class="sel2" >
                                    <option value="0">Категория</option>
                                    @foreach($categories as $category)
                                        <option @if(request()->get('categoryId') == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="select-container">
                                <input type="date" value="{{request()->get('startDate')}}" class="date" name="startDate"
                                       placeholder="Дата с">
                                <input type="date" value="{{request()->get('endDate')}}" class="date" name="endDate"
                                       placeholder="Дата по">
                            </div>
                            <input class="s_btn" type="submit" value="">
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
