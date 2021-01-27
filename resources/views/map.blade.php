@extends("layouts.app")

@section("title")
- Map
@endsection

@section("stylesheet")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.css"/>
@endsection

@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 mt-4">


			<div class="container text-center mb-2">

				<div id="templates">
					@foreach($countriesresults as $countryresults)
						<template tid="map-legend" id="{{ $countryresults['CountryCode'] }}" class="d-block mx-auto rounded">
							<div class="col mx-auto">
								<img class="flag-icon h4 d-block mx-auto rounded" src="https://www.countryflags.io/{{ $countryresults['CountryCode'] }}/flat/32.png" title="{{ $countryresults['Country'] }}"/>
								<div>
									<span class="h5">{{ $countryresults["Country"] }}</span>
									<p>
										<em class="text-muted">{{ \Carbon\Carbon::parse($countriesresults["Date"])->format("d/m/Y H:i") }}</em>
									</p>
								</div>
								<table>
									<tbody>
										<tr>
											<td>Total Confirmed</td>
											<td>
												<span class="text-warning">{{ $countryresults["TotalConfirmed"] }}</span>
											</td>
										</tr>
										<tr>
											<td>New Confirmed</td>
											<td>
												<span class="text-warning">{{ $countryresults["NewConfirmed"] }}</span>
											</td>
										</tr>
										<tr>
											<td>Total Deceased</td>
											<td>
												<span class="text-danger">{{ $countryresults["TotalDeaths"] }}</span>
											</td>
										</tr>
										<tr>
											<td>New Deceased</td>
											<td>
												<span class="text-danger">{{ $countryresults["NewDeaths"] }}</span>
											</td>
										</tr>
										<tr>
											<td>Total Recovered</td>
											<td>
												<span class="text-success">{{ $countryresults["TotalRecovered"] }}</span>
											</td>
										</tr>
										<tr>
											<td>New Recovered</td>
											<td>
												<span class="text-success">{{ $countryresults["NewRecovered"] }}</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</template>
					@endforeach
				</div>

				<div class="map-container">
					<div id="world-map-markers" class="jvmap-smart"></div>
				</div>

			</div>


</main>

@endsection
