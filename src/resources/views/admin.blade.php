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
<form action="{{ url('/find') }}" method="POST">
    @csrf

    <input type="text" name="input" value="{{ $input ?? '' }}" placeholder="名前やメールアドレスを入力してください">
    <input type="submit" value="検索">

      <select name="search_option">
      <option value="all">全て</option>
      <option value="gender">性別</option>
      <option value="type">お問い合わせ種類</option>
      <!-- 他の検索オプションを追加 -->
  </select>

    <select name="gender_option">
        <option value="">性別</option>
        <option value="male">男性</option>
        <option value="female">女性</option>
        <option value="other">その他</option>
    </select>

     <select name="type_option">
      <option value="">お問い合わせの種類</option>
      <option value="inquiry_type_1">商品のお届けについて</option>
      <option value="inquiry_type_2">商品の交換について</option>
      <option value="inquiry_type_3">商品トラブル</option>
      <option value="inquiry_type_4">ショップへのお問い合わせ</option>
      <option value="inquiry_type_5">その他</option>
      <!-- 他のお問い合わせ種類を追加 -->
  </select>

    <!-- カレンダー入力（日付ベースの検索） -->
    <input type="date" name="date" value="{{ date('Y-m-d') }}" required>
    <input type="submit" value="検索">
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