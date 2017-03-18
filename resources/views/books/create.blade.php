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

                        </div>

                        <div class="panel-body">

                            {!! Form::open(array('route'=>'books_store' , 'class' => 'form form-horizontal')) !!}

                            <div class="form-group">
                                {!! Form::label('book_isbn', 'Vul het ISBN in') !!}
                                {!! Form::text('book_isbn',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_title', 'Vul de titel in') !!}
                                {!! Form::text('book_title',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_author', 'Vul de auteur in') !!}
                                {!! Form::text('book_author',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_dis', 'Vul de beschijving in') !!}
                                {!! Form::textarea('book_dis',null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('book_colorcat', 'Kies de categorie') !!}
                                {!! Form::select('size', array('Groen' => 'groen', 'Blauw' => 'blauw', 'Paars' => 'paars',)) !!}
                            </div>

                            <div class="form-group">
{{--                                {!! Form::button('Toevoegen',['type'=>'submit','class'=>'btn btn-primary']) !!}--}}
                                {!! Form::submit('Contact Us!',array('class'=>'btn btn-primary')) !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>

                    {{--@if(isset($errors) && count($errors) > 0)
                        <ul class="aler alert-danger">
                            @foreach($errors->all() as $errors)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif--}}

                </div>
            </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
    </div>




@endsection