@extends('layouts.admin')

@section('title')
    BIEPonline - Boeken Toevoegen <i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i>
@endsection

@section('page-header')
    Boeken Toevoegen
@endsection

@section('page-content')
    <div class="col-sm-12">
        @section ('atable_panel_title','Boek bewerken')
        @section ('atable_panel_body')
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-0">

                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        <div class="form-group">

                        </div>

                        <div class="panel-body">

                            {!! Form::model($book,array('route'=> ['books.update', $book->id], 'method' => 'PUT', 'class' => 'form form-horizontal')) !!}

                            <div class="form-group">
                                {!! Form::label('book_isbn', 'Vul het ISBN in') !!}
                                {!! Form::text('book_isbn',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_title', 'Vul de titel in') !!}
                                {!! Form::text('book_title',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_author_name', 'Vul de auteur in') !!}
                                {!! Form::text('book_author_name',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_author_id', 'Vul het auteur id in') !!}
                                {!! Form::number('book_author_id', null) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_dis', 'Vul de beschijving in') !!}
                                {!! Form::textarea('book_dis',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_colorcat', 'Kies de categorie') !!}
                                {!! Form::select('book_colorcat', array('Groen' => 'groen', 'Blauw' => 'blauw')) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Bewerken',['type'=>'submit','class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>

                </div>
            </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>




@endsection