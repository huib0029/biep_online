@extends('layouts.admin')
@section('title')
    BIEPonline - Administrator panel
@endsection
@section('page-header','<i class="fa fa-random fa-fw"></i> Boeken nu in omloop')
@section('page-content')
<div class="col-sm-12">
  @section ('atable_panel_title','Boeken nu in omloop')
  @section ('atable_panel_body')
  @if (count($books_issued) == 0)
    Er zijn op dit moment geen boeken in omloop....
  @endif
      @if (count($books_issued) > 0)

  <table class="table table-condensed table-bordered table-striped">
  	<thead>
  		<tr>
        <th>Uitgifte ID</th>
        <th>Boek ID</th>
  			<th>ISBN nummer</th>
  			<th>Titel Boek</th>
        <th>Scholier ID</th>
        <th>Naam scholier</th>
        <th>Datum uitgifte</th>
        <th>(Verwachte) datum retour</th>
        <th>Status </th>
  		</tr>
  	</thead>
  	<tbody>
      @foreach ($books_issued as $book_issued)
      <tr>
  			<td>{{ $book_issued->id }}</td>
  			<td>{{ $book_issued->book_id }}</td>
  			<td>{{ $book_issued->book_isbn }}</td>
        <td>{{ $book_issued->book_title }}</td>
        <td>{{ $book_issued->student_id }}</td>
        <td>{{ $book_issued->student_name }}</td>
        <td>{{ $book_issued->date_out }}</td>
        <td>{{ $book_issued->date_in }}</td>
        <td></td>
      </tr>
      @endforeach
  	</tbody>
  </table>
  @endif
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
</div>


@stop
