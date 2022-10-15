
<?php 
if(!isset($_SESSION["rid"]))
{
?>

<div class="container mt-5 p-5 bg-dark text-white">
        <div class="form-group">
        <form method="post">
            <h2 class="text-center">Book a Table</h2>
            <hr class="border border-info border-2 w-25 mx-auto">
            <div class="form-group mt-2">
            <label>Book Your Table</label>

        
            <select class="form-control" name="day" >
                
                <option value="">select option</option>
                <?php
                foreach($selectday as $sd)
                {
                ?>
                
                <option value="<?php echo $sd["id"]?>"><?php echo $sd["Day"] ?></option>
                <?php
                }
                ?>
             </select>
            </div>
            <div class="form-group mt-2">
                <label>Select Your Date and Time</label>
                <input type="datetime-local" name="datetime" class="form-control mt-2" >
            </div>
            <div class="form-group mt-4">
                <button type="button" name="booktable" onclick="log()"  class="btn btn-outline-success">Book your Table >></button>
            </div>
        </form>
        </div>
    </div>

  <?php 
}
else 
{
    ?>


    <div class="container mt-5 p-5 bg-dark text-white">
        <div class="form-group">
        <form method="post" data-bvalidator-validate>
            <h2 class="text-center">Book a Table</h2>
            <hr class="border border-info border-2 w-25 mx-auto">
            <div class="form-group mt-2">
            <label>Book Your Table</label>

        
            <select class="form-control" name="day" data-bvalidator="required" >
                
                <option value="">select option</option>
                <?php
                foreach($selectday as $sd)
                {
                ?>
                
                <option value="<?php echo $sd["id"]?>"><?php echo $sd["Day"] ?></option>
                <?php
                }
                ?>
             </select>
            </div>
            <div class="form-group mt-2">
                <label>Select Your Date and Time</label>
                <input type="datetime-local" name="datetime" class="form-control mt-2" data-bvalidator="required">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <input type="text" name="fname" class="form-control" placeholder="FirstName" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter FirstName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <input type="text" name="lname" class="form-control" placeholder="LastName" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter LastName">
                    </div>
                </div>
            </div>
            <div class="form-group mt-2" data-bvalidator-validate>
                <input type="email" name="email" class="form-control" placeholder="Email"data-bvalidator="required">
            </div>
            <div class="form-group mt-2">
                <input type="number" name="phone" class="form-control" placeholder="Mobile" data-bvalidator="number,minlen[10],maxlen[10],required"  data-bvalidator-msg="Please Enter valid Mobile Number" >
            </div>
            <div class="form-group mt-4">
                <button type="submit" name="booktable"  class="btn btn-outline-success">Book your Table >></button>
            </div>
        </form>
        </div>
    </div>

    <?php 
    }
    ?>
    <script>
    function log()
    {
        alert('Want to book table Login First ?')
        window.location='login';
    }
  </script>