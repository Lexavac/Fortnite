@extends('layouts.dashboard-main')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
            <button type="button" class="btn btn-link text-light py-0">3 Month</button>
          </div>
          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
              <h6 class="dropdown-header">Settings</h6>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
              <div class="row">
                @include('layouts.dashboard-info')
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add <code>.table-data</code>
                        </p>
                        <table class="table table-hover">
                            <tbody>
                                  <tr>
                                      <th>Sub</th>
                                      <td>{{ $heros->sub }}</td>
                                  </tr>

                                  <tr>
                                      <th>Header 1</th>
                                       <td>{{ $heros->header1 }}</td>
                                  </tr>

                                  <tr>
                                      <th>Header 2</th>
                                      <td>{{ $heros->header2 }}</td>
                                  </tr>

                                  <tr>
                                      <th>Header 3</th>
                                      <td>{{ $heros->header3 }}</td>
                                  </tr>
                                  <tr>
                                      <th>Description</th>
                                      <td>{{ $heros->desc }}</td>
                                  </tr>



                                  <tr>
                                      <th>Image</th>
                                      <td>
                                          <a href="{{ $heros->getMedia('body')->first()->getUrl() }}" target="_blank">
                                              <img src="{{ $heros->getMedia('body')->first()->getUrl() }}" width="100px" height="50px" alt="">
                                          </a>
                                      

                                          <a href="{{ $heros->getMedia('backgroundone')->first()->getUrl() }}" target="_blank">
                                              <img src="{{ $heros->getMedia('backgroundone')->first()->getUrl() }}" width="100px" height="50px" alt="">
                                          </a>


                                          <a href="{{ $heros->getMedia('backgroundtwo')->first()->getUrl() }}" target="_blank">
                                              <img src="{{ $heros->getMedia('backgroundtwo')->first()->getUrl() }}" width="100px" height="50px" alt="">
                                          </a>


                                          <a href="{{ $heros->getMedia('charone')->first()->getUrl() }}" target="_blank">
                                              <img src="{{ $heros->getMedia('charone')->first()->getUrl() }}" width="100px" height="50px" alt="">
                                          </a>


                                          <a href="{{ $heros->getMedia('chartwo')->first()->getUrl() }}" target="_blank">
                                              <img src="{{ $heros->getMedia('chartwo')->first()->getUrl() }}" width="100px" height="50px" alt="">
                                          </a>
                                      </td>
                                  </tr>



                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>

@endsection
