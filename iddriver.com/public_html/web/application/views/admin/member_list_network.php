 <body>
    <br><pre>
    
    <div class="col-md-12 panel panel-default">
        <table class="table   table-striped">
            <thead>
                <tr>
                    <td>ลำดับที่</td>
                    <td>ชื่อ สกุล</td>
                   
                    <td>เป็นสมาชิกของ</td>
                    <td>จำนวนสมาชิก</td>
                     
                </tr>
            </thead>
            <tbody>
                <?php 
                    $run=1;
                    foreach ($list_member as $key  ) {
                    # code...
                ?>
        
                    <tr>
                        <td><?php echo $run; ?></td>
                        <td><a href="<?php echo base_url();?>/index.php/admin/networkmember/<?php echo $key['ID']; ?>" target=_blank> <?php echo $key['name']; ?></a></td>
                        
                        <td><?php echo $key['parent_name']; ?></td>
                        <td><a href=#><?php echo $key['total_child']; ?></a></td>
       
                    </tr>
              <?php  $run++; } ?>
            </tbody>
        </table>
        <br><br>    <br><br>    <br><br>    <br><br>    <br><br>    <br><br>    <br><br>
    </div>
     
</body>
