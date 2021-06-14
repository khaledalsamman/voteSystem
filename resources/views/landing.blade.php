@extends('layouts.app')
<style>

</style>
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
</div>
<div>

  <div class="card-group">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-body">
              <h5 class="card-title border-bottom-0">Number of positions</h5>
              <p class="card-text">Number of positions created</p>
          </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-white bg-danger mb-3 col-md-3" style="max-width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">Number of Candidates</h5>
              <p class="card-text">Total Number of candidates</p>
          </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">Total Voters</h5>
              <p class="card-text">Total number of voters registered</p>
          </div>
      </div>
      &nbsp;
      &nbsp;
      &nbsp;
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
          <div class="card-body">
              <h5 class="card-title">Voters Voted</h5>
              <p class="card-text">Number of students voted</p>
          </div>
      </div>

  </div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dash 1</h1>
  </div>

</div>
@endsection