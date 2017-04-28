
<div class="adda-cust">
<h2>Add Site</h2>
<div class="addsiteform" ng-controller="Addsitectrl">
<form name="addsiteform" class="form-horizontal form-label-left" nonvalidate>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Site Name" class="form-control" ng-model="sites.site_name" id="site_name" class="form-control" name="site_name" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.site_name.$invalid && !addsiteform.site_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="sites.site_type" name="site_type" ng-class="{'has-errors' : addsiteform.site_type.$invalid, 'no-errors' : addsiteform.site_type.$valid}" ng-required="true">
                            <option value="" selected>Site Type</option>
                            <option value="construction">Construction </option>
                            <option value="security">Security</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                          <div class="error-container" ng-show="addsiteform.site_type.$dirty && addsiteform.site_type.$invalid" ng-messages="addsiteform.site_type.$error">
                         <div class="val-style" class="error" ng-message="required">select site type </div>
                          </div>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site City<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site City" class="form-control" ng-model="sites.site_city" id="site_city" class="form-control" name="site_city" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.site_city.$invalid && !addsiteform.site_city.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Area<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Area" class="form-control" ng-model="sites.site_area" id="site_area" class="form-control" name="site_area" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.site_area.$invalid && !addsiteform.site_area.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Road<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Road" class="form-control" ng-model="sites.site_road" id="site_road" class="form-control" name="site_road" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.site_road.$invalid && !addsiteform.site_road.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Site Pin<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 ">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Site Pin" ng-model="sites.site_pin"  ng-pattern="/^[0-9]{6}$/"  id="site_pin" class="form-control" name="site_pin" >
                        </div>
                          <p class="val-style" ng-show="addsiteform.site_pin.$invalid && !addsiteform.site_pin.$pristine" class="help-block"> 6 digit pin is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Shift Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Shift Name" class="form-control" ng-model="sites.siteshift_name" id="siteshift_name" class="form-control" name="siteshift_name" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.siteshift_name.$invalid && !addsiteform.siteshift_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Shift Time<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Shift Time" class="form-control" ng-model="sites.siteshift_time" id="siteshift_time" class="form-control" name="siteshift_time" required />
                           </div>
                          <p class="val-style" ng-show="addsiteform.siteshift_time.$invalid && !addsiteform.siteshift_time.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sstart_date">Site Start Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" placeholder="Start Date" class="form-control" ng-model="sites.sstart_date" id="sstart_date" class="form-control" name="sstart_date" required />
                        </div>
                             <p class="val-style" ng-show="addsiteform.sstart_date.$invalid && !addsiteform.sstart_date.$pristine" class="help-block">date required</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_date">Site End Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" placeholder="End Date" class="form-control" ng-model="sites.end_date" id="end_date" class="form-control" name="end_date" required />
                        </div>
                             <p class="val-style" ng-show="addsiteform.end_date.$invalid && !addsiteform.end_date.$pristine" class="help-block">date required</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-disabled="!addsiteform.$valid" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(sites)" ng-disabled="!addsiteform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
