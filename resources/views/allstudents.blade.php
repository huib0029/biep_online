@extends('layouts.admin')
@section('title')
    BIEPonline - Administrator panel
@endsection
@section('page-header')
<i class="fa fa-mortar-board fa-fw"></i> Alle geregistreerde scholieren
@endsection
@section('page-content')
<div class="col-sm-12">
  @section ('atable_panel_title','Scholieren die nu geregistreerd staan in het BIEPonline systeem ')
  @section ('atable_panel_body')
  @if (count($students) == 0)
      <p>Geen studenten gevonden.</p>
        @else()
  <table class="table table-condensed table-bordered table-striped table-responsive small">
  	<thead>
  		<tr>
        <th>Scholier ID</th>
        <th>Voornaam</th>
        <th>Middelnaam</th>
  			<th>Achternaam</th>
  			<th>E-mail adres</th>
        <th>E-mail adres (ouders)</th>
        <th>Telefoonnummer (ouders)</th>
        <th>Geboortedatum</th>
        <th>Boeken in gebruik (in omloop) <i class="fa fa-book fa-fw"></i></th>
  		</tr>
  	</thead>
  	<tbody>
        <tr> @foreach($students as $student)
        <td>{{ $student->student_id }}</td>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->middlename }}</td>
        <td>{{ $student->last_name }}</td>
        <td>{{ $student->email_id }}</td>
        <td>{{ $student->email_parents }}</td>
        <td>{{ $student->tel_parents }}</td>
        <td>{{ $student->birth_date }}</td>
        <td>{{ $student->books_issued }}</td>
            @endforeach
            @endif
    </tr>
  	</tbody>
  </table>
  @endsection
  @include('widgets.panel', array('header'=>true, 'as'=>'atable'))
</div>



@stop
