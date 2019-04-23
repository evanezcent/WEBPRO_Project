<style>
	.modal-body{
		max-height: 377px;
		overflow-y: auto ;
	}
	.bubbleComment{
		margin-bottom: 5px;
		border-radius: 0.3em!important;
		background-color: whitesmoke!important;
		color: black!important;
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
	.bubbleProfile{
		height: 24px;
		width: 24px;
	}
	input:focus{
		border-color: none;
	}
	.modal>.modal-dialog>.modal-content{
		width: 20em!important;
	}
</style>

<div class="modal fade" id="modalKomen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h7 class="modal-title text-dark font-weight-bold" id="titleBoxComment">x notes</h7>
            </div>
            <div class="modal-body">
<!--				start perulangan comment-->
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
								<small><p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p></small>
							</div>
						</div>
					</div>
				</div>
<!--				end perulangan comment-->
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
								<small><p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p></small>
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
								<small><p>blalabflbsflkandnald adiwodhaoi hdhahfiohaofgaablfvo naj sdj andinaijdnans ajidfhboi aa cw icnqu9nwc</p></small>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="modal-footer" style="padding-left: 2px">
                <form action="" class="form-inline" id="">
					<div class="row">
						<div class="col-9 px-0">
                    		<input class="form-control" id="inputKomen" type="text" placeholder="Add to the discussion" aria-label="">
						</div>
						<div class="col-3 px-0">
                    		<button class="btn" type="submit">Reply</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>
