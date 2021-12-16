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
                        <th>Mã nhà xuất bản</th>
                        <th>Tên nhà xuất bản</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                        foreach($dataNxb as $nhaxb){
                    ?>

                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo $nhaxb["manxb"] ?></td>
                        <td><?php echo $nhaxb["tennxb"] ?></td>
                    </tr>
                    <?php
                                    }
                                ?>
                </tbody>

            </table>

        </div> <!-- End #tab1 -->
    </div> <!-- End .content-box-content -->

</div>