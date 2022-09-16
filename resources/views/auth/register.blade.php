@extends('base')
@section('content')
<div class="container">
    <div class="login-box">
        <h2>Register User</h2>
        <form action="{{'/register'}}" method="POST">
            {{csrf_field()}}
          <div class="user-box">
            <input type="text" name="name"  id="name" class="form-control">
            <label>Name</label>
            @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
          <div class="user-box">
            <input type="email" name="email"  id="email" class="form-control">
            <label>Email</label>
            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" class="form-control">
            <label>Password</label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
          <div class="user-box">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            <label>Confirm Password</label>
            @error('password')
            <p class="text-danger">{{$message}}</p>
        @enderror
          </div>
            <a href="{{'/log'}}">Already have an account?</a>
          <button class="btn btn-success btn-sm" type="submit">
            Submit
          </button>
        </form>
      </div>
</div>
@endsection
<style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#ff11e3, #2b00ff);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: rgb(2, 218, 247);
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 5px 0;
  font-size: 12px;
  color: rgb(2, 218, 247);
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid rgb(2, 218, 247);
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: rgb(2, 218, 247);
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bcf403;
  font-size: 12px;
}

</style>
