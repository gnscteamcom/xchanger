<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="http://bulma.io">
                <h1 class="title is-2">Dashboard</h1>
            </a>
            <div class="navbar-burger burger" data-target="navMenubd-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenubd-example" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item " href="./dashboard">
                        Dashboard
                    </a>
                    <a class="navbar-item" href="./dashboard/sell">
                        Sell Money
                    </a>
                    <a class="navbar-item" href="./dashboard/buy">
                        Buy Money
                    </a>
                    <a class="navbar-item" href="./dashboard/list">
                        List Bank
                    </a>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item" href="./dashboard/profile">
                        Profile
                    </a>
                    <a class="navbar-item" href="./dashboard/logout">
                        Logout
                    </a>
                </div>
            </div>
        </div>

    </div>
</nav>

<div class="container is-keren">
    <div class="columns">
        <div class="column is-3">
            @include('dashboard.sidebar')
        </div>
        <div class="column is-9">