@extends("layouts.error")

@section("title")
- 500 Error
@endsection

@section("stylesheet")
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600;900&display=swap" rel="stylesheet">
@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">

    <div class="container text-center mb-2">

        <div class="alert alert-danger text-center">
            <div class="err">5</div>
            <em class="far fa-question-circle fa-spin"></em>
            <em class="far fa-question-circle fa-spin"></em>
            <div class="msg">Server Error</p>
        </div>

    </div>

</main>
@endsection