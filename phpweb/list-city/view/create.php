<?php
    if(isset($message)){
        echo "<p class='alert-info'>$message</p>";
    }
?>
<div align="center" class="khung">
    <div>
        <h2>Thêm thành phố</h2>
    </div>
    <div>
        <form method="post">
            <table border="1" cellpadding="5" class="cot">
                <tr>
                    <th>Tên:</th>
                    <td>
                        <input type="text" name="name" id="name" size="65" required/>
                    </td>
                </tr>
                <tr>
                    <th>Quốc gia:</th>
                    <td>
                        <input type="text" name="country" id="country" size="65" required/>
                    </td>
                </tr>
                <tr>
                    <th>Diện tích:</th>
                    <td>
                        <input type="number" name="area" id="area" size="65" required/>
                    </td>
                </tr>
                <tr>
                    <th>Dân số:</th>
                    <td>
                        <input type="number" name="population" id="population" size="65" required/>
                    </td>
                </tr>
                <tr>
                    <th>GDP:</th>
                    <td>
                        <input type="number" name="GDP" id="GDP" size="65" required />
                    </td>
                </tr>
                <tr>
                    <th>Giới thiệu:</th>
                    <td>
                        <input type="text" name="description" id="description" size="65" required/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input class="btn btn-warning" type="submit" value="Nhập thành phố"/>
                        <a class="btn btn-warning" href="index.php">Thoát</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
