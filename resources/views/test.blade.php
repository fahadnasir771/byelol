<?php
// if(isset($_POST['submit']) || isset($_POST['justlogoff'])) {
//     echo "<pre>";
//     print_r($_POST);
//     die;
// }

?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="{{asset('images/fav.png')}}" rel="shortcut icon" />
    <title>byelol</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- //////////// --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/emoji.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />
{{-- //////////// --}}

<!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Courier Prime', monospace;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .score_1 {
            border: 1px solid #fff; width: 25%;
                                
        }
        .score_2 {
            border: 1px solid #fff;
            margin-top:2px;
            width: 25%;
        }
        .score_3 {
            border: 1px solid #fff;
            margin-top: 4px;
            width: 25%;
        }

        .position-ref {
            position: relative;
        }
        .margin_reference {
            margin-top: 300%;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .top-logo {
            display: inline-flex;
            position: absolute;
            height: 6rem;
            width: 9rem;
            left: 0%;
            right: 0;
            top: 8%;
            margin: auto;
        }
        #online_users{
            position: fixed;
            right: 10px;
            bottom: 10px;
            border: 1px #fff solid;
            display: inline-block;
            z-index: 999;
            padding: 2px 26px;
            color: #fff;
            border-radius: 20px;
        }

        .clock {
            margin-left : 1px;
            position: fixed;
            left: 10px;
            bottom: 10px;
            border: 1px #fff solid;
            display: inline-block;
            padding: 2px 26px;
            border-radius: 20px;
            color: white;
            /*letter-spacing: 5px;*/
        }
        
        .top_clock {
                margin-left: 61%;
                position: fixed;
                left: 10px;
                bottom: 62px;
                border: 1px #fff solid;
                display: inline-block;
                padding: 2px 26px;
                /*border-radius: 20px;*/
                color: white;
                width: 22%;
                letter-spacing: 6px;
                margin-bottom: -4.58%;
        }
        
        .top_clock2 {
                margin-left: 39%;
                position: fixed;
                left: 10px;
                bottom: 91px;
                border: 1px #fff solid;
                display: inline-block;
                padding: 2px 26px;
                /*border-radius: 20px;*/
                color: white;
                width: 22%;
                letter-spacing: 5px;
                margin-bottom: -6.45%;
        }
        
        .top_clock3 {
                margin-left: 17%;
                position: fixed;
                left: 10px;
                bottom: 120px;
                border: 1px #fff solid;
                display: inline-block;
                padding: 2px 26px;
                /*border-radius: 20px;*/
                color: white;
                width: 22%;
                letter-spacing: 6px;
                margin-bottom: -8.38%;
        }
        .curtian_next_time{
            margin-top:-100%;
        }
        .top_clock_title{
                margin-left: 38%;
                margin-bottom: -7%;

                position: fixed;
                left: 10px;
                bottom: 149px;
                /*border: 1px #fff solid;*/
                display: inline-block;
                padding: 2px 26px;
                border-radius: 20px;
                color: white;
                letter-spacing: 5px;
        }
        .top_score_heading {
                font-size:30px;
            }

        @media (max-width: 778px){
            .score_1 {
            border: 1px solid #fff; width: 33%;
                                
        }
        .score_2 {
            border: 1px solid #fff;
            margin-top:2px;
            width: 33%;
        }
        .score_3 {
            border: 1px solid #fff;
            margin-top: 4px;
            width: 33%;
        }
            #online_users, .clock{
                padding: 2px 8px;
                font-size: 10px;
                bottom: 15px;
            }
            .emoji-btn{
                top: 82%;
            }
        }
        .p{
            display: inline-flex;
            position: absolute;
            height: 20rem;
            width: 20rem;
            left: 0;
            right: 0;
            top:100%;
            /*border:0px solid black;*/
            margin: auto;
            background-color: transparent;
            border-radius: 500px;
            background-image: url("../public/images/fav.jpeg");
            background-repeat: no-repeat;
            background-size: 20rem;
        }
        .p.like{
            background-position: -6px -6px;
        }
        
        output#time {
            /*font-family: fantasy;*/
            font-size: 44px;
            margin-left: 37px;
            /*border: 1px solid white; */
            /*width: 204px;*/
            /*border-radius: 500px;*/
                font-size: 17px;
            font-weight: bold !important;
        }
        #time{
            align-self: end;
        }
        @media only screen and (min-width: 300px) and (max-width: 320px) {
            .top_score_heading {
                font-size:26px;
            }
            .score_1 {
            font-size: 13px;
        }
        .score_2 {
            font-size: 13px;
        }
        .score_3 {
            font-size: 13px;
        }
            .margin_reference {
            margin-top: 550%;
        }
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .curtian_next_time{
                margin-top: -50%;
            }
            .top_clock_title{
                margin-left: 8%;
                position: fixed;
                left: 10px;
                margin-bottom: -20%;

                bottom: 12%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                padding: 2px 0px;
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .top_clock {
                    margin-left: 64%;
                    position: fixed;
                    left: 10px;
                    bottom: 62px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -18.45%;
                    font-size: 13px;
            }
            
            .top_clock2 {
                    margin-left: 31%;
                    position: fixed;
                    left: 10px;
                    bottom: 91px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -27.45%;
                    font-size: 13px;
            }
            
            .top_clock3 {
                    margin-left: -2%;
                    position: fixed;
                    left: 10px;
                    bottom: 120px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -36.5%;
                    font-size: 13px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 340px) and (max-width: 360px) {
            .top_score_heading {
                font-size:26px;
            }
            .score_1 {
            font-size: 13px;
        }
        .score_2 {
            font-size: 13px;
        }
        .score_3 {
            font-size: 13px;
        }
            .margin_reference {
            margin-top: 550%;
        }
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{
                margin-left: 8%;
                margin-bottom: -20%;


                position: fixed;
                left: 10px;
                bottom: 12%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                /*padding: 2px 26px;*/
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .curtian_next_time{
                margin-top: -50%;
            }
            .top_clock {
                    margin-left: 64%;
                    position: fixed;
                    left: 10px;
                    bottom: 62px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -14.35%;
            }
            
            .top_clock2 {
                    margin-left: 31%;
                    position: fixed;
                    left: 10px;
                    bottom: 91px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -22.45%;
            }
            
            .top_clock3 {
                    margin-left: -2%;
                    position: fixed;
                    left: 10px;
                    bottom: 120px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -30.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 361px) and (max-width: 380px) {
            .top_score_heading {
                font-size:26px;
            }
            .score_1 {
            font-size: 13px;
        }
        .score_2 {
            font-size: 13px;
        }
        .score_3 {
            font-size: 13px;
        }
            .margin_reference {
            margin-top: 550%;
        }
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{
                margin-left: 8%;
                position: fixed;
                left: 10px;
                margin-bottom: -20%;
                bottom: 12%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                /*padding: 2px 26px;*/
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .curtian_next_time{
                margin-top: -50%;
            }
            .top_clock {
                    margin-left: 64%;
                    position: fixed;
                    left: 10px;
                    bottom: 62px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -15.15%;
            }
            
            .top_clock2 {
                    margin-left: 31%;
                    position: fixed;
                    left: 10px;
                    bottom: 91px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -22.85%;
            }
            
            .top_clock3 {
                    margin-left: -2%;
                    position: fixed;
                    left: 10px;
                    bottom: 120px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -30.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 401px) and (max-width: 420px) {
            .top_score_heading {
                font-size:26px;
            }
            .score_1 {
            font-size: 13px;
        }
        .score_2 {
            font-size: 13px;
        }
        .score_3 {
            font-size: 13px;
        }
            .margin_reference {
            margin-top: 550%;
        }
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{
                margin-bottom: -20%;
                margin-left: 8%;
                position: fixed;
                left: 10px;
                bottom: 12%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                /*padding: 2px 26px;*/
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .top_clock {
                    margin-left: 64%;
                    position: fixed;
                    left: 10px;
                    bottom: 62px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -16.35%;
            }
            .curtian_next_time{
                margin-top: -60%;
            }
            .top_clock2 {
                    margin-left: 31%;
                    position: fixed;
                    left: 10px;
                    bottom: 91px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -23.45%;
            }
            
            .top_clock3 {
                    margin-left: -2%;
                    position: fixed;
                    left: 10px;
                    bottom: 120px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -30.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 421px) and (max-width: 450px) {
            .top_score_heading {
                font-size:26px;
            }
            .score_1 {
            font-size: 13px;
        }
        .score_2 {
            font-size: 13px;
        }
        .score_3 {
            font-size: 13px;
        }
            .margin_reference {
            margin-top: 550%;
        }
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{


                margin-left: 8%;
                position: fixed;
                left: 10px;
                bottom: 12%;
                margin-bottom: -20%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                /*padding: 2px 26px;*/
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .top_clock {
                    margin-left: 64%;
                    position: fixed;
                    left: 10px;
                    bottom: 62px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -16.35%;
            }
            .curtian_next_time{
                margin-top: -60%;
            }
            .top_clock2 {
                    margin-left: 31%;
                    position: fixed;
                    left: 10px;
                    bottom: 91px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -23.45%;
            }
            
            .top_clock3 {
                    margin-left: -2%;
                    position: fixed;
                    left: 10px;
                    bottom: 120px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 2px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -30.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 600px) and (max-width: 780px) {
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{
                margin-bottom: -7%;
                margin-left: 30%;
                position: fixed;
                left: 0px;
                bottom: 15%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                padding: 10px 20px;
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .top_clock {
                    margin-left: 66%;
                    position: fixed;
                    left: 10px;
                    bottom: 130.15px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -16.35%;
            }
            .curtian_next_time{
                margin-top: -95%;
            }
            .top_clock2 {
                    margin-left: 33%;
                    position: fixed;
                    left: 10px;
                    bottom: 184.5px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -23.45%;
            }
            
            .top_clock3 {
                    margin-left: 0%;
                    position: fixed;
                    left: 10px;
                    bottom: 246.5px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -31.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        
        @media only screen and (min-width: 800px) and (max-width: 1100px) {
            #time{
              align-self: center;
              /*padding: 0px 29%;*/
                  margin-left: 2px !important;
            }
            .top_clock_title{
                margin-left: 36%;
                position: fixed;
                left: 0px;
                bottom: 15%;
                margin-bottom: -7%;
                /*border: 1px #fff solid;*/
                display: inline-block;
                padding: 10px 20px;
                /*border-radius: 20px;*/
                color: white;
                /*letter-spacing: 5px;*/
                /*margin-bottom: -15%;*/
            }
            .top_clock {
                    margin-left: 66%;
                    position: fixed;
                    left: 10px;
                    bottom: 180.15px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -16.35%;
            }
            .curtian_next_time{
                margin-top: -95%;
            }
            .top_clock2 {
                    margin-left: 33%;
                    position: fixed;
                    left: 10px;
                    bottom: 252.5px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -23.45%;
            }
            
            .top_clock3 {
                    margin-left: 0%;
                    position: fixed;
                    left: 10px;
                    bottom: 335.5px;
                    border: 1px #fff solid;
                    display: inline-block;
                    padding: 15px 0px;
                    /*border-radius: 20px;*/
                    color: white;
                    width: 33%;
                    letter-spacing: -2px;
                    margin-bottom: -31.5%;
                    font-size: 16px;
                    /*text-align: right;*/
            }
        }
        

    </style>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body style="overflow:hidden;">
<div class="flex-center position-ref" style="" id="app">
 
    <!-- <div class="curtain">
        <div class="curtain__wrapper">

            <!--/////////////////////////////
            <input type="checkbox" id="check_box" checked>
            <div class="curtain__panel curtain__panel--left d-flex justify-content-center align-items-center">
                <div id="username_form" style="display:none">
                    <form style="text-align: center;" class="username_form">
                      <!--<div class="form-group">
                        <label for="exampleInputEmail1">Enter Username to Compete for Longest Time</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Type Here..." autofocus>
                      <!--</div>-->
                      <!--<button style="margin-top: 1%;padding: 6px;font-size: 16px;line-height: 18px;" type="button" class="btn btn-lg btn-outline-dark" onclick="save_username()">Submit</button>-->
                        <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff_1" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                        <!--    Submit-->
                        <!--</button>
                    </form>
                    <label for="exampleInputEmail1" class="curtain_or_label">OR</label>
                    <br>
                    
                    <button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" class="curtian_next_next_time btn btn-lg btn-outline-dark" name="justlogoff">
                        Just Log Off
                    </button>
                </div>
                    
                <div id="curtian_panssssel_below" style="text-align: center !important;">
                    <!--<button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                    <!--    click here-->
                    <!--    <p style="margin:0;padding:0;">to log off</p>-->
                    <!--</button>
                    <label for="exampleInputEmail1" style="display:none">Enter Username to Compete for High Score</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username" style="display:none" placeholder="Type Here...">
                    <button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" style="display:none" class="curtian_next_time btn btn-lg btn-outline-dark" name="submit">
                        Submit
                    </button>
                    <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" style="display:none" class="curtian_next_next_time btn btn-lg btn-outline-dark" >-->
                    <!--    Submit-->
                    <!--</button>
                </div>
                
                    
            </div> <!-- curtain__panel -->
            <!--/////////////////////////////-->


            <!-- curtain__panel 
            <div class="curtain__content d-flex flex-column justify-content-between">
               <output  style="" id="time" class="presense_time"></output>
                <div class="particlesContainer">
                    <div class="top-logo">
                    </div>

                    <div class="" style="border:none; background:none">
                        <!--emoji-btn-->
                        <!--<h2>Top 3 High Score</h2>
                        
                        <br>
                        <!--<div id="MyClockDisplay" class="clock" >high score : 5h 23m</div>
                        <div class="margin_reference" style="width: 33%;margin-left: 25%;">
                            <img id="emoji" onclick="emoji_store()" id="runemoji" class="top_score_1" style="cursor:pointer" width="100%" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/face-without-mouth_1f636.png" alt="emoji">
                        </div>
                        <div>
                            <div id="MyClockDisplay1" class="top_clock_title" style=""><h2>Top 3 Score</h2></div>
                            <div id="top_score_1" class="top_clock3" ></div>
                            <div id="top_score_2" class="top_clock2" ></div>
                            <div id="top_score_3" class="top_clock" ></div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- FIXED IMG THAT TRIGGER LIVE EMOJI-->
            <!--container ends here
        </div>
        <div class="curtain__panel curtain__panel--right">

        </div>

        <!--<div id="online_users">-->
        <!--    0-->
        <!--</div>-->

        <!-- curtain__panel 
    </div> -->

    <div class="curtain">
        <div class="curtain__wrapper">

            <!--/////////////////////////////-->
            <input type="checkbox" id="check_box" checked>
            <div class="curtain__panel curtain__panel--left d-flex justify-content-center align-items-center">
                <div id="username_form" style="display:none">
                    <form style="text-align: center;" class="username_form">
                      <!--<div class="form-group">-->
                        <label for="exampleInputEmail1">Enter Username to Compete for Longest Time</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Type Here..." autofocus>
                      <!--</div>-->
                      <!--<button style="margin-top: 1%;padding: 6px;font-size: 16px;line-height: 18px;" type="button" class="btn btn-lg btn-outline-dark" onclick="save_username()">Submit</button>-->
                        <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff_1" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                        <!--    Submit-->
                        <!--</button>-->
                    </form>
                    <label for="exampleInputEmail1" class="curtain_or_label">OR</label>
                    <br>
                    <button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" class="curtian_next_next_time btn btn-lg btn-outline-dark" >
                        Just Log Off
                    </button>
                </div>
                    
                <div id="curtian_panssssel_below" style="text-align: center !important;">
                    <!--<button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                    <!--    click here-->
                    <!--    <p style="margin:0;padding:0;">to log off</p>-->
                    <!--</button>-->
                    <label for="exampleInputEmail1" style="display:none">Enter Username to Compete for High Score</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="username" style="display:none" placeholder="Type Here...">
                    <button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" style="display:none" class="curtian_next_time btn btn-lg btn-outline-dark" >
                        Submit
                    </button>
                    <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" style="display:none" class="curtian_next_next_time btn btn-lg btn-outline-dark" >-->
                    <!--    Submit-->
                    <!--</button>-->
                </div>
                
                    
            </div> <!-- curtain__panel -->
            <!--/////////////////////////////-->


            <!-- curtain__panel -->
            <div class="curtain__content d-flex flex-column" style="padding-bottom: 5px;">
               <output  style="" id="time" class="presense_time"></output>
                <div class="particlesContainer">
                    <div class="top-logo">
                    </div>

                    <div class="" style="">
                        <!--emoji-btn-->
                        <!--<h2>Top 3 High Score</h2>-->
                        
                        <br>
                        <!--<div id="MyClockDisplay" class="clock" >high score : 5h 23m</div>-->
                        <div class="justify-content-center" style="" >
                            <img id="emoji" onclick="emoji_store()" id="runemoji" class="top_score_1" style="cursor:pointer; margin-right:auto; width: 38px" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/face-without-mouth_1f636.png" alt="emoji">
                        </div>

                        <div style="">
                            <div id="" class="top_score_heading" style=""><h2>Top 3 Score</h2></div>
                            <div class="d-flex justify-content-center" style="width: 100vw;">
                                <div id="top_score_1" class="score_1" style=""></div>
                                <div id="top_score_2" class="score_2" style=""></div>
                                <div id="top_score_3" class="score_3" style=""></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- FIXED IMG THAT TRIGGER LIVE EMOJI-->
            <!--container ends here-->
        </div>
        <div class="curtain__panel curtain__panel--right">

        </div>

        <!--<div id="online_users">-->
        <!--    0-->
        <!--</div>-->

        <!-- curtain__panel -->
    </div>
 
</div>

<button id="audioButton" style="display:none;"></button>
<!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
<script>document.addEventListener("touchstart", function(){}, true);</script>
<!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
<script type="text/javascript">
            $.ajax({
                method:'get',
                url:'{{route('emoji.get_top_3')}}',
                data:{_token:'{{csrf_token()}}'},
                success:function(response){
                    var top_scores = response.top3;
                    if(top_scores.length == 3){
                        top_1 = top_scores[0];
                        top_2 = top_scores[1];
                        top_3 = top_scores[2];
                        $('#top_score_1').html(top_1['username']+' <br> '+top_1['compete_time']);
                        $('#top_score_2').html(top_2['username']+' <br> '+top_2['compete_time']);
                        $('#top_score_3').html(top_3['username']+' <br> '+top_3['compete_time']);    
                    }
                }
            });
            
            // function secondsToDhms(seconds) {
            //   seconds = Number(seconds);
            //   var d = Math.floor(seconds / (3600*24));
            //   var h = Math.floor(seconds % (3600*24) / 3600);
            //   var m = Math.floor(seconds % 3600 / 60);
            //   var s = Math.floor(seconds % 60);
            
            //   var dDisplay = d > 0 ? d + (d == 1 ? " day, " : " days, ") : "";
            //   var hDisplay = h > 0 ? h + (h == 1 ? " hour, " : " hours, ") : "";
            //   var mDisplay = m > 0 ? m + (m == 1 ? " minute, " : " minutes, ") : "";
            //   var sDisplay = s > 0 ? s + (s == 1 ? " second" : " seconds") : "";
            //   return dDisplay + hDisplay + mDisplay + sDisplay;
            // }
    var emoji_click_count = 0;
    var emoji_click = 0;

    window.onload=function(){
        setTimeout(function(){
            $('#logoff').fadeIn();
        }, 1600);
        $('#curtian_header').css('display','none');
        $('.curtian_yes').css('display','none');
        $('#username').val('');
        $('#username_form').slideDown();
        // $('#curtian_panel_below').slideUp();
        
        $('.curtian_next_time').html('Submit');
        // $('.curtian_next_time').css('margin-top','-100%');
        
        $('.curtian_next_next_time').html('Just Log Off');
        $('.curtian_next_next_time').css('margin-top','5%');
        $('.curtian_next_next_time').css('margin-left','35%');
        $('.curtain_or_label').css('margin-top','5%');
        $('.curtain_or_label').css('margin-left','50%');
        
     
    };



    function logoff(){
        starttest();
    // var timer = new Timer();
        // var reference = 1;
        var start_timer = 1;
        // $('.curtian_header').css('display','none');
        $('#curtian_header').css('display','none');
        $('.curtian_yes').css('display','none');
        $('.username_form').css('display','none');
        $('.curtian_next_time').css('display','none');
        $('.curtian_next_next_time').css('display','none');
        setTimeout(function(){ $('#check_box').prop('checked', false);
            document.getElementById('logoff').style.display = 'none';
        }, 1000);

    }
    
    // function befor_logoff(){
        // setTimeout(function(){ $('#check_box').prop('checked', false);
        //     document.getElementById('logoff').style.display = 'none';
        // }, 1000);
        // $('#username').val('');
        // $('#username_form').slideDown();
        // $('#curtian_panel_below').slideUp();
        
        // $('#curtian_header').css('display','none');
        // $('.curtian_yes').css('display','none');
        
        // $('.curtian_next_time').html('Submit');
        // $('.curtian_next_time').css('margin-top','42%');


    // }
    
    function save_username(){
        var inputVal = document.getElementById("username").value;
    }

    $(function(){
        $("#logoff").on("click", function(){
           $("#front").slideUp();

            setTimeout(function(){
                // showTime();

                //Start
                setTimeout(function(){
                    $('.top-logo').html('');
                }, 45000)
                // End

            }, 7500);

            $.ajax({
                method:'get',
                url:'{{route('user.register')}}',
                data:{_token:'{{csrf_token()}}'},
                success:function(response){}
            });


        });

    });

    // Emoji
    function emoji_store(){
        emoji_click_count++;
        emoji_click++;
        runemoji();

        $.ajax({
            method:'get',
            url:'{{route('emoji.store')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){}
        });

        if(15 == emoji_click_count){
            setTimeout(function(){
                $('#top_logo_image').css({
                    'display':'none'
                });

                $('.top_broken_logo_image').css({
                    'display':'block'
                });
            }, 500);
        }
        if(30 == emoji_click){
            emoji_click=0;
            if(10000 != emoji_speed_end){
                //20 randomtime
                //emoji_speed_start += 1000;
                emoji_speed_end += 500;
            }else{
                //emoji_speed_start = 0;
                emoji_speed_end = 1000;
            }
            $(".particlesContainer").append("<span class='p like'></span>");
            $(".p").toArray().forEach(function(p){
                $(p).animate({
                    left:getRadInteger(0,$("body").width() - 50),
                    right:getRadInteger(0,$("body").width() - 50)
                },getRadInteger(5,15),function(){
                    $(p).animate({
                        top:-100+"%",
                        opacity:0
                    },getRadInteger(emoji_speed_start,emoji_speed_end),function(){
                        $(p).remove();
                    });/*inside animation*/
                });
            }); /*first animation*/
        }
    }

    var onl = Math.floor(Math.random() * 99) + 10;
    window.setInterval(function(){
        $.ajax({
            method:'get',
            url:'{{route('emoji.get')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){

		// var onlus = onl + response.online_users ;
                $('#online_users').html(onl+' million logged off');

                var count = response.emoji - response.my_emoji;
                if (count > 0) {
                    for (var i = count; i > 0; i--) {
                        runemoji();
                    }
                }
            }
        });
    }, 500);
    // Emoji End

    var getRadInteger=function(min,max){
        return Math.floor(Math.random()*(max-min+1))+min;
    }

    var emoji_speed_start = 1000;
    var emoji_speed_end = 1000;

    function runemoji(){
        if(10000 != emoji_speed_end){
            //20 randomtime
            //emoji_speed_start += 1000;
            emoji_speed_end += 500;
        }else{
            //emoji_speed_start = 0;
            emoji_speed_end = 1000;
        }
        //console.log('start='+emoji_speed_start);
        //console.log('end='+emoji_speed_end);

        $(".particlesContainer").append("<span class='particle like'></span>");

        $(".particle").toArray().forEach(function(particle){
            $(particle).animate({
                left:getRadInteger(0,$("body").width() - 50),
                right:getRadInteger(0,$("body").width() - 50)
            },getRadInteger(5,15),function(){
                $(particle).animate({
                    top:-100+"%",
                    opacity:0
                },getRadInteger(emoji_speed_start,emoji_speed_end),function(){
                    $(particle).remove();
                });/*inside animation*/
            });
        }); /*first animation*/
    }
</script>

<script type="text/javascript">
    window.addEventListener('beforeunload', (event) => {
        // Cancel the event as stated by the standard.
        event.preventDefault();
        $.ajax({
            method:'get',
            url:'{{route('user.logout')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){
                console.log('Leaving 2..........');
            }
        });
    });
</script>

<script type="text/javascript">
    $(window).bind('beforeunload', function(){
        $.ajax({
            method:'get',
            url:'{{route('user.logout')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){
                console.log('Leaving 1..........');
            }
        });
        var username = document.getElementById("username").value;
        if(username.length > 0 ){
            var completed_time =document.getElementById("time").value;
            $.ajax({
                method:'get',
                url:'{{route('emoji.completed_time')}}',
                data:{_token:'{{csrf_token()}}', username : username, completed_time:completed_time},
                success:function(response){
                    console.log(response);
                }
            });
        }
        
        
    });
</script>

<script type="text/javascript">
    if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
        $.ajax({
            method:'get',
            url:'{{route('user.logout')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){
                console.log('Leaving 3..........');
            }
        });
    }
</script>

<script type="text/javascript">
    


// window.raf = (function() {
//   return window.requestAnimationFrame ||
//     window.webkitRequestAnimationFrame ||
//     window.mozRequestAnimationFrame ||
//     function(callback) {
//       window.setTimeout(callback, 1000 / 60);
//     };
// })();

function Timer() {
  this.start();
  return this;
};

Timer.prototype = {
  /**
   * Starts the timer
   * @chainable
   */
  start: function() {
    this.startTime = Date.now();
    return this;
  },

  /**
   * Returns an object of the elapsed time
   * @return {Object} { hours, minutes, seconds }
   */
  getElapsedTime: function() {
    var hours = 0;
    var minutes = 0;
    var seconds = parseInt((Date.now() - this.startTime) / 1000);

    // check if the elapsed time in seconds is more than a minute
    // and convert the raw seconds to minutes & seconds
    if (seconds > 59) {
      minutes = Math.floor(seconds / 60);
      seconds = seconds - minutes * 60;
    }

    // check if the elapsed time in minutes is more than an hour
    // and convert the raw seconds to hours, minutes & seconds
    if (minutes > 60) {
      hours = Math.floor(seconds / 3600);
      minutes = seconds - hours * 60;
      seconds = seconds - minutes * 3600;
    }

    return {
      hours: pad(hours, 2),
      minutes: pad(minutes, 2),
      seconds: pad(seconds, 2)
    };
  }
};

function pad(number, length) {
  var str = '' + number;
  while (str.length < length) {
    str = '0' + str;
  }
  return str;
}
//  var timer = new Timer();
var output = document.getElementById('time');

function starttest(){
  var counter = 0;
  var timer = new Timer();

  setInterval(function() {
    // counter++;
    //   output.textContent = timer;
    var time = timer.getElapsedTime();
     output.textContent = time.hours + ':' + time.minutes + ':' + time.seconds;
    
    
  }, 1000);
    
};




// (function update() {
//      var time = timer.getElapsedTime();
//      output.textContent = time.hours + ':' + time.minutes + ':' + time.seconds;
//      //  console.log(time);
    
//   raf(update);
// })();

</script>
</body>
</html>
