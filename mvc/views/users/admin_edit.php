<h3>User Edit</h3>
<br>
<form action="" method="post" style="width:400px">
    <input class="form-control" type="hidden" name="id" value="<?php echo $data['user']['id']; ?>">
    <input class="form-control" name="login" placeholder="Login" value="<?php echo $data['user']['login']; ?>"><br>
    <input class="form-control" name="email" placeholder="Email" value="<?php echo $data['user']['email']; ?>"><br>
    <input class="form-control" name="role" placeholder="Role" value="<?php echo $data['user']['role']; ?>"><br>
    <input class="form-control" name="password" placeholder="Password" value=""><br>
    <input type="submit" value="Save" class="btn btn-sm btn-success">
</form>