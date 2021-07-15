@php

@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link href="{{ asset('images/fav.png') }}" rel="shortcut icon" />
    <title>byelol</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    {{-- //////////// --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emoji.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" />
    {{-- //////////// --}}
    <!-- Styles -->
    <style>
        #snoAlertBox {
            /*position:absolute;*/
            z-index: 1400;
            top: 2%;
            right: 4%;
            margin: 0px auto;
            text-align: center;
            display: none;
        }
        .curtain__content {
            color: #838383 !important;
        }
        .score_1,
        .score_2,
        .score_3,
        .score_4,
        .score_5,
        .score_6 {
            border: none !important;
            border-radius: 0px !important;
            padding: 15px 0;
            text-align: center;
            background: linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%);
            background-position: top, right, bottom, left;
            background-repeat: repeat-x, repeat-y;
            background-size: 12px 1px, 1px 12px;
            -webkit-background: linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%);
            -webkit-background-position: top, right, bottom, left;
            -webkit-background-repeat: repeat-x, repeat-y;
            -webkit-background-size: 12px 1px, 1px 12px;
            -moz-background: linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%);
            -moz-background-position: top, right, bottom, left;
            -moz-background-repeat: repeat-x, repeat-y;
            -moz-background-size: 12px 1px, 1px 12px;
            -o-background: linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(to right, #838383 50%, rgba(255, 255, 255, 0) 0%), linear-gradient(#838383 50%, rgba(255, 255, 255, 0) 0%);
            -o-background-position: top, right, bottom, left;
            -o-background-repeat: repeat-x, repeat-y;
            -o-background-size: 12px 1px, 1px 12px;
        }
        .top_score_1 {
            margin-bottom: 15px;
        }
        .score_2 {
            background-position: top, right, bottom, left !important;
            -webkit-background-position: top, right, bottom, left !important;
            -moz-background-position: top, right, bottom, left !important;
            -o-background-position: top, right, bottom, left !important;
        }
        .slidecontainer {
            width: 50%;
        }
        .sliderr {
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            width: 100%;
            height: 10px;
            border-radius: 10px;
            background: #dde4ff;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            -moz-transition: .2s;
            -o-transition: .2s;
            transition: opacity .2s;
        }
        .sliderr:hover {
            opacity: 1;
        }
        .sliderr::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            border-radius: 20px;
            height: 20px;
            background: #4066f0;
            cursor: pointer;
        }
        .sliderr::-moz-range-thumb {
            width: 20px;
            border-radius: 20px;
            height: 20px;
            cursor: pointer;
        }
        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #3a3a3a;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgb(232 232 232);
        }
        #username-p {
            margin-bottom: 0;
        }
        * {
            overflow: hidden !important;
        }
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Courier Prime', monospace;
            font-weight: 200;
            font-size: 16px;
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
            border: 1px dashed #fff;
            width: 25%;
            border-right: 0;
        }
        .score_2 {
            border: 1px dashed #fff;
            width: 25%;
        }
        .score_3 {
            border: 1px dashed #fff;
            width: 25%;
            border-left: 0;
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
        .links>a {
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
        #online_users {
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
            margin-left: 1px;
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
        .curtian_next_time {
            margin-top: -100%;
        }
        .top_clock_title {
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
            font-size: 30px;
        }
        @media (max-width: 778px) {
            #username-p,
            output {
                font-size: 14px;
            }
            .score_1 {
                border: 1px dashed #fff;
                width: 33%;
            }
            .score_2 {
                border: 1px dashed #fff;
                width: 33%;
            }
            .score_3 {
                border: 1px dashed #fff;
                width: 33%;
            }
            #online_users,
            .clock {
                padding: 2px 8px;
                font-size: 10px;
                bottom: 15px;
            }
            .emoji-btn {
                top: 82%;
            }
        }
        .p {
            display: inline-flex;
            position: absolute;
            height: 20rem;
            width: 20rem;
            left: 0;
            right: 0;
            top: 100%;
            /*border:0px dashed black;*/
            margin: auto;
            background-color: transparent;
            border-radius: 500px;
            background-image: url("../public/images/fav.jpeg");
            background-repeat: no-repeat;
            background-size: 20rem;
        }
        .p.like {
            background-position: -6px -6px;
        }
        output#time {
            /*font-family: fantasy;*/
            /*font-size: 44px; */
            /*border: 1px dashed white; */
            /*width: 204px;*/
            /*border-radius: 500px;*/
            /*font-size: 16px;*/
            /*font-weight: bold !important;*/
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        #time {
            align-self: center;
        }
        .score_1 {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .score_3 {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        @media only screen and (min-width: 300px) and (max-width: 320px) {
            .top_score_heading {
                font-size: 26px;
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .curtian_next_time {
                margin-top: -50%;
            }
            .top_clock_title {
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
                font-size: 26px;
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
                font-size: 26px;
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
                font-size: 26px;
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
                font-size: 26px;
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
            #time {
                align-self: center;
                /*padding: 0px 29%;*/
                margin-left: 2px !important;
            }
            .top_clock_title {
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
            .curtian_next_time {
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
            #logoff {
                margin-top: -32px;
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
        /*        @media screen and (max-width: 800px) {*/
        /*  .positionBottom{*/
        /*          position: relative;*/
        /*    bottom: 4em;*/
        /*  }*/
        /*}*/
        @media screen and (max-height: 926px) {
            .positionBottom {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
            }
            .presense_time {
                padding-top: 3em;
            }
        }
        /*for iphone 12 pro max*/
        @media only screen and (device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) {
            .positionBottom {
                bottom: 10px;
            }
            .presense_time {
                padding-top: 3em;
            }
        }
        @media screen and (max-height: 600px) {
            .positionBottom {
                bottom: 10px;
            }
            .presense_time {
                padding-top: 0em;
            }
        }
        .player {
            /*height: 95vh;*/
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        .now-playing {
            font-size: 1rem;
        }
        .track-name {
            font-size: 3rem;
        }
        .track-artist {
            font-size: 1.5rem;
        }
        /* Using flex with the row direction to
           align items in a horizontal direction */
        .buttons {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .playpause-track,
        .prev-track,
        .next-track {
            padding: 25px 25px 0 25px;
            opacity: 0.5;
            /* Smoothly transition the opacity */
            transition: opacity .2s;
        }
        /* Change the opacity when mouse is hovered */
        .playpause-track:hover,
        .prev-track:hover,
        .next-track:hover {
            opacity: 1.0;
        }
    </style>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    

    <div style="overflow:hidden;">
        <div class="full-height p-0 m-0" id="app">
            
            <div class="curtain">
                <div class="curtain__wrapper">
                    <!--/////////////////////////////-->
                    <input type="checkbox" id="check_box" checked>
                    <div class="curtain__panel curtain__panel--left d-flex justify-content-center align-items-center"
                        style="padding: 19px">
                        <div id="username_form" style="display:none;margin-right: 19px">
                            <div class="row">
                                <div class="mx-auto text-center">
                                    <input type="text" class="form-control" id="username" name="username"
                                        aria-describedby="username" style="display:none" placeholder="Type Here...">
                                    <button class="btn btn-lg btn-outline-secondary"
                                        onclick="logoff()" id="logoff">
                                        LOG OFF
                                    </button>
                                    <style>
                                        #logoff {
                                            letter-spacing: 4px;
                                            padding: 11px 8px 7px 15px;
                                            font-size: 24px;
                                            border-radius: 8px;
                                            border: 2px solid rgb(161, 161, 161);
                                            color: rgb(128, 128, 128);
                                        }
                                    </style>
                                    <br>
                                </div>
                            </div>
                            <form style="text-align: center;" class="username_form">
                                <!--<div class="form-group">-->
                                <!--<label for="exampleInputEmail1">Enter Username to Compete for Longest Time</label>-->
                                <label for="exampleInputEmail1" style="display:none;">Enter Username to Compete for High
                                    Score</label>
                                <br>
                                <input type="text" class="form-control" id="username" name="username"
                                    aria-describedby="username"
                                    placeholder="Enter username here (optional)" autofocus>
                                <style>
                                    #username {
                                        border-radius: 0;
                                        width: 298px;
                                        padding: 0 5px;
                                        border: 1px solid lightgray
                                    }
                                    #username::placeholder {
                                        color: rgb(197, 197, 197);
                                    }
                                </style>
                                <!--</div>-->
                                <!--<button style="margin-top: 1%;padding: 6px;font-size: 16px;line-height: 18px;" type="button" class="btn btn-lg btn-outline-dark" onclick="save_username()">Submit</button>-->
                                <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff_1" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                                <!--    Submit-->
                                <!--</button>-->
                            </form>
                            <div class="row">
                                <div class="mx-auto text-center">
                                    <!--<button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="submit()" id="logoff" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                                    <!--    Submit-->
                                    <!--</button>-->
                                    <!--<br>-->
                                    <!--<br>-->
                                    <!--OR-->
                                    <!--<br>-->
                                    <!--<br>-->
                                    <!--<button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" class="btn btn-lg btn-outline-dark" >-->
                                    <!--    Just Log Off-->
                                    <!--</button>-->
                                </div>
                            </div>
                        </div>
                        <!--<div id="curtian_panssssel_below" style="text-align: center !important;">-->
                        <!--<button style="padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" id="logoff" style="display:none" class="btn btn-lg btn-outline-dark" >-->
                        <!--    click here-->
                        <!--    <p style="margin:0;padding:0;">to log off</p>-->
                        <!--</button>-->
                        <!--<button style="margin-left: 1%;padding: 6px;font-size: 16px;line-height: 18px;" onclick="logoff()" style="display:none" class="curtian_next_next_time btn btn-lg btn-outline-dark" >-->
                        <!--    Submit-->
                        <!--</button>-->
                        <!--</div>-->
                    </div> <!-- curtain__panel -->
                    <!--/////////////////////////////-->
                    <!-- curtain__panel -->
                    <div class="curtain__content justify-content-between" style="padding-bottom: 5px;">
                        <div class="topp"></div>
                        <div>
                            <div id="snoAlertBox" class="alert" data-alert="alert">You’re doing great, don't stop just
                                go on</div>
                            <p id="username-p">{username}</p>
                            <output style="" id="time" class="presense_time mt-5"></output>
                        </div>
                        <div class="positionBottom" style="margin: 20px 0px 10px">
                            <!--emoji-btn-->
                            <!--<h2>Top 3 High Score</h2>-->
                            <br>
                            <!--<div id="MyClockDisplay" class="clock" >high score : 5h 23m</div>-->
                            <div class="justify-content-center" style="">
                                <img id="emoji" onclick="emoji_store()" id="runemoji" class="top_score_1"
                                    style="cursor:pointer; margin-right:auto; width: 38px"
                                    src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/face-without-mouth_1f636.png"
                                    alt="emoji">
                            </div>
                            <div style="">
                                <div id="" class="top_score_heading" style="">
                                    <h2></h2>
                                </div>
                                <div class="d-flex justify-content-center " style="width: 100vw;">
                                    <div id="top_score_1" class="score_1" style=""></div>
                                    <div id="top_score_2" class="score_2" style=""></div>
                                    <div id="top_score_3" class="score_3" style=""></div>
                                    
                                </div>
                            </div>
                            <div class="player">
                                <div class="buttons">
                                    <div class="playpause-track" onclick="playTrack()">
                                        <i class="fa fa-play-circle fa-2x"></i>
                                    </div>
                                    <div class="playpause-track" onclick="pauseTrack()">
                                        <i class="fa fa-pause-circle fa-2x"></i>
                                    </div>
                                    <div class="next-track d-none" onclick="nextTrack()">
                                        <i class="fa fa-step-forward fa-1x"></i>
                                    </div>
                                    <div class="prev-track d-none" onclick="prevTrack()">
                                        <i class="fa fa-volume-up fa-1x"></i>
                                        <input type="range" min="0" max="1" step="0.1" value="1" id="audioVolume">
                                    </div>
                                    <!--<div class="next-track d-none">-->
                                    <!--    <div class="slidecontainer">-->
                                    <!--        <input type="range" min="1" max="100" value="100" class="sliderr volumeControl" id="myRangee" onchange="volumeControl()">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                                <div class="slider_container d-none">
                                    <div class="current-time">00:00</div>
                                    <input type="range" min="1" max="100" value="0" class="seek_slider"
                                        onchange="seekTo()">
                                    <div class="total-duration">00:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIXED IMG THAT TRIGGER LIVE EMOJI-->
                    <!--container ends here-->
                </div>
                <!--<div class="curtain__panel curtain__panel--right">-->
                <!--</div>-->
                <!--<div id="online_users">-->
                <!--    0-->
                <!--</div>-->
                <!-- curtain__panel -->
            </div>
        </div>
    </div>

    <!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        document.addEventListener("touchstart", function() {}, true);
    </script>
    <!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
    <script>
        var sliderr = document.getElementById("myRangee");
        var outputt = document.getElementById("demoo");
        outputt.innerHTML = sliderr.value;
        sliderr.oninput = function() {
            outputt.innerHTML = this.value;
        }
    </script>
    <script type="text/javascript">
        $.ajax({
            method: 'get',
            url: '{{ route('emoji.get_top_3') }}',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                var top_scores = response.top3;
                if (top_scores.length == 3) {
                    top_1 = top_scores[0];
                    top_2 = top_scores[1];
                    top_3 = top_scores[2];
                    $('#top_score_1').html(top_1['username'] + ' <br> ' + top_1['compete_time']);
                    $('#top_score_2').html(top_2['username'] + ' <br> ' + top_2['compete_time']);
                    $('#top_score_3').html(top_3['username'] + ' <br> ' + top_3['compete_time']);
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
        window.onload = function() {
            setTimeout(function() {
                $('#logoff').fadeIn();
            }, 1600);
            $('#curtian_header').css('display', 'none');
            $('.curtian_yes').css('display', 'none');
            $('#username').val('');
            $('#username_form').slideDown();
            // $('#curtian_panel_below').slideUp();
            $('.curtian_next_time').html('Submit');
            // $('.curtian_next_time').css('margin-top','-100%');
            $('.curtian_next_next_time').html('Just Log Off');
            $('.curtian_next_next_time').css('margin-top', '5%');
            $('.curtian_next_next_time').css('margin-left', '35%');
            $('.curtain_or_label').css('margin-top', '5%');
            $('.curtain_or_label').css('margin-left', '50%');
        };
        function logoff() {
            starttest();
            // var timer = new Timer();
            // var reference = 1;
            var start_timer = 1;
            // $('.curtian_header').css('display','none');
            $('#curtian_header').css('display', 'none');
            $('.curtian_yes').css('display', 'none');
            $('.username_form').css('display', 'none');
            $('#username_form').css('display', 'none');
            $('.curtian_next_time').css('display', 'none');
            $('.curtian_next_next_time').css('display', 'none');
            $("#username-p").text($("#username").val());
            setTimeout(function() {
                $('#check_box').prop('checked', false);
                document.getElementById('logoff').style.display = 'none';
            }, 1000);
        }
        function submit() {
            if ($("#username").val() == '') {
                // alert('Insert username please');
                jQuery.noConflict();
                $("#myModal1").modal('show');
                return false;
            }
            starttest();
            // var timer = new Timer();
            // var reference = 1;
            var start_timer = 1;
            // $('.curtian_header').css('display','none');
            $('#curtian_header').css('display', 'none');
            $('.curtian_yes').css('display', 'none');
            $('.username_form').css('display', 'none');
            $('#username_form').css('display', 'none');
            $('.curtian_next_time').css('display', 'none');
            $('.curtian_next_next_time').css('display', 'none');
            $("#username-p").text($("#username").val());
            if ($("#username").val() != '')
            {
                $("#username-pp").text($("#username").val());
                $("#username-pp2").text($("#username").val());
                $("#username-pp3").text($("#username").val());
                $("#username-pp4").text($("#username").val());
                $("#username-pp5").text($("#username").val());
                $("#username-pp6").text($("#username").val());
            }
            setTimeout(function() {
                $('#check_box').prop('checked', false);
                document.getElementById('logoff').style.display = 'none';
            }, 1000);
        }
        
        function save_username() {
            var inputVal = document.getElementById("username").value;
        }
        $(function() {
            $("#logoff").on("click", function() {
                $("#front").slideUp();
                setTimeout(function() {
                    // showTime();
                    //Start
                    setTimeout(function() {
                        $('.top-logo').html('');
                    }, 45000)
                    // End
                }, 7500);
                $.ajax({
                    method: 'get',
                    url: '{{ route('user.register') }}',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {}
                });
            });
        });
        // Emoji
        function emoji_store() {
            emoji_click_count++;
            emoji_click++;
            runemoji();
            $.ajax({
                method: 'get',
                url: '{{ route('emoji.store') }}',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {}
            });
            if (15 == emoji_click_count) {
                setTimeout(function() {
                    $('#top_logo_image').css({
                        'display': 'none'
                    });
                    $('.top_broken_logo_image').css({
                        'display': 'block'
                    });
                }, 500);
            }
            if (30 == emoji_click) {
                emoji_click = 0;
                if (10000 != emoji_speed_end) {
                    //20 randomtime
                    //emoji_speed_start += 1000;
                    emoji_speed_end += 500;
                } else {
                    //emoji_speed_start = 0;
                    emoji_speed_end = 1000;
                }
                $(".topp").append("<span class='p like'></span>");
                $(".p").toArray().forEach(function(p) {
                    $(p).animate({
                        left: getRadInteger(0, $("body").width() - 50),
                        right: getRadInteger(0, $("body").width() - 50)
                    }, getRadInteger(5, 15), function() {
                        $(p).animate({
                            top: -100 + "%",
                            opacity: 0
                        }, getRadInteger(emoji_speed_start, emoji_speed_end), function() {
                            $(p).remove();
                        }); /*inside animation*/
                    });
                }); /*first animation*/
            }
        }
        var onl = Math.floor(Math.random() * 99) + 10;
        window.setInterval(function() {
            $.ajax({
                method: 'get',
                url: '{{ route('emoji.get') }}',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // var onlus = onl + response.online_users ;
                    $('#online_users').html(onl + ' million logged off');
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
        var getRadInteger = function(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var emoji_speed_start = 1000;
        var emoji_speed_end = 1000;
        function runemoji() {
            if (10000 != emoji_speed_end) {
                //20 randomtime
                //emoji_speed_start += 1000;
                emoji_speed_end += 500;
            } else {
                //emoji_speed_start = 0;
                emoji_speed_end = 1000;
            }
            //console.log('start='+emoji_speed_start);
            //console.log('end='+emoji_speed_end);
            $(".topp").append("<span class='particle like'></span>");
            $(".particle").toArray().forEach(function(particle) {
                $(particle).animate({
                    left: getRadInteger(0, $("body").width() - 50),
                    right: getRadInteger(0, $("body").width() - 50)
                }, getRadInteger(5, 15), function() {
                    $(particle).animate({
                        top: -100 + "%",
                        opacity: 0
                    }, getRadInteger(emoji_speed_start, emoji_speed_end), function() {
                        $(particle).remove();
                    }); /*inside animation*/
                });
            }); /*first animation*/
        }
    </script>
    <script type="text/javascript">
        window.addEventListener('beforeunload', (event) => {
            // Cancel the event as stated by the standard.
            event.preventDefault();
            $.ajax({
                method: 'get',
                url: '{{ route('user.logout') }}',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Leaving 2..........');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(window).bind('beforeunload', function() {
            $.ajax({
                method: 'get',
                url: '{{ route('user.logout') }}',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Leaving 1..........');
                }
            });
            var username = document.getElementById("username").value;
            if (username.length > 0) {
                var completed_time = document.getElementById("time").value;
                $.ajax({
                    method: 'get',
                    url: '{{ route('emoji.completed_time') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        username: username,
                        completed_time: completed_time
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
        });
    </script>
    <script type="text/javascript">
        if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
            $.ajax({
                method: 'get',
                url: '{{ route('user.logout') }}',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Leaving 3..........');
                }
            });
        }
    </script>
    <div id="words" style="height: 65vh;width: 100%;z-index:10;background:; top:80px; position: absolute;color:#fff;font-size: 26px;display:none">
        <div id="word" style="position: absolute;">
            {{-- top: 92%; lefts: 85% --}}
        </div>
    </div>
    <style>
        #logoff:hover {
            color: #fff
        }
    </style>
    <script type="text/javascript">
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
                hours = Math.floor(seconds / 3600);
                minutes = Math.floor((seconds % 3600) / 60);
                seconds = Math.floor(seconds % 60);
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
        function timeToSeconds(time) {
            time = time.split(/:/);
            return time[0] * 3600 + time[1] * 60 + time[2];
        }
        //on tab change stop timer
        var userTimeInterval;
        var wordsInt;
        function handleVisibilityChange() {
            if (document.hidden) {
                clearInterval(userTimeInterval);
                clearInterval(wordsInt);
            } else {
                starttest();
            }
        }
        // showwords()
        
        function showwords(){
            let words = 
            [
                'Nice!', 'Keep it up!', 'You\'re doing great', 'Good job', 'Wow', 'Keep going', 'You can do it!'
            ]
            
            let word_counter = 0;
            wordsInt = setInterval(function(){
                let y = 1 + Math.floor(Math.random() * 92);
                let x = 1 + Math.floor(Math.random() * 85);
                $('#word').html(words[word_counter])
                $('#word').css({
                    'left': x + '%',
                    'top': y + '%'
                })
                $('#word').css('display', 'none')
                $('#word').fadeIn(1000)
                
                
                if(word_counter == 5){
                    word_counter = 0
                }else{
                    word_counter++
                }
                setTimeout(() => {
                    $('#word').fadeOut(1000)
                }, 3000);
                
            }, 15000)
        }
        document.addEventListener("visibilitychange", handleVisibilityChange, false);
        function starttest() {
            $('#words').css('display', 'block')
            showwords()
            var counter = 0;
            var timer = new Timer();
            var three = 0;
            var two = 0;
            var one = 0;
            userTimeInterval = setInterval(function() {
                // counter++;
                //   output.textContent = timer;
                time = timer.getElapsedTime();
                let current_tim = time.hours + ':' + time.minutes + ':' + time.seconds;
                let username = document.getElementById("username").value;
                let tim3 = $('#top_score_3').html();
                let tim2 = $('#top_score_2').html();
                let tim1 = $('#top_score_1').html();
                if (username.length > 0) {
                    if (current_tim > tim3.substring(tim3.length - 8) && current_tim < tim2.substring(tim2.length -
                            8)) {
                        $('#top_score_3').empty();
                        $('#top_score_3').html(username + ' <br> ' + current_tim);
                        update_time();
                    } else if (current_tim > tim2.substring(tim2.length - 8) && current_tim < tim1.substring(tim1
                            .length - 8)) {
                        if (two == 0) {
                            $('#top_score_3').empty();
                            $('#top_score_3').html(tim2);
                            $('#top_score_2').empty();
                            $('#top_score_2').html(username + ' <br> ' + current_tim);
                            update_time();
                            two++;
                        } else {
                            $('#top_score_2').empty();
                            $('#top_score_2').html(username + ' <br> ' + current_tim);
                            update_time();
                        }
                    } else if (current_tim > tim1.substring(tim1.length - 8)) {
                        if (three == 0) {
                            $('#top_score_2').empty();
                            $('#top_score_2').html(tim1);
                            $('#top_score_1').empty();
                            $('#top_score_1').html(username + ' <br> ' + current_tim);
                            update_time();
                            three++;
                        } else {
                            $('#top_score_1').empty();
                            $('#top_score_1').html(username + ' <br> ' + current_tim);
                            update_time();
                        }
                    } else {
                        update_time();
                    }
                }
               
                output.textContent = time.hours + ':' + time.minutes + ':' + time.seconds;
            }, 1000);
        };
        function update_time() {
            var username = document.getElementById("username").value;
            if (username.length > 0) {
                var completed_time = document.getElementById("time").value;
                $.ajax({
                    method: 'get',
                    url: '{{ route('emoji.completed_time') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        username: username,
                        completed_time: completed_time
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
        }
        $('*').css({
            'max-height': $(window).height() + 'px'
        });
        // (function update() {
        //      var time = timer.getElapsedTime();
        //      output.textContent = time.hours + ':' + time.minutes + ':' + time.seconds;
        //      //  console.log(time);
        //   raf(update);
        // })();
    </script>
    <script>
        // Select all the elements in the HTML page
        // and assign them to a variable
        let now_playing = document.querySelector(".now-playing");
        let track_art = document.querySelector(".track-art");
        let track_name = document.querySelector(".track-name");
        let track_artist = document.querySelector(".track-artist");
        let playpause_btn = document.querySelector(".playpause-track");
        let next_btn = document.querySelector(".next-track");
        let prev_btn = document.querySelector(".prev-track");
        let seek_slider = document.querySelector(".seek_slider");
        let volume_slider = document.querySelector(".volumeControl");
        let curr_time = document.querySelector(".current-time");
        let total_duration = document.querySelector(".total-duration");
        // Specify globally used values
        let track_index = 0;
        let isPlaying = false;
        let updateTimer;
        let firstTimePlay = false;
        // Create the audio element for the player
        let curr_track = document.createElement('audio');
        // Define the list of tracks that have to be played
        let track_list = [
            // {
            //
            //     name: "The World Needs Change",
            //
            //     artist: "Soulja Boy",
            //
            //     image: "Image URL",
            //
            //     path: "mp4.mp3",
            //
            // },
            //
            // {
            //
            //     name: "Citgo",
            //
            //     artist: "Chief Keef",
            //
            //     image: "Image URL",
            //
            //     path: "mp5.mp3",
            //
            // },
            // {
            //
            //     name: "Sosa Style",
            //
            //     artist: "Chief Keef",
            //
            //     image: "Image URL",
            //
            //     path: "mp6.mp3",
            //
            // },
            // {
            //
            //     name: "The Proposition #1",
            //
            //     artist: "Nick Cave, Warren Ellis",
            //
            //     image: "Image URL",
            //
            //     path: "mp7.mp3",
            //
            // },
            {
                name: "The Wrestler (Long Version)",
                artist: "Bruce Springsteen",
                image: "Image URL",
                path: "mp1.mp3",
            },
            {
                name: "The Wrestler (Long Version)",
                artist: "Bruce Springsteen",
                image: "Image URL",
                path: "mp8.mp3",
            },
            {
                name: "Is That All There Is ? | Peggy Lee",
                artist: "Jerry Leiber / Mike Stoller",
                image: "Image URL",
                path: "mp9.mp3",
            },
            {
                name: "Not Dark Yet - Bob Dylan",
                artist: "Bob Dylan",
                image: "Image URL",
                path: "mp10.mp3",
            },
            {
                name: "Lightnin' Hopkins - Lonesome Graveyard",
                artist: "Lightnin' Hopkins",
                image: "Image URL",
                path: "mp11.mp3",
            },
        ];
        function loadTrack(track_index) {
            // Clear the previous seek timer
            clearInterval(updateTimer);
            resetValues();
            // Load a new track
            curr_track.src = track_list[track_index].path;
            // curr_track.autoplay = true;
            curr_track.load();
            if (firstTimePlay)
                playTrack();
            // Update details of the track
            track_art.style.backgroundImage =
                "url(" + track_list[track_index].image + ")";
            track_name.textContent = track_list[track_index].name;
            track_artist.textContent = track_list[track_index].artist;
            now_playing.textContent =
                "PLAYING " + (track_index + 1) + " OF " + track_list.length;
            // Set an interval of 1000 milliseconds
            // for updating the seek slider
            updateTimer = setInterval(seekUpdate, 1000);
            // Move to the next track if the current finishes playing
            // using the 'ended' event
            curr_track.addEventListener("ended", nextTrack);
            // Apply a random background color
            random_bg_color();
        }
        function random_bg_color() {
            // Get a random number between 64 to 256
            // (for getting lighter colors)
            let red = Math.floor(Math.random() * 256) + 64;
            let green = Math.floor(Math.random() * 256) + 64;
            let blue = Math.floor(Math.random() * 256) + 64;
            // Construct a color withe the given values
            let bgColor = "rgb(" + red + ", " + green + ", " + blue + ")";
            // Set the background to the new color
            document.body.style.background = bgColor;
        }
        // Function to reset all values to their default
        function resetValues() {
            curr_time.textContent = "00:00";
            total_duration.textContent = "00:00";
            seek_slider.value = 0;
        }
        function playpauseTrack() {
            // Switch between playing and pausing
            // depending on the current state
            firstTimePlay = true;
            alertStart();
            if (!isPlaying) playTrack();
            else pauseTrack();
        }
        var playNextTimer;
        function playTrack() {
            clearInterval(playNextTimer);
            var playPromise = curr_track.play();
            alertStart();
            if (playPromise !== undefined) {
                playPromise.then(_ => {
                        curr_track.play();
                        isPlaying = true;
                        // playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-2x"></i>';
                        playNextTimer = setTimeout(function() {
                            nextTrack();
                        }, curr_track.duration * 1000 + 2000);
                    })
                    .catch(error => {
                        curr_track.pause();
                        playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-2x"></i>';;
                        clearInterval(playNextTimer);
                        isPlaying = false;
                    });
            }
            // Play the loaded track
            // curr_track.pause();
            // curr_track.play();
            // Replace icon with the pause icon
            // playpause_btn.innerHTML = '<i class="fa fa-pause-circle fa-2x"></i>';
        }
        function pauseTrack() {
            // Pause the loaded track
            curr_track.pause();
            isPlaying = false;
            // Replace icon with the play icon
            playpause_btn.innerHTML = '<i class="fa fa-play-circle fa-2x"></i>';;
        }
        function alertStart() {
            setInterval(function() {
                $("#snoAlertBox").fadeIn(3000);
                closeSnoAlertBox();
            }, 120000);
            function closeSnoAlertBox() {
                window.setTimeout(function() {
                    $("#snoAlertBox").fadeOut(3000)
                }, 5000);
            }
        }
        function nextTrack() {
            // Go back to the first track if the
            // current one is the last in the track list
            if (track_index < track_list.length - 1)
            {
                track_index += 1;
            } else
            {
                track_index = 0;
            }
            loadTrack(track_index);
            playTrack();
        }
        var audio = document.getElementById("audioBg");
        var audioVolume = document.getElementById("audioVolume");
        // associate volume with range type input
        audioVolume.onchange = function() {
            curr_track.volume = audioVolume.value;
        }
        //     function prevTrack() {
        // // Go back to the last track if the
        // // current one is the first in the track list
        //         if (track_index > 0)
        //             track_index -= 1;
        //         else track_index = track_list.length;
        // // Load and play the new track
        //         loadTrack(track_index);
        //         playTrack();
        //     }
        function seekTo() {
            // Calculate the seek position by the
            // percentage of the seek slider
            // and get the relative duration to the track
            seekto = curr_track.duration * (seek_slider.value / 100);
            // Set the current track position to the calculated seek position
            curr_track.currentTime = seekto;
        }
        function volumeControl() {
            // Set the volume according to the
            // percentage of the volume slider set
            volume = (volume_slider.value / 100);
            curr_track.volume = volume;
        }
        $(document).ready(function() {
            $("#volume-control").slider({
                min: 0,
                max: 100,
                value: 100,
                range: "min",
                slide: function(event, ui) {
                    setVolume(ui.value / 100);
                    alert(ui.value / 100);
                }
            });
        });
        function seekUpdate() {
            let seekPosition = 0;
            // Check if the current track duration is a legible number
            if (!isNaN(curr_track.duration)) {
                seekPosition = curr_track.currentTime * (100 / curr_track.duration);
                seek_slider.value = seekPosition;
                // Calculate the time left and the total duration
                let currentMinutes = Math.floor(curr_track.currentTime / 60);
                let currentSeconds = Math.floor(curr_track.currentTime - currentMinutes * 60);
                let durationMinutes = Math.floor(curr_track.duration / 60);
                let durationSeconds = Math.floor(curr_track.duration - durationMinutes * 60);
                // Add a zero to the single digit time values
                if (currentSeconds < 10) {
                    currentSeconds = "0" + currentSeconds;
                }
                if (durationSeconds < 10) {
                    durationSeconds = "0" + durationSeconds;
                }
                if (currentMinutes < 10) {
                    currentMinutes = "0" + currentMinutes;
                }
                if (durationMinutes < 10) {
                    durationMinutes = "0" + durationMinutes;
                }
                // Display the updated duration
                curr_time.textContent = currentMinutes + ":" + currentSeconds;
                total_duration.textContent = durationMinutes + ":" + durationSeconds;
            }
        }
        // Load the first track in the tracklist
        loadTrack(track_index);
    </script>
    <script type="text/javascript">
        //khalid SetInerval
        var count_messages = 1;
        var count_emoj = 0;
        console.log(name);
        console.log("hldfd");
        $(".positionBottom").click(function() {
            count_emoj += 1;
        })
        setInterval(function() {
            if (count_emoj > 0) {
                count_emoj = 0;
            } else {
                var name = $("#username-p").text();
                if (name != '{username}') {
                    console.log("khalid");
                    jQuery.noConflict();
                    $("#myModal").modal('show');
                }
            }
        }, 600000);
        // setInterval(function() {
        //   if($('.modal.show').length){
        //     console.log("khalid");
        //     // location.reload();
        //   }
        // }, 3000);
        setInterval(function() {
            if ($('.modal.show').length) {
                console.log("khalid");
                var c = parseInt($(".km-count").text());
                c -= 1;
                $(".km-count").text(c);
                if (c < 2) {
                    location.reload();
                }
            }
            if ($('#myModal2.modal.show').length) {
                console.log("khalid");
                var d = parseInt($(".km-count1").text());
                d -= 1;
                $(".km-count1").text(d);
                if (d < 2) {
                    $('#myModal2').modal('hide');
                    $(".km-count1").text(3);
                }
            }
        }, 1000)
    </script>
</body>
</html>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="background: black; background-color: black;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="km-count">60</span>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <p>Are You There</p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button> -->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: black;">
            <div class="modal-body">
                <p style="color: white; ">Insert username please</p>
            </div>
            <div class="modal-footer" style="border: none; color: white;">
                <button type="button" class="btn btn-default" data-dismiss="modal"
                    style="color: #007bff;">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    style="background: black; background-color: black;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="km-count1">3</span>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <p class="km-message"></p>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button> -->
                <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> -->
            </div>
        </div>
    </div>
</div>