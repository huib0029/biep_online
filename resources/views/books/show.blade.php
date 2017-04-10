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

                            <table class="table table-condensed table-bordered table-striped table-responsive">

                                    <tr>
                                        <th>
                                            Het book id
                                        </th>
                                        <td>
                                            {{ $book->book_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Titel van het boek
                                        </th>
                                        <td>
                                            {{ $book->book_title }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ISBN nummer
                                        </th>
                                        <td>
                                            {{ $book->book_isbn }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Auteur
                                        </th>
                                        <td>
                                            {{ $book->book_author_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Auteur id
                                        </th>
                                        <td>
                                            {{ $book->book_author_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Beschrijving
                                        </th>
                                        <td>
                                            {{ $book->book_dis }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Categorie
                                        </th>
                                        <td>
                                            {{ $book->book_colorcat }}
                                        </td>
                                    </tr>

                            </table>

                            {{ link_to_route('books.index', 'Terug', '', ['class'=>'btn btn-primary']) }}
                            {{--link naar de bookcontroller @index--}}

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






