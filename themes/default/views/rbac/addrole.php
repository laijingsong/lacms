<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <ul class="nav nav-tabs">
     <li><a href="index.php?r=rbac/index">角色管理</a></li>
     <li class="active"><a href="index.php?r=rbac/addrole">添加角色</a></li>
  </ul>
  <form class="form-horizontal J_ajaxForm" action="" method="post" id="myform">
  <div class="table_full">
      <table width="100%" cellpadding="2" cellspacing="2">
        <tr>
          <th width="180">角色名称</th>
          <td><input type="text" name="name" value="" class="input" id="rolename"></input><span class="must_red">*</span></td>
        </tr>
        <tr>
          <th>角色描述</th>
          <td><textarea name="remark" rows="2" cols="20" id="remark" class="inputtext" style="height:100px;width:500px;"></textarea></td>
        </tr>
        <tr>
          <th>是否启用</th>
          <td>
          	<label class="radio inline" for="active_true">
            		<input type="radio" name="status" value="1" checked id="active_true"/>开启
            </label>
            <label class="radio inline" for="active_false">
            		<input type="radio" name="status" value="0" id="active_false">禁止
            </label>
          </td>
        </tr>
      </table>
  </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">提交</button>
        <a class="btn" href="index.php?r=rbac/index">返回</a>
    </div>
    </form>
</div>
