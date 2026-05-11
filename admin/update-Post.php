<?php include('sidebar.php');
$id = $_GET['id'];
$page = $_GET['page'];
$sql = "SELECT * FROM `news` WHERE `id` = '$id'";
$res = $cn->query($sql);
$row = $res->fetch_assoc();
?> 
                 <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3 class="fw-bold text-center text-uppercase">Update jong deng News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form id="frmPost" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $id?>" name="idPostUpdate" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" value="<?php echo $row['title']?>" id="postTitle" name="postTitle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select type="text"  id="postType" name="postType" class="form-select">
                                            <option value="Sport" <?php echo ($row['news_type']==='Sport')?'selected':''?>>Sport</option>
                                            <option value="Social" <?php echo ($row['news_type']==='Social')?'selected':''?>>Social</option>
                                            <option value="Entertainment" <?php echo ($row['news_type']==='Entertainment')?'selected':''?>>Entertainment</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select id="postCategory" name="postCategory" class="form-select">
                                            <option value="">Options below</option>
                                            <option value="National" <?php echo ($row['categories']==='National')?'selected':''?>>National</option>
                                            <option value="International" <?php echo ($row['categories']==='International')?'selected':''?>>International</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="hidden" value="<?php echo $row['thumbnail']?>" name="old_thumb_image" id="" class="form-control">
                                        <input type="file"  id="postThumbnail" name="postThumbnail" class="form-control mb-3">
                                        <img height="100" src="assets/thumb/<?php echo $row['thumbnail']?>" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label>Banner</label>
                                        
                                        <input type="hidden" value="<?php echo $row['banner']?>" name="old_banner_image" id="" class="form-control">
                                        <input type="file" id="postBanner" name="postBanner" class="form-control mb-3">
                                        <img height="100" src="assets/banner/<?php echo $row['banner']?>" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea id="postDes" name="postDes" class="form-control"><?php echo $row['description']?></textarea>
                                    </div>
                                    <div class="form-group  float-end">
                                        <a href="view-post.php?page=<?php echo $page?>" id="add-post_cancel" name="add-post_cancel" class="btn btn-danger">Back</a>
                                        <button type="submit" id="add-post_submit" name="add-post_update" class="btn btn-primary">Update</button>
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