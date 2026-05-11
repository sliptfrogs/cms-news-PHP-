
 <?php include('sidebar.php');
//  function fetchPost(){
//     global $cn;
//     $sql = "SELECT * FROM `news` ORDER BY `id` DESC";
//     $res = $cn->query($sql);
//     if($res){
//         while($row = $res->fetch_assoc()){
//             echo '

//             <tr>
//             <td>'.$row['title'].'</td>
//             <td>'.$row['news_type'].'</td>
//             <td>'.$row['categories'].'</td>
//             <td><img width="100px" src="assets/thumb/'.$row['thumbnail'].'"></td>
//             <td class="fst-italic">'.$row['date'].'</td>
//             <td width="150px">
//                 <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#updatePost">Delete</button>
//                 <a href="update-Post.php?id='.$row['id'].'" class="btn btn-primary">Update</a>
//             </td>
//         </tr>

//             ';
//         }
//     }
//  }


 ?>
                <div class="col-10">
                    <div class="content-right" >
                        <div class="top ">
                            <h3 class="fw-bold text-center text-uppercase" >All jong deng News</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <table class="table table-secondary table-striped align-middle table-hover border-light text-center" style="table-layout:fixed;">
                                        <thead style="height: 50px;" class="align-middle table-dark">
                                            <tr>
                                                <th class="text-uppercase" width="120">Title</th>
                                                <th class="text-uppercase" width="100">Post Type</th>
                                                <th class="text-uppercase" width="100">Categories</th>
                                                <th class="text-uppercase">Publish Date</th>
                                                <th class="text-uppercase">Publish by</th>
                                                <th class="text-uppercase">View</th>
                                                <th class="text-uppercase">Thumbnail</th>
                                                <th class="text-uppercase" width="170">Actions</th>
                                            </tr>    
                                        </thead>
                                        <tbody id="postTbody">
                                            <?php 
                                                $page = isset($_GET['page'])?$_GET['page']:1;
                                                paginationNews($page,6);
                                                pagination('news',6);
                                            ?>
                                        </tbody>
                                    </table>

                                    <!-- Modal -->
                                    <div class="modal fade" id="updatePost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="" method="post">
                                                        <input type="hidden" class="value_remove" name="remove_id">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                                                        <button type="submit" name="btnPostYesDelete" class="btn btn-danger">Yes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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