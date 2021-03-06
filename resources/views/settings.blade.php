@extends('index')
@section('extrajs')
<script type="text/javascript" src="{{ asset('js/page/settings.js') }}"></script>
@endsection
@section('container-project')
    <a href="#" style="text-decoration: none">
        <div class="project-items" style="background:#00003b;">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; User Settings
        </div>
    </a>
    <a href="/reset/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Reset Password
        </div>
    </a>
    <a href="/workspace/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Workspace Setting
        </div>
    </a>
    <a href="/helps/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Helps
        </div>
    </a>
    <a href="/feedback/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Feedbacks
        </div>
    </a>
@endsection

@section('container-full')
    <div>
        <form>
            <div class="user-settings">
                <label>Name</label>
                <input type="text" name="username" class="form-control" value="{{ $current_user->name }}">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $current_user->email }}">
                <br>
                <button class="btn btn-primary">
                    <span class="fa fa-pencil"></span>
                    Edit
                </button>
                <button class="btn btn-primary">
                    <span class="fa fa-save"></span>
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection

@section('project-details')
    <div class="project-details">
        <b>User Settings</b>
    </div>
@endsection