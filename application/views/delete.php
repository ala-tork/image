<h1 style="text-align:center;"> Delete Etudains  </h1>


<div class="card-deck" style=" float:left; margin-left:450px; border:solid 1px black;">
<?php foreach($data->result() as $row){ ?>
<div style="width:400px;">

  <div class="card" >

    <img src="<?php echo base_url(); ?>picture/<?php echo $row->img; ?>" style="padding:30px;"class="card-img-top" width="100" height="300"  >
    
    <div class="card-body">
      <h5 class="card-title"><?=$row->fullname; ?></h5>
      <p class="card-text"><?=$row->email?></p>
    </div>
    <div class="card-footer" >
    <center>
    
      <a href="<?= base_url();?>c1/delete_img/<?=$row->id;?>" class="btn btn-danger"> Delete </a><br/>
      <a href="<?=base_url();?>/c1/affiche"> <b><< Back</b> </a>
    </center>
    </div>
  </div>
  </div>
  <?php } ?>
</div>

