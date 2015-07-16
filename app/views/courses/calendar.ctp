<img src="<?php echo WEB_URL; ?>ihna-images/frame.png" alt="pic"  style="width:100%;float:left;"/>
<div class="calender-design">
<iframe id="coursecalendar" scrolling="no" frameborder="0" style="margin: 0px; width: 100%;" onload='javascript:resizeIframe(this);' src="<?=WEB_URL?>courses/monthly_calendar/<?=$student_type_id?>"></iframe>
</div>

<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>