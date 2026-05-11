  <?php 
  include('functions/conn.php');
  include('sidebar.php');
  $id = $_GET['id'];
  $page = $_GET['page'];
    $sql = "SELECT * FROM `logos` WHERE `id` = '$id'";
    $rs = $cn->query($sql);
    $row = $rs->fetch_assoc();
  ?>
  <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3 class="fw-bold text-center text-uppercase">Update jong deng Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form id="frmLogo"  method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $id?>" name="idToUpdate" id="idToUpdate" class="form-control">
                                        <input type="hidden" value="<?php echo $row['image']?>" name="old_logo" id="">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status_logo" id="status_logo" class="form-select">
                                            <option value="Header" <?php echo ($row['status']==='Header')?'selected':''?>>Header</option>
                                            <option value="Footer" <?php echo ($row['status']==='Footer')?'selected':''?>>Footer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="image_logo" id="image_logo" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <img height="100" src="assets/icon/<?php echo $row['image']?>" alt=".jpg" sizes="">
                                    </div>
                                    <div class="form-group float-end bottom-0 end-0 mx-5 position-absolute">
                                        <a href="view-logo.php?page=<?php echo $page?>" id="update-logo_cancel" name="update-logo_cancel" class="btn btn-danger">Cancel</a>
                                        <button type="submit" id="update-logo_success" name="update-logo_success" class="btn btn-success">Submit</button>
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