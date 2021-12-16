<div class="content-box-content">

    <div class="tab-content default-tab" id="tab1">
        <!-- This is the target div. id must match the href of this div's tab -->

        <table>

            <thead>
                <tr>
                    <th><input class="check-all" type="checkbox" /></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                </tr>

            </thead>

            <tfoot>

                <tr>
                    <td colspan="6">
                        <div class="pagination">
                            <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo;
                                Previous</a>
                            <a href="#" class="number" title="1">1</a>
                            <a href="#" class="number" title="2">2</a>
                            <a href="#" class="number current" title="3">3</a>
                            <a href="#" class="number" title="4">4</a>
                            <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                        </div> <!-- End .pagination -->
                        <div class="clear"></div>
                    </td>
                </tr>
            </tfoot>

            <tbody>
                <?php
                    foreach($dataLoai as $loai){
                ?>

                <tr>
                    <td><input type="checkbox" /></td>
                    <td><?php echo $loai["maloai"] ?></td>
                    <td><?php echo $loai["tenloai"] ?></td>
                 </tr>
                <?php
                                    }
                                ?>
            </tbody>

        </table>

    </div> <!-- End #tab1 -->
</div>