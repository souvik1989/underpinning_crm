@extends('panel.master')

@section('title', 'Contact Messages')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 main-header">
                    <h2>Contacts<span>Table</span></h2>
                    <h6 class="mb-0">All Contact Messages</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="pe-7s-home"></i></a></li>
                        <li class="breadcrumb-item">Dashboard</li>

                        <li class="breadcrumb-item active">Contacts</li>
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
                        <h5>Message List</h5>
                    </div>
                    <div class="card-body">

                       
                        <div class="table-responsive">
                            <table class="display" id="advance-3">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Site URL</th>
                                       
                                        <th>Status</th>
                                        <th> Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($contacts->count() > 0 )
                                    @foreach($contacts as $contact)
                                    <tr>

                                        <td>
                                            {{ $contact->name }}
                                        </td>
                                        <td>
                                            {{ $contact->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $contact->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $contact->site_url ?? '' }}
                                        </td>
                                       {{-- <td>
                                            <a class="btn btn-pill btn-primary" href="#" data-toggle="modal" data-target="#replyMail{{$user->id}}" title="Reply">
                                                <i class="pe-7s-back"></i>
                                            </a>
                                        </td>--}}
                                        
                                       
                                        
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn @if(isset($contact->status) && ($contact->status=='active')) btn-success @else btn-danger @endif dropdown-toggle btn-sm text-white" data-toggle="dropdown" aria-expanded="false">

                                                    <?=(isset($contact->status) && $contact->status=='active')?'<i class="fa fa-dot-circle-o text-success"></i> Active':'<i class="fa fa-dot-circle-o text-danger"></i> Inactive';?>

                                                    <span class="caret"></span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <form action="{{route('contact.status', $contact->id)}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="dropdown-item status-btn btn-round" style="cursor: pointer;">

                                                            {!! ($contact->status=='active')? "<i class='fa fa-dot-circle-o text-danger'></i> Inactive":"<i class='fa fa-dot-circle-o text-success'></i> Active" !!}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($contact->contact_date)->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <a href="{{ route('contact.edit', $contact) }}" class="btn btn-pill btn-warning" title="Edit">
                                                <i class="pe-7s-edit"></i>
                                            </a>
                                            <div class="d-inline-block">
                                                <form action="{{route('contact.destroy', $contact->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-pill Delete " style="cursor: pointer;" title="Delete">

                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>


                                    {{--<div class="modal fade size-chart" id="replyMail{{$contact->id}}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="managePassword">Reply</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{route('user-all.reply')}}" method="POST" enctype="multipart/form-data">

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
                                    </div>--}}
                                    @endforeach
                                    @else
                                    <td colspan="8" class="text-center">Messages not available</td>
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Site URL</th>
                                       
                                        <th>Status</th>
                                        <th> Date</th>
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
