<div class="userlist" ng-controller="Listsupervisorctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Supervisor</h2>
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
                          <th>Email</th>
                          <th>Number</th>
                          <th>Address</th>
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="supervisor in data | filter:clisearch">
                          <td ng-if="!isedit(supervisor.supervisor_id)">{{supervisor.supervisor_fname}}</td>
                          <td ng-if="!isedit(supervisor.supervisor_id)">{{supervisor.supervisor_email}}</td>
                          <td ng-if="!isedit(supervisor.supervisor_id)">{{supervisor.supervisor_number}}</td>
                          <td ng-if="!isedit(supervisor.supervisor_id)">{{supervisor.supervisor_addr}}</td>
                          <td ng-if="!isedit(supervisor.supervisor_id)">{{supervisor.supervisor_date}}</td>
                          
                          <td ng-if="!isedit(supervisor.supervisor_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteuser(supervisor.supervisor_id,$index);"><i class="fa fa-trash"></i></button></a>
                               <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(supervisor.supervisor_id, supervisor);"><i class="fa fa-edit"></i></button></a>
                          </td>
                          <ng-form name="addmanagerform">
                          
                          <td ng-if="isedit(supervisor.supervisor_id)">
                          <input type="text" ng-value="supervisor.supervisor_fname" ng-model="supervisor.supervisor_fname" name="supervisor_fname" style="width:auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.supervisor_fname.$invalid && !addmanagerform.supervisor_fname.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                          <td ng-if="isedit(supervisor.supervisor_id)">{{supervisor.supervisor_email}}</td>
                          <td ng-if="isedit(supervisor.supervisor_id)">
                          <input type="text" ng-value="supervisor.supervisor_number" ng-model="supervisor.supervisor_number" name="supervisor_number" style="width: auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.supervisor_number.$invalid && !addmanagerform.supervisor_number.$pristine" class="help-block"> phone number is required.</p>
                          </td>
                          <td ng-if="isedit(supervisor.supervisor_id)">
                          <input type="text" ng-value="supervisor.supervisor_addr" ng-model="supervisor.supervisor_addr" name="supervisor_addr" style="width: auto;" required>
                          <p style="color:red;" ng-show="addmanagerform.supervisor_addr.$invalid && !addmanagerform.supervisor_addr.$pristine" class="help-block"> Supervisor Address is required.</p>
                          </td>
                          <td ng-if="isedit(supervisor.supervisor_id)">{{supervisor.supervisor_date}}</td>
                          

                          <td ng-if="isedit(supervisor.supervisor_id)"> <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updateuser(supervisor);"><i class="fa fa-check"></i></button></a>

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

      