@extends('layouts.app')

<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
    svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>
<form action="find" method="POST">
    @csrf
    <input type="text" name="input" value="{{ $input ?? '' }}">
    <input type="submit" value="見つける">
</form>

{{ $contacts->links() }}
<table>
  <tr>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>お問い合わせの種類</th>
    <th></th>
  </tr>
  @foreach ($contacts as $contact)
  <tr>
    <td>{{$contact->first_name}}</td>
    <td>{{$contact->gender}}</td>
    <td>{{$contact->email}}</td>
    <td>{{$contact->type}}</td>
     <td>
            <button>
                <div>詳細</div>
            </button>
        </td>
  </tr>
  @endforeach
  
</table>

@endsection