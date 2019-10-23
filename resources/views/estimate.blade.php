@extends('layouts.master')

@section('title', 'Estimate Nav-Bar')

@section('content')

<div id="container">
        <div>
            <button class="close navM"><span>
                    <i class="fa fa-times"></i>
                </span></button>
        </div>
        <div>
            <p class="nav cEstimate" id="cre">Create Estimate</p>
        </div>
        <div>
            <input class="disabled" id="ext" type="button" value="NEXT">
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



@endsection

@section('styles')
<style>
        * {
            margin-right: 0px;
            margin-left: 0px;
            font-family: Ubuntu;
        }
        /*navbar css*/
        #container {
            display: grid;
            grid-template-columns: 1fr 8fr 2fr;
        }
        #container div {
            box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
            outline: none;
            height: 60px;
        }
        #container p {
            justify-content: center;
            margin-top: 15px;
            font-style: normal;
            font-weight: bold;
            font-size: 1.3em;
            color: #323A43;
        }
        div>#ext {
            background: rgba(207, 204, 204, 0.4);
            font-size: 24px;
            font-weight: bold;
            justify-content: center;
            border: none;
            color: white;
            width: 100%;
            height: 60px;
            outline: none;
            /*added outline none*/
        }
        div>#ext:hover {
            background: #0ABAB5;
        }
        div>.close {
            outline: none;
        }
        .close {
            color: #C4C4C4;
            width: 100%;
        }
        .navM i {
            padding-top: 15px;
        }
        /*end of nav bar*/
        @media (max-width: 976px) {
            div>#ext {
                font-size: 15px;
            }
        }
        @media (max-width: 992px) {
            #container p {
                font-size: 19.5px;
                margin-top: 9px;
            }
            div>#ext {
                font-size: 20px;
            }
        }
        @media (max-width: 767px) {
            #container p {
                margin-top: 5px;
           }
            #container p {
                font-size: 17.5px;
                margin-top: 12px;
            }
            div>#ext {
                font-size: 18px;
            }
        }
        @media (max-width: 576px) {
            #container p {
                font-size: 16px;
                margin-top: 12px;
            }
            div>#ext {
                font-size: 15px;
            }
        }
    </style>
  @endsection