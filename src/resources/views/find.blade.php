@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'find.blade.php')

@section('content')



@if(isset($item))
  <table>
    <tr>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>お問い合わせの種類</th>
      <th></th>
    </tr>
    @foreach($item as $contact)
      <tr>
        <td>{{ $contact->first_name }}</td>
        <td>{{ $contact->gender }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->type }}</td>
        <td>
            <button>
                <div>詳細</div>
            </button>
        </td>
      </tr>
    @endforeach
  </table>
@endif

@endsection