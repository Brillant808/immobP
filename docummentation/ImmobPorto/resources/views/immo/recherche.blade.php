@extends('layouts.app')
@section('link')
    	<link rel="stylesheet" href="css/footer.css">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Status</label>
                                            <div class="col-md-6">
                                                <select name="annee" id="annee">
							<option value="vente">Vente</option>
							<option value="louer">Louer</option>
						 </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="addresse" class="col-md-4 col-form-label text-md-right">Addresse</label>
                                            <div class="col-md-6">
                                                <input id="addresse" type="text" class="form-control" name="addresse" placeholder="pays,ville et quartier de ville oû se trouve la maison">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
