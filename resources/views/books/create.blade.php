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

                        @if(Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        <div class="form-group">

                        </div>

                        <div class="panel-body">

                            {!! Form::open(array('route'=> ['books.store'] , 'class' => 'form form-horizontal')) !!}

                            <div class="form-group">
                                {!! Form::label('book_id', 'Vul het book id in') !!}
                                {!! Form::text('book_id',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_isbn', 'Vul het ISBN in') !!}
                                {!! Form::number('book_isbn',null, ['class'=>'form-control']) !!}
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
                                {!! Form::number('book_author_id', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_dis', 'Vul de beschijving in') !!}
                                {!! Form::textarea('book_dis',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_colorcat', 'Kies de categorie') !!}
                                {!! Form::select('book_colorcat', array(
                                    'GEEL&#x25CF;' => 'Geel&#x25CF;',
                                    'GEEL&#x25CF;&#x25CF;' => 'Geel&#x25CF;&#x25CF;',
                                    'GRIJS&#x25CF;' => 'Grijs&#x25CF;',
                                    'GRIJS&#x25CF;&#x25CF;' => 'Grijs&#x25CF;&#x25CF;',
                                    'GRIJS&#x25CF;&#x25CF;&#x25CF;' => 'Grijs&#x25CF;&#x25CF;&#x25CF;',
                                    'ROOD&#x25CF;' => 'Rood&#x25CF;',
                                    'WIT&#x25CF;' => 'Wit&#x25CF;',
                                    'BLAUW' => 'Blauw',
                                    'BRUIN' => 'Bruin',
                                    'GEEL' => 'Geel',
                                    'GROEN' => 'Groen',
                                    'KERSTBOE' => 'Kerstboek'

                                    ),['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::button('Toevoegen',['type'=>'submit','class'=>'btn btn-primary']) !!}
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