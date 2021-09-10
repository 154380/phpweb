<body>
<div align="center" class="khung">
    <div>
        <h2>Xóa thành phố</h2>
    </div>
    <br>
    <div>
        <h5>Bạn có chắc chắn muốn xóa thành phố <?php echo $city->name; ?> ? </h5>
    </div>
    <br>
    <div>
        <form method="post" action="./index.php?page=delete">
            <input type="hidden" name="id" value="<?php echo $city->id; ?>"/>
            <input class="btn btn-warning" type="submit" value="Xóa"/>
            <a class="btn btn-warning" href="index.php">Thoát</a>
        </form>
    </div>
</div>
</body>