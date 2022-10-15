  
  <!-- Modal -->
  <div class="modal fade" id="reg" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content p-5">
        <div class="row">
          <h2 class="text-center">Register with Us</h2>
          <hr class="border border-secondary border-2 w-50 mx-auto">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <form action="" method="post" data-bvalidator-validate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mt-4">
                                        <input type="text" name="fname" placeholder="FirstName" class="form-control" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter FirstName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-4">
                                        <input type="text" name="lname" placeholder="LastName" class="form-control" data-bvalidator="alpha,required" data-bvalidator-msg="Please Enter LastName">
                                    </div>
                             </div>
                             <div class="form-group mt-4">
                                <input type="email" name="email" placeholder="Email" class="form-control" data-bvalidator="required">
                             </div>
                             <div class="form-group mt-4">
                                <input type="password" name="pass" placeholder="Password" class="form-control" id="pass" data-bvalidator="passwordFormat,required" data-bvalidator-msg="Please Enter Password Min 8 characters including a number, letters a-z, A-Z">
                             </div>
                             <div class="form-group mt-4">
                                <input type="password" name="cpass" placeholder="Confirm Password" class="form-control" id="cpass" data-bvalidator="equal[pass],required" data-bvalidator-msg-equal="Please enter the same password again">
                             </div>
                             <div class="form-group mt-4">
                                <input type="text" name="phone" placeholder="Mobile" class="form-control" data-bvalidator="number,minlen[10],maxlen[10],required"  data-bvalidator-msg="Please Enter valid Mobile Number">
                             </div>
                             <div class="form-group mt-4">
                               Male <input type="radio" name="gender" value="Male" >
                               Female <input type="radio" name="gender" value="Female" data-bvalidator="required" data-bvalidator-msg="Select radio" >
                             </div>
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" name="reg" class="btn btn-outline-success btn-lg" value="Register!">
                                <input type="reset" class="btn btn-outline-danger btn-lg" value="Reset">
                            </div>
                        </form>
                    </div>  
                
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>