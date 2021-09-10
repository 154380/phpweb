<div class="khung">
    <div class="tieude">
        <h2>Danh sách thành phố </h2>
    </div>
    <br>
    <div style="padding-left: 470px;">
        <a class="btn btn-warning" href="./index.php?page=create" id="themtp">Thêm thành phố</a>
    </div>
    <div>
        <form method="post">
            <input type="text" name="txtSearch" id="txtSearch" size="15" />
            <a class="btn btn-warning" href="#">Search</a>
        </form>
    </div>
    <br>
    <div>
        <table border="3" cellpadding="18">
            <thead>
            <tr class="cot1">
                <th>STT</th>
                <th>Thành phố</th>
                <th>Quốc gia</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cities as $key => $city): ?>
            <tr class="cot">
                <td><?php echo ++$key ?></td>
                <td><?php echo $city->name ?></td>
                <td><?php echo $city->country ?></td>
                <td align="center">
                    <a class="btn btn-warning" href="./index.php?page=edit&id=<?php echo $city->id; ?>">Chỉnh sửa</a>
                    <a class="btn btn-warning" href="./index.php?page=delete&id=<?php echo $city->id; ?>">Xóa</a>
                </td>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
