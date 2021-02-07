@extends("layouts.app")

@section("title")
- Home
@endsection

@section("stylesheet")

@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">

    <div class="container text-center mb-2">

        <h2>COVID News</h2>

        <form id="newsfilter">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="select-country">Filter by country</label>
                </div>
                <select class="custom-select" id="select-country">
                    <option value="none" selected>...All countries</option>
                    @foreach($countries as $country)
                        <option value="{{ $country['ISO2'] }}" >{{ $country["Country"] }}</option>
                    @endforeach
                </select>
            </div>
        </form>

    </div>

    <div class="container text-center mb-2" id="news"></div>

</main>

@endsection
