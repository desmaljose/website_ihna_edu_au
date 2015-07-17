<div style="display:none;">IHNA</div>
<form action="<?php echo WEB_URL; ?>payments/secure_redirect" method="post" name="onlinepayment" id="onlinepayment">
  <input type="hidden" name="Title" value="PHP VPC 3-Party" />
  <input type="hidden" name="virtualPaymentClientURL" value="https://migs.mastercard.com.au/vpcpay" />
  <input type="hidden" name="vpc_Version" value="1" />
  <input type="hidden" name="vpc_Command" value="pay" />
  <input type="hidden" name="vpc_AccessCode" value="01DC3E0C" />
  <input type="hidden" name="vpc_MerchTxnRef" value="4309929" />
  <input type="hidden" name="vpc_Merchant" value="ANZIHNA" />
  <input type="hidden" name="vpc_OrderInfo" value="<?php echo $userinfo; ?>" />
  <input type="hidden" name="vpc_Amount" value="<?php echo $payamount; ?>" />
  <input type="hidden" name="vpc_Locale" value="en" />
  <input type="hidden" name="vpc_ReturnURL" value="<?php echo WEB_URL; ?>payments/success/<?=$userinfo?>" />
  
</form>
<script language="javascript" type="text/javascript">
    document.onlinepayment.submit();
</script>