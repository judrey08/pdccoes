
        
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~ notification modal ~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 
        <!--start modal code-->
        
        <!-- Modal -->
        <div class="modal fade " id="newNoti" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="newNoti"><i class="fas fa-scroll"></i> New Notification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method = "POST" id = "addForm">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name" required>
                                    </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" type="submit" >Send message</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <!--end modal code-->

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~ script ~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
