@extends('layouts.admin')

@section('title')
    BIEPonline - Boeken Toevoegen <i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i>
@endsection

@section('page-header')
    Boeken Toevoegen
@endsection

@section('page-content')
    <div class="col-sm-12">
        @section ('atable_panel_title','Overzicht')
        @section ('atable_panel_body')
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-0">
                        <div class="form-group">

                            <table class="table table-condensed table-bordered table-striped table-responsive small">

                                    <tr>
                                        <td>
                                            Titel van het boek
                                        </td>
                                        <td>
                                            {{ $book->book_title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ISBN nummer
                                        </td>
                                        <td>
                                            {{ $book->book_isbn }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Auteur
                                        </td>
                                        <td>
                                            {{ $book->book_author_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Beschrijving
                                        </td>
                                        <td>
                                            {{ $book->book_dis }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Categorie
                                        </td>
                                        <td>
                                            {{ $book->book_colorcat }}
                                        </td>
                                    </tr>

                            </table>

                            {{ link_to_route('books.index', 'Terug', ['class'=>'btn btn-primary']) }}

                        </div>

                        <div class="panel-body">



                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>




@endsection






