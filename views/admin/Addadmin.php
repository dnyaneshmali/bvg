<div class="adda-order">
<h2>Add New Manager</h2>
<div class="addmanagerform" ng-controller="Addmanagerctrl">
<form name="addmanagerform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addmanagerform.username.$invalid && !addmanagerform.username.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Username" ng-model="admin.username" id="username" class="form-control" name="username" required />
                        </div>
                          <p class="val-style" ng-show="addmanagerform.username.$invalid && !addmanagerform.username.$pristine" class="help-block"> username is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Full Name" ng-model="admin.fullname" id="fullname" class="form-control" name="fullname" required />
                        </div>
                          <p class="val-style" ng-show="addmanagerform.fullname.$invalid && !addmanagerform.fullname.$pristine" class="help-block"> fullname is required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="admin.email" id="email" class="form-control" name="email" required />
                        </div>
                          <p class="val-style" ng-show="addmanagerform.email.$invalid && !addmanagerform.email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Mobile Number" ng-model="admin.phone" id="phone" class="form-control" name="phone" ng-pattern="/^[0-9]{1,10}$/"
       required/>
                      </div>
                          <p class="val-style" ng-show="addmanagerform.phone.$invalid && !addmanagerform.phone.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Password" ng-model="admin.password" id="password" class="form-control" name="password" required />
                        </div>
                          <p class="val-style" ng-show="addmanagerform.password.$invalid && !addmanagerform.password.$pristine" class="help-block"> password is required.</p>
                        </div>
                        </div>
                    
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span></label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Confirm Password" ng-model="admin.password2" id="password2" class="form-control" name="password2" match="admin.password" required />
                        </div>
                          <p style="color:red;" ng-show="addmanagerform.password2.$error.required && !addmanagerform.password2.$pristine" class="help-block"> confirm password is required.</p>
                         <p style="color:red;" ng-show="addmanagerform.password2.$error.match && !addmanagerform.password2.$pristine" class="help-block"> confirm password is not mached.</p> 
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="admin.userrole" name="userrole" ng-class="{'has-errors' : addmanagerform.userrole.$invalid, 'no-errors' : addmanagerform.userrole.$valid}" ng-required="true">
                            <option value="" selected>Choose option</option>
                            <option value="aquaadmin">aquaadmin</option>
                            <option value="gasadmin">gogasadmin</option>
                          </select>
                        </div>
                          <div class="error-container" ng-show="addmanagerform.userrole.$dirty && addmanagerform.userrole.$invalid" ng-messages="addmanagerform.userrole.$error">
                         <div class="val-style" class="error" ng-message="required">select Userrole </div>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" ng-disabled="!addmanagerform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(admin)"  ng-disabled="!addmanagerform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>

                    