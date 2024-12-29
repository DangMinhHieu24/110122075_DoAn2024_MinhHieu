

<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
  <div class="ui container grid">
    <div class="row">
      <div class="fifteen wide computer sixteen wide phone centered column center-table">
        <div class="ui divider"></div>
        <div class="ui grid">
          <div class="sixteen wide computer sixteen wide phone centered column">
            <!-- BEGIN DATATABLE -->
            <div class="ui stacked segment">
              <div class="ui blue ribbon icon label">Nhập thông tin sản phẩm mới</div>
              <br><br>
              <?php
              // echo var_dump($result);
              ?>
                <form action="admin.php?act=insert_product" method="POST" enctype="multipart/form-data">
                    <label>Tên</label>
                    <input type="text" name="name_product" placeholder="Tên sản phẩm"></input>
                    <label>Giá cũ</label>
                    <input type="text" name="old_prices_product" placeholder="Nhập giá cũ" ></input>
                    <label>Giá cuối</label>
                    <input type="text" name="prices_product" placeholder="Nhập giá cuối" ></input>
                    <label>Số lượng</label>
                    <input type="text" name="quantity_product" placeholder="Nhập số lượng" ></input>
                    <label>Hiển thị</label>
                    <input type="text" name="view_product" placeholder="1 hiện 2 ẩn" ></input>
                    <label>Đặc biệt</label>
                    <input type="text" name="Special_product" placeholder="Nhập sản phẩm đặc biệt" ></input>
                    <label>Mô tả</label>
                    <input type="text" name="Description_product" placeholder="Vui lòng nhập mô tả" ></input>
                    <label>Size</label>
                    <input type="text" name="size_product" placeholder="Nhập Size"  pattern="[A-Za-z]+"></input>
                    <label>Danh mục sản phẩm</label>
                    <select name="iddm" id="">
                      <option value="0">Chọn danh mục</option>
                      <?php
                        if(isset($dmsp))
                        {
                          foreach($dmsp as $dm)
                          {
                            echo '<option value="'.$dm['id_catalog_k'].'">'.$dm['catalog_name'].'</option>';
                          }
                        }
                      ?>
                    </select>
                    <br>
                    <label>Quản lí gian hàng</label>
                    <select name="idee" id="">
                      <option value="0">Chọn quản lí</option>
                      <?php
                        if(isset($dmee))
                        {
                          foreach($dmee as $us)
                          {
                            if($us['user']==$_SESSION['name'])
                            {
                                echo '<option value="'.$us['id'].'" selected>'.$us['name_us'].'</option>';
                            }
                            // if($us['role_us']==1)
                            // {
                            //   echo '<option value="'.$us['id'].'">'.$us['name_us'].'</option>';
                            // }
                          }
                        }
                      ?>
                    </select>
                    <br>
                    <label>Nhà cung cấp</label>
                    <select name="idsup" id="">
                      <option value="0">Chọn nhà cung cấp</option>
                      <?php
                        if(isset($dmsup))
                        {
                          foreach($dmsup as $sup)
                          {
                              echo '<option value="'.$sup['sup_id'].'">'.$sup['sup_name'].'</option>';
                          }
                        }
                      ?>
                    </select>
                    <label>Ảnh</label>
                    <br>
                    <br>
                      <input type="file" name="img_product" placeholder="Chọn ảnh"></input>
                    <br>
                    <input type="submit" name="submit" value="Xong"></input>
                </form>
            </div>
            <!-- END DATATABLE -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT --> 
</div>
</body>
<!-- inject:js -->
<script src=" vendors/jquery/jquery.min.js">
</script>
<script src="vendors/fomantic-ui/semantic.min.js"></script>
<script src="js/main.js"></script>
<!-- endinject -->
<!-- datatables:js -->
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net/datatables.net-se/js/dataTables.semanticui.min.js"></script>
<script src="vendors/datatables.net/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net/datatables.net-responsive-se/js/responsive.semanticui.min.js"></script>
<script src="vendors/datatables.net/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="vendors/datatables.net/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net/datatables.net-buttons-se/js/buttons.semanticui.min.js"></script>
<script src="vendors/jszip/jszip.min.js"></script>
<script src="vendors/pdfmake/pdfmake.min.js"></script>
<script src="vendors/pdfmake/vfs_fonts.js"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<!-- endinject -->

</html>