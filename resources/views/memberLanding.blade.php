@extends('layouts.app')
<style>
  .row{
    text-align: center;
  }
.card +.card{
  margin-left: 25px;
}

</style>
@section('content')

  <div class="container">
    <form action="{{url('/store')}}" method="post">
    <p class="Title">President</p>
    <div class="row">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">candidate Name</div>
        <div class="card-body">
          <h5 class="card-title">Number of votes:</h5>
          <input type="radio" id="1" name="President" value="candidateID">
          <label for="male">Vote</label><br>
        </div>
      </div>
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <input type="radio" id="1" name="President" value="candidateID">
          <label for="male">Vote</label><br>
        </div>
      </div>
    </div>
    <p class="Title">Vice President</p>
    <div class="row">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <input type="radio" id="1" name="Vice" value="candidateID">
          <label for="male">Vote</label><br>
        </div>
      </div>
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <input type="radio" id="1" name="Vice" value="candidateID">
          <label for="male">Vote</label><br>
        </div>
      </div>
    </div>
    <input type="submit" value="Submit votes">
  </form>
  </div>
 
@endsection