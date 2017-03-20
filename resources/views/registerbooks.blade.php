@extends('layouts.admin')

@section('title')
    BIEPonline - Administrator panel
@endsection

@section('page-header')
    <i class="fa fa-th-list fa-fw"></i> Geregistreerde Boeken
@endsection

@section('page-content')

    {{--Searchbar and button.
    Not connected to database yet! (delete if done)--}}
    <div class="row">
        <div class="col-lg-6">
            <!-- Add <code>.form-search</code> to the form and <code>.search-query</code> to the <code>input</code> for an extra-rounded text input. /!-->
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
            </div>
        </div>

                {{-- Dropdown menu and checkboxes in fitting colours. --}}
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                    <p style="color:black"</p>Zwart
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                    <p style="color:red"</p>Rood
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                    <p style="color:green"</p>Groen
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                    <p style="color:blue"</p>Blauw
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                                <label class="onoffswitch-label" for="myonoffswitch">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                    <p style="color:yellow"</p>Geel
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




@endsection
