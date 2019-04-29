<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-secondary">
            <?php echo form_open_multipart('Home/do_upload');?>
                <div class="modal-body form-group">
<!--                     <label><b>Change Background</b></label>
                    <input type="file" name="background" style="color: black">
                    <hr> -->
                    <label ><b>Change Picture</b></label>
                    <input type="file" name="profil" style="color: black">
                    <hr>
                    <label ><b>Full Name :</b></label>
                    <input type="text" class="form-control" name="nama" placeholder="Title" id="post" style="font-size:20px">
                    <hr>
                    <label ><b>Description :</b></label>
                    <textarea class="form-control" rows="3" name="bio" placeholder="Description" style="width: 100%;">   </textarea>
                    <input type="hidden" class="form-control" name="user" value="<?php echo $_SESSION['success']; ?>">
                    <hr>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update" >
                </div>
            </form>
        </div>
    </div>
</div>
    
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>

</html>