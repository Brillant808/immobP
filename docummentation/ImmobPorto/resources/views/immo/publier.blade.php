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
                                    <form action="{{route('publier')}}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Status</label>
                                            <div class="col-md-6">
                                                <select name="status" id="status">
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
                                        <div class="form-group row">
                                            <label for="prix" class="col-md-4 col-form-label text-md-right">Prix</label>
                                            <div class="col-md-6">
                                                <input id="prix" type="integer" class="form-control" name="prix" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Image de la maison</label>
                                            <div class="col-md-6">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                            <div class="col-md-6">
                                                <input id="description" type="integer" class="form-control" name="description" >
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Enrégistrer</button>
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
