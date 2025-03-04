{if $view != "update"}
    <div class="form-group" style="float: right;">
        <a href="{$server}{if $user.type}/employees/update/{$employee.employee_id}/other-info{else}/update/other-info{/if}" class="btn btn-secondary btn-sm ml-2"><i class="fe fe-edit-2"></i> Edit</a>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-striped">
            {foreach from=$emp item=other_info}
            {* {$skillsArray = explode(";",$other_info.other_skill)} *}
                <tr class="row-header"><td>Skills and Hobbies</td><td>Recognition</td><td>Association/Organization</td></tr>
                <tr><td style="font-weight:normal">{str_replace(";",",",$other_info.other_skill)}</td><td>{$other_info.other_recognition}</td><td>{$other_info.other_organization}</td></tr>    
            {/foreach}
        </table>
    </div>
{else}
    <form method="POST" action="">
        <input type="hidden" name="action" value="1">
        {foreach from=$emp item=other_info}
            <div class="row">
                <div class="col-md-4 table-responsive">
                    <table class="table table-bordered" id="skill">
                        <thead>
                            <tr><th colspan="2">Skills</th></tr></thead>
                            <tr id="skill1">
                                <td style="font-weight:normal"><input class="form-control" type="text" name="OtherSkill[]" value="{str_replace(";",",",$other_info.other_skill)}"></td>
                                <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-danger btn-sm" href="#"><i class="fe fe-trash"></i></a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-success btn-sm" href="#"><i class="fe fe-plus"></i></a></td>
                            </tr>
                    </table>
                </div>
                <div class="col-md-4 table-responsive">
                    <table class="table table-bordered" id="recog">
                        <thead><tr><th colspan="2">Recognition</th></tr></thead>
                        <tr id="recog1">
                            <td style="font-weight:normal"><input class="form-control" type="text" name="OtherRecognition[]" value="{$other_info.other_recognition}"></td>
                            <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-danger btn-sm" href="#"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-success btn-sm" href="#"><i class="fe fe-plus"></i></a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 table-responsive">
                    <table class="table table-bordered" id="org">
                        <thead><tr><th colspan="2">Association/Organization</th></tr></thead>
                        <tr id="org1">
                            <td style="font-weight:normal"><input class="form-control" type="text" name="OtherOrganization[]" value="{$other_info.other_organization}"></td>
                            <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-danger btn-sm" href="#"><i class="fe fe-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="vertical-align: middle; text-align: center;"><a class="btn btn-outline-success btn-sm" href="#"><i class="fe fe-plus"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        {/foreach}
        <div class="row">
            <div class="col-md-12 mt-2" style="text-align: right;">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </form>
{/if}