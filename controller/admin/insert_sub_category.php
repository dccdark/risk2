<?php
$chk_row = $func->getRows("select cat_id "
        . " from sys_sub_category "
        . " where sub_name = '$_POST[sub_name]' "
        . " AND cat_id = '$_POST[cat_id]' ");
if($chk_row < 1){
$StrSQL = "insert into  sys_sub_category (sub_cat_id,sub_name,cat_id)
				values ('','$_POST[sub_name]','$_POST[cat_id]') ";
//echo $StrSQL;
$result = mysql_query($StrSQL)or die(mysql_error());

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('sub_category')."'>";
}else{
echo "<script>alert('ชื่อความเสี่ยงซ้ำ กรุณาบันทึกใหม่')</script>";
echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('sub_category')."'>";    
}
?> 
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>