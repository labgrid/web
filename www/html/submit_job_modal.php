<div class="modal fade" id="contact_modal" tabindex="-1" role="dialog" aria-labelledby="contact_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="submit_label">Submit A Job</h4>
            </div>
            <div class="modal-body">
                <form id="submit-form" class="form-horizontal" action="./submit.php" method="post">
                    <div class="form-group">
                        <label for="jobname-input" class="control-label col-lg-3">Job Name</label>
                        <div class="col-lg-8">
                            <input name="jpbname" id="jobname-input" class="form-control" type="text" placeholder="mycooljob">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exe-input" class="control-label col-lg-3">Name of Executable</label>
                        <div class="col-lg-8">
                            <input name="exe" id="exe-input" class="form-control" type="exe" placeholder="mycooljob.py">
                        </div>
                    </div>
                    <div class="form-group">  
                    <label for="file-input" class="control-label col-lg-3">File Upload</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                        Choose a file to upload: <input name="uploaded_file" type="file" />
                        <input type="submit" value="file" />
                    </div>
                    <div class="form-group">
                        <label for="human-confirmation" class="control-label col-lg-3">Confirm</label>
                        <div class="col-lg-8">
                            <div class="g-recaptcha" id="human-confirmation" data-sitekey="6LeajhATAAAAAEeSSdQ5capquuM1McWkuQwjqqEZ"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-lg-offset-3">
                            <input id="job-submit-button" type="submit" name="submit-button" class="btn btn-success" value="Send" disabled="true">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>