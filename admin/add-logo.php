            <?php include('sidebar.php')?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3 class="fw-bold text-center text-uppercase">Add jong deng Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form id="frmLogo" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="title_logo" id="title_logo" class="form-select">
                                            <option value="Header">Header</option>
                                            <option value="Footer">Footer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="image_logo" id="image_logo" class="form-control">
                                    </div>
                                    <div class="form-group float-end bottom-0 end-0 position-absolute mx-3">
                                        <a href="view-logo.php" id="add-logo_cancel" class="btn btn-danger">Cancel</a>
                                        <button type="submit" id="add-logo_success" name="add-logo_success" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>