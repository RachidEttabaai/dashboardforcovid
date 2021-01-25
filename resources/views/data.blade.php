@extends("layouts.app")

@section("title")
- Data
@endsection

@section("stylesheet")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">

    @if($errorsresults)

        <div class="container text-center mb-2">
            <div class="row mb-2">
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        {{ $errorsresults["message"] }}
                    </div>
                </div>
            </div>
        </div>

    @else

    <div class="container text-center mb-2">
        <div class="row mb-2">
            <div class="col">

                <h2>Global Summary</h2>

                <em class="text-muted">API data updated on {{ date("m/d/Y H:i") }}</em>

                <ul class="list-group">
                    <li class="list-group-item">
                        New Confirmed :
                        <strong>
                            <em class="text-warning">
                                {{ $globalresults["NewConfirmed"] }}
                            </em>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        Total Confirmed :
                        <strong>
                            <em class="text-warning">{{ $globalresults["TotalConfirmed"] }}</em>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        New Deceased :
                        <strong>
                            <em class="text-danger">
                                {{ $globalresults["NewDeaths"] }}
                            </em>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        Total Deceased :
                        <strong>
                            <em class="text-danger">
                                {{ $globalresults["TotalDeaths"] }}
                            </em>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        New recovered :
                        <strong>
                            <em class="text-success">
                                {{ $globalresults["NewRecovered "] }}
                            </em>
                        </strong>
                    </li>
                    <li class="list-group-item">
                        Total recovered :
                        <strong>
                            <em class="text-success">{{ $globalresults["TotalRecovered "] }}</em>
                        </strong>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mt-4 mb-2">

            <div class="col">

                <h2>Summary per country</h2>

                <em class="text-muted">API data updated on {{ \Carbon\Carbon::parse($countriesresults[0]["Date"])->format("m/d/Y H:i") }}</em>

                <table id="summarypercountry" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>New confirmed</th>
                            <th>Total confirmed</th>
							<th>New deceased</th>
                            <th>Total deceased</th>
							<th>New recovered</th>
							<th>Total recovered</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($countriesresults as $countryresults)
                            <tr>
                                <td>
                                    <img src="https://www.countryflags.io/{{ $countryresults['CountryCode'] }}/flat/32.png" title="{{ $countryresults['Country'] }}"/>
									{{ $countryresults["Country"] }}
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-warning">
                                            {{ $countryresults["NewConfirmed"] }}
                                        </em>
                                    </strong>
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-warning">
                                            {{ $countryresults["TotalConfirmed"] }}
                                        </em>
                                    </strong>
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-danger">
                                            {{ $countryresults["NewDeaths"] }}
                                        </em>
                                    </strong>
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-danger">
                                            {{ $countryresults["TotalDeaths"] }}
                                        </em>
                                    </strong>
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-success">
                                            {{ $countryresults["NewRecovered"] }}
                                        </em>
                                    </strong>
                                </td>
                                <td>
                                    <strong>
                                        <em class="text-success">
                                            {{ $countryresults["TotalRecovered"] }}
                                        </em>
                                    </strong>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
            </div>
        
        </div>

    @endif
        
</main>

@endsection
