<?php include "homepage.php" ?>


<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
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
</style>

<div class="card">
    <h1>Scratch</h1>
    <p class="price">$7 per class. $35 for the whole course</p>
    <p>Info about Scratch</p>
    <a><button>View more information</button></a>
</div>

<script>
    function color()
    {
        document.querySelector('.card').style.color = "red";
    }
</script>
