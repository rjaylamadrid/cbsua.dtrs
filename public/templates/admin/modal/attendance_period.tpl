<div class="modal fade margin-top-70" id="generate-dtr-modal" role="dialog" tabindex="-1" style="margin-left:-50px;">
    <div class="modal-dialog" id="generate-dtr" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Generate DTR</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="" method="POST">
                            <label style="display: inline-block;">Select DTR period:&nbsp;</label>
                            <div class="form-group">
                                <select name="dtr[period]" class="form-control custom-select">
                                    <option value="1">First Half (1 - 15)</option>
                                    <option value="2">Second Half (16 - 31)</option>
                                    <option value="3">Whole Month (1 - 31)</option>
                                </select>
                            </div>
                            <div class="form-group form-inline">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select name="dtr[month]" class="form-control custom-select" style="width: 100%" required>
                                            <option value="00" disabled="">Month</option>
                                            {include file="custom/select_month.tpl"}
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="number" name="dtr[year]" class="form-control" placeholder="Year" value="{date('Y')}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="dtr[emp_type]" class="form-control custom-select">
                                    <option value="">All employees</option>
                                    <option value="0">All regular/casual</option>
                                    {* <?php 
                                        $emp_type = exec_query("SELECT * FROM tbl_employee_type",$master);
                                        foreach ($emp_type as $value) {
                                        echo "<option value='".$value['etype_id']."'>".$value['etype_desc']."</option>";
                                        }
                                    ?> *}
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="custom-switch">
                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">Include inactive employees</span>
                                </label>
                            </div>
                            <div class="form-group">
                                <span style="float: right;">
                                <input type="submit" class="btn btn-primary" name="init_attendance" value="Generate DTR">
                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>