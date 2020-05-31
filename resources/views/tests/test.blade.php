test

@foreach($values as $value)
  <!-- {{}}はhtmlspecialcharsと同じ機能（XSS攻撃対策） -->
  {{$value->id}}<br>
  {{$value->text}}<br>
@endforeach