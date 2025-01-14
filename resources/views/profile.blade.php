@extends('layouts.app')
  
@section('title', 'User Profile')
  
@section('contents')
    <h1 class="mb-0">Who are login now?</h1>
    <hr />
    <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
    @csrf
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Detail Profile</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
  
                    <div class="col-md-6">
                        <label class="labels">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Email</label>
                        <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                    </div>
            </div>
        </div>
         
    </div>   
            
        </form>
@endsection