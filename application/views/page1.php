
  <div class="container" >
  <div class="row" >
  <div class="col-3"></div>
  <div class="col-6" style="background-color:lightblue;" >
    <h2 style="text-align:center;">Add Students </h2>

    <form action="<?php echo base_url();?>C1/insert_img" method="post" enctype="multipart/form-data">
        <div class="form-group" >
        <label for="exampleInputName">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
         <small id="namelHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
         <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
        </div>
            <label for="exampleFormControlFile1">Shose ur image</label>
           <!-- <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">-->
            <input type="file" name="image" class="form-control">
            <center><input type="submit" name="submit"class="btn btn-primary" value="Insert"> <br/>
            <a href="<?=base_url();?>/c1/affiche"> <b><< Back</b> </a></center>
        </div>
        
    </form>
    

</div> 
</div>
 </div>






