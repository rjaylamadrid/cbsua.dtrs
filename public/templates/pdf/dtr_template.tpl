<div class="content">
<div style="text-align: center;">
    <h3><b>DAILY TIME RECORD</b></h3>
</div>
<p>NAME: </p>
<p>
    BRANCH: Admin<br/>
    For the month of July, 2020<br/>
    Official hours for arrival ( Regular Days 23 )<br/>
    and departure ( Saturdays 4 )<br/>
</p>
<table class="table">
    <thead>
        <tr>
            <th rowspan="2" style="width: 5%;">DAY</th>
            <th colspan="2">MORNING</th>
            <th colspan="2">AFTERNOON</th>
            <th colspan="2">OVERTIME</th>
            <th rowspan="2">ABS</th>
            <th rowspan="2">UT</th>
        </tr>
        <tr>    
            <td>IN</td>
            <td>OUT</td>
            <td>IN</td>
            <td>OUT</td>
            <td>IN</td>
            <td>OUT</td>
        </tr>
    </thead>
    <tbody>
        {foreach $attendance as $attn}
        {if $attn.attn}
        {$attn = $attn.attn}
        <tr class="tr">
            <td><b>{$attn.date|date_format:"%d"}</b></td>
            <td>{$attn.am_in|substr:0:-1}</td>
            <td>{$attn.am_out|substr:0:-1}</td>
            <td>{$attn.pm_in|substr:0:-1}</td>
            <td>{$attn.pm_out|substr:0:-1}</td>
            <td>{$attn.ot_in|substr:0:-1}</td>
            <td>{$attn.ot_out|substr:0:-1}</td>
            <td>{$attn.total_hours}</td>
            <td>{$attn.late + $attn.undertime}</td>
        </tr>
        {else}
            {if $attn.date|date_format:"w" == 0 || $attn.date|date_format:"w" == 6}
        <tr>
            <td><b>{$attn.date|date_format:"%d"}</b></td>
            <td colspan="8" style="letter-spacing: 10px;">{$attn.date|date_format:"%A"|upper}</td>
        </tr>
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
        </tr>
            {/if}
        {/if}
        {/foreach}
    </tbody>
</table>
</div>