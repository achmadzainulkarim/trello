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
    <a href="#" style="text-decoration: none">
        <div class="project-items" style="background:#00003b;">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Your Projects
        </div>
    </a>
    <a href="/team/" style="text-decoration: none">
        <div class="project-items">
            <span class="fa fa-circle"></span>&nbsp;&nbsp; Your Teams
        </div>
    </a>
    <a href="/invitation/" style="text-decoration: none">
      <div class="project-items">
          <span class="fa fa-circle"></span>&nbsp;&nbsp; Project Invitations
      </div>
    </a>
    <a href="/notification/" style="text-decoration: none">
      <div class="project-items">
          <span class="fa fa-circle"></span>&nbsp;&nbsp; Notifications
      </div>
    </a>
@endsection

@section('container-full')
    <div class="container-fluid">
      @foreach($projectList as $projectItems)
      <div class="col-md-3" style="margin-bottom:35px;">
        <a href="/projects/{{ $projectItems->id }}">
        <div class="btn btn-info btn-block" style="
          height: 90px;
          font-size: 16px;
          overflow: hidden;
          text-overflow: ellipsis;
          white-space: nowrap;
          text-align: left;
          background-image: linear-gradient(to right, #000066, #03183b);
        ">
          <span style="font-weight: bold; text-transform: uppercase;">{{ $projectItems->name }}</span>
        </div>
        </a>
      </div>
      @endforeach
    </div>
@endsection