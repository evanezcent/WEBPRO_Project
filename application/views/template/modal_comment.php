<style>
	.modal-body {
		max-height: 377px;
		overflow-y: auto;
	}

	.bubbleComment {
		margin-bottom: 5px;
		border-radius: 0.3em !important;
		background-color: whitesmoke !important;
		color: black !important;
		overflow: hidden;
	}

	.bodyBubble {
		padding: 0 5% 0 5% !important;
		padding-bottom: 0.1%;
		background-color: white;
		height: 100%;
	}

	.headerBubble {
		margin: 0 5% !important;
	}

	.bubbleProfile {
		height: 24px;
		width: 24px;
	}

	input:focus {
		border-color: none;
	}

	.modal>.modal-dialog>.modal-content {
		width: 20em !important;
	}
</style>

<div class="modal fade" id="modalKomen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title text-dark font-weight-bold" id="titleBoxComment">x notes</h6>
			</div>
			<div class="modal-body" id="komenBuble">
				<!--				start perulangan comment-->
				<!-- <div class="row">
					<div class="col-2">
						<div>
							<img src="assets/tempImage-min.jpg" class="bubbleProfile">
						</div>
					</div>
					<div class="col-9 px-0">
						<div class="bubbleComment">
							<div class="headerBubble">
								<h6><small class="font-weight-bold">pratamays</small></h6>
							</div>
							<div class="bodyBubble">
								<small>
									<p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p>
								</small>
							</div>
						</div>
					</div>
				</div>
								end perulangan comment
				<div class="row">
					<div class="col-2">
						<div>
							<img src="assets/tempImage-min.jpg" class="bubbleProfile">
						</div>
					</div>
					<div class="col-9 px-0">
						<div class="bubbleComment">
							<div class="headerBubble">
								<h6><small class="font-weight-bold">pratamays</small></h6>
							</div>
							<div class="bodyBubble">
								<small>
									<p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p>
								</small>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<div>
							<img src="assets/tempImage-min.jpg" class="bubbleProfile">
						</div>
					</div>
					<div class="col-9 px-0">
						<div class="bubbleComment">
							<div class="headerBubble">
								<h6><small class="font-weight-bold">pratamays</small></h6>
							</div>
							<div class="bodyBubble">
								<small>
									<p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p>
								</small>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="modal-footer" style="padding-left: 2px">
				<form action="" class="form-inline" id="theComment">
					<div class="row">
						<div class="col-9 px-0">
							<input class="form-control" name="comment" id="inputKomen" type="text" placeholder="Add to the discussion" aria-label="">
							<input type="hidden" value="<?php echo $_SESSION['success']; ?>" name="commentUser">
							<input type="hidden" value="" name="idPosting" id="idPosting">
						</div>
						<div class="col-3 px-0">
							<button id="replyComment" class="btn" type="submit">Reply</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
	$(document).on("click", "#komen", function () {
     var myBookId = $(this).data('id');
     $(".modal-footer #idPosting").val( myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
	});
	getData();

	function getData() {
		$.ajax({
			type: 'GET',
			url: '<?= base_url(); ?>/primer/getComment/',
			dataType: 'JSON',
			success: function(data) {
				console.log(data);
				var baris = '';
				var user;
				for (let i = 0; i < data.length; i++) {
					if (data.idPosting == <?= $data['idPosting'] ?>) {
						baris += '<div class="row">' +
							'<div class="col-2">' +
							'<div>' +
							'<img src="profil/default.png" class="bubbleProfile">' +
							'</div>' +
							'</div>' +
							'<div class="col-9 px-0">' +
							'<div class="bubbleComment">' +
							'<div class="headerBubble">'
							'<h6><small class="font-weight-bold">' + data.username + '</small></h6>' +
							'</div>' +
							'<div class="bodyBubble">' +
							'<small>' +
							'<p>' + data.Komentar + '</p' +
							'</small>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'</div>' +
							// '<tr>' +
							// 	'<td class = "text-center" >' + data[i].nama + '</td>' +
							// 	'<td class = "text-center" >' + data[i].nim + '</td>' +
							// 	'<td class = "text-center" >' + data[i].email + '</td>' +
							// 	'<td class = "text-center" >' + data[i].jurusan + '</td>' +
							// 	'<td class = "text-center" >' +
							// 	'<a href = "' + '<?= base_url(); ?>welcome/hapus/' + data[i].id + '" class = "badge badge-danger float-center" onclick = "return confirm(' + 'Apakah anda yakin menghapus data ini?' + ');" > hapus </a>' +
							// 	'<a href = "' + '<' + '?=base_url();' + '?>welcome/ubah/' + data[i].id + '" class = "badge badge-success float-center" onclick = "return confirm(' + 'Apakah anda yakin mengedit data ini?' + ');" ? > ubah </a>' +
							// 	'</td>' +
							// 	'</tr>';
					}
					$('#komenBuble').html(baris);
				}
			}
		});
	}


	$("#theComment").submit(function(e) {
		e.preventDefault();
		// var nama = $('#nama').val();
		// var nim = $('#nim').val();
		// var email = $('#email').val();
		// $("#jurusann").change(function() {
		//     var jurusan = $('#jurusann').val();
		// });
		// var jurusan = ('#jurusann').val();
		var dataForm = $(this);
		console.log("A")
		$.ajax({
			url: '<?= base_url(); ?>primer/comment',
			type: 'POST',
			// data: {
			//     nama: nama,
			//     nim: nim,
			//     email: email,
			//     jurusan: 'Iformatika'
			// },
			data: dataForm.serialize(),
			dataType: 'JSON',
			error: function() {

				alert('Something is wrong');

			},
			// console.log("A");
			success: function(data) {
				getData();
				alert("Record added successfully");
			}
		});
	});
</script>