<?php include "layout.php" ?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: #ffffff;
        border-radius: 20px;
        padding: 10px 10px 10px 10px;
    }

    .price {
        color: #cd9312;
        font-size: 22px;
        font-family: Montserrat, sans-serif;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }

    #card {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 100%;
        align-content: center;
    }
</style>

<div id="card">
<div class="card">
    <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" width="75%" height=auto>
    <h1>Scratch</h1>
    <p class="price">$7 per class. $35 for the whole course</p>
    <p>Info about Scratch</p>
    <a href="classes/scratch"><button>View more information</button></a>
</div>

<div class="card">
    <img src="https://lh4.googleusercontent.com/zMcXePJpMqoY5L_VldBNFwcD9fYeJL0hX20LHcjbHKMFiec_T6r-6lT-tlOcId8jD8qxo75uM_h9fYOFRSME-dRhiiz2w0WOZlTzDSHUu-10A_cInPMcth2Wk26kPddAC8xnqNafn1_j8-q8" alt="Unreal Engine" width="40%" height=auto>
    <h1>Game Design in Unreal Engine</h1>
    <p class="price">$8 per class. $48 for the whole course</p>
    <p>Info about UE4</p>
    <a><button>View more information</button></a>
</div>

<div class="card">
    <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto>
    <h1>Game Design in Unity</h1>
    <p class="price">$9 per class. $45 for the whole course</p>
    <p>Info about UE4</p>
    <a><button>View more information</button></a>
</div>
    <div class="card">
        <img src="https://lh6.googleusercontent.com/ajiASnEOOIWUvkknIVqNNY3wnHAMd5Bd3ObNdwbQwqcjmayMFyZehFZWEFVLevwPjsWs6xyBUBE1oc-aNZ7Pdx8TUdMRsvQjiJPYATvpVprXPkaHiXg1Tyof6FbkTFzW7Ipd1a7QFuz22IaF" alt="Unreal Engine" width="40%" height=auto>
        <h1>Game Design in Unity</h1>
        <p class="price">$9 per class. $45 for the whole course</p>
        <p>Info about UE4</p>
        <a><button>View more information</button></a>
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
