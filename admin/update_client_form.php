<script>
function validateForm() {
    var lname = document.getElementsByName("last_name_c")[0].value;
    var fname = document.getElementsByName("first_name_c")[0].value;
    var sex = document.getElementsByName("sex_c")[0].value;
    var address = document.getElementsByName("address_c")[0].value;
    var email = document.getElementsByName("email_c")[0].value;
    var phone = document.getElementsByName("phone_c")[0].value;
    var user = document.getElementsByName("user_c")[0].value;
    var password = document.getElementsByName("password_c")[0].value;
    var ban = document.getElementsByName("ban_c")[0].value;

    if (lname == "") {
        alert("Please fill out last name!");
        return false;
    }
    if (fname == "") {
        alert("Please fill out first name!");
        return false;
    }
    if (sex == 0) {
        alert("Please fill out sex!");
        return false;
    }
    if (address == "") {
        alert("Please fill out address!");
        return false;
    }
    if (email == "") {
        alert("Please fill out email!");
        return false;
    }

    // Check if the email has a valid format
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address!");
        return false;
    }

    if (phone == "") {
        alert("Please fill out phone!");
        return false;
    }
    if (user == "") {
        alert("Please fill out user!");
        return false;
    }
    if (password == "") {
        alert("Please fill out password!!");
        return false;
    }
    if (ban == "") {
        alert("Please fill out ban!!");
        return false;
    }
    if (ban != "0" && ban != "1") {
        alert("Please enter ban true format!!");
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
                            <div class="ui blue ribbon icon label">Cập nhật thông tin khách hàng</div>
                            <br><br>
                            <?php
            //   echo var_dump($result);
              ?>
                            <form action="admin.php?act=updateform_client" method="POST" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <label>Họ <span style="color: red"> *</span></label>
                                <input type="text" name="last_name_c" value="<?=$result[0]['lname']?>"
                                    placeholder="Nhập họ"></input>
                                <label>Tên <span style="color: red"> *</span></label>
                                <input type="text" name="first_name_c" value="<?=$result[0]['fname']?>"
                                    placeholder="Nhập tên"></input>
                                <label>Giới tính <span style="color: red"> *</span></label>
                                <select name="sex_c" id="">
                                    <option value="0">Chọn giới tính</option>
                                    <?php
                        $sexcur=$result[0]['sex'];
                        if($sexcur=='1')
                        {
                            echo '<option value="1" selected>Nam</option>';
                            echo '<option value="2">Nữ</option>';
                            echo '<option value="3">Khác</option>';
                        }
                        elseif($sexcur=='2')
                        {
                            echo '<option value="2" selected>Nữ</option>';
                            echo '<option value="1">Nam</option>';
                            echo '<option value="3">Khác</option>';
                        }
                        elseif($sexcur=='3'){
                            echo '<option value="3" selected>Khác</option>';
                            echo '<option value="1">Nữ</option>';
                            echo '<option value="2">Nam</option>';
                        }
                        else{
                            echo '<option value="1">Nam</option>';
                            echo '<option value="2">Nữ</option>';
                            echo '<option value="3">Khác</option>';
                        }
                      ?>
                                </select>
                                <label>Địa chỉ <span style="color: red"> *</span></label>
                                <input type="text" name="address_c" value="<?=$result[0]['address']?>"
                                    placeholder="Please enter address"></input>
                                <label>Email <span style="color: red"> *</span></label>
                                <input type="text" name="email_c" value="<?=$result[0]['email']?>"
                                    placeholder="Please enter email"></input>
                                <label>SDT <span style="color: red"> *</span></label>
                                <input type="text" name="phone_c" value="<?=$result[0]['phone']?>"
                                    placeholder="Please enter phone"></input>
                                <label>Tài khoản <span style="color: red"> *</span></label>
                                <input class="banban" type="text" name="user_c" value="<?=$result[0]['user']?>"
                                    placeholder="Please enter user" readonly></input>
                                <label>Mật khẩu <span style="color: red"> *</span></label>
                                <input type="text" name="password_c" value="<?=$result[0]['password']?>"
                                    placeholder="Please enter password"></input>
                                <br>
                                <label>Cấm tài khoản <span style="color: red"> *</span></label>
                                <input type="text" name="ban_c" value="<?=$result[0]['ban']?>"
                                    placeholder="Please enter ban just 0 or 1"></input>
                                <br>
                                <input type="hidden" name="id" value="<?=$result[0]['id']?>">
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