<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="thumbnail">
        <h4>&nbsp&nbsp<span class="glyphicon glyphicon-align-justify"></span>&nbsp&nbsp<?=$title?></h4>
        <!-- Hover Row Table -->
        <table class="table table-hover">
          <!-- table-striped table-bordered -->
          <thead>
            <th class="hidden-xs">No.</th>
            <th>Name</th>
            <th>Content</th>
            <th>Update</th>
            <th>Delete</th>
          </thead>    
          <tbody>
            <?php foreach($list as $item): ?>
              <tr>
                <td class="hidden-xs"><?=++$id ?></td>
                <td><?=$item->name ?></td>
                <td><?=$item->content ?></td>
                <td>
                  <a class="btn btn-link" href="<?php echo site_url('message/update/').$item->id;?>">
                  <span class="glyphicon glyphicon-edit"></span></a>
                </td>
                <td>
                  <a class="btn btn-link" href="<?php echo site_url('message/delete/').$item->id;?>">
                  <span class="glyphicon glyphicon-remove"></span></a>
                </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
        <!-- end Hover Row Table -->
        <a class="btn btn-info" href="#head"><span class="glyphicon glyphicon-arrow-up"></a>
        <!-- <a class="btn btn-warning" href="<?php echo site_url('message/getall');?>" role="button"><strong>GetAll</strong></a> -->
        <a class="btn btn-primary" href="<?php echo site_url('message/create');?>" role="button"><span class="glyphicon glyphicon-plus"></a>
      </div>
    </div>
  </div>
</div>

