



<?php echo validation_errors(); ?>

<?php echo form_open('login/user') ?>
<?php// echo form_open('login/userlogin')?>
<table boder="0">
<tr>
 <td> <label for="username">用户名</label></td> 
 <td> <input type="input" name="username" /></td>
</tr>
<tr>
 <td> <label for="password">密码</label></td>
 <td> <input type="password" name="password"></input></td>
</tr>
</table>
  <br />
<!--  <input type="submit" name="login" value="登录" />-->

  <input type="submit" name="register" value="注册" />  

</form>
