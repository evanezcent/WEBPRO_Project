<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/hover.css">
    <style>
        body {
            background-color: #001935;
            color: whitesmoke;
        }

        #sidebar>.list-group-item {
            padding: 0.4em 1em;
        }
/*        .hvr-float {
              display: inline-block;
              vertical-align: middle;
              -webkit-transform: perspective(1px) translateZ(0);
              transform: perspective(1px) translateZ(0);
              box-shadow: 0 0 1px rgba(0, 0, 0, 0);
              -webkit-transition-duration: 0.3s;
              transition-duration: 0.3s;
              -webkit-transition-property: transform;
              transition-property: transform;
              -webkit-transition-timing-function: ease-out;
              transition-timing-function: ease-out;
            }
        .hvr-float:hover, .hvr-float:focus, .hvr-float:active {
          -webkit-transform: translateY(-8px);
          transform: translateY(-8px);
        }*/

        #modall{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav id="navv" class="fixed-top navbar navbar-expand-md navbar-dark border border-white border-top-0 border-right-0 border-left-0" style="background-color : #001935;">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Pic - Q</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-md-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" hidden>Search</button>
            </form>
            <div class="float-right">
                <ul class="navbar-nav active">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url(); ?>">
                            <ion-icon name="home" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="compass" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="mail" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="chatbubbles" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="flash" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- ratanya kepotong -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="person" size="large"></ion-icon>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header">
                                <h6><small>ACCOUNT</small></h6>
                                <a href="" class="text-muted" style="text-decoration: none"><small>Log out</small></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><ion-icon name="heart"></ion-icon> Likes</a>
                            <a class="dropdown-item" href="#"><ion-icon name="settings"></ion-icon> Settings</a>
                            <a class="dropdown-item" href="#"><ion-icon name="help-circle"></ion-icon> Help</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header">
                                <h6><small>Pic - Q</small></h6>
                                <a href="" class="text-muted" style="text-decoration: none"><small>+ New</small></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex ml-3">
                                <a href="#fake">
                                    <img alt="" class="rounded" src="<?php echo base_url(); ?>assets/tempImage-min.jpg" alt="UNKNOWN" width="30px" height="30px">
                                </a>
                                <div class="ml-2">
                                    <small>
                                        <a href="<?php echo base_url(); ?>primer/blogprofil" style="color:black; text-decoration: none;"><b>pratamays</b></a><br>
                                        <p class="text-muted">Tama</p>
                                    </small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#"><small>Post</small></a>
                            <a class="dropdown-item" href="#"><small>Followers</small></a>
                            <a class="dropdown-item" href="#"><small>Activity</small></a>
                            <a class="dropdown-item" href="#"><small>Review flagged posts</small></a>
                            <a class="dropdown-item" href="#"><small>Edit appearance</small></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#postModal">
                            <ion-icon name="open" size="large"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>