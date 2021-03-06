@extends('index')
@section('extrajs')
    <script type="text/javascript" src="{{ asset('js/page/home.js') }}"></script>
    <script>
        $(document).ready(function(){
           $.ajax({
              type:'GET',
              url:'/api/project/',
            //   data:'_token = <?php echo csrf_token() ?>',
              success:function(data){
                console.log(data);
              }
           });
        })
     </script>
@endsection
@section('container-project')
    <a href="/home/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Your Projects
        </div>
    </a>
    <a href="/team/" style="text-decoration: none">
        <div class="project-items" >
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Your Teams
        </div>
    </a>
    <a href="#" style="text-decoration: none">
      <div class="project-items" style="background:#00003b;">
          <span class="fa fa-circle"></span>&nbsp;&nbsp; Project Invitations
      </div>
    </a>
    <a href="/notification/" style="text-decoration: none">
      <div class="project-items">
          <span class="fa fa-circle"></span>&nbsp;&nbsp; Notifications
      </div>
    </a>
@endsection

@section('project-details')
  <div class="project-details">
    <h4>
      <span class="fa fa-envelope"></span>
      Project Invitation
    </h4>
  </div>
@endsection

@section('container-full')
    <div class="container-fluid">
      <table class="table table-hover table-bordered" style="background:#f7f7f7; width:80%;">
        <tr>
          <th>Project Name</th>
          <th>Role</th>
          <th>Invited By</th>
          <th>Action</th>
        </tr>
        @foreach(@$invitation as $items)
        <tr>
          <td>{{ $items->project->name }}</td>
          <td>{{ $items->userLevel->title }}</td>
          <td>{{ $items->invitedBy->name }}</td>
          <td>
            <button class="btn btn-default">
              Accept
            </button>
            <button class="btn btn-danger">
              Reject
            </button>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
@endsection