<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: monospace;
    }
    form {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    form .elements h1 {
        text-align: center;
        padding: 15px 0 15px 0;
        color:black;
        font-size: 30px;
        font-family: monospace;
    }
    form .elements {
        border: 1px solid gray;
        box-shadow: 5px 5px 15px black;
        height: 400px;
        width: 300px;
    }
    .elements {
        text-align: center;
        padding: 75px 0 0 0;
        
    }
    .elements > * {
        margin: 10px auto;
        display: block;
    }
    .input-field {
        border: 1px solid gray;
        height: 30px;
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
    }
    .input-field input {
        border: none;
        outline: none;
        height: 25px;
        width: 150px;
    }
    .input-field label {
        padding: 0 10px 0 10px;
    }
    .input-field label i {
        color: gray;
    }
    button.btn {
        height: 30px;
        width: 200px;
        border-radius: 30px;
        border: none;
        background: #12abf7;
        color:white;
        
    }
    .sign-up {
        padding: 18px 0 0 0;
    }
    .sign-up a {
        color: black;
        text-decoration: none;
        font-weight: 950;
        cursor: pointer;
}
    </style>

  </head>
  <body>

  <form action="{{ route('login')}}" method="post">
    @csrf
    <div class="elements">
    <h1>Login</h1>
    @if(Session::has('error'))
        <div class="alert alert-danger pl-2 pr-2">
            {{ Session::get('error') }}
        </div>
    @endif
    <!-- Email -->
    <div class="input-field">
      <label for="#"><i class="fa-solid fa-envelope"></i></label>
      <input type="email" name="email" placeholder="Email">
    </div>
    <!-- Password -->
    <div class="input-field">
      <label for="#"><i class="fa-solid fa-lock"></i></label>
      <input type="password" name="password" placeholder="Password">
    </div>
    <!-- Remember -->
    <div class="rem">
    <input type="checkbox" value="checkbox"> Remember me </div>
    <!-- submit -->
    <button type="submit" class="btn">Login</button>
    <div class="sign-up">
      Don't have an account <a href="sign.html">Sign up</a>
    </div>
  </div>
  </form>
        
  </body>
</html>