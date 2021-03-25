<?php
    include('../view/admin/header.php');
	
function display_date($var)
{
    $shift = 7 * 3600;
    return date("d/m/Y / H:i", $var + $shift);
}
?>
<section id="page-wrapper">
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-info">Thống kê
				<span class="pull-right">
					<form action="" method="GET">
					<input type="hidden" name="action" value="thongke" />
					Chọn tháng:
					<select name="thang">
						<option value="0">Tất cả</option>
						<?php
						for ($i = 1; $i <= 12; $i++)
						{
							Echo '<option value="'.$i.'">'.$i.'</option>';
						}
						?>
					</select>
					<input type="submit" value="Xem" />
					</form>
				</span>
			</div>
        </div>
        <div class="col-xs-12 table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th></th>
                  <th>STT</th>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Giá</th>
                  <th>Vị trí</th>
                  <th>Ngày order</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $ad = new m_product();
					if (isset($_GET['thang']))
					{
						$admin = $ad->get_orderss($_GET['thang']);
					}
					else
					{
						$admin = $ad->get_orderss();
					}
                    $stt = 1;
                    while ($set = $admin->fetch())
					{
                ?>
                <tr>
                  <td width="150px">
                      <a href="?action=xoaOrder&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>  
                  <th scope="row"><?php echo $stt++; ?></th>
                  <td><?php echo $set['id']; ?></td>
                  <td><?php echo $set['product_order']; ?></td>
                  <td><?php echo $set['price']; ?></td>
                  <td><?php echo $set['vitri']; ?></td>
                  <td><?php echo display_date($set['time']); ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
			<?php
			if ($stt == 1)
			{
				Echo '<div class="alert alert-warning">Không có dữ liệu</div>';
			}
			?>
        </div>
    </div>
</section>
<?php
    include('../view/admin/footer.php');
?>
