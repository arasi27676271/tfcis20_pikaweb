<?php
/* Smarty version 3.1.29, created on 2018-03-09 14:27:54
  from "D:\UniServerZ\www\pika\templates\goods_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5aa299ea02d256_57778424',
  'file_dependency' => 
  array (
    'f875ce0e00a7bbd4a46244ef724836e0e0b114f8' => 
    array (
      0 => 'D:\\UniServerZ\\www\\pika\\templates\\goods_form.html',
      1 => 1520605669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa299ea02d256_57778424 ($_smarty_tpl) {
echo '<script'; ?>
>
    function openFile(event){
    var input = event.target; //取得上傳檔案
    var reader = new FileReader(); //建立FileReader物件
  
    reader.readAsDataURL(input.files[0]); //以.readAsDataURL將上傳檔案轉換為base64字串
  
    reader.onload = function(){ //FileReader取得上傳檔案後執行以下內容
      var dataURL = reader.result; //設定變數dataURL為上傳圖檔的base64字串
      $('#output').attr('src', dataURL).show(); //將img的src設定為dataURL並顯示
    };
  }
<?php echo '</script'; ?>
>
<h1>編輯單元</h1>
<form action="good.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-md-2 control-label">單元名稱：</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="請輸入單元名稱" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">單元內容：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="goods_content" id="goods_content" placeholder="請輸入單元內容"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-lanel">單元補充：</label>
        <div class="col-md-10">
            <textarea class="form-control" name="goods_another" id="goods_another" placeholder="請輸入單元補充"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_another'];?>
</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">上傳檔案：</label>
        <div class="col-md-10">
            <input type="file" name="goods_file" id="goods_file">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">單元圖片：</label>
        <div class="col-md-10">
            <input type="file" name="goods_pic" id="goods_pic" accept="image/gif, image/jpeg, image/png, image/jpg" onchange="openFile(event)">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="thumbnail">
                        <img id="output" height="200" style="display:none">
                    </a>
                </div>
            </div>
            <br>
            <?php if (isset($_smarty_tpl->tpl_vars['goods_pic']->value)) {?>
            <div class="row">
              <div class="col-md-6">
                <a href="#" class="thumbnail">
                <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
                </a>
            </div>
          </div>
          <?php }?>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-2 control-label">面板位置：</label>
      <div class="col-md-10">
        <input type="hidden" name="panel_sn" id="panel_sn" value="<?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_sn'];?>
">
        <p class="text-danger bg-danger"><?php echo $_smarty_tpl->tpl_vars['panel']->value['panel_title'];?>
</p>
      </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_sn']) && $_smarty_tpl->tpl_vars['goods']->value['goods_sn'] > 0) {?>
                <input type="hidden" name="op" value="update_goods">
                <input type="hidden" name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
">
            <?php } else { ?>
                <input type="hidden" name="op" value="insert_goods">
            <?php }?>
            <button type="submit" class="btn btn-primary">儲存內容</button>
        </div>
    </div>
</form><?php }
}
