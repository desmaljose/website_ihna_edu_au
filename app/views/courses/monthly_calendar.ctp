<?php
// set variables for month scrolling
$nextyear  = ($month != 12) ? $year : $year + 1;
$prevyear  = ($month != 1)  ? $year : $year - 1;
$prevmonth = ($month == 1)  ? 12 : $month - 1;
$nextmonth = ($month == 12) ? 1  : $month + 1;

$scrollarrows = "<a href='".WEB_URL."courses/monthly_calendar/{$student_type_id}/{$prevyear}/{$prevmonth}'><img src='".WEB_URL."img/previous.png' border='0' style='padding-left: 10px;'></a><a href='".WEB_URL."courses/monthly_calendar/{$student_type_id}/{$nextyear}/{$nextmonth}'><img src='".WEB_URL."img/next.png' border='0' align='right'></a>";

$weekpos    = date("w", mktime(0,0,0,$month,1,$year));
$total_days = date("t", mktime(0,0,0,$month,1,$year));
$cur_day    = 1;
//echo "$weekpos == $total_days"; exit;
?>

<?php echo $html->css(array('calendar','calendar.standalone')); ?>
<?php e($javascript->link(array('jquery','jquery.tools.min'))); ?>
<table cellpadding="0" cellspacing="0" border="0" align="center" width="99%"><tr><td >
				<?php echo $scrollarrows; ?>
    <span  style=" margin-top: -45px; text-align:center; display:block; text-transform:uppercase; font-family:Arial, Gadget, sans-serif;font-size:34px; color:#006699;">&nbsp;<?=date('F', strtotime("$year-$month-1"))?>&nbsp;<?=$year?></span>
</td></tr></table>


<table cellpadding="0" cellspacing="0" border="0" align="center" width="99%">
<tbody>
    <tr><td colspan="2" bgcolor="#fff">&nbsp;</td></tr>
    <tr><td colspan="2" bgcolor="#000000">
        <table cellpadding="1" cellspacing="1" border="0" width="100%">
        <tbody>
            <tr>
                <td class="column_header">&nbsp;Sun</td>
                <td class="column_header">&nbsp;Mon</td>
                <td class="column_header">&nbsp;Tue</td>
                <td class="column_header">&nbsp;Wed</td>
                <td class="column_header">&nbsp;Thur</td>
                <td class="column_header">&nbsp;Fri</td>
                <td class="column_header">&nbsp;Sat</td>
            </tr>
            <tr>
                <? for($i=1; $i<=$weekpos; $i++) { ?>
                    <td class="empty_day_cell" valign="top">&nbsp;</td>
                <? } ?>
                <? for( ;$cur_day<=(7-$weekpos); $cur_day++) { ?>
                    <? $details = $this->requestAction(array('controller' => 'courses', 'action' => 'fullcalendar'), array('pass'=>array($student_type_id, $year, $month, $cur_day))); ?>
				                <td class="day_cell" valign="top"><span class="day_number"><?=$cur_day?></span><br><?=$details?></td>
                <? } ?>
            </tr>
            <? $flag = 0; ?>
            <?php while($cur_day<=$total_days) {
													   $details = $this->requestAction(array('controller' => 'courses', 'action' => 'fullcalendar'), array('pass'=>array($student_type_id, $year, $month, $cur_day)));
																if($flag==0) { ?> <tr> <? } ?>
                <td class="day_cell" valign="top"><span class="day_number"><?=$cur_day?></span><br><?=$details?></td>
            				<?
																$flag = $flag + 1;
																if($flag==7) { ?> </tr> <? $flag = 0; }
																$cur_day = $cur_day + 1;
																?>
            <? } ?>
            <? if($flag!=0) { ?>
                <? for($i=0;$i<(7-$flag);$i++) { ?>
				                <td class="empty_day_cell" valign="top">&nbsp;</td>
                <? } ?>
                </tr>
            <? } ?>
            </tr>
        </tbody>
        </table>
    </td></tr>
    <tr><td colspan="2" align="center"></td></tr>
</tbody>
</table>
<script type="text/javascript">
$(function() {
				$(".download_now").tooltip({ effect: 'slide'});
});
</script>