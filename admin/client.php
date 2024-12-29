<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
    <div class="ui container grid">
        <div class="row">
            <div class="fifteen wide computer sixteen wide phone centered column center-table">
                <div class="ui divider"></div>
                <div class="ui grid">
                    <div class="sixteen wide computer sixteen wide phone centered column">
                        <!-- BEGIN DATATABLE -->
                        <div class="ui stacked segment">
                            <div class="ui blue ribbon icon label">Thông Tin Khách Hàng</div>
                            <br><br>
                            <table id="example" class="ui celled table responsive nowrap unstackable"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Thứ tự</th>
                                        <th>ID</th>
                                        <th>Họ</th>
                                        <th>Tên</th>
                                        <th>Giới tính</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>SDT</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <?php
                  // var_dump($dmsp);
                  if (isset($kq) && (count($kq) > 0)) {
                    $i = 1;
                    foreach ($kq as $client) {
                      $sex='';
                      if($client['sex']==1)
                      {
                        $sex='Nam';
                      }
                      elseif($client['sex']==2)
                      {
                        $sex='Nữ';
                      }
                      elseif($client['sex']==3)
                      {
                        $sex='Khác';
                      }
                      else
                      {
                        $sex='None';
                      }
                      // <td>'.$client['user'].'</td>
                      // <td>'.$client['password'].'</td>
                      echo '
                        <tr>
                          <td>'.$i.'</td>
                          <td>'.$client['id'].'</td>
                          <td>'.$client['lname'].'</td>
                          <td>'.$client['fname'].'</td>
                          <td>'.$sex.'</td>
                          <td>'.$client['address'].'</td>
                          <td>'.$client['email'].'</td>
                          <td>'.$client['phone'].'</td>
                          
                          <td>
                            <button  class="button-update"><a class="change-a" href="admin.php?act=updateform_client&id='.$client['id'].'">Cập nhật</a></button>
                          </td>
                        </tr>';
                      $i++;
                    }
                  }
                ?>

                            </table>
                            <div>
                                <!-- <button class="button-delete"><a class="change-a"
                                        href="admin.php?act=del_client&id='.$client['id'].'">Delete</a></button> -->

                                <!-- <button  class="button-insert"><a class="change-a" href="admin.php?act=insert_client&id='1'">Insert</a></button> -->
                            </div>
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
<!-- endinject -->

<script>
$(document).ready(function() {

    $(document).ready(function() {
        $('#example').DataTable();
    });
    table.buttons().container().appendTo(
        $('div.eight.column:eq(0)', table.table().container())
    );
});
</script>

</html>