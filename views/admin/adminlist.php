<div class="userlist" ng-controller="Managerlistctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Manager</h2>
                   <!--  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>


                      <div class="item form-group">
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch">
                          
                        </div>
                      </div>



                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Role</th>
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="admin in data | filter:clisearch">
                          <td ng-if="!isedit(admin.admin_id)">{{admin.admin_name}}</td>
                          <td ng-if="!isedit(admin.admin_id)">{{admin.admin_email}}</td>
                          <td ng-if="!isedit(admin.admin_id)">{{admin.admin_number}}</td>
                          <td ng-if="!isedit(admin.admin_id)">{{admin.admin_role}}</td>
                          <td ng-if="!isedit(admin.admin_id)">{{admin.admin_date}}</td>
                          
                          <td ng-if="!isedit(admin.admin_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteuser(admin.admin_id,$index);"><i class="fa fa-trash"></i></button></a>
                               <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(admin.admin_id, admin);"><i class="fa fa-edit"></i></button></a>

                            <!--   <button class="btn btn-danger" ng-click="deleteuser(admin.admin_id,$index);">Delete</button> 
                              <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(admin.admin_id, admin);">Edit</button> -->
                            <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>
                          <ng-form name="addmanagerform">
                          
                          <td ng-if="isedit(admin.admin_id)">
                          <input type="text" ng-value="admin.admin_name" ng-model="admin.admin_name" name="admin_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.admin_name.$invalid && !addmanagerform.admin_name.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                          <td ng-if="isedit(admin.admin_id)">{{admin.admin_email}}</td>
                          <td ng-if="isedit(admin.admin_id)">
                          <input type="text" ng-value="admin.admin_number" ng-model="admin.admin_number" name="admin_number" style="width: auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.admin_number.$invalid && !addmanagerform.admin_number.$pristine" class="help-block"> phone number is required.</p>
                          </td>
                          <td ng-if="isedit(admin.admin_id)">
                          <input type="text" ng-value="admin.admin_role" ng-model="admin.admin_role" name="admin_role" style="width: auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.admin_role.$invalid && !addmanagerform.admin_role.$pristine" class="help-block"> admin_role is required.</p>
                          </td>
                          <td ng-if="isedit(admin.admin_id)">{{admin.admin_date}}</td>
                          

                          <td ng-if="isedit(admin.admin_id)"> <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updateuser(admin);"><i class="fa fa-check"></i></button></a>

                             <a  data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>

                         <!--  <td ng-if="isedit(admin.admin_id)"> -->

                             <!--  <button class="btn btn-danger" ng-click="updateuser(admin,$index);">Update</button> 

                              <button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);">Cancel</button> -->



                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>
                          <ng-form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

      