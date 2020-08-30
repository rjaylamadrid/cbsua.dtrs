<div class="table-responsive dtr">
    <table class="order-table table table-bordered text-gray-900" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th rowspan="2">DAY</th>
            <th colspan="2">MORNING</th>
            <th colspan="2">AFTERNOON</th>
            <th colspan="2">OVERTIME</th>
            <th colspan="3">TOTAL</th>
            <th></th>
            </tr>
            <tr>
            <td>IN</td>
            <td>OUT</td>
            <td>IN</td>
            <td>OUT</td>
            <td>IN</td>
            <td>OUT</td>
            <td>Hours</td>
            <td>Tardy</td>
            <td>Remarks</td>
            <td></td>
            </tr>
        </thead>
        <tbody>
            {if $attendance}
            {foreach $attendance as $attn}
            {if $attn}
            <tr class="">
                <td><b>{$attn.date|date_format:"%d"}</b></td>
                <td>{$attn.am_in}</td>
                <td>{$attn.am_out}</td>
                <td>{$attn.pm_in}</td>
                <td>{$attn.pm_out}</td>
                <td>{$attn.ot_in}</td>
                <td>{$attn.ot_out}</td>
                <td>{$attn.total_hours}</td>
                <td>{$attn.late + $attn.undertime}</td>
                <td></td>
                <td><a href="javascript:view_raw_data(\''.$id.'\', \''.date_format($date, 'Y-m-d').'\');" class="icon" title="View Raw Data"><i class="fe fe-eye"></i></a><a href="javascript:update_log(\''.$row[0]['no'].'\', \''.$id.'\',\''.date_format($date, 'Y-m-d').'\');" class="icon" title="Edit Log"><i class="fe fe-edit"></i></a></td>
            </tr>
            {else}
                {if $attn.date|date_format:"%w" == 0 || $attn.date|date_format:"%w" == 7}
            <tr>
                <td><b>{$attn.date|date_format:"%d"}</b></td>
                <td colspan="9" style="text-align: center; letter-spacing: 60px;">{$attn.date|date_format:"%a"}</td>
                <td><a href="javascript:view_raw_data(\''.$id.'\', \''.date_format($date, 'Y-m-d').'\');" class="icon" title="View Raw Data"><i class="fe fe-eye"></i></a><a href="javascript:update_log(\''.$row[0]['no'].'\', \''.$id.'\',\''.date_format($date, 'Y-m-d').'\');" class="icon" title="Edit Log"><i class="fe fe-edit"></i></a></td></tr>
                {else}
                <tr><td><b>{$attn.date|date_format:"%d"}</b></td>
                <td> : </td>
                <td> : </td>
                <td> : </td>
                <td> : </td>
                <td>   </td>
                <td>   </td>
                <td> 0.00  </td>
                <td> 0  </td>
                <td></td>
                <td><a href="javascript:view_raw_data(\''.$id.'\', \''.date_format($date, 'Y-m-d').'\');" class="icon" title="View Raw Data"><i class="fe fe-eye"></i></a><a href="javascript:update_log(\''.$row[0]['no'].'\', \''.$id.'\',\''.date_format($date, 'Y-m-d').'\');" class="icon" title="Edit Log"><i class="fe fe-edit"></i></a></td></tr>';
                {/if}
            {/if}
            {/foreach}
            {/if}
      </tbody>
    </table>
  </div>
  <div class="card-footer" style="display: inline-block;">
      <div class="text-right">
        <a href="query.php?type=dtr&action=print&id=<?php echo $id; ?>&period=<?php echo $frm['period']; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>" class="btn btn-primary" name="" target="_blank">Print DTR</a>
    </div>
    <p>* Total rendered hours (in hours) ** Tardy (in minutes)</p>
  </div>