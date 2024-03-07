@extends('layouts.app')

@section('content')

<div class="container">
    <h1><b>Dashboard</b></h1>

    <div class="row justify ">
      <div class="col-md-12 mb-4">
          <div class="card bg-success text-white" style="width: 100%; height: 25vh">

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <h3 style="margin-left:50px; margin-top:10px; font-family:Arial, Helvetica, sans-serif">Welcome to Inventory Management System</h3>

                  <a href="#" class="btn btn-warning" style="margin-left:50px; margin-top:80px">See All</a>
              </div>
          </div>
      </div>
    </div>

        <div class="row">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>Devices</b>
                        <a href="#" class="btn btn-warning" style="margin-left:100px;">Add</a>
                        <a href="#" class="btn btn-warning">Deploy</a>
                        <a href="#" class="btn btn-warning">Pullout</a>
                    </h5>
                    <p class="card-text">List of all Devices</p>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Device</th>
                            <th scope="col">Location</th>
                            <th scope="col">Borrower</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>System Unit</td>
                            <td>HED</td>
                            <td>Abueg</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Desktop</td>
                            <td>HED</td>
                            <td>Anacay</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Speaker</td>
                            <td>BED</td>
                            <td>Paglinawan</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
              </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Cables & Peripherals</b>
                            <a href="#" class="btn btn-warning">Add</a>
                            <a href="#" class="btn btn-warning">Deploy</a>
                            <a href="#" class="btn btn-warning">Pullout</a>
                        </h5>
                        <p class="card-text">List of all Cables and Peripherals</p>

                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Cables & Peripherals</th>
                                <th scope="col">Location</th>
                                <th scope="col">Borrower</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>HDMI</td>
                                <td>Room 120</td>
                                <td>Benavidez</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Converter</td>
                                <td>Room 121</td>
                                <td>Ramos</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>VGA</td>
                                <td>122</td>
                                <td>Pareja</td>
                              </tr>
                            </tbody>
                          </table>

                    </div>
                  </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                      <h5 class="card-title"><b>Consumables</b>
                          <a href="#" class="btn btn-warning" style="margin-left:60px;">Add</a>
                          <a href="#" class="btn btn-warning">Deploy</a>
                          <a href="#" class="btn btn-warning">Pullout</a>
                      </h5>
                      <p class="card-text">List of all Consumables</p>

                      <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Consumables</th>
                            <th scope="col">Location</th>
                            <th scope="col">Borrower</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Toner</td>
                            <td>AFA</td>
                            <td>AFA</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Ink</td>
                            <td>SAO</td>
                            <td>SAO</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Toner</td>
                            <td>Cashier</td>
                            <td>Cashier</td>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                </div>
              </div>
          </div>

</div>
@endsection
