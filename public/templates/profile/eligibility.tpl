{if $frm.view != "update"}
    <div class="form-group" style="float: right;">
        <a href="?a=profile&tab={$frm.tab}&view=update" class="btn btn-secondary btn-sm ml-2"><i class="fe fe-edit-2"></i> Edit</a>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-striped">
            <tr class="row-header"><td colspan="2">1</td></tr>
            <tr><td>Title of ELigibility</td><td>SAMPLE<div class="small text-muted">RATING: SAMPLE</div></td></tr>
            <tr><td>Place & Date of Exam</td><td><div>SAMPLE</div><div class="small text-muted">DATE: SAMPLE</div></td></tr>
            <tr><td>Licence No</td><td><div>SAMPLE</div><div class="small text-muted">VALIDITY: SAMPLE</div></td></tr>
        </table>
    </div>
{else}
    <style type="text/css">
        .eligibility thead th 
        {
        padding: 2px 5px;
        font-size: 11px;
        text-align: center;
        vertical-align: middle;
        }
    </style>

    <div class="form-group form-inline">
        <label class="h4" style="display: inline-block;">Civil Service Eligibility</label>
        <div style="float: right;">
            <a href="" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#eligibility-info"><i class="fe fe-plus"></i>Add eligibility</a>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover table-outline table-vcenter text-nowrap card-table" id="eligibility_table">
                    <thead>
                        <tr>
                        <th>Eligibility Name</th>
                        <th>Date/Place of Examination</th>
                        <th>License</th>
                        <th style="width: 5%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div>SAMPLE</div>
                                <div class="small text-muted">Rating: SAMPLE</div>
                            </td>
                            <td>
                                <div>SAMPLE</div>
                                <div class="small text-muted">Date: SAMPLE</div>
                            </td>
                            <td>
                                <div>SAMPLE</div>
                                <div class="small text-muted">Valid until: SAMPLE</div>
                            </td>
                            <td style="vertical-align: middle; text-align: center;">
                                <form action="" method="POST"><input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="eligibility_no" value="SAMPLE">
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fe fe-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
    <div class="modal fade margin-top-70" id="eligibility-info" role="dialog" tabindex="-1" style="margin-left:-50px;">
        <div class="modal-dialog" id="eligibility-modal" role="document" style="max-width: 600px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add new eligibity</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="save">
                        <input type="hidden" name="new_eligibility[emp_id]" value="1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">Eligibility (Career Service/RA 1080)</label>
                                    <input type="text" class="form-control" name="new_eligibility[eligibility_name]" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">Rating</label>
                                    <input type="text" class="form-control" name="new_eligibility[eligibility_rating]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">Date of Examination</label>
                                    <input type="date" class="form-control" name="new_eligibility[eligibility_date_exam]" required="">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">Place of Examination</label>
                                    <input type="text" class="form-control" name="new_eligibility[eligibility_place_exam]" required="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">License Number</label>
                                    <input type="text" class="form-control" name="new_eligibility[eligibility_license]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="form-label">License Validity</label>
                                    <input type="date" class="form-control" name="new_eligibility[eligibility_validity]">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save Eligibility</button>
                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/if}