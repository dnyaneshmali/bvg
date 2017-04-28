
<div class="adda-cust">
<h2>Allocate Site</h2>
<div class="allocatesiteform" ng-controller="Allocatesitectrl">
<form name="allocatesiteform" class="form-horizontal form-label-left" nonvalidate>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Site <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="allocate.site" name="site" ng-change="changedname(allocate.site)">
                            <option ng-repeat="slist in sitedata" value="{{slist.site_id}}">{{slist.site_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Supervisor <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="allocate.supervisor" name="supervisor" ng-change="changedsupervisor(allocate.supervisor)">
                            <option ng-repeat="superlist in supervisordata" value="{{superlist.site_id}}">{{superlist.supervisor_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="allocate.site_type" name="site_type" ng-class="{'has-errors' : allocatesiteform.site_type.$invalid, 'no-errors' : allocatesiteform.site_type.$valid}" ng-required="true">
                            <option value="" selected>Site Type</option>
                            <option value="construction">Construction</option>
                            <option value="security">Security</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                          <div class="error-container" ng-show="allocatesiteform.site_type.$dirty && allocatesiteform.site_type.$invalid" ng-messages="allocatesiteform.site_type.$error">
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
                          <input type="text" placeholder="Site City" class="form-control" ng-model="site_city" id="site_city" class="form-control" name="site_city" required readonly />
                           </div>
                          <p class="val-style" ng-show="allocatesiteform.site_city.$invalid && !allocatesiteform.site_city.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Area<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Area" class="form-control" ng-model="site_area" id="site_area" class="form-control" name="site_area" required readonly/>
                           </div>
                          <p class="val-style" ng-show="allocatesiteform.site_area.$invalid && !allocatesiteform.site_area.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Road<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Road" class="form-control" ng-model="site_road" id="site_road" class="form-control" name="site_road" required readonly/>
                           </div>
                          <p class="val-style" ng-show="allocatesiteform.site_road.$invalid && !allocatesiteform.site_road.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Site Pin<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 ">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Site Pin" ng-model="site_pin"  ng-pattern="/^[0-9]{6}$/"  id="site_pin" class="form-control" name="site_pin" readonly>
                        </div>
                          <p class="val-style" ng-show="allocatesiteform.site_pin.$invalid && !allocatesiteform.site_pin.$pristine" class="help-block"> 6 digit pin is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Shift Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Shift Name" class="form-control" ng-model="allocatehift_name" id="allocatehift_name" class="form-control" name="allocatehift_name" required readonly/>
                           </div>
                          <p class="val-style" ng-show="allocatesiteform.allocatehift_name.$invalid && !allocatesiteform.allocatehift_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Shift Time<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Site Shift Time" class="form-control" ng-model="allocatehift_time" id="allocatehift_time" class="form-control" name="allocatehift_time" required readonly/>
                           </div>
                          <p class="val-style" ng-show="allocatesiteform.allocatehift_time.$invalid && !allocatesiteform.allocatehift_time.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sstart_date">Site Start Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" placeholder="Start Date" class="form-control" ng-model="sstart_date" id="sstart_date" class="form-control" name="sstart_date" required />
                        </div>
                             <p class="val-style" ng-show="allocatesiteform.sstart_date.$invalid && !allocatesiteform.sstart_date.$pristine" class="help-block">date required</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_date">Site End Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" placeholder="End Date" class="form-control" ng-model="end_date" id="end_date" class="form-control" name="end_date" required />
                        </div>
                             <p class="val-style" ng-show="allocatesiteform.end_date.$invalid && !allocatesiteform.end_date.$pristine" class="help-block">date required</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-disabled="!allocatesiteform.$valid" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(allocate)" ng-disabled="!allocatesiteform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
