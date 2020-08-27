{if $frm.view != "update"}
    <div class="form-group" style="float: right;">
        <a href="?a=profile&tab={$frm.tab}&view=update" class="btn btn-secondary btn-sm ml-2"><i class="fe fe-edit-2"></i> Edit</a>
    </div>
    <div class="table-responsive"><table class="table card-table table-striped">
        <tr class="row-header"><td colspan="2">Spouse's Information</td></tr>
        <tr><td>Name</td><td>SAMPLE</td></tr>
        <tr><td>Occupation</td><td>SAMPLE</td></tr>
        <tr><td>Employer/Business</td><td>SAMPLE</td></tr>
        <tr><td>Business Address</td><td>SAMPLE</td></tr>
        <tr><td>Telephone No</td><td>SAMPLE</td></tr>
        <tr class="row-header"><td colspan="2">Parents' Information</td></tr>
        <tr><td>Father's Name</td><td>SAMPLE</td></tr>
        <tr><td>Mother's Name</td><td>SAMPLE</td></tr>
        </table>
    </div>
{else}
    <form action="" method="POST">
        <input type="hidden" name="action" value="save_changes">
        <div class="form-group row btn-square">
            <label class="h4">Spouse's Information</label>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseFirstname]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseMiddlename]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseLastname]" value="">
                    </div>
                </div>
                <br />
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Occupation</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseWork]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Telephone No.</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseTelephone]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employer/Business Name</label>
                        <input type="text" class="form-control" name="employeeinfo[SpouseEmployer]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <div class="label-floating">
                            <label class="form-label">Business Address</label>
                            <input type="text" class="form-control" name="employeeinfo[SpouseAddress]" value="">
                        </div>
                    </div>
                </div>
            </div>
    
            <label class="h4">Parent's Information</label>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Father's Surname</label>
                        <input type="text" class="form-control" name="employeeinfo[FatherLastname]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="employeeinfo[FatherFirstname]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="employeeinfo[FatherMiddlename]" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Mother's Maiden Name</label>
                        <input type="text" class="form-control" name="employeeinfo[MotherLastname]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="employeeinfo[MotherFirstname]" value="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="employeeinfo[MotherMiddlename]" value="">
                    </div>
                </div>
            </div>
            <label class="h4">Children</label>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered" id="children_table">
                        <tr>
                            <th>Name of Children</th>
                            <th>Date of Birth</th>
                            <th style="width: 10%; vertical-align: middle; text-align: center;"><a href="#" class="btn btn-outline-success btn-sm"><i class="fe fe-plus"></i></a></th>
                            <!-- <th style="width: 10%; vertical-align: middle; text-align: center;"><a href="javascript:add_children_row()" class="btn btn-outline-success btn-sm"><i class="fe fe-plus"></i></a></th> -->
                        </tr>

                        <tbody>
                            <!-- <tr id="row'.$i.'">
                                <td><input type="text" class="form-control" name="empchildren['.$i.'][ChildName]" value="'.$dependent[$i]['ChildName'].'"></td>
                                <td><input type="text" class="form-control" name="empchildren['.$i.'][ChildBirth]" value="'.$dependent[$i]['ChildBirth'].'"></td>
                                <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-danger btn-sm" href="javascript:remove_children_row('.$i.')"><i class="fe fe-trash"></i></a></td>
                            </tr> -->
                            <tr id="row">
                                <td><input type="text" class="form-control" name="empchildren1" value="name1"></td>
                                <td><input type="text" class="form-control" name="empchildren2" value="name2"></td>
                                <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-danger btn-sm"><i class="fe fe-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
{/if}