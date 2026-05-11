 <?php include('sidebar.php')?> 
                 <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3 class="fw-bold text-center text-uppercase">Add jong deng News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form id="frmPost" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="postTitle" name="postTitle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select type="text" id="postType" name="postType" class="form-select">
                                            <option value="Sport">Sport</option>
                                            <option value="Social">Social</option>
                                            <option value="Entertainment">Entertainment</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select id="postCategory" name="postCategory" class="form-select">
                                            <option value="National">National</option>
                                            <option value="International">International</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thumbnail <font color="red" class="fw-bold">(Size 350 x 200)</font></label>
                                        <input type="file" id="postThumbnail" name="postThumbnail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Banner <font color="red" class="fw-bold">(Size 730 x 415)</font></label>
                                        <input type="file" id="postBanner" name="postBanner" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="postDes" name="postDes" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group float-end">
                                        <a href="view-post.php" id="add-post_cancel" name="add-post_cancel" class="btn btn-danger mb-3">Cancel</a>
                                        <button type="submit" id="add-post_submit" name="add-post_submit" class="btn btn-primary mb-3">Submit</button>
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