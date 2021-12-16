<div class="content-box">
    <!-- Start Content Box -->
    <div class="content-box-header">

   
        <h3>Tất cả sách</h3>

        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Table</a></li>
            <!-- href must be unique and match the id of target div -->
        </ul>

        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

        <div class="tab-content default-tab" id="tab1">
            <!-- This is the target div. id must match the href of this div's tab -->

            <table>

                <thead>
                    <tr>
                        <th><input class="check-all" type="checkbox" /></th>
                        <th>Mã sách</th>
                        <th>Tên sách</th>
                        <th>Giá</th>
                    </tr>

                </thead>

                    <?php
                        foreach($dataSach as $sach){
                    ?>

                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo $sach["masach"] ?></td>
                        <td><?php echo $sach["tensach"] ?></td>
                        <td><?php echo $sach["gia"] ?></td>
                        <td>
                            <!-- Icons -->
                            <a href="index.php?controller=sach&action=edit&masach=<?php echo $sach["masach"] ?>"
                                title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="index.php?controller=sach&action=delete&masach=<?php echo $sach["masach"] ?>"
                                title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>

                        </td>
                    </tr>
                    <?php
                                    }
                                ?>
                </tbody>

            </table>

        </div> <!-- End #tab1 -->
    </div> <!-- End .content-box-content -->

</div><!-- End .content-box -->
<div class="clear"></div>