@extends('panel.master')

@section('title', 'Site Settings')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Site Settings<span>Table</span></h2>
                    <h6 class="mb-0">UnderPinning</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Site Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>SiteSetting List</h5>
                    </div>
                    <div class="card-body">
                      
                      {{-- <a href="{{ route('siteSetting.create') }}" class="btn btn-primary mb-3" >
      + Add 
    </a> --}}
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Site Logo</th>
                                        <th>Light Logo</th>
                                        <th>Favicon</th>
                                        <th>Site Name</th>
                                        <th>Meta Title</th>
                                        <th>Meta Keyword</th>
                                         <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @if($siteSettings->count() > 0 )
                  @foreach($siteSettings as $siteSetting)
                                    <tr>
                                         <td class="py-1">
                        <img class="from-image-size" src="{{  (isset($siteSetting->site_logo) AND Storage::disk('local')->exists($siteSetting->site_logo)) ? config("app.url").Storage::url($siteSetting->site_logo) : asset('assets/images/default-image.png') }}" alt="site_logo" class="w-px-100 rounded" />
                      </td>

                      <td class="py-1">
                        <img class="from-image-size" src="{{  (isset($siteSetting->light_logo) AND Storage::disk('local')->exists($siteSetting->light_logo)) ? config("app.url").Storage::url($siteSetting->light_logo) : asset('assets/images/default-image.png') }}" alt="site_light_logo" class="w-px-100 rounded bg-dark"/>
                      </td>
                      
                      <td class="py-1">
                        <img class="from-image-size" src="{{  (isset($siteSetting->favicon) AND Storage::disk('local')->exists($siteSetting->favicon)) ? config("app.url").Storage::url($siteSetting->favicon) : asset('assets/images/default-image.png') }}" alt="site_favicon" class="w-px-50 rounded-circle bg-dark"/>
                      </td>
                      <td>
                          {{ $siteSetting->site_name }}
                      </td>
                      <td>
                          {{ $siteSetting->meta_title }}
                      </td>
                      <td>
                        {{ $siteSetting->meta_keyword }}
                      </td>
                      <td>
                         <a href="{{ route('siteSetting.edit', $siteSetting) }}" class="btn btn-primary">
                           <i class='bx bx-edit-alt' ></i> Edit
                         </a>
                      </td>
                                    </tr>
                                     @endforeach
                @else
                  <td colspan="7" class="text-center">Site Settings not available</td>
                @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Site Logo</th>
                                        <th>Light Logo</th>
                                        <th>Favicon</th>
                                        <th>Site Name</th>
                                        <th>Meta Title</th>
                                        <th>Meta Keyword</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
