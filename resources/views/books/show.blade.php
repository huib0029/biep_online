@extends('layouts.admin')

@section('title')
    BIEPonline - Boeken Toevoegen <i class="fa fa-book"></i> <i class="fa fa-long-arrow-right"></i>
@endsection

@section('page-header')
    Boeken Toevoegen
@endsection

@section('page-content')
    <div class="col-sm-12">
        @section ('atable_panel_title','{{ $book->book_title }}')
        @section ('atable_panel_body')
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-0">
                        <div class="form-group">

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






