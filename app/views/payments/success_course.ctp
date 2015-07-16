<form action="<?php echo WEB_URL; ?>payments/success_course_message" method="post" name="onlinepayment" id="onlinepayment">
  <input type="hidden" name="trnsCode" value="<?php echo @$txnResponseCode?>" />
  <input type="hidden" name="transMsg" value="<?php echo @$txnResponseCodeMsg?>" />
  <input type="hidden" name="paidamount" value="<?php echo @$amount?>" />
</form>

<script language="javascript" type="text/javascript">
document.onlinepayment.submit();
</script>
