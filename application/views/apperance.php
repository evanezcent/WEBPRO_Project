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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/comment.css">
    <style>
        body {
            background-color: #001935;
            color: whitesmoke;
        }

        body .row .col-7 #formEdit {
            background-color: white;
            color: black;
        }

        body .row .col a {
            text-decoration: none;
            color: white;
        }

        body .row .col #newBlog{
            font-size: 0.7em;
        }

        body .row .col a .text-muted {
            font-size: 12px;
        }

        body .row .col hr {
            background-color: white;
        }
    </style>

</head>

<body class="container">
    <nav class="l-header fixed-top navbar navbar-expand-lg navbar-dark border border-white border-top-0 border-right-0 border-left-0 py-0" style="background-color : #001935;">
        <a class="navbar-brand" href="<?php echo base_url('Primer'); ?>">Pic - Q</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTumblr" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navTumblr">
            <div id="searching">
                <form class="form-inline my-2 my-md-0" id="search-field">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" hidden>Search</button>
                </form>
            </div>
            <div class="float-right">
                <ul class="navbar-nav active">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('primer'); ?>">
                            <ion-icon name="home" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>primer/explorer">
                            <ion-icon name="compass" size="large"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>primer/inbox">
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
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <div class="dropdown-header">
                                <h6><small>ACCOUNT</small></h6>
                                <a href="<?php echo base_url('Home/logout'); ?>" class="text-muted" style="text-decoration: none"><small>Log out</small></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <ion-icon name="heart"></ion-icon> Likes
                            </a>
                            <a class="dropdown-item" href="#">
                                <ion-icon name="settings"></ion-icon> Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <ion-icon name="help-circle"></ion-icon> Help
                            </a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header">
                                <h6><small>Pic - Q</small></h6>
                                <a href="" class="text-muted" style="text-decoration: none"><small>+ New</small></a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex ml-3">
                                <?php
                                foreach ($akun as $user) :
                                    if ($_SESSION['success'] == $user['username']) {
                                        if ($user['fotoProfil'] == "") {
                                            $foto = "default.png";
                                        } else {
                                            $foto = $user['fotoProfil'];
                                        }
                                    }
                                endforeach
                                ?>
                                <a href="#fake">
                                    <img alt="" class="rounded" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" alt="UNKNOWN" width="30px" height="30px">
                                </a>
                                <div class="ml-2">
                                    <small>
                                        <a href="<?php echo base_url(); ?>primer/profil" style="color:black; text-decoration: none;"><b>
                                                <?php
                                                if (isset($_SESSION['success'])) {
                                                    echo $_SESSION['success'];
                                                } else {
                                                    echo "GAGAL";
                                                }
                                                ?>
                                            </b></a><br>
                                        <?php
                                        foreach ($akun as $user) :
                                            if ($_SESSION['success'] == $user['username']) { ?>
                                                <p class="text-muted"><?php echo $user['nama']; ?></p>
                                            <?php   }
                                    endforeach
                                    ?>
                                    </small>
                                </div>
                            </div>
                            <a class="dropdown-item" href="#"><small>Post</small></a>
                            <a class="dropdown-item" href="#"><small>Followers</small></a>
                            <a class="dropdown-item" href="#"><small>Activity</small></a>
                            <a class="dropdown-item" href="#"><small>Review flagged posts</small></a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>primer/apperance"><small>Edit appearance</small></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row mt-5 rounded">
        <!-- main -->
        <div class="col-7 ml-5 mt-5">
            <div class="pt-2" style="background-color: white">
                <!-- FORM foto -->
                <div class="mt-2 ml-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalUser" style="color: white">Edit</button>
                    <br>
                </div>
                <div class="text-center pb-3">
                    <?php
                    foreach ($akun as $user) :
                        if ($_SESSION['success'] == $user['username']) {
                            if ($user['fotoProfil'] == "") {
                                $foto = "default.png";
                            } else {
                                $foto = $user['fotoProfil'];
                            }
                        }
                    endforeach
                    ?>
                    <img class="rounded-circle" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" width="200px" height="200px" alt="">
                </div>
            </div>
            <div id="formEdit">
                <!-- label -->
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Username</b></label>
                    </div>
                    <div class="col d-flex justify-content-between">
                        <div>
                            <p>
                                <?php
                                if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                } else {
                                    echo "GAGAL";
                                }
                                ?>
                            </p>
                            <small class="text-muted">
                                <p>
                                    <?php
                                    if (isset($_SESSION['success'])) {
                                        echo $_SESSION['success'];
                                    } else {
                                        echo "GAGAL";
                                    }
                                    ?>.blog.picq.xom
                                </p>
                            </small>
                        </div>
                        <a class="text-muted" href="">
                            <ion-icon name="create" size="large"></ion-icon>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Website Theme</b></label>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-secondary">Theme</button><br>
                        <small>
                            <p class="text-muted">Change how you look on https://pratamays.tumblr.com</p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Likes</b></label>
                    </div>
                    <div class="col">
                        <!-- Default checked -->
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch1" checked>
                            <label class="custom-control-label" for="switch1">Share posts you like</label>
                        </div>
                        <small>
                            <p class="text-muted">Make your likes public at: tumblr.com/liked/by/
                                <?php
                                if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                } else {
                                    echo "GAGAL";
                                }
                                ?>
                            </p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Following</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch2" checked>
                            <label class="custom-control-label" for="switch2">Share the Tumblrs you're following</label>
                        </div>
                        <small>
                            <p class="text-muted">Make your follows public at: tumblr.com/followed/by/
                                <?php
                                if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                } else {
                                    echo "GAGAL";
                                }
                                ?>
                            </p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Replies</b></label>
                    </div>
                    <div class="col">
                        <p>
                            ----------
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Ask</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch3">
                            <label class="custom-control-label" for="switch3">Let people ask questions</label>
                        </div>
                        <small>
                            <p class="text-muted">Send your audience to /ask to ask you questions.</p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Submissions</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch4">
                            <label class="custom-control-label" for="switch4">Let people submit posts</label>
                        </div>
                        <small>
                            <p class="text-muted">Send your audience to /submit to submit posts into your submission queue for approval.</p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Messaging</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch5">
                            <label class="custom-control-label" for="switch5">Only allow messages from Tumblrs you follow</label>
                        </div>
                        <small>
                            <p class="text-muted">Tumblrs you don't follow won't be able to start conversations with you.</p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Advertising</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch6" checked>
                            <label class="custom-control-label" for="switch6">On-blog advertising</label>
                        </div>
                        <small>
                            <p class="text-muted">Allow ads on your Tumblr. <a href="">Learn more.</a></p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Affiliate links</b></label>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch7" checked>
                            <label class="custom-control-label" for="switch7">Change unaffiliated links into Tumblr affiliate links</label>
                        </div>
                        <small>
                            <p class="text-muted">If you use your own affiliate code, we'll leave your links alone.</p>
                        </small>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Queue</b></label>
                    </div>
                    <div class="col">
                        <p>----------------</p>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Twitter</b></label>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-primary">Share on Twitter</button>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Language</b></label>
                    </div>
                    <div class="col">
                        <p>===================</p>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Timezone</b></label>
                    </div>
                    <div class="col">
                        <p>===================</p>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Visibility</b></label>
                    </div>
                    <div class="col">
                        <div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch8">
                                <label class="custom-control-label" for="switch8">Hide <?php
                                                                                        if (isset($_SESSION['success'])) {
                                                                                            echo $_SESSION['success'];
                                                                                        } else {
                                                                                            echo "GAGAL";
                                                                                        }
                                                                                        ?>.tumblr.com</label>
                            </div>
                            <small>
                                <p class="text-muted">This Tumblr will only be viewable within the Tumblr dashboard. Learn more</p>
                            </small>
                        </div>
                        <div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch9">
                                <label class="custom-control-label" for="switch9">Hide
                                    <?php
                                    if (isset($_SESSION['success'])) {
                                        echo $_SESSION['success'];
                                    } else {
                                        echo "GAGAL";
                                    }
                                    ?> from search results</label>
                            </div>
                            <small>
                                <p class="text-muted">It'll be hidden from Tumblr searches, and from external search engines like Google or Yahoo. Learn more</p>
                            </small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Blocked Pic - Q</b></label>
                    </div>
                    <div class="col">
                        <p>Nobody</p>
                    </div>
                </div>
                <hr>
                <div class="row ml-4 mr-3">
                    <div class="col-3">
                        <label><b>Export</b></label>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-secondary">Download Backup</button>
                        <button class="btn btn-sm btn-secondary">Export
                            <?php
                            if (isset($_SESSION['success'])) {
                                echo $_SESSION['success'];
                            } else {
                                echo "GAGAL";
                            }
                            ?>
                        </button>
                    </div>
                </div>
                <hr>
                <div class="row mr-2 pb-3 justify-content-end">
                    <button class="btn btn-sm btn-secondary">Delete Account</button>
                </div>
            </div>
        </div>

        <!-- sidebar -->
        <div class="col mt-5 ml-2" style="color: white">
            <a href="">
                <div>
                    <h6><b>Account</b></h6>
                    <h6 class="text-muted">The essentials</h6>
                </div>
            </a>
            <hr>
            <a href="">
                <div>
                    <h6><b>Dashboard</b></h6>
                    <h6 class="text-muted">Appearance option, text editor</h6>
                </div>
            </a>
            <hr>
            <a href="">
                <div>
                    <h6><b>Notifications</b></h6>
                    <h6 class="text-muted">Via email & mobile</h6>
                </div>
            </a>
            <hr>
            <a href="">
                <h6><b>Apps</b></h6>
                <h6 class="text-muted">Things you've connected</h6>
            </a>
            <hr>
            <a href="">
                <div>
                    <h6><b>Privacy</b></h6>
                    <h6 class="text-muted">Personalization and data management</h6>
                </div>
            </a>
            <hr>
            <a href="">
                <div>
                    <h6><b>Labs</b></h6>
                    <h6 class="text-muted">Weird new stuff we're making</h6>
                </div>
            </a>
            <br>
            <h6><b>Blogs</b></h6>
            <?php
            foreach ($akun as $user) :
                if ($_SESSION['success'] == $user['username']) {
                    if ($user['fotoProfil'] == "") {
                        $foto = "default.png";
                    } else {
                        $foto = $user['fotoProfil'];
                    }
                    $username = $user['username'];
                    $nama = $user['nama'];
                }
            endforeach
            ?>
            <div class="d-flex">
                <img alt="" class="rounded" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" alt="UNKNOWN" width="45px" height="45px">

                <div class="ml-2">
                    <b><?= $user['username']; ?></b>
                    <p class="text-muted" style="margin-bottom : 0;"><small><?= $user['nama']; ?></small></p>
                </div>
            </div>
            <a href="#" id="newBlog" class="text-muted">Create a new blog</a>
        </div>
    </div>