<?php require_once VIEWS.'/incs/header.php';?>
<h1 style="text-align: center;">Login</h1>
<div class="container-fluid">
    <form class="form-horizontal" action="login.php" method="post">
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Введите email">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Авторизоваться</button>
            </div>
        </div>
    </form>
</div>
<?php require_once VIEWS.'/incs/footer.php';?>