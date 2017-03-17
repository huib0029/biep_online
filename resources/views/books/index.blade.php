@extends('layouts.admin')

@section('title')
    BIEPonline - Boeken Toevoegen <i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i>
@endsection

@section('page-header')
    Boeken Toevoegen
@endsection

@section('page-content')
    <div class="col-sm-12">
        @section ('atable_panel_title','Toegevoegde Boeken')
        @section ('atable_panel_body')
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-0">
                        <div class="form-group">
                            {{ link_to_route('books.create', 'Nieuw Boek Toevoegen', null, ['class'=>'btn btn-primary btn-lg btn-block']) }}
                        </div>

                        <br>

                        <div class="panel-body">

                            <table class="table table-condensed table-bordered table-striped table-responsive small">
                                <tr>
                                    <th>Titel</th>
                                    <th>Actie</th>
                                </tr>
                                @if (count($books) == 0)
                                    Er zijn op dit moment geen boeken toegevoegd....
                                @endif
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->book_title }}</td>
                                        <td>
                                            Bewerk
                                            |
                                            Verwijder
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>




@endsection






