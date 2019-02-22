

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~ announcement modal ~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 
        <!--start modal code-->
        
        <!-- Modal -->
        <div class="modal fade" id="newAnnouncement" role="dialog">
            <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="newAnnouncement"><i class="fas fa-bullhorn"></i> New Announcement</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="/action_page.php" >
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Subject Title:</label>
                                <input type="text" class="form-control" id="subject-title" required>
                                    </div>
                            <div class="form-group">
                                
                                <label for="message-text" class="col-form-label">Body:</label>
                                <textarea class="form-control" id="message-text" required></textarea>
                            </div>
                              
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" type="submit" >Post Announcement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end modal code-->