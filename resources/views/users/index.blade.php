@extends('layouts.app')

@section('style')
<link href="{{ asset('css/users.css') }}" rel="stylesheet">


@stop
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add User<h4 class="float-right"><a class="btn btn-dark"data-toggle="modal" data-target="#add_user" ><i class="fa fa-plus"></i>New User</a></h4></div>
                <div class="card-body">
<table class="table table-bordered table-left">



    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </thead>
<tbody>
@foreach($users as $user)
<tr>

    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->name}}</td>

    <td>@if ($user->is_admin==1)
Admin
@else
cachier
@endif

</td>
<td>
{{-- edit button --}}
    <button  class="btn btn-sm btn-info " id="editBtn"   data-id="{{$user->id}}" data-name="{{$user->name}}" data-email="{{$user->email}}" data-is_admin="{{$user->is_admin}}" data-toggle="modal" data-target="#editModel"><i class="fa fa-edit " ></i></button>
    <a href="{{route('users.destroy',$user->id)}}" ><i class="fa fa-trash text-danger"></i></a>

</td>



</tr>
@endforeach


</tbody>


</table>
                </div>
            </div>

        </div>
        <div class="col-md-3">
          <div class="card">
      <div class="card-header"><h4>Search user</h4></div>
         <div class="card-body">
        ..................
         </div>
    </div>
</div>
    </div>
</div>

 <!-- Modal -->
<div class="modal right fade" id="add_user" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('users.store')}}" name="user-form"  id="user_form" method="POST">
            @csrf
          <div class="form-group">
         <label>Name</label>
            <input type="text" class="form-control" name="name">
          </div>
      <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
   </div>

     <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="password">
  </div>

    <div class="form-group">
    <label> confirm password</label>
    <input type="password" class="form-control" name="confirm_password">
   </div>

   <div class="form-group">
    <label> Role</label>
   <select name="is_admin" class="form-control">
    <option value="1">Admin</option>
    <option value="2">cashier</option>
    </select>
   </div>

        <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="button" onclick="form_submit()" type="submit" class="btn btn-primary" value="save">
        </div>
    </form>

    </div>

    </div>
</div>
</div>


{{-- edit modal --}}
<div class="modal right fade" id="editModel" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('users.store')}}" name="user-form"  id="edit_form" method="POST">
            @csrf
            <div class="form-group">
                <label>id</label>
                   <input type="text" class="form-control"  id="edit_form_id"  >
                 </div>
          <div class="form-group">
         <label>Name</label>
            <input type="text" class="form-control" name="name" id="edit_form_name">
          </div>
      <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="edit_form_email">
   </div>

     <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" name="password">
  </div>

    <div class="form-group">
    <label> confirm password</label>
    <input type="password" class="form-control" name="confirm_password">
   </div>

   <div class="form-group">
    <label> Role</label>
   <select name="is_admin" class="form-control" id="edit_form-is_admin">
    <option value="1">Admin</option>
    <option value="2">cashier</option>
    </select>
   </div>

        <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="button" onclick="form_submit()" type="submit" class="btn btn-primary" value="save">
        </div>
    </form>

    </div>

    </div>
</div>

@endsection
@section('scripts')

<script>
// $( document ).ready(function() {
//     $(document).on('clic]hhk', '.editBtn', function(e) {

// alert("ok");
// });

// });
//   $(".editBtn").click(function () {
    $(window ).on("click", "#editBtn", function(e) {

alert("ok");

    // let id= $(this).attr('data-id');
    //              let nameEn= $(this).attr('data-name-en');
    //              let nameAr= $(this).attr('data-name-ar');
    //              console.log(id);



  });
// });

</script>

@endsection
