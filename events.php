<?php
    include "component/header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .wrapper{
        margin: 10pc 0 6pc;
    }
    .wrapper h1{
        font-weight: 700;
    }
    .container{
        padding: 6pc 0;
    }
    .container > h2{
        color: #444;
        font-weight: 700;
        letter-spacing: 1px;
        margin-left:.9rem;

    }
    .group_events h2{
        color: white;
        font-weight: normal;
        color: white;
        font-size: 2.3rem;
        letter-spacing: 4px;
    }
    .group_event{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items:center;
    }
    .event{
        min-height: 300px;
        width: 23%;
        background-color: #09099d;
        color: #fff;
        margin: 2rem 0.8rem;
        border-radius: 6px;
        display: flex;
        padding: 1rem 1.1rem;
        flex-direction: column;
        align-items: start;
        justify-content: space-around;
    }
    .event .date span{
        letter-spacing: 3px;
        font-weight: 600
    }
    .event small,
    .event span{
        display: block;
    }
    .event small{
        font-size: 13px;
        font-weight: bold;
        letter-spacing: .6px;
    }
    .event span{
        font-weight: 600;
        font-size: .9rem;
        letter-spacing: .3px;
    }
</style>


<br>
<br>

<div class="wrapper">

    <h1 style="text-align:center;">Events</h1>

    <div class="container">
        <h2>UPCOMING EVENTS</h2>
        <div class="group_events row col-12 p-0 m-0">
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
            <div class="event">
                <div class="date">
                    <h2>08</h2>
                    <span>JUNE</span>
                </div>
                <div class="event_activity">
                    <p>Talemia Start-up Innovation summit</p>
                </div>
                <div class="time_location">
                    <small>7:30PM -10PM</small>
                    <span>@ Talemia Building, Lagos.</span>
                </div>
            </div>
        </div>
    </div>
</div>







<br>
<br>
<?php
    include "component/footer.php";
?>