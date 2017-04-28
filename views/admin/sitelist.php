<div class="userlist" ng-controller="Sitelistctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Manager</h2>
                    <div class="clearfix"></div>
                  </div>


                      <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch">
                          
                        </div>
                      </div>



                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Type</th>
                          <th>City</th>
                          <th>Pin</th>
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="sites in data | filter:clisearch">
                          <td ng-if="!isedit(sites.site_id)">{{sites.site_name}}</td>
                          <td ng-if="!isedit(sites.site_id)">{{sites.site_type}}</td>
                          <td ng-if="!isedit(sites.site_id)">{{sites.site_city}}</td>
                          <td ng-if="!isedit(sites.site_id)">{{sites.site_pin}}</td>
                          <td ng-if="!isedit(sites.site_id)">{{sites.site_date}}</td>
                          <td ng-if="!isedit(sites.site_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deletesite(sites.site_id,$index);"><i class="fa fa-trash"></i></button></a>
                               <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(sites.site_id, sites);"><i class="fa fa-edit"></i></button></a>
                          </td>
                          <ng-form name="addsiteform">
                          
                          <td ng-if="isedit(sites.site_id)">
                          <input type="text" ng-value="sites.site_name" ng-model="sites.site_name" name="site_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="addsiteform.site_name.$invalid && !addsiteform.site_name.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                          <td ng-if="isedit(sites.site_id)">
                          <input type="text" ng-value="sites.site_type" ng-model="sites.site_type" name="site_type" style="width:auto;" required>
                          <p style="color:red;" ng-show="addsiteform.site_type.$invalid && !addsiteform.site_type.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                          <td ng-if="isedit(sites.site_id)">
                          <input type="text" ng-value="sites.site_city" ng-model="sites.site_city" name="site_city" style="width:auto;" required>
                          <p style="color:red;" ng-show="addsiteform.site_city.$invalid && !addsiteform.site_city.$pristine" class="help-block"> phone number is required.</p>
                          </td>
                          <td ng-if="isedit(sites.site_id)">
                          <input type="text" ng-value="sites.site_pin" ng-model="sites.site_pin" name="site_pin" style="width: auto;" required>
                          <p style="color:red;" ng-show="addsiteform.site_pin.$invalid && !addsiteform.site_pin.$pristine" class="help-block"> Site City is required.</p>
                          </td>
                          <td ng-if="isedit(sites.site_id)">{{sites.site_date}}</td>
                          

                          <td ng-if="isedit(sites.site_id)"> <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updateuser(sites);"><i class="fa fa-check"></i></button></a>
                          <a  data-toggle="tooltip" title="Cancel"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>
                          </td>
                          <ng-form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

      