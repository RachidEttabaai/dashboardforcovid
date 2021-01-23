@extends("layouts.app")

@section("title")
- Home
@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">This website offers you a web interface in the form of a dashboard to display data in order to follow the evolution of the Coronavirus at the global level and / or according to each country.</p>
        </div>
    </div>

    <div class="container text-center mb-2">

        <h2>News</h2>

        <form id="newsfilter">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="select-country">Filter by country</label>
                </div>
                <select class="custom-select" id="select-country">
                    <option value="none" selected>Choose...</option>
                </select>
            </div>
        </form>

    </div>

    <div class="container text-center mb-2" id="news"></div>

</main>

@endsection
