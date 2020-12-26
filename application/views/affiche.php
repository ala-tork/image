<h1 style="text-align:center;"> les Etudains  </h1>
<div style="padding:50px;">
<a href="<?=base_url()?>c1/index" class="btn btn-success" style="float:right;"> Add studient </a>
</div>
<div class="card-deck" style="padding-left:100px;border:solid 1px black;">
<?php foreach($data->result() as $row){ ?>
    <div style="width:400px;">
  <div class="card" style="padding:50px;">
    <img src="<?php echo base_url(); ?>picture/<?php echo $row->img; ?>" class="card-img-top" width="100" height="300"  >
    <div class="card-body">
      <h5 class="card-title"><?=$row->fullname; ?></h5>
      <p class="card-text"><?=$row->email?></p>
    </div>
    <div class="card-footer" >
    <center>
      <a href="<?= base_url(); ?>c1/update/<?=$row->id;?>" class="btn btn-primary" > update </a>
      <a href="<?= base_url();?>c1/delete/<?=$row->id;?>" class="btn btn-danger"> Delete </a>
    </center>
    </div>
  </div>
  </div>
  <?php } ?>
</div>

