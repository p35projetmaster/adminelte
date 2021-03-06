@extends('superadmin.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nouveau admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Flot</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
              <div class="card-body">
                 @if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
              @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
   <form role="form" id="quickForm" class="user" action="{{ route('create_admine') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="name" type="text" class="form-control form-control-user {{ $errors->has('name') ? 'is-invalid' : '' }}"  placeholder="Votre nom" value="{{ old('name') }}" id="exampleFirstName" placeholder="First Name">
                     {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="prenom" type="text" class="form-control form-control-user {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}" id="exampleLastName" placeholder="Prenom">
                     {!! $errors->first('prenom', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address">
                     {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="role" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Role">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" id="exampleInputPassword" placeholder="Password">
                    
                    {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                  </div>
                  <div class="col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" onkeypress="checkPass();">
                  </div>
                </div>
              
<hr>
<div class="row">
<div class="icheck-primary d-inline rows col-sm-4">
    <input name="webmaster" id="customCheck1" type="checkbox">
    <label for="customCheck1" class="text-primary"><h6>Web master</h6></label>
</div>
</div>


   <hr>
<div class="form-group row">
<div class="icheck-success d-inline rows col-sm-4">
                        <input name="Importation" type="checkbox" id="checkboxSuccess2">
                        <label for="checkboxSuccess2"><h6>Importation</h6>
                        </label>
 </div>

<div class="icheck-success d-inline rows col-sm-4">
                        <input name="Annonnces" type="checkbox" id="checkboxSuccess3">
                        <label for="checkboxSuccess3"><h6>Annonnces</h6>
                        </label>
                      </div>
                      
                      

</div>
<div class="row">
<div class="icheck-success d-inline rows col-sm-4">
                        <input name="Archive" name="supression" type="checkbox" id="checkboxSuccess5">
                        <label for="checkboxSuccess5"><h6>Supression placard</h6>
                        </label>
                      </div>
                      <div class="icheck-success d-inline rows col-sm-4">
                        <input name="Archive" type="checkbox" id="checkboxSuccess4">
                        <label for="checkboxSuccess4"><h6>Archive</h6>
                        </label>
                      </div>
                      </div>
<hr>
<div class="form-group row">
<div class="icheck-success d-inline rows col-sm-4">
                        <input name="Abonnees" type="checkbox" id="checkboxSuccess6">
                        <label for="checkboxSuccess6"><h6>Abonnées</h6>
                        </label>
                      </div>
                      <div class="icheck-success d-inline rows col-sm-4">
                        <input name="Demandes" type="checkbox" id="checkboxSuccess7">
                        <label for="checkboxSuccess7"><h6>Demandes</h6>
                        </label>
                      </div>
                      <div class="icheck-success d-inline rows col-sm-4">
                        <input name="admin" type="checkbox" id="checkboxSuccess8">
                        <label for="checkboxSuccess8"><h6>Admin</h6>
                        </label>
                      </div>

</div>
<hr>

                  <button class="btn btn-primary btn-user btn-block" type="submit" >Register Account</button>
                <hr>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


                @endsection
  @push('scripts')
<!-- Page level plugins -->

<script type="text/javascript">

$(document).ready(function () {
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      name: {
        required: true,
        minlength: 4
      },
      prenom: {
        required: true,
        minlength: 4
      },
      role: {
        required: true,
        minlength: 4
      },

      password: {
        required: true,
        minlength: 8
      },
      password_confirmation:{
        required: true,
        minlength: 8
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your name must be at least 4 characters long"
      },
      password_confirmation: {
        required: "Please provide a password",
        minlength: "Your name must be at least 4 characters long"
      },
      name: {
        required: " Please entre a name",
        minlength: "Your name must be at least 5 characters long"
      },
      prenom: {
        required: "Please entre a prenom",
        minlength: "Your name must be at least 4 characters long"
      },
      role: {
        required: "Please entre a role",
        minlength: "Your name must be at least 4 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
  $('#customCheck1').change(function(e) {
  if (e.currentTarget.checked) {
  $('.rows').find('input[type="checkbox"]').prop('checked', true);
} else {
    $('.rows').find('input[type="checkbox"]').prop('checked', false);
  }
});

$('input[type=submit]').on('click', validate);




</script>
@endpush

               