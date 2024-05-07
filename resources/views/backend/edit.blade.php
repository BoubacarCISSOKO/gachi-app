@extends('layouts.backend.master')
@section('title', "Modification d'un slider")

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modification d'un administrateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="{{ route('admins.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Modification d'un administrateur</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-3">
                        <label for="inputPrenom">Prénom</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="inputPrenom" class="form-control @error('prenom') is-danger @enderror" name="prenom" value="{{ old('prenom', $admin->prenom) }}">
                        @error('prenom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="inputNom">Nom</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="inputNom" class="form-control @error('nom') is-danger @enderror" name="nom" value="{{ old('nom', $admin->nom) }}">
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="inputEmail">E-mail</label>
                    </div>
                    <div class="col-9">
                        <input type="text" id="inputemail" class="form-control @error('email') is-danger @enderror" name="email" value="{{ old('email', $admin->email) }}">
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="inputPassword">Mot de pass</label>
                    </div>
                    <div class="col-9">
                        <input type="password" id="inputPassword" class="form-control @error('password') is-danger @enderror" name="password" value="{{ old('password', $admin->password) }}">
                        <h3><input type="checkbox" onclick="myPassword()">Voir le mot de pass</h3>
                        @error('password')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a class="btn btn-primary m-1" href="{{ route('admin.dashboard') }}" role="button"><i class="fas fa-arrow-alt-circle-left"> Retour</i></a>
          <button type="submit" class="btn btn-success float-right">Modifier l'administrateur</button>
        </div>
      </div>
    
     </form>

    </section>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function myPassword() {
        var x = document.getElementById("inputPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
@endsection
