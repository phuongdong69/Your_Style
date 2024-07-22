<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>ROLE</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listrole" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Vai Trò</th>                           
                            <th>Chức Năng</th>                           
                        </tr>
                        <?php
                        foreach ($listrole as $role) {
                            extract($role);
                            $suarole = "?act=updaterole&id=".$id;
                            
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $roleName?></td>
                            
                            <td>
                                <a href="<?= $suarole ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="?act=addrole"><input class="mr20" type="button" value="Thêm Role"></a>
                </div>
            </form>
        </div>
    </div>
</article>
