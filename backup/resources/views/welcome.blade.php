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

        .position-ref {
            position: relative;
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
        @media (max-width: 778px){
            #online_users{
                padding: 2px 8px;
                font-size: 10px;
                bottom: 15px;
            }
            .emoji-btn{
                top: 82%;
            }
        }

        .clock {
            margin-bottom: 1px;
            margin-left : 1px;
            position: fixed;
            left: 10px;
            bottom: 10px;
            border: 1px #fff solid;
            display: inline-block;
            padding: 2px 26px;
            border-radius: 20px;
            color: white;
            font-size: 20px;
            letter-spacing: 5px;
        }
    </style>

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="flex-center position-ref full-height" id="app">
    <audio style="display:none;" loop="true" id="audio" src="{{asset("waiting_sound.mp3")}}" type="audio/mp3"></audio>

    <div class="curtain">
        <div class="curtain__wrapper">


            <!--/////////////////////////////-->
            <input type="checkbox" id="check_box" checked>
            <div class="curtain__panel curtain__panel--left d-flex justify-content-center align-items-center">
                <button onclick="logoff()" id="logoff" style="display:none" class="btn btn-lg btn-outline-dark" >log off</button>
            </div> <!-- curtain__panel -->
            <!--/////////////////////////////-->


            <!-- curtain__panel -->
            <div class="curtain__content d-flex flex-column justify-content-between">
                <div class="particlesContainer">
                    <div class="top-logo">
                        <img id="top_logo_image" style="max-width: 100%; max-height: 100%;overflow: hidden;" src="{{asset('images/byelol_logo.png')}}" alt="byelol">
                        <img class="top_broken_logo_image" style="display:none; max-width: 100%; max-height: 100%;overflow: hidden;" src="{{asset('images/byelol_logo_broken.png')}}" alt="byelol">

                    </div>

                    <div class="emoji-btn" style="border:none; background:none">
                        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                        <a href="javascript:void(0)" onclick="emoji_store()" id="runemoji" style="display: block;">
                            <img id="emoji" class="emoji-live" style="cursor:pointer" width="100%" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/face-without-mouth_1f636.png" alt="emoji">
                        </a>
                    </div>
                </div>
            </div>

            <!-- FIXED IMG THAT TRIGGER LIVE EMOJI-->
            <!--container ends here-->
        </div>
        <div class="curtain__panel curtain__panel--right">

        </div>

        <div id="online_users">
            0
        </div>

        <!-- curtain__panel -->
    </div>

</div>

<button id="audioButton" style="display:none;"></button>
<!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
<script>document.addEventListener("touchstart", function(){}, true);</script>
<!-- TOUCH FRIENDLY IN MOBILE DEVICES -->
<script type="text/javascript">
    var emoji_click_count = 0;
    var playPromise;
    var audio = document.getElementById('audio');

    window.onload=function(){
        setTimeout(function(){
            $('#logoff').fadeIn();
            //Play audio
            var a = document.createElement("a");
            a.href = 'javascript:void(0)';
            a.id = 'palyaudio';
            document.body.appendChild(a);
            a.click();
            //Play audio end

        }, 1600);

        $(document.body).on('click', '#palyaudio', function() {
            setTimeout(function(){
                playPromise = audio.play();
            }, 1000);
        });

    };



    function logoff(){
        setTimeout(function(){ $('#check_box').prop('checked', false);
            document.getElementById('logoff').style.display = 'none';
        }, 1000);

    }

    $(function(){
        $("#logoff").on("click", function(){
            $("#front").slideUp();
            setTimeout(function(){
                if (playPromise !== undefined) {
                    $("#audio").animate({volume: 0}, 3000);
                }
            }, 1000);

            $.ajax({
                method:'get',
                url:'{{route('user.register')}}',
                data:{_token:'{{csrf_token()}}'},
                success:function(response){}
            });


        });
    });

    // Emoji
    var glassSound = new Audio('{{asset('broken_glass_sound.mp3')}}');
    function emoji_store(){
        emoji_click_count++;
        runemoji();
        $.ajax({
            method:'get',
            url:'{{route('emoji.store')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){}
        });

        if(15 == emoji_click_count){
            glassSound.play();

            setTimeout(function(){
                $('#top_logo_image').css({
                    'display':'none'
                });
                $('.top_broken_logo_image').css({
                    'display':'block'
                });
            }, 500);

            // $('.top-logo').html('<img id="top_logo_image" style="max-width: 100%; max-height: 100%;overflow: hidden;" src="{{asset('images/byelol_logo_broken.png')}}" alt="byelol">');
            // setTimeout(function(){
            //     emoji_click_count = 0;
            //     $('#top_logo_image').attr('src', "{{asset('images/byelol_logo.png')}}");
            // }, 10000);
        }
    }

    window.setInterval(function(){
        $.ajax({
            method:'get',
            url:'{{route('emoji.get')}}',
            data:{_token:'{{csrf_token()}}'},
            success:function(response){

                if(response.online_users > 1){
                    $('#online_users').html(response.online_users+' users logged off');
                }else{
                    $('#online_users').html(response.online_users+' user logged off');
                }

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

    function runemoji(){
        $(".particlesContainer").append("<span class='particle like'></span>");
        $(".particle").toArray().forEach(function(particle){
            $(particle).animate({
                left:getRadInteger(0,$("body").width() - 50),
                right:getRadInteger(0,$("body").width() - 50)
            },getRadInteger(5,15),function(){
                $(particle).animate({
                    top:-100+"%",
                    opacity:0
                },getRadInteger(2000,3000),function(){
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
    var seconds = 0, minutes = 0, hours = 0;
    function showTime() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }

       // var time = m + " " + s + " " ;
        document.getElementById("MyClockDisplay").innerText = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);;
        document.getElementById("MyClockDisplay").textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);;
        //h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

        setTimeout(showTime, 1000);
    }
    showTime();

</script>
</body>
</html>
