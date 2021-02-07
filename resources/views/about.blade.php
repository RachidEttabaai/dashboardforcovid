@extends("layouts.app")

@section("title")
- About
@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">
    <div class="container text-center mb-2">

        <h2>
            <em class="fa fa-question-circle" aria-hidden="true"></em>
            Who made this website ?
        </h2>

        <ul class="list-group">
            <li class="list-group-item">This website was designed by ETTABAAI Rachid</li>
            <li class="list-group-item">
                You can send me an email to
                <a href="mailto:ettabaai.rachid@gmail.com">
                    <em class="fa fa-paper-plane" aria-hidden="true"></em>
                </a>
            </li>
        </ul>

    </div>

    <div class="container text-center mt-4 mb-2">

        <h2>
            <em class="fa fa-link" aria-hidden="true"></em>
            Source
        </h2>

        <ul class="list-group">
            <li class="list-group-item">
                <a href="https://covid19api.com/" target="_blank" title="click on the link to access to the COVID19 API">COVID19 API</a>
            </li>
            <li class="list-group-item">
                <a href="https://en.wikipedia.org/wiki/COVID-19_pandemic" target="_blank" title="click on the link to access to the COVID19 API pandemic definition">COVID19 Pandemic Definition</a>
            </li>
        </ul>

    </div>

</main>

@endsection
