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
                            {{ link_to_route('books.create', 'Nieuw Boek Toevoegen', null, ['class'=>'btn btn-primary btn-lg']) }}
                        </div>

                        @if (count($books) == 0)
                            Er zijn op dit moment geen boeken toegevoegd....
                        @else

                        <div class="panel-body">


                            <table class="table table-condensed table-bordered table-striped table-responsive">
                                <tr>
                                    <th>Titel</th>
                                    <th>Actie</th>
                                </tr>

                                @foreach($books as $book)
                                    <tr>
                                        <td>{{ link_to_route('books.show', $book->book_title, [$book->id]) }}</td>
                                        <td class="col-sm-4">
                                            {!! Form::open(array('route'=>['books.destroy', $book->id], 'method'=>'DELETE')) !!}
                                                {{ link_to_route('books.edit', 'Bewerken', [$book->id], ['class'=>'btn btn-primary']) }}
                                                {!! Form::button('Verwijder',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>




@endsection






