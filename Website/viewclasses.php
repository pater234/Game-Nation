<?php include "layout.php" ?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 25rem;
        height: 30rem;
        margin-top: 20px;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5%;
        padding: 10px 10px 10px 10px;
        transition: all 0.3s ease 0s;
    }

    .card:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    #card {
        /*padding-top: 4%;*/
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        align-content: center;
    }
</style>

<div id="card">
    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Scratch</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Scratch</p>
            <a class="btn btn-primary" href="scratch">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Java</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Info about Java</p>
            <a class="btn btn-primary">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Game Design in Unreal Engine 4</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about UE4</p>
            <a class="btn btn-primary">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Web Design</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about Web Design</p>
            <a class="btn btn-primary">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto class="card-img-top">
        <div class="card-body">
        <h1 class="card-title">Python Programming</h1>
        <p class="card-text">$7 per class. $35 for the whole course</p>
        <p class="card-text">Info about Java</p>
        <a class="btn btn-primary">View more information</a>
        </div>
    </div>
</div>

<button onclick="color(); return false;">
    Change Color
</button>

<script>
    function color()
    {
        document.querySelector('.card').style.color = "red";
    }
</script>
