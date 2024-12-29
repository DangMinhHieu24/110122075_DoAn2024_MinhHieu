<script>
function validateForm() {
  var name = document.getElementsByName("name_product")[0].value;
  var old_prices = document.getElementsByName("oldprices_product")[0].value;
  var prices = document.getElementsByName("prices_product")[0].value;
  var quantity = document.getElementsByName("quantity_product")[0].value;
  var view = document.getElementsByName("view_product")[0].value;
  var special = document.getElementsByName("special_product")[0].value;
  var description = document.getElementsByName("description_product")[0].value;
  var size = document.getElementsByName("size_product")[0].value;
  var iddm = document.getElementsByName("iddm")[0].value;
  var idee = document.getElementsByName("idee")[0].value;
  var idsup = document.getElementsByName("idsup")[0].value;

  if (name=="" || old_prices=="" || prices=="" || quantity=="" || view=="" || special=="" || description=="" || size=="" || iddm=="" || idee=="" || idsup=="") {
    alert("Missing information!");
    return false;
  }
  return true;
}
</script>

<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
  <div class="ui container grid">
    <div class="row">
      <div class="fifteen wide computer sixteen wide phone centered column center-table">
        <div class="ui divider"></div>
        <div class="ui grid">
          <div class="sixteen wide computer sixteen wide phone centered column">
            <!-- BEGIN DATATABLE -->
            <div class="ui stacked segment">
              <div class="ui blue ribbon icon label">Cập nhật thông tin gian hàng</div>
              <br><br>
              <?php
              // echo var_dump($result);
              ?>
              <form action="admin.php?act=updateform_product" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <label>Tên</label>
                    <input type="text" name="name_product" value="<?=$result[0]['product_name']?>" placeholder="Tên gian hàng"></input>
                    <label>Giá cũ</label>
                    <input type="text" name="oldprices_product" value="<?=$result[0]['old_prices']?>" placeholder="Vui lòng nhập giá cũ" ></input>
                    <label>Giá cuối</label>
                    <input type="text" name="prices_product" value="<?=$result[0]['product_prices']?>" placeholder="Nhập giá cuối cùng" ></input>
                    <label>Số lượng</label>
                    <input type="text" name="quantity_product" value="<?=$result[0]['quantity']?>" placeholder="Vui lòng nhập số lượng" ></input>
                    <label>Hiển thị</label>
                    <input type="text" name="view_product" value="<?=$result[0]['view']?>" placeholder="1 hiện 2 ẩn" ></input>
                    <label>Đặc biệt</label>
                    <input type="text" name="special_product" value="<?=$result[0]['special']?>" placeholder="1 hiện 2 ẩn" ></input>
                    <label>Mô tả</label>
                    <input type="text" name="description_product" value="<?=$result[0]['description']?>" placeholder="Vui lòng nhập mô tả" ></input>
                    <label>Size</label>
                    <input type="text" name="size_product" value="<?=$result[0]['size']?>" placeholder="Vui lòng nhập size"  pattern="[A-Za-z]+" ></input>
                    <label>Danh mục sản phẩm</label>
                    <select name="iddm" id="">
                      <?php
                        $iddmcur=$result[0]['catalog_id'];
                        if(isset($dmsp))
                        {
                          foreach($dmsp as $dm)
                          {
                            if($dm['id_catalog_k']==$iddmcur)
                            {
                              echo '<option value="'.$dm['id_catalog_k'].'" selected>'.$dm['catalog_name'].'</option>';
                            }
                            else
                            {
                              echo '<option value="'.$dm['id_catalog_k'].'">'.$dm['catalog_name'].'</option>';
                            }
                          }
                        }
                      ?>
                    </select>
                    <select name="idee" id="">
                      <?php
                        if(isset($dmee))
                        {
                          foreach($dmee as $us)
                          {
                            if($us['user']==$_SESSION['name'])
                            {
                                echo '<option value="'.$us['id'].'" selected>'.$us['name_us'].'</option>';
                            }
                          }
                        }
                      ?>
                    </select>
                    <br>
                    <select name="idsup" id="">
                      <?php
                        $idsupcur=$result[0]['sup_id'];
                        if(isset($dmsup))
                        {
                          foreach($dmsup as $sup)
                          {
                            if($sup['sup_id']==$idsupcur)
                            {
                              echo '<option value="'.$sup['sup_id'].'" selected>'.$sup['sup_name'].'</option>';
                            }
                            else
                            {
                              echo '<option value="'.$sup['sup_id'].'">'.$sup['sup_name'].'</option>';
                            }
                          }
                        }
                      ?>
                    </select>
                    <br>

                    <label>Ảnh</label>
                    <br>
                      <input type="file" name="img_product" value="<?=$result[0]['product_name']?>" placeholder="Nhập ảnh" ></input>
                    <br>
                    <br>
                    <label>Ảnh cũ</label>
                    <br>
                    <img src="../uploads/<?= $result[0]['product_img'] ?>" width="80px">
                    <input type="hidden" name="id" value="<?=$result[0]['id_product']?>">
                    <input type="submit" name="submit" value="Update"></input>
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
<script src="vendors/jquery/jquery.min.js">
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
<!-- endinject -->

<script>
$(document).ready(function() {
  $('#example').DataTable();
  table.buttons().container().appendTo(
    $('div.eight.column:eq(0)', table.table().container())
  );
});
</script>

</html>
