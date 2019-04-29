<div class="mt-5 rounded">
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
                        if ( $_SESSION['success'] == $user['username']){
                            if ($user['fotoProfil'] == ""){
                                $foto = "default.png";
                            }
                            else{
                                $foto = $user['fotoProfil'];
                            }
                        }
                    endforeach
                ?>
                <img class="rounded-circle" src="<?php echo base_url(); ?>profil/<?php echo $foto ?>" width="200px" height="200px"alt="">
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
                                }
                                else{
                                    echo "GAGAL";
                                }
                            ?>
                        </p>
                        <small class="text-muted">
                            <p>
                                <?php 
                                    if (isset($_SESSION['success'])) {
                                        echo $_SESSION['success'];
                                    }
                                    else{
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
                                }
                                else{
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
                                }
                                else{
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
                        <input type="checkbox" class="custom-control-input" id="switch3" >
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
                        <input type="checkbox" class="custom-control-input" id="switch4" >
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
                                }
                                else{
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
                                }
                                else{
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
                            }
                            else{
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
    <div class="col mt-5">

    </div>
