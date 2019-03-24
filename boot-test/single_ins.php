<?php
    include 'includes/db.php';
    if( isset( $_POST['submit'] ) ){}
    {
        $p_name = $_POST['name'];
        $p_pr_bf = $_POST['price_before'];
        $p_pr_af = $_POST['price_after'];
        $p_link = $_POST['link'];
        $p_group = $_POST['group'];
        $p_img = $_POST['img'];
        $p_desc = $_POST['desc'];
        $p_start = $_POST['start'];
        $p_end = $_POST['end'];
        $p_cat = $_POST['cat'];
        $p_brand = $_POST['brand'];
        $p_gender = $_POST['gender'];
        $insert_sng = "insert into t1 (name,t_group,t_link,t_before,t_after,t_img) values ('$p_name','$p_group','$p_link','$p_pr_bf','$p_pr_af','$p_img')";
        //,t_desc,t_start,t_end
        $run = mysqli_query($con,$insert_sng);
    
    }
?>





<form method = "POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">название акции</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">цена до</label>
    <input type="text" name="price_before" class="form-control" id="exampleFormControlInput2" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">цена после</label>
    <input type="text" name="price_after" class="form-control" id="exampleFormControlInput3" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput4">ссылка</label>
    <input type="text" name="link" class="form-control" id="exampleFormControlInput4" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput5">группа</label>
    <input type="text" name="group" class="form-control" id="exampleFormControlInput5">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput6">изображение</label>
    <input type="text" name="img" class="form-control" id="exampleFormControlInput6" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput7">описание</label>
    <textarea type="text" name="desc" class="form-control" id="exampleFormControlInput7" rows = "3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput8">начало</label>
    <input type="text" name="start" class="form-control" id="exampleFormControlInput8" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput9">конец</label>
    <input type="text" name="end" class="form-control" id="exampleFormControlInput9" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput10">категория</label>
    <input type="text" name="cat" class="form-control" id="exampleFormControlInput10" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput11">бренд</label>
    <input type="text" name="brand" class="form-control" id="exampleFormControlInput11" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">пол</label>
    <select class="form-control" name = "gender" id="exampleFormControlSelect1">
      <option>M</option>
      <option>W</option>
      <option></option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">добавить</button>
</form>