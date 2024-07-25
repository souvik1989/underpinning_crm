@extends('panel.master')
@section('title', "DashBoard")
@section('content')

 <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Dashboard </h2>
                  <h6 class="mb-0">admin panel</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">     
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                    
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid general-widget">
            <div class="row">
              <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
                <div class="card gradient-primary o-hidden">
                  <div class="b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="file-text"></i></div>
                      <div class="media-body"><span class="m-0 text-white">INVOICES</span>
                        <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="file-text"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
                <div class="card gradient-secondary o-hidden">
                  <div class="b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="printer"></i></div>
                      <div class="media-body"><span class="m-0">QUOTES</span>
                        <h4 class="mb-0 counter">0</h4><i class="icon-bg" data-feather="printer"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
                <div class="card gradient-warning o-hidden">
                  <div class="b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center">
                        <div class="text-white i" data-feather="briefcase"></div>
                      </div>
                      <div class="media-body"><span class="m-0 text-white">JOBS</span>
                        <h4 class="mb-0 counter text-white">0</h4><i class="icon-bg" data-feather="briefcase"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6 box-col-6">
                <div class="card gradient-info o-hidden">
                  <div class="b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center">
                        <div class="text-white i" data-feather="user-plus"></div>
                      </div>
                      <div class="media-body"><span class="m-0 text-white">LEADS</span>
                        <h4 class="mb-0 counter text-white">{{$user_count}}</h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card o-hidden">
                  <div class="card-header">
                    <h5>INVOICES</h5>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                       
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="user-status cart-table table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Customer Name</th>
                             <th scope="col">Status</th>
                              <th scope="col">Mail Send</th>
                          </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($invoices as $inv)
                          <tr>
                            <td class="f-w-600"> {{ \Carbon\Carbon::parse($inv->created_at)->format('d/m/Y')}}</td>
                            <td class="digits">{{$inv->invoice_no ?? ''}}</td>
                            @if(isset($inv->job->customer_name))
                            <td class="digits">{{$inv->job->customer_name ?? ''}}</td>
                            @else
                            <td class="digits">{{$inv->quote->customer_name ?? ''}}</td>
                            @endif
                            <td>
                              <div class="span badge badge-pill pill-badge-success">{{$inv->status ?? ''}}</div>
                            </td>

                            <td>
                              <div class="{{$inv->mail_send== '0' ? 'font-danger' : 'font-primary'}}">{{$inv->mail_send== '0' ? 'No' : 'Yes'}}</div>
                            </td>
                          </tr>
                          @endforeach--}}
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     
                    </div>
                  </div>
                </div>
              </div>
            
            
           
            
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card o-hidden">
                  <div class="card-header">
                    <h5>LEAD DETAILS</h5>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        
                      
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="user-status table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        {{-- @foreach($users as $user)
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size">
                                <div class="d-inline-block">
                                  <h6>{{$user->first_name.' '.$user->last_name }} </h6>
                                </div>
                              </div>
                            </td>
                            <td>{{$user->email }}</td>
                            <td>
                             {{$user->phone }}
                            </td>
                             <td> <div class="span badge badge-pill {{$user->status=='active' ? 'pill-badge-info' : 'pill-badge-danger' }}">{{$user->status}}</div></td>
                          </tr>
                         
                          @endforeach--}}
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                     
                    </div>
                  </div>
                </div>
              </div>
             
            
            </div>
          </div>
          <!-- Container-fluid Ends-->
          @endsection