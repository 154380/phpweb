<div align="center" class="khung">
    <div>
        <h2>Chỉnh sửa thành phố <?php echo $city->name; ?> </h2>
    </div>
    <div>
        <form method="post" action="./index.php?page=edit">
            <input type="hidden" name="id" value="<?php echo $city->id; ?>"/>
            <table border="1" cellpadding="5" class="cot">
                <tr>
                    <th>Tên:</th>
                    <td>
                        <input type="text" name="name" id="name" size="65" required
                               value="<?php echo $city->name; ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Quốc gia:</th>
                    <td>
                        <input type="text" name="country" id="country" size="65" required
                               value="<?php echo $city->country; ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Diện tích:</th>
                    <td>
                        <input type="number" id="area" name="area" size="65" required
                               value="<?php echo $city->area; ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Dân số:</th>
                    <td>
                        <input type="number" id="population" name="population" size="65" required
                               value="<?php echo $city->population; ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>GDP:</th>
                    <td>
                        <input type="number" id="GDP" name="GDP" size="65" required
                               value="<?php echo $city->GDP; ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>Giới thiệu:</th>
                    <td>
                        <input type="text" id="description" name="description" size="65" required
                               value="<?php echo $city->description; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="btn btn-warning" type="submit" value="Cập nhật"/>
                        <a class="btn btn-warning" href="index.php">Thoát</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>