@extends('layouts.app')

@section('styles')
    <style>
        :root {
    --text-color: #262626;
    --border-color: #C4C4C4;
    --lancer-secondary-blue: #0ABAB5;
  }

  * {
    box-sizing: inherit;
    font-family: Ubuntu, sans-serif;
  }

  body,
  html {
    margin: 0;
    border: 0;
    padding: 0;
    box-sizing: border-box;
  }

  header {
    height: 98px;
    width: 100%;
    display: flex;
    align-items: center;
    padding: 0 64px;
  }

  @media only screen and (max-width: 566px) {
    header {
      padding: 0 32px;
    }
  }

  .form {
    max-width: 566px;
    padding: 32px;
    margin: auto;
    margin-top: 32px;

    border: 1px solid var(--border-color);
    border-radius: 6px;
  }

  @media only screen and (max-width: 566px) {
    .form {
      border: none;
    }
  }

  .form h4 {
    font-size: 2em;
    text-align: center;
    margin: 0 0 14px 0;
  }

  .form p {
    font-size: 1.15em;
    color: var(--text-color);
    margin: 0 0 24px 0;
  }

  form label {
    display: block;
    font-size: 1em;
    color: var(--text-color);
    margin-bottom: 8px;
  }

  .fields {
    margin-bottom: 16px;
  }

  input {
    width: 100%;
    display: block;
    height: 60px;
    outline: none;

    border-radius: 6px;
    border: 1px solid var(--border-color);
    padding: 21px;
    font-size: 1em;
  }

  input[type='submit'] {
    background-color: var(--lancer-secondary-blue);
    color: white;
    font-size: 1.15em;
    font-weight: bold;
    line-height: 1em;
    border: none;
  }
    </style>
@endsection

@section('content')
    
<header>
    <a href="" class="navbar-brand"><img
            src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570531368/Lancers_evgrmc.png"
            alt="logo"></a>
</header>
<div class="form">
    <h4>Create Password</h4>
    <p>Create a password to get access to all the goodies that we have to offer</p>
    <form action="">
        <div class="fields">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="fields">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation">
        </div>
        <input type="submit" value="Create Password">
    </form>
</div>


@endsection