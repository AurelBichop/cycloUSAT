@extends('layouts')

@section('content')

        <div class="container mt-3">
                <div class="col-lg-8">
                    <form action="{{route('parcour.store')}}" class="comment-form contact-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kilometres">Nombre de Kilomètres</label>
                                <input class="form-control" type="number" id="kilometres" name="kilometres">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input class="form-control" type="date" id="date" name="date">
                            </div>

                            <div class="form-group">
                                <label for="parcoursNiv">Parcour N</label>
                                <select class="form-control" id="parcoursNiv" name="parcoursNiv">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="points de passages">Points de passages</label>
                                <input  class="form-control" type="text" placeholder="points de passages" id="points de passages" name="points_de_passages">
                            </div>

                            <div class="form-group">
                                <label for="commentaires">commentaires</label>
                                <input class="form-control" type="text" placeholder="commentaires" id="commentaires" name="commentaires">
                            </div>

                            <div class="form-group">
                                <a href="{{route('parcour.all')}}" class="btn btn-secondary">Liste des parcours</a>
                                <button type="submit" class="btn btn-primary float-right">
                                    <i class="fas fa-save"></i>
                                    Sauvegarder
                                </button>
                            </div>
                </form>
            </div>

@endsection

