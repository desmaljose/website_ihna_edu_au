<? foreach($courses as $key=>$course) { ?>
				<script>
    function click_<?=$date_check.'_'.$key?>() { 
        window.top.location.href = "<?=$this->Common->courseURL($course['course_id'], $course['student_type_id'])?>";
    }
    </script>
    <div id="box-outer" style="background:<?=$course['calendar_color']?>;">
        <div id="box-top"></div>
        <div id="box-bottom" style="background:<?=$course['calendar_color']?>;">
            <div class="text" align="center" id="demo">
                <a class="download_now" style="color:#FFFFFF;text-decoration:none;cursor:pointer;"><b><?=$course['course_name']?></b></a>
                <div class="tooltip">
                    Start Date: <b><?=$start_date?></b><br>
                    <? if($course['normal_hours']>0) { ?>
                    				Duration: <b><?=$course['normal_hours']?> Hours</b><br>
                    <? } ?>
                    Venue: <b>IHNA, <?=$course['campus_name']?></b><br>
                    <br>
                    <a style="cursor:pointer; float:right; margin-right:32px;" onclick="click_<?=$date_check.'_'.$key?>();">More Details</a>
                </div>
            </div>
        </div>
    </div>
<? } ?>