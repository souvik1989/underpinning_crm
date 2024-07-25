@extends('panel.master')

@section('title', 'Website 1 Leads')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Leads<span>Table</span></h2>
                    <h6 class="mb-0">Website 2</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Users</li>
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
                        <h5>User List</h5>
                    </div>
                    <div class="card-body">

                        <a href="{{ route('user2.create') }}" class="btn btn-primary mb-3">
                            + Add new Lead
                        </a>
                        <div class="table-responsive">
                            <table class="display" id="advance-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Send Mail</th>
                                        <th>Status</th>
                                        <th>Lead Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($users->count() > 0 )
                                    @foreach($users as $user)
                                    <tr>

                                        <td>
                                            {{ $user->first_name.' '.$user->last_name }}
                                        </td>
                                        <td>
                                            {{ $user->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->phone ?? '' }}
                                        </td>
                                         <td>
                                            <a class="btn btn-pill btn-primary" href="#" data-toggle="modal" data-target="#replyMail{{$user->id}}" title="Reply">
                                                <i class="pe-7s-back"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($user->status) && ($user->status=='active')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($user->status) && $user->status=='active')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('user2.status', $user->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($user->status=='active')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <a href="{{ route('user2.edit', $user) }}" class="btn btn-pill btn-warning edit-sec">
                                                   <i class="pe-7s-edit"></i>
                                            </a>
                                            <div class="d-inline-block">
                                            <form action="{{route('user2.destroy', $user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-pill Delete delete-sec" style="cursor: pointer;">

                                                     <i class="pe-7s-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                        </td>
                                        
                                    </tr>
                                    <div class="modal fade size-chart" id="replyMail{{$user->id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="managePassword">Reply</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{route('user2.reply')}}" method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                         <input type="hidden" name="user" value="{{$user->id}}">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="FaqQuestion">Recipient</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="email" name="recipient" value="souvik.pal@3raredynamics.com" class="form-control @error('recipient') is-invalid @enderror" id="recipient" placeholder="Enter Recipient">

                                                            </div>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label class="form-label" for="FaqQuestion">Subject</label>
                                                            <div class="input-group input-group-merge">

                                                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Enter Subject" />
                                                            </div>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label class="form-label" for="FaqQuestion">Message</label>
                                                            <div class="input-group input-group-merge">
                                                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" placeholder="Enter Subject"></textarea>

                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label" for="FaqQuestion">Attachments</label>
                                                            <div class="input-group input-group-merge">
                                                                <input type="file" name="attachments[]"  class="form-control" id="attachments"  multiple/>

                                                            </div>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Send</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>


                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <td colspan="7" class="text-center">User not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Send Mail</th>
                                        <th>Status</th>
                                        <th>Lead Date</th>
                                        <th>Action</th>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@include('panel.common.deleteConfirm')
@endsection
