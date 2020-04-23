@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <form>
            <div class="row">
                <div class="col-12">
                    <label for="title">Название</label>
                    <input valid="required" type="text" class="form-control" id="title" placeholder="Введите название фильма">
                    <!--<small class="form-text  text-error"></small>-->
                </div>

                <div class="col-12 col-sm-6">
                    <div class="mt-2">
                        <label for="year">Год</label>
                        <select id="year" class="form-control">
                            <option disabled selected value>Выберите год</option>
                            @foreach($years as $year)
                                <option>{{ $year->year }}</option>
                            @endforeach
                        </select>
                        <!--<small class="form-text  text-error"></small>-->
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="mt-2">
                        <label for="country">Страна</label>
                        <select id="country" class="form-control">
                            <option disabled selected value>Выберите страну</option>
                            @foreach($countries as $country)
                                <option>{{ $country->name }}</option>
                            @endforeach
                        </select>
                        <!--<small class="form-text  text-error"></small>-->
                    </div>
                </div>

                <div class="col-12">
                    <div class="add_blocks mt-2" >
                        <label for="genres">Жанры</label>
                        <div class="genres">
                            <!--<input valid="required" type="text" id="genres" placeholder="Genre">-->
                            <select id="genres" class="form-control d-inline-block w-auto">
                                <option disabled selected value>Выберите жанр</option>
                                @foreach($genres as $genre)
                                    <option>{{ $genre->name }}</option>
                                @endforeach
                            </select>
                            <button onclick="addSkill()" type="button">+</button>
                            <!--<small class="form-text  text-error"></small>-->
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mt-2">
                        <label for="description">Описание</label>
                        <textarea style="resize: none; min-height: 100px" id="description" class="form-control" placeholder="Описание..."></textarea>
                        <!--<small class="form-text  text-error"></small>-->
                    </div>
                </div>
            </div>
            <div class="text-center my-2">
                <button style="min-width: 200px" type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </form>
    </div>
@endsection

<script>
    count = 1;
    function addSkill(){
        if (count < 10) {
            $(`.add_blocks`).append(`
            <div class="genres">
                <select id="genres" class="form-control d-inline-block w-auto">
                    <option disabled selected value>Выберите жанр</option>
                    @foreach($genres as $genre)
                        <option>{{ $genre->name }}</option>
                    @endforeach
                </select>
                <button onclick="remSkill(this)" type="button">-</button>
            </div>`);
            count += 1;
        }
    }
    function remSkill(el){
        $(el).parent().remove();
        count -= 1;
    }
</script>
