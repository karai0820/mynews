@extends ('layouts.profile')
@section('title','My Profile')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>My Profile</h2>
      <form action = "{{action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
      @if (count($errors)>0)
        <ul>
        @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
       </ul>
       @endif
       
     <div class="form-group row">
        <label class="col-md-2" for="name">氏名</label>
        <div class ="col-md-10">
        <input type ='text' class ="form-control" name="name" value="{{old('name')}}"　id="name">
        </div>
     </div>
     <div class="form-group row">
        <label class="col-md-2" for= "gender">性別</label>
        <div class="col-md-10">
        男性
        <input type="radio" name="gender" value="male" id="gender" {{ old('gender')=='male' ? 'checked':''}}>
        <br>
        女性
        <input type="radio" name="gender" value="female" id="gender" {{old('gender')=='female' ? 'checked': ''}}>
        </div>
    </div>
    <div class="form-group row">
       <label class="col-md-2" for= "hobby">趣味</label>
        <div class ="col-md-10">
        <input type ="text" class="form-control" name="hobby" id="hobby" value="{{old('hobby')}}">
        </div>
    </div>
    <div class="form-group row">
       <label class="col-md-2" for= "introduction">自己紹介欄</label>
        <div class ="col-md-10">
       <textarea class="form-control" rows="20" name="introduction"{{old('introduction')}}></textarea>
        </div>
    </div>
    {{csrf_field()}}
    <input type="submit" class ="btn btn-primary" value="更新">
  </form>
</div>
  </div>
</div>
@endsection 