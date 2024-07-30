<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh sách Tin tức</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=listnews" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Giới thiệu</th>
                            <th>Chi tiết</th>
                            <th>Ngày viết bài</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listnews as $news) {
                            extract($news);
                            $suanews = "?act=updatenews&id=".$id;
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $title ?></td>
                            <td><?= $intro?></td>
                            <td><?= $detail ?></td>
                            <td><?= $create_at ?></td>
                            <td>
                                <a href="<?= $suanews ?>">
                                <input type="button" value="Sửa">
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addnews"><input class="mr20" type="button" value="Thêm tin tức"></a>
                </div>
            </form>
        </div>
    </div>
</article>
