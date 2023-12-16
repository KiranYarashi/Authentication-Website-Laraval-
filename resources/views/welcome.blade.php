@extends('layout')
@section('title',"Home Page")
@section('content')
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Dashboard</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Sidebar styles */
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      color: white;
    }
    .sidebar a {
      color: white;
    }
    .sidebar a:hover {
      color: #ffc107;
    }
    /* Main content styles */
    .main-content {
      padding: 20px;
    }
    .card {
      margin-bottom: 20px;
    }
    .table {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar">
        <h3 class="text-center py-3">Dashboard</h3>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/game">Spaceship</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
        </ul>
      </div>
      <!-- Main content -->
      <div class="col-md-9 main-content">
        <h1 class="text-center">Overview</h1>
        <div class="row">
          <!-- Cards -->
          <div class="col-md-4">
            <div class="card bg-primary text-white">
              <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">10,000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-success text-white">
              <div class="card-body">
                <h5 class="card-title">Sales</h5>
                <p class="card-text">$50,000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-danger text-white">
              <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <p class="card-text">500</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>john@example.com</td>
                <td>123-456-7890</td>
                <td>Active</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jane Doe</td>
                <td>jane@example.com</td>
                <td>987-654-3210</td>
                <td>Inactive</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Bob Smith</td>
                <td>bob@example.com</td>
                <td>456-789-1230</td>
                <td>Active</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection