<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
.but{
  border-radius: 30px;
  height: 40px;
  width: 200px;
  background-color: grey;
  color:#fff;
  
}
.but:hover{
  background-color: #fff; 
  color:#000;
}
@media only screen and (max-width: 700px)   {
.for{
  width: 100% !important;
}
}
@media only screen and (max-width: 1000px)   {
.for{
  width: 80% !important;
}
}
</style>
<h3 class="text-center">Contact Form</h3>
<form  method="POST">
        <div class="card p-3 w-100 for mb-3 m-auto " >
          <div class="card-body">
            <div class="form-group ">
              <label for="">Enter Your Nom :</label>
                <input type="text" class="form-control" name="Nom" required>
            </div>
            <div class="form-group mt-4">
              <label for="">Enter Your Email Adress :</label>
                <input type="email" class="form-control" name="Email"  required >
            </div>
            <div class="form-group mt-4">
              <label for="">Enter Your Object :</label>
                <input type="text" class="form-control" name="Object"  required >
            </div>
            <div class="form-group mt-4 ">
              <label for="">Type In Your Messege  :</label>
              <textarea name="Massege" id="" class="form-control col-lg-5 d-inline"  rows="5" required></textarea>
            </div>
               <button type="submit"  name="contact" class="mt-4 but " >Send</button>
            </div>
            </div>
          </div>
      </form>
      <?php
      if(isset($_POST['contact']) )
      {    
          require __DIR__."/mailer/mail.php";
          $mail->setFrom($_POST['Email'], $_POST['Nom']);
          $mail->addAddress('hellnot127@gmail.com');
          $mail->Subject = $_POST['Object'];
          $mail->Body    = $_POST['Email']."  ".$_POST['Massege'];
              
          $mail->send();
  
          echo  "<script>alert('email has been send')</script> ";
      }
      ?>
