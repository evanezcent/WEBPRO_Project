<!-- Modal post-->
<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div id="modall" class="modal-dialog modal-dialog-centered" role="document" width="100%" style="max-width:unset;" data-backdrop="static" data-keyboard="false">
        <div class="modal-content" style="background:transparent;">
            <ul id="modalList" class="list-inline mx-auto justify-content-center ">
                <li class="text-center list-inline-item">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalText">
                        <img class="rounded-circle" src="<?php echo base_url('assets/aa_post.png'); ?>" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Text</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalFoto">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/cam_post.png" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Photo</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalQuote">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/quote_post.png" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Quote</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalLink">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/link_post.png" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Link</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalChat">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/hi_post.png" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Chat</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalChat">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/headset_post.ico" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Audio</p>
                    </a>
                </li>
                <li class="text-center list-inline-item ml-3 mt-3">
                    <a href="" class="hvr-float" data-toggle="modal" style="color:white; text-decoration: none;" data-target="#modalVideo">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/video_post.png" alt="" width="100px" height="100px">
                        <p class="font-weight-lighter mt-1">Video</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- post text -->
<div class="modal fade" id="modalText" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>primer/postText" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Title" id="post" style="font-size:30px">
                        <textarea class="form-control" rows="5" name="caption" placeholder="Your text here"></textarea>
                        <input type="text" class="form-control" name="tag" placeholder="#tags" id="tag" style="font-size:13px">
                        <input type="hidden" class="form-control" name="user" value="
                        <?php 
                            if (isset($_SESSION['success'])) {
                                echo $_SESSION['success'];
                            }
                            else{
                                echo "GAGAL";
                            }
                         ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- post foto -->
<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#"><?php echo $_SESSION['success']; ?></a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
                <div class="modal-body form-group">
                    <?php echo form_open_multipart('Primer/do_upload');?>
                        <input type="file" name="file" style="color: black">
                        <textarea class="form-control" rows="3" name="caption" placeholder="Your text here" style="width: 100%;">   </textarea>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Post" >
                        <input type="hidden" class="form-control" name="user" value="<?php echo $_SESSION['success']; ?>">
                         <input type="text" class="form-control" name="tag" placeholder="#tags" id="tag" style="font-size:13px">
                    </form>
                </div>
        </div>
    </div>
</div>
<!-- post quote -->
<div class="modal fade" id="modalQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
<!-- post link -->
<div class="modal fade" id="modalLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
<!-- post chat -->
<div class="modal fade" id="modalChat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
<!-- post audio -->
<div class="modal fade" id="modalAudio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
<!-- post video -->
<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small class="font-weight-bold" style="color:black;">pratamays</small>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                        <a class="dropdown-item" href="#">pratamays</a>
                    </div>
                </div>

                <!-- opsi -->
                <div>
                    <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <ion-icon name="settings"></ion-icon>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                        <a class="dropdown-item" href="#">ini opsi</a>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>

<!-- edit text modal -->
<?php foreach($posting as $data) : ?>
    <div class="modal fade" id="modalEditText<?= $data['idPosting']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownAkun" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <small class="font-weight-bold" style="color:black;">pratamays</small>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAkun">
                            <a class="dropdown-item" href="#">pratamays</a>
                        </div>
                    </div>

                    <!-- opsi -->
                    <div>
                        <a class="modal-title dropdown-toggle text-muted" href="#" id="dropdownOpsi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="settings"></ion-icon>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownOpsi">
                            <a class="dropdown-item" href="#">ini opsi</a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" id="post" value="<?= $data['postText']; ?>" style="font-size:30px">
                        <textarea class="form-control" rows="5" placeholder="Your text here" ><?= $data['caption']; ?></textarea>
                        <input type="text" class="form-control" placeholder="#tags" id="tag" style="font-size:13px">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Post</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>

</html>