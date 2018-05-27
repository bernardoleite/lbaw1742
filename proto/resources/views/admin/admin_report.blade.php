@extends('layouts.app')

@section('content')


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admin_reports.css"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>SHOWCHAN</title>
  </head>

<div class="dashboard">
<div class="container">
<div class="table-responsive">
  <table class="table" width="10">
    <tr>
      <td align="center" class="bg-dark" scope="col">Dashboard</td> 
      <td align="center" scope="col"><a href="admin_stats.html">Statistics</a></td> 
      <td align="center" scope="col"><a href="admin_mod.html">Moderators</a></td>
      <td align="center" scope="col"><a href="admin.html">Users</a></td>
      <td align="center" scope="col"><a href="admin_reports.html">Reports</a></td>
    </tr>
  </table>
</div>
</div>
</div>

<div class="users_table">
<div class="col-md-10">
<table width="400" class="table table-striped table-responsive">
          <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-3" placeholder="Search">
        </div>
      </form>
  <thead class="navbar-dark bg-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Report Title</th>
      <th scope="col">Type</th>
      <th scope="col">Date</th>
      <th scope="col">Nrº</th>
      <th scope="col">Delete | Solved</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Racist</td>
      <td>Post</td>
      <td>10/2/2018</td>
      <td>2</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Inappropriate</td>
      <td>Comment</td>
      <td>1/3/2018</td>
      <td>9</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Abusive</td>
      <td>Comment</td>
      <td>7/2/2018</td>
      <td>1</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Bad Link</td>
      <td>Post</td>
      <td>3/4/2017</td>
      <td>5</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Bug</td>
      <td>Post</td>
      <td>15/2/2018</td>
      <td>1</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
    <tr>
      <th scope="row"><img src="assets/open-iconic/svg/flag.svg" alt="icon name" height="13" width="13"></th>
      <td>Off-topic</td>
      <td>Comment</td>
      <td>18/1/2018</td>
      <td>2</td>
      <td> 
        <img src="assets/open-iconic/svg/delete.svg" alt="icon name" height="13" width="13"> 
        <span style="display:inline-block; width: 50px;"></span>
        <img src="assets/open-iconic/svg/task.svg" alt="icon name" height="13" width="13">
      </td>
    </tr>
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection