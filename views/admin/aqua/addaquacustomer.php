
<div class="adda-cust">
<h1>Add Aqua Customers</h1>
<div class="addaaquaform" ng-controller="Addaquactrl">
<form name="addaaquaform" class="form-horizontal form-label-left" nonvalidate>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customer Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Customer Name" class="form-control" ng-model="aquacustomers.acustomer_name" id="acustomer_name" class="form-control" name="acustomer_name" required />
                           </div>
                          <p class="val-style" ng-show="addaaquaform.acustomer_name.$invalid && !addaaquaform.acustomer_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customer Email <span class="required">*</span>
                        </label>
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="aquacustomers.acustomer_email" id="acustomer_email" class="form-control" name="acustomer_email" >
                        </div>

                          <p class="val-style" ng-show="addaaquaform.acustomer_email.$invalid && !addaaquaform.acustomer_email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Customer Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 ">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Customer Number" ng-model="aquacustomers.acustomer_number"  ng-pattern="/^[0-9]{10}$/"  id="acustomer_number" class="form-control" name="acustomer_number" >
                        </div>
                          <p class="val-style" ng-show="addaaquaform.acustomer_number.$invalid && !addaaquaform.acustomer_number.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customer Address<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Customer Address" class="form-control" ng-model="aquacustomers.acustomer_address" id="acustomer_address" class="form-control" name="acustomer_address" required />
                           </div>
                          <p class="val-style" ng-show="addaaquaform.acustomer_address.$invalid && !addaaquaform.acustomer_address.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="aquacustomers.acustomer_type" name="acustomer_type" ng-class="{'has-errors' : addaaquaform.acustomer_type.$invalid, 'no-errors' : addaaquaform.acustomer_type.$valid}" ng-required="true">
                            <option value="" selected>Customer Type</option>
                            <option value="temporary">temporary</option>
                            <option value="Regular">Regular</option>
                          </select>
                        </div>
                          <div class="error-container" ng-show="addaaquaform.acustomer_type.$dirty && addaaquaform.acustomer_type.$invalid" ng-messages="addaaquaform.acustomer_type.$error">
                         <div class="val-style" class="error" ng-message="required">select customer type </div>
                          </div>
                        </div>
                      </div>


                          <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="aquacustomers.customer_role" name="customer_role" ng-class="{'has-errors' : addaaquaform.customer_role.$invalid, 'no-errors' : addaaquaform.customer_role.$valid}" ng-required="true">
                            <option value="" selected>Customer Role</option>
                            <option value="Aqua">Aqua</option>
                          
                          </select>
                          <div class="error-container" ng-show="addaaquaform.customer_type.$dirty && addaaquaform.customer_type.$invalid" ng-messages="addaaquaform.customer_type.$error">
                         <div style="color:red;" class="error" ng-message="required">select customer Role </div>
                          </div>
                        </div>
                      </div>
 -->
                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-disabled="!addaaquaform.$valid" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(aquacustomers)" ng-disabled="!addaaquaform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
