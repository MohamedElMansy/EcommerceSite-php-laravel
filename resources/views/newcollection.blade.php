@extends('master')
@section('title')
    New Collection
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@endsection

@section('content')

    <section class="p-t-62 m-t-292 p-b-60">
        <div class="cont">
            <h1>Coming soon.</h1>


            <div class="time">
                <div class="date">
                    <span id="days">00</span>
                    DAYS
                </div>

                <div class="date">
                    <span id="hours">00</span>
                    HOURS
                </div>

                <div class="date">
                    <span id="minutes">00</span>
                    MINUTES
                </div>

                <div class="date">
                    <span id="seconds">00</span>
                    SECONDS
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        //get the date i want to count to
        var count = new Date("august 11,2018 19:10:00").getTime();

        //using setinterval to check every one second
        var z = setInterval(function() {
            //get the date now
            var now = new Date().getTime();
            //get the difference between the date now and the date i want to get ...the distance between them in days,hours,mintues and seconds
            var dif = count - now;
            //get the num of days by using math.floor to get its nearest integer
            var days = Math.floor(dif/(1000*60*60*24));
            //to get hours , minutes and seconds use Modulus to get the division remainder
            var hours = Math.floor((dif%(1000*60*60*24))/(1000*60*60));
            var minutes = Math.floor((dif%(1000*60*60))/(1000*60));
            var seconds = Math.floor((dif%(1000*60))/1000);
            //put the values into the divs
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            //check if the difference between the date now and the date i want to get ...the distance between them = zero ..stop the countdown
            if(dif <= 0){
                clearInterval(z);
            }
        },1000);
    </script>


@endsection