<?php

//index.php

?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jQuery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Tambler.css">

	<title>Pick-Q/Inbox</title>
</head>
<body style="background-color:#001935;">

	<tr>
		<td>
			<div class="pp">
				<img class="rounded" src="lul.png">
			</div>
		</td>
		<td>
			<div id="post_box" style="background-color: white" class="col-lg-4 rounded">
				<p style="color: #C0C0C0" class="font-weight-bold ">Anonymous Said:</p>
				<p>Hi there, nice to meet you!</p>
				<i class=" fas fa-ellipsis-h" ></i>
				<span><i class="fas fa-pen" data-toggle="modal" data-target="#myReply"></i></span>
					<div class="modal fade" id="myReply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  						<div class="modal-dialog" role="document">
    						<div class="modal-content">
     							<div class="modal-header">
        							<h5 class="modal-title" id="exampleModalLabel">Reply your inbox</h5>
        							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         								<span aria-hidden="true">&times;</span>
        							</button>
      							</div>
   								<form>
      								<div class="modal-body">
         								<textarea class="form-control" id="reply" rows="3" placeholder="Reply..."></textarea>
      								</div>
      								<div class="modal-footer">
       									<button type="button" type="submit" class="btn btn-primary">Reply</button>
      								</div>
   								</form>
    						</div>
  						</div>
					</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="pp2">
				<img class="rounded" src="lul.png">
			</div>
		</td>
		<td>
			<div id="post_box2" style="background-color: white" class="col-lg-4 rounded">
				<p style="color: #C0C0C0" class="font-weight-bold ">Anonymous Said:</p>
				<p>I miss you!</p>
				<span><i class=" fas fa-ellipsis-h" ></i></span>
				<span><i class="fas fa-pen" data-toggle="modal" data-target="#myReply"></i></span>
					<div class="modal fade" id="myReply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  						<div class="modal-dialog" role="document">
    						<div class="modal-content">
     							<div class="modal-header">
        							<h5 class="modal-title" id="exampleModalLabel">Reply your inbox</h5>
        							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         								<span aria-hidden="true">&times;</span>
        							</button>
      							</div>
   								<form>
      								<div class="modal-body">
         								<textarea class="form-control" id="reply" rows="3" placeholder="Reply..."></textarea>
      								</div>
      								<div class="modal-footer">
       									<button type="button" type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">Reply</button>
      								</div>
   								</form>
                  <span id="reply_inbox"></span>
                  <div id="display_reply"></div>
    						</div>
  						</div>
					</div>
			</div>
		</td>
	</tr>
	<tr>
    <td>
      <div class="pp2">
        <img class="rounded" src="lul.png">
      </div>
    </td>
    <td>
      <div id="post_box2" style="background-color: white" class="col-lg-4 rounded">
        <p style="color: #C0C0C0" class="font-weight-bold ">Anonymous Said:</p>
        <p>I miss you!</p>
        <span><i class=" fas fa-ellipsis-h" ></i></span>
        <span><i class="fas fa-pen" data-toggle="modal" data-target="#myReply"></i></span>
          <div class="modal fade" id="myReply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Reply your inbox</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <form>
                      <div class="modal-body">
                        <textarea class="form-control" id="reply" rows="3" placeholder="Reply..."></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">Reply</button>
                      </div>
                  </form>
                  <span id="reply_inbox"></span>
                  <div id="display_reply"></div>
                </div>
              </div>
          </div>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div class="pp2">
        <img class="rounded" src="lul.png">
      </div>
    </td>
    <td>
      <div id="post_box2" style="background-color: white" class="col-lg-4 rounded">
        <p style="color: #C0C0C0" class="font-weight-bold ">Anonymous Said:</p>
        <p>I miss you!</p>
        <span><i class=" fas fa-ellipsis-h" ></i></span>
        <span><i class="fas fa-pen" data-toggle="modal" data-target="#myReply"></i></span>
          <div class="modal fade" id="myReply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Reply your inbox</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <form>
                      <div class="modal-body">
                        <textarea class="form-control" id="reply" rows="3" placeholder="Reply..."></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" type="submit" class="btn btn-primary" name="submit" id="submit" value="Submit">Reply</button>
                      </div>
                  </form>
                  <span id="reply_inbox"></span>
                  <div id="display_reply"></div>
                </div>
              </div>
      </div>
    </td>
  </tr>
	

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<script>
  $(document).ready(function(){
    $('#reply').on('submit', function(event){
      event.preventDefault();
      var form_data= $(this).serialize();
      $.ajax({
        url:"add_reply.php",
        method: "POST",
        data: form_data,
        dataType:"JSON",
        success:function(data)
        {
            if(data.error !=''){
              $('.modal-body')[0].reset();
              $('#reply').html(data.error);
            }
        }
      })
    })
  });

  function load_reply(){
    $.ajax({
      url: "fetch_reply.php",
      method:"POST",
      success:function(data){
        $('#display_reply').html(data)
      }
    })
  }
</script>