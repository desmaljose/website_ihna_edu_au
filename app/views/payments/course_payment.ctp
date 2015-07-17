<div class="col-sm-9">

    <form class="form-horizontal" method="post" name="frm" id="frm" action="<?php echo WEB_URL.'payments/course_payment_register'; ?>" enctype="multipart/form-data" >  
        
<?php
    $security_original = $this->Security->randomSecurity(6);
?>
        
        
<input type="hidden" name="security_validation" id="security_validation" value="<?php echo $security_original; ?>" />        
<input type="hidden" name="courseId" id="courseId" value="<?php echo $courseId; ?>" /> 
<input type="hidden" name="fee" id="fee" value="<?php echo $courseFees; ?>" />
<input type="hidden" name="courseName" id="courseName" value="<?php echo $courseName; ?>" />
<input type="hidden" name="courseCategoryName" id="courseCategoryName" value="<?php echo $courseCategoryName; ?>" />
<input type="hidden" name="courseMoodleId" id="courseMoodleId" value="<?php echo $courseMoodleId; ?>" />
<input type="hidden" name="courseMoodleEnable" id="courseMoodleEnable" value="<?php echo $courseMoodleEnable; ?>" />
<input type="hidden" name="courseCampus" id="courseCampus" value="<?php echo $courseCampus; ?>" />
<input type="hidden" name="courseStartDate" id="courseStartDate" value="<?php echo $courseStartDate; ?>" />
<input type="hidden" name="studentType" id="studentType" value="<?php echo $studentType; ?>" />

     
     
     
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title" style="padding-top: 10px;">&nbsp;&nbsp;&nbsp; Course Details </h3>
  </div>
  <div class="panel-body">




    <div class="form-group">
    <label for="first_name" class="col-sm-4 control-label">Course Category </label>
    <div class="col-sm-8" style="padding-top: 10px;">
        <?php echo $courseCategoryName; ?>
    </div>
  </div>
    
    <div class="form-group">
    <label for="last_name" class="col-sm-4 control-label">Course Name </label>
    <div class="col-sm-8" style="padding-top: 10px;">
      <?php echo $courseName; ?>
    </div>
  </div>
    
      <div class="form-group">
    <label for="phone" class="col-sm-4 control-label">Campus</label>
    <div class="col-sm-8" style="padding-top: 10px;">
        <?php echo $courseCampus; ?>
    </div>
  </div>
    
      <div class="form-group">
    <label for="email" class="col-sm-4 control-label">Start Date </label>
    <div class="col-sm-8" style="padding-top: 10px;">
        <?php echo $courseStartDate; ?>
    </div>
  </div>
    

      
      
      
  </div>
</div>  
    
    
    
    
    
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title" style="padding-top: 10px;">&nbsp;&nbsp;&nbsp; Personal Details </h3>
  </div>
  <div class="panel-body">

    <div class="form-group">
    <label for="first_name" class="col-sm-4 control-label">First Name <span>*</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo @$first_name; ?>" required >
    </div>
  </div>
    
    <div class="form-group">
    <label for="last_name" class="col-sm-4 control-label">Last Name <span>*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="last_name" id="last_name" value="<?php echo @$last_name; ?>" required >
    </div>
  </div>
    
      <div class="form-group">
    <label for="country_name" class="col-sm-4 control-label">Country</label>
    <div class="col-sm-8">
                <select name="country_name" id="country_name" class="form-control">
                  <option value="">--Select--</option>
                  <option value="United States" <?php if(@$country_name=='United States'){ echo ' selected';} ?>>United States</option>
                  <option value="United Kingdom" <?php if(@$country_name=='United Kingdom'){ echo ' selected';} ?>>United Kingdom</option>
                  <option value="Afghanistan" <?php if(@$country_name=='Afghanistan'){ echo ' selected';} ?>>Afghanistan</option>
                  <option value="Albania" <?php if(@$country_name=='Albania'){ echo ' selected';} ?>>Albania</option>
                  <option value="Albania" <?php if(@$country_name=='Albania'){ echo ' selected';} ?>>Algeria</option>
                  <option value="American Samoa" <?php if(@$country_name=='American Samoa'){ echo ' selected';} ?>>American Samoa</option>
                  <option value="Andorra" <?php if(@$country_name=='Andorra'){ echo ' selected';} ?>>Andorra</option>
                  <option value="Angola" <?php if(@$country_name=='Angola'){ echo ' selected';} ?>>Angola</option>
                  <option value="Anguilla" <?php if(@$country_name=='Anguilla'){ echo ' selected';} ?>>Anguilla</option>
                  <option value="Antarctica" <?php if(@$country_name=='Antarctica'){ echo ' selected';} ?>>Antarctica</option>
                  <option value="Antigua and Barbuda" <?php if(@$country_name=='Antigua and Barbuda'){ echo ' selected';} ?>>Antigua and Barbuda</option>
                  <option value="Argentina" <?php if(@$country_name=='Argentina'){ echo ' selected';} ?>>Argentina</option>
                  <option value="Armenia" <?php if(@$country_name=='Armenia'){ echo ' selected';} ?>>Armenia</option>
                  <option value="Aruba" <?php if(@$country_name=='Aruba'){ echo ' selected';} ?>>Aruba</option>
                  <option value="Australia" <?php if(@$country_name=='Australia'){ echo ' selected';} ?>>Australia</option>
                  <option value="Austria" <?php if(@$country_name=='Austria'){ echo ' selected';} ?>>Austria</option>
                  <option value="Azerbaijan" <?php if(@$country_name=='Azerbaijan'){ echo ' selected';} ?>>Azerbaijan</option>
                  <option value="Bahamas" <?php if(@$country_name=='Bahamas'){ echo ' selected';} ?>>Bahamas</option>
                  <option value="Bahrain" <?php if(@$country_name=='Bahrain'){ echo ' selected';} ?>>Bahrain</option>
                  <option value="Bangladesh" <?php if(@$country_name=='Bangladesh'){ echo ' selected';} ?>>Bangladesh</option>
                  <option value="Barbados" <?php if(@$country_name=='Barbados'){ echo ' selected';} ?>>Barbados</option>
                  <option value="Belarus" <?php if(@$country_name=='Belarus'){ echo ' selected';} ?>>Belarus</option>
                  <option value="Belgium" <?php if(@$country_name=='Belgium'){ echo ' selected';} ?>>Belgium</option>
                  <option value="Belize" <?php if(@$country_name=='Belize'){ echo ' selected';} ?>>Belize</option>
                  <option value="Benin" <?php if(@$country_name=='Benin'){ echo ' selected';} ?>>Benin</option>
                  <option value="Bermuda" <?php if(@$country_name=='Bermuda'){ echo ' selected';} ?>>Bermuda</option>
                  <option value="Bhutan" <?php if(@$country_name=='Bhutan'){ echo ' selected';} ?>>Bhutan</option>
                  <option value="Bolivia" <?php if(@$country_name=='Bolivia'){ echo ' selected';} ?>>Bolivia</option>
                  <option value="Bosnia and Herzegovina" <?php if(@$country_name=='Bosnia and Herzegovina'){ echo ' selected';} ?>>Bosnia and Herzegovina</option>
                  <option value="Botswana" <?php if(@$country_name=='Botswana'){ echo ' selected';} ?>>Botswana</option>
                  <option value="Bouvet Island" <?php if(@$country_name=='Bouvet Island'){ echo ' selected';} ?>>Bouvet Island</option>
                  <option value="Brazil" <?php if(@$country_name=='Brazil'){ echo ' selected';} ?>>Brazil</option>
                  <option value="British Indian Ocean Territory" <?php if(@$country_name=='British Indian Ocean Territory'){ echo ' selected';} ?>>British Indian Ocean Territory</option>
                  <option value="Brunei Darussalam" <?php if(@$country_name=='Brunei Darussalam'){ echo ' selected';} ?>>Brunei Darussalam</option>
                  <option value="Bulgaria" <?php if(@$country_name=='Bulgaria'){ echo ' selected';} ?>>Bulgaria</option>
                  <option value="Burkina Faso" <?php if(@$country_name=='Burkina Faso'){ echo ' selected';} ?>>Burkina Faso</option>
                  <option value="Burundi" <?php if(@$country_name=='Burundi'){ echo ' selected';} ?>>Burundi</option>
                  <option value="Cambodia" <?php if(@$country_name=='Cambodia'){ echo ' selected';} ?>>Cambodia</option>
                  <option value="Cameroon" <?php if(@$country_name=='Cameroon'){ echo ' selected';} ?>>Cameroon</option>
                  <option value="Canada" <?php if(@$country_name=='Canada'){ echo ' selected';} ?>>Canada</option>
                  <option value="Cape Verde" <?php if(@$country_name=='Cape Verde'){ echo ' selected';} ?>>Cape Verde</option>
                  <option value="Cayman Islands" <?php if(@$country_name=='Cayman Islands'){ echo ' selected';} ?>>Cayman Islands</option>
                  <option value="Central African Republic" <?php if(@$country_name=='Central African Republic'){ echo ' selected';} ?>>Central African Republic</option>
                  <option value="Chad" <?php if(@$country_name=='Chad'){ echo ' selected';} ?>>Chad</option>
                  <option value="Chile" <?php if(@$country_name=='Chile'){ echo ' selected';} ?>>Chile</option>
                  <option value="China" <?php if(@$country_name=='China'){ echo ' selected';} ?>>China</option>
                  <option value="Christmas Island" <?php if(@$country_name=='Christmas Island'){ echo ' selected';} ?>>Christmas Island</option>
                  <option value="Cocos (Keeling) Islands" <?php if(@$country_name=='Cocos (Keeling) Islands'){ echo ' selected';} ?>>Cocos (Keeling) Islands</option>
                  <option value="Colombia" <?php if(@$country_name=='Colombia'){ echo ' selected';} ?>>Colombia</option>
                  <option value="Comoros" <?php if(@$country_name=='Comoros'){ echo ' selected';} ?>>Comoros</option>
                  <option value="Congo" <?php if(@$country_name=='Congo'){ echo ' selected';} ?>>Congo</option>
                  <option value="Congo, The Democratic Republic of The" <?php if(@$country_name=='Congo, The Democratic Republic of The'){ echo ' selected';} ?>>Congo, The Democratic Republic of The</option>
                  <option value="Cook Islands" <?php if(@$country_name=='Cook Islands'){ echo ' selected';} ?>>Cook Islands</option>
                  <option value="Costa Rica" <?php if(@$country_name=='Costa Rica'){ echo ' selected';} ?>>Costa Rica</option>
                  <option value="Cote D'ivoire" <?php if(@$country_name=="Cote D'ivoire"){ echo ' selected';} ?>>Cote D'ivoire</option>
                  <option value="Croatia" <?php if(@$country_name=='Croatia'){ echo ' selected';} ?>>Croatia</option>
                  <option value="Cuba" <?php if(@$country_name=='Cuba'){ echo ' selected';} ?>>Cuba</option>
                  <option value="Cyprus" <?php if(@$country_name=='Cyprus'){ echo ' selected';} ?>>Cyprus</option>
                  <option value="Czech Republic" <?php if(@$country_name=='Czech Republic'){ echo ' selected';} ?>>Czech Republic</option>
                  <option value="Denmark" <?php if(@$country_name=='Denmark'){ echo ' selected';} ?>>Denmark</option>
                  <option value="Djibouti" <?php if(@$country_name=='Djibouti'){ echo ' selected';} ?>>Djibouti</option>
                  <option value="Dominica" <?php if(@$country_name=='Dominica'){ echo ' selected';} ?>>Dominica</option>
                  <option value="Dominican Republic" <?php if(@$country_name=='Dominican Republic'){ echo ' selected';} ?>>Dominican Republic</option>
                  <option value="Ecuador" <?php if(@$country_name=='Ecuador'){ echo ' selected';} ?>>Ecuador</option>
                  <option value="Egypt" <?php if(@$country_name=='Egypt'){ echo ' selected';} ?>>Egypt</option>
                  <option value="El Salvador" <?php if(@$country_name=='El Salvador'){ echo ' selected';} ?>>El Salvador</option>
                  <option value="Equatorial Guinea" <?php if(@$country_name=='Equatorial Guinea'){ echo ' selected';} ?>>Equatorial Guinea</option>
                  <option value="Eritrea" <?php if(@$country_name=='Eritrea'){ echo ' selected';} ?>>Eritrea</option>
                  <option value="Estonia" <?php if(@$country_name=='Estonia'){ echo ' selected';} ?>>Estonia</option>
                  <option value="Ethiopia" <?php if(@$country_name=='Ethiopia'){ echo ' selected';} ?>>Ethiopia</option>
                  <option value="Falkland Islands (Malvinas)" <?php if(@$country_name=='Falkland Islands (Malvinas)'){ echo ' selected';} ?>>Falkland Islands (Malvinas)</option>
                  <option value="Faroe Islands" <?php if(@$country_name=='Faroe Islands'){ echo ' selected';} ?>>Faroe Islands</option>
                  <option value="Fiji" <?php if(@$country_name=='Fiji'){ echo ' selected';} ?>>Fiji</option>
                  <option value="Finland" <?php if(@$country_name=='Finland'){ echo ' selected';} ?>>Finland</option>
                  <option value="France" <?php if(@$country_name=='France'){ echo ' selected';} ?>>France</option>
                  <option value="French Guiana" <?php if(@$country_name=='French Guiana'){ echo ' selected';} ?>>French Guiana</option>
                  <option value="French Polynesia" <?php if(@$country_name=='French Polynesia'){ echo ' selected';} ?>>French Polynesia</option>
                  <option value="French Southern Territories" <?php if(@$country_name=='French Southern Territories'){ echo ' selected';} ?>>French Southern Territories</option>
                  <option value="Gabon" <?php if(@$country_name=='Gabon'){ echo ' selected';} ?>>Gabon</option>
                  <option value="Gambia" <?php if(@$country_name=='Gambia'){ echo ' selected';} ?>>Gambia</option>
                  <option value="Georgia" <?php if(@$country_name=='Georgia'){ echo ' selected';} ?>>Georgia</option>
                  <option value="Germany" <?php if(@$country_name=='Germany'){ echo ' selected';} ?>>Germany</option>
                  <option value="Ghana" <?php if(@$country_name=='Ghana'){ echo ' selected';} ?>>Ghana</option>
                  <option value="Gibraltar" <?php if(@$country_name=='Gibraltar'){ echo ' selected';} ?>>Gibraltar</option>
                  <option value="Greece" <?php if(@$country_name=='Greece'){ echo ' selected';} ?>>Greece</option>
                  <option value="Greenland" <?php if(@$country_name=='Greenland'){ echo ' selected';} ?>>Greenland</option>
                  <option value="Grenada" <?php if(@$country_name=='Grenada'){ echo ' selected';} ?>>Grenada</option>
                  <option value="Guadeloupe" <?php if(@$country_name=='Guadeloupe'){ echo ' selected';} ?>>Guadeloupe</option>
                  <option value="Guam" <?php if(@$country_name=='Guam'){ echo ' selected';} ?>>Guam</option>
                  <option value="Guatemala" <?php if(@$country_name=='Guatemala'){ echo ' selected';} ?>>Guatemala</option>
                  <option value="Guinea" <?php if(@$country_name=='Guinea'){ echo ' selected';} ?>>Guinea</option>
                  <option value="Guinea_bissau" <?php if(@$country_name=='Guinea_bissau'){ echo ' selected';} ?>>Guinea_bissau</option>
                  <option value="Guyana" <?php if(@$country_name=='Guyana'){ echo ' selected';} ?>>Guyana</option>
                  <option value="Haiti" <?php if(@$country_name=='Haiti'){ echo ' selected';} ?>>Haiti</option>
                  <option value="Heard Island and Mcdonald Islands" <?php if(@$country_name=='Heard Island and Mcdonald Islands'){ echo ' selected';} ?>>Heard Island and Mcdonald Islands</option>
                  <option value="Holy See (Vatican City State)" <?php if(@$country_name=='Holy See (Vatican City State)'){ echo ' selected';} ?>>Holy See (Vatican City State)</option>
                  <option value="Honduras" <?php if(@$country_name=='Honduras'){ echo ' selected';} ?>>Honduras</option>
                  <option value="Hong Kong" <?php if(@$country_name=='Hong Kong'){ echo ' selected';} ?>>Hong Kong</option>
                  <option value="Hungary" <?php if(@$country_name=='Hungary'){ echo ' selected';} ?>>Hungary</option>
                  <option value="Iceland" <?php if(@$country_name=='Iceland'){ echo ' selected';} ?>>Iceland</option>
                  <option value="India" <?php if(@$country_name=='India'){ echo ' selected';} ?>>India</option>
                  <option value="Indonesia" <?php if(@$country_name=='Indonesia'){ echo ' selected';} ?>>Indonesia</option>
                  <option value="Iran, Islamic Republic of" <?php if(@$country_name=='Iran, Islamic Republic of'){ echo ' selected';} ?>>Iran, Islamic Republic of</option>
                  <option value="Iraq" <?php if(@$country_name=='Iraq'){ echo ' selected';} ?>>Iraq</option>
                  <option value="Ireland" <?php if(@$country_name=='Ireland'){ echo ' selected';} ?>>Ireland</option>
                  <option value="Israel" <?php if(@$country_name=='Israel'){ echo ' selected';} ?>>Israel</option>
                  <option value="Italy" <?php if(@$country_name=='Italy'){ echo ' selected';} ?>>Italy</option>
                  <option value="Jamaica" <?php if(@$country_name=='Jamaica'){ echo ' selected';} ?>>Jamaica</option>
                  <option value="Japan" <?php if(@$country_name=='Japan'){ echo ' selected';} ?>>Japan</option>
                  <option value="Jordan" <?php if(@$country_name=='Jordan'){ echo ' selected';} ?>>Jordan</option>
                  <option value="Kazakhstan" <?php if(@$country_name=='Kazakhstan'){ echo ' selected';} ?>>Kazakhstan</option>
                  <option value="Kenya" <?php if(@$country_name=='Kenya'){ echo ' selected';} ?>>Kenya</option>
                  <option value="Kiribati" <?php if(@$country_name=='Kiribati'){ echo ' selected';} ?>>Kiribati</option>
                  <option value="Korea, Democratic People's Republic of" <?php if(@$country_name=="Korea, Democratic People's Republic of"){ echo ' selected';} ?>>Korea, Democratic People's Republic of</option>
                  <option value="Korea, Republic of" <?php if(@$country_name=='Korea, Republic of'){ echo ' selected';} ?>>Korea, Republic of</option>
                  <option value="Kuwait" <?php if(@$country_name=='Kuwait'){ echo ' selected';} ?>>Kuwait</option>
                  <option value="Kyrgyzstan" <?php if(@$country_name=='Kyrgyzstan'){ echo ' selected';} ?>>Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic" <?php if(@$country_name=="Lao People's Democratic Republic"){ echo ' selected';} ?>>Lao People's Democratic Republic</option>
                  <option value="Latvia" <?php if(@$country_name=='Latvia'){ echo ' selected';} ?>>Latvia</option>
                  <option value="Lebanon" <?php if(@$country_name=='Lebanon'){ echo ' selected';} ?>>Lebanon</option>
                  <option value="Lesotho" <?php if(@$country_name=='Lesotho'){ echo ' selected';} ?>>Lesotho</option>
                  <option value="Liberia" <?php if(@$country_name=='Liberia'){ echo ' selected';} ?>>Liberia</option>
                  <option value="Libyan Arab Jamahiriya" <?php if(@$country_name=='Libyan Arab Jamahiriya'){ echo ' selected';} ?>>Libyan Arab Jamahiriya</option>
                  <option value="Liechtenstein" <?php if(@$country_name=='Liechtenstein'){ echo ' selected';} ?>>Liechtenstein</option>
                  <option value="Lithuania" <?php if(@$country_name=='Lithuania'){ echo ' selected';} ?>>Lithuania</option>
                  <option value="Luxembourg" <?php if(@$country_name=='Luxembourg'){ echo ' selected';} ?>>Luxembourg</option>
                  <option value="Macao" <?php if(@$country_name=='Macao'){ echo ' selected';} ?>>Macao</option>
                  <option value="Macedonia, The Former Yugoslav Republic of" <?php if(@$country_name=='Macedonia, The Former Yugoslav Republic of'){ echo ' selected';} ?>>Macedonia, The Former Yugoslav Republic of</option>
                  <option value="Madagascar" <?php if(@$country_name=='Madagascar'){ echo ' selected';} ?>>Madagascar</option>
                  <option value="Malawi" <?php if(@$country_name=='Malawi'){ echo ' selected';} ?>>Malawi</option>
                  <option value="Malaysia" <?php if(@$country_name=='Malaysia'){ echo ' selected';} ?>>Malaysia</option>
                  <option value="Maldives" <?php if(@$country_name=='Maldives'){ echo ' selected';} ?>>Maldives</option>
                  <option value="Mali" <?php if(@$country_name=='Mali'){ echo ' selected';} ?>>Mali</option>
                  <option value="Marshall Islands" <?php if(@$country_name=='Marshall Islands'){ echo ' selected';} ?>>Marshall Islands</option>
                  <option value="Martinique" <?php if(@$country_name=='Martinique'){ echo ' selected';} ?>>Martinique</option>
                  <option value="Mauritania" <?php if(@$country_name=='Mauritania'){ echo ' selected';} ?>>Mauritania</option>
                  <option value="Mauritius" <?php if(@$country_name=='Mauritius'){ echo ' selected';} ?>>Mauritius</option>
                  <option value="Mayotte" <?php if(@$country_name=='Mayotte'){ echo ' selected';} ?>>Mayotte</option>
                  <option value="Mexico" <?php if(@$country_name=='Mexico'){ echo ' selected';} ?>>Mexico</option>
                  <option value="Micronesia, Federated States of"  <?php if(@$country_name=='Micronesia, Federated States of'){ echo ' selected';} ?>>Micronesia, Federated States of</option>
                  <option value="Moldova, Republic of" <?php if(@$country_name=='Moldova, Republic of'){ echo ' selected';} ?>>Moldova, Republic of</option>
                  <option value="Monaco" <?php if(@$country_name=='Monaco'){ echo ' selected';} ?>>Monaco</option>
                  <option value="Mongolia" <?php if(@$country_name=='Mongolia'){ echo ' selected';} ?>>Mongolia</option>
                  <option value="Montserrat" <?php if(@$country_name=='Montserrat'){ echo ' selected';} ?>>Montserrat</option>
                  <option value="Morocco" <?php if(@$country_name=='Morocco'){ echo ' selected';} ?>>Morocco</option>
                  <option value="Mozambique" <?php if(@$country_name=='Mozambique'){ echo ' selected';} ?>>Mozambique</option>
                  <option value="Myanmar" <?php if(@$country_name=='Myanmar'){ echo ' selected';} ?>>Myanmar</option>
                  <option value="Namibia" <?php if(@$country_name=='Namibia'){ echo ' selected';} ?>>Namibia</option>
                  <option value="Nauru" <?php if(@$country_name=='Nauru'){ echo ' selected';} ?>>Nauru</option>
                  <option value="Nepal" <?php if(@$country_name=='Nepal'){ echo ' selected';} ?>>Nepal</option>
                  <option value="Netherlands" <?php if(@$country_name=='Netherlands'){ echo ' selected';} ?>>Netherlands</option>
                  <option value="Netherlands Antilles" <?php if(@$country_name=='Netherlands Antilles'){ echo ' selected';} ?>>Netherlands Antilles</option>
                  <option value="New Caledonia" <?php if(@$country_name=='New Caledonia'){ echo ' selected';} ?>>New Caledonia</option>
                  <option value="New Zealand" <?php if(@$country_name=='New Zealand'){ echo ' selected';} ?>>New Zealand</option>
                  <option value="Nicaragua" <?php if(@$country_name=='Nicaragua'){ echo ' selected';} ?>>Nicaragua</option>
                  <option value="Niger" <?php if(@$country_name=='Niger'){ echo ' selected';} ?>>Niger</option>
                  <option value="Nigeria" <?php if(@$country_name=='Nigeria'){ echo ' selected';} ?>>Nigeria</option>
                  <option value="Niue" <?php if(@$country_name=='Niue'){ echo ' selected';} ?>>Niue</option>
                  <option value="Norfolk Island" <?php if(@$country_name=='Norfolk Island'){ echo ' selected';} ?>>Norfolk Island</option>
                  <option value="Northern Mariana Islands" <?php if(@$country_name=='Northern Mariana Islands'){ echo ' selected';} ?>>Northern Mariana Islands</option>
                  <option value="Norway" <?php if(@$country_name=='Norway'){ echo ' selected';} ?>>Norway</option>
                  <option value="Oman" <?php if(@$country_name=='Oman'){ echo ' selected';} ?>>Oman</option>
                  <option value="Pakistan" <?php if(@$country_name=='Pakistan'){ echo ' selected';} ?>>Pakistan</option>
                  <option value="Palau" <?php if(@$country_name=='Palau'){ echo ' selected';} ?>>Palau</option>
                  <option value="Palestinian Territory, Occupied" <?php if(@$country_name=='Palestinian Territory, Occupied'){ echo ' selected';} ?>>Palestinian Territory, Occupied</option>
                  <option value="Panama" <?php if(@$country_name=='Panama'){ echo ' selected';} ?>>Panama</option>
                  <option value="Papua New Guinea" <?php if(@$country_name=='Papua New Guinea'){ echo ' selected';} ?>>Papua New Guinea</option>
                  <option value="Paraguay" <?php if(@$country_name=='Paraguay'){ echo ' selected';} ?>>Paraguay</option>
                  <option value="Peru" <?php if(@$country_name=='Peru'){ echo ' selected';} ?>>Peru</option>
                  <option value="Philippines" <?php if(@$country_name=='Philippines'){ echo ' selected';} ?>>Philippines</option>
                  <option value="Pitcairn" <?php if(@$country_name=='Pitcairn'){ echo ' selected';} ?>>Pitcairn</option>
                  <option value="Poland" <?php if(@$country_name=='Poland'){ echo ' selected';} ?>>Poland</option>
                  <option value="Portugal" <?php if(@$country_name=='Portugal'){ echo ' selected';} ?>>Portugal</option>
                  <option value="Puerto Rico" <?php if(@$country_name=='Puerto Rico'){ echo ' selected';} ?>>Puerto Rico</option>
                  <option value="Qatar" <?php if(@$country_name=='Qatar'){ echo ' selected';} ?>>Qatar</option>
                  <option value="Reunion" <?php if(@$country_name=='Reunion'){ echo ' selected';} ?>>Reunion</option>
                  <option value="Romania" <?php if(@$country_name=='Romania'){ echo ' selected';} ?>>Romania</option>
                  <option value="Russian Federation" <?php if(@$country_name=='Russian Federation'){ echo ' selected';} ?>>Russian Federation</option>
                  <option value="Rwanda" <?php if(@$country_name=='Rwanda'){ echo ' selected';} ?>>Rwanda</option>
                  <option value="Saint Helena" <?php if(@$country_name=='Saint Helena'){ echo ' selected';} ?>>Saint Helena</option>
                  <option value="Saint Kitts and Nevis" <?php if(@$country_name=='Saint Kitts and Neviss'){ echo ' selected';} ?>>Saint Kitts and Nevis</option>
                  <option value="Saint Lucia" <?php if(@$country_name=='Saint Lucia'){ echo ' selected';} ?>>Saint Lucia</option>
                  <option value="Saint Pierre and Miquelon" <?php if(@$country_name=='Saint Pierre and Miquelon'){ echo ' selected';} ?>>Saint Pierre and Miquelon</option>
                  <option value="Saint Vincent and The Grenadines" <?php if(@$country_name=='Saint Vincent and The Grenadines'){ echo ' selected';} ?>>Saint Vincent and The Grenadines</option>
                  <option value="Samoa" <?php if(@$country_name=='Samoa'){ echo ' selected';} ?>>Samoa</option>
                  <option value="San Marino" <?php if(@$country_name=='San Marino'){ echo ' selected';} ?>>San Marino</option>
                  <option value="Sao Tome and Principe" <?php if(@$country_name=='Sao Tome and Principe'){ echo ' selected';} ?>>Sao Tome and Principe</option>
                  <option value="Saudi Arabia" <?php if(@$country_name=='Saudi Arabia'){ echo ' selected';} ?>>Saudi Arabia</option>
                  <option value="Senegal" <?php if(@$country_name=='Senegal'){ echo ' selected';} ?>>Senegal</option>
                  <option value="Serbia and Montenegro" <?php if(@$country_name=='Serbia and Montenegro'){ echo ' selected';} ?>>Serbia and Montenegro</option>
                  <option value="Seychelles" <?php if(@$country_name=='Seychelles'){ echo ' selected';} ?>>Seychelles</option>
                  <option value="Sierra Leone" <?php if(@$country_name=='Sierra Leone'){ echo ' selected';} ?>>Sierra Leone</option>
                  <option value="Singapore" <?php if(@$country_name=='Singapore'){ echo ' selected';} ?>>Singapore</option>
                  <option value="Slovakia" <?php if(@$country_name=='Slovakia'){ echo ' selected';} ?>>Slovakia</option>
                  <option value="Slovenia" <?php if(@$country_name=='Slovenia'){ echo ' selected';} ?>>Slovenia</option>
                  <option value="Solomon Islands" <?php if(@$country_name=='Solomon Islands'){ echo ' selected';} ?>>Solomon Islands</option>
                  <option value="Somalia" <?php if(@$country_name=='Somalia'){ echo ' selected';} ?>>Somalia</option>
                  <option value="South Africa" <?php if(@$country_name=='South Africa'){ echo ' selected';} ?>>South Africa</option>
                  <option value="South Georgia and The South Sandwich Islands" <?php if(@$country_name=='South Georgia and The South Sandwich Islands'){ echo ' selected';} ?>>South Georgia and The South Sandwich Islands</option>
                  <option value="Spain" <?php if(@$country_name=='Spain'){ echo ' selected';} ?>>Spain</option>
                  <option value="Sri Lanka" <?php if(@$country_name=='Sri Lanka'){ echo ' selected';} ?>>Sri Lanka</option>
                  <option value="Sudan" <?php if(@$country_name=='Sudan'){ echo ' selected';} ?>>Sudan</option>
                  <option value="Suriname" <?php if(@$country_name=='Suriname'){ echo ' selected';} ?>>Suriname</option>
                  <option value="Svalbard and Jan Mayen" <?php if(@$country_name=='USvalbard and Jan Mayen'){ echo ' selected';} ?>>Svalbard and Jan Mayen</option>
                  <option value="Swaziland" <?php if(@$country_name=='Swaziland'){ echo ' selected';} ?>>Swaziland</option>
                  <option value="Sweden" <?php if(@$country_name=='Sweden'){ echo ' selected';} ?>>Sweden</option>
                  <option value="Switzerland" <?php if(@$country_name=='Switzerland'){ echo ' selected';} ?>>Switzerland</option>
                  <option value="Syrian Arab Republic" <?php if(@$country_name=='Syrian Arab Republic'){ echo ' selected';} ?>>Syrian Arab Republic</option>
                  <option value="Taiwan, Province of China" <?php if(@$country_name=='Taiwan, Province of China'){ echo ' selected';} ?>>Taiwan, Province of China</option>
                  <option value="Tajikistan" <?php if(@$country_name=='Tajikistan'){ echo ' selected';} ?>>Tajikistan</option>
                  <option value="Tanzania, United Republic of" <?php if(@$country_name=='Tanzania, United Republic of'){ echo ' selected';} ?>>Tanzania, United Republic of</option>
                  <option value="Thailand" <?php if(@$country_name=='Thailand'){ echo ' selected';} ?>>Thailand</option>
                  <option value="Timor_leste" <?php if(@$country_name=='Timor_leste'){ echo ' selected';} ?>>Timor_leste</option>
                  <option value="Togo" <?php if(@$country_name=='Togo'){ echo ' selected';} ?>>Togo</option>
                  <option value="Tokelau" <?php if(@$country_name=='Tokelau'){ echo ' selected';} ?>>Tokelau</option>
                  <option value="Tonga" <?php if(@$country_name=='Tonga'){ echo ' selected';} ?>>Tonga</option>
                  <option value="Trinidad and Tobago" <?php if(@$country_name=='Trinidad and Tobago'){ echo ' selected';} ?>>Trinidad and Tobago</option>
                  <option value="Tunisia" <?php if(@$country_name=='Tunisia'){ echo ' selected';} ?>>Tunisia</option>
                  <option value="Turkey" <?php if(@$country_name=='Turkey'){ echo ' selected';} ?>>Turkey</option>
                  <option value="Turkmenistan" <?php if(@$country_name=='Turkmenistan'){ echo ' selected';} ?>>Turkmenistan</option>
                  <option value="Turks and Caicos Islands" <?php if(@$country_name=='Turks and Caicos Islands'){ echo ' selected';} ?>>Turks and Caicos Islands</option>
                  <option value="Tuvalu" <?php if(@$country_name=='United States'){ echo ' selected';} ?>>Tuvalu</option>
                  <option value="Uganda" <?php if(@$country_name=='Uganda'){ echo ' selected';} ?>>Uganda</option>
                  <option value="Ukraine" <?php if(@$country_name=='Ukraine'){ echo ' selected';} ?>>Ukraine</option>
                  <option value="United Arab Emirates" <?php if(@$country_name=='United Arab Emirates'){ echo ' selected';} ?>>United Arab Emirates</option>
                  <option value="United States Minor Outlying Islands" <?php if(@$country_name=='United States Minor Outlying Islands'){ echo ' selected';} ?>>United States Minor Outlying Islands</option>
                  <option value="Uruguay" <?php if(@$country_name=='Uruguay'){ echo ' selected';} ?>>Uruguay</option>
                  <option value="Uzbekistan" <?php if(@$country_name=='Uzbekistan'){ echo ' selected';} ?>>Uzbekistan</option>
                  <option value="Vanuatu" <?php if(@$country_name=='Vanuatu'){ echo ' selected';} ?>>Vanuatu</option>
                  <option value="Venezuela" <?php if(@$country_name=='Venezuela'){ echo ' selected';} ?>>Venezuela</option>
                  <option value="Viet Nam" <?php if(@$country_name=='Viet Nam'){ echo ' selected';} ?>>Viet Nam</option>
                  <option value="Virgin Islands, British" <?php if(@$country_name=='Virgin Islands, British'){ echo ' selected';} ?>>Virgin Islands, British</option>
                  <option value="Virgin Islands, U.S." <?php if(@$country_name=='Virgin Islands, U.S.'){ echo ' selected';} ?>>Virgin Islands, U.S.</option>
                  <option value="Wallis and Futuna" <?php if(@$country_name=='Wallis and Futuna'){ echo ' selected';} ?>>Wallis and Futuna</option>
                  <option value="Western Sahara" <?php if(@$country_name=='Western Sahara'){ echo ' selected';} ?>>Western Sahara</option>
                  <option value="Yemen" <?php if(@$country_name=='Yemen'){ echo ' selected';} ?>>Yemen</option>
                  <option value="Zambia" <?php if(@$country_name=='Zambia'){ echo ' selected';} ?>>Zambia</option>
                  <option value="Zimbabwe" <?php if(@$country_name=='Zimbabwe'){ echo ' selected';} ?>>Zimbabwe</option>
              </select>      
    </div>
  </div> 
    
      <div class="form-group">
    <label for="phone" class="col-sm-4 control-label">Phone</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo @$phone; ?>">
    </div>
  </div>
    
      <div class="form-group">
    <label for="email" class="col-sm-4 control-label">Email <span>*</span></label>
    <div class="col-sm-8">
        <input type="email" class="form-control" name="email" id="email" value="<?php echo @$email; ?>" required />
    </div>
  </div>   
      
  </div>
</div>
    
    
    
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title" style="padding-top: 10px;">&nbsp;&nbsp;&nbsp; Payment Details </h3>
  </div>
  <div class="panel-body">

    <div class="form-group">
    <label for="fee" class="col-sm-4 control-label">Fees in AUD $ </label>
    <div class="col-sm-8" style="padding-top: 10px;">
        <?php echo $courseFees; ?>
        
    </div>
  </div>
    
    <div class="form-group">
        <label for="last_name" class="col-sm-4 control-label">Payment Method <span> *</span> </label>
    <div class="col-sm-8">
       <select name="payment_method" id="payment_method" class="form-control" onchange="payment_method_change()" required >
                  <option value="">--Select--</option>
                  <option value="Online" <?php if(@$payment_method=='Online'){ echo ' selected';} ?>>Pay Online</option>
                  <option value="Coupon" <?php if(@$payment_method=='Coupon'){ echo ' selected';} ?>>Pay using Coupon</option>
       </select>
    </div>
  </div>
    
      <div class="form-group" id="div_card_type">
    <label for="card_type" class="col-sm-4 control-label">Card Type <span> *</span></label>
    <div class="col-sm-8">
        <div class="radio" style="float: left;">
          <label>
              <input type="radio" name="card_type" id="card_credit" value="credit" <?php if(@$card_type=='card_credit'){ echo ' checked';} ?> onchange="calculatefees()">
            Credit Card
          </label>
        </div>
        <div class="radio" style="float: left;">
          <label>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="card_type" id="card_debit" value="debit" <?php if(@$card_type=='debit_card'){ echo ' checked';} ?> onchange="calculatefees()">
            Debit Card
          </label>
        </div>        
    </div>
  </div> 
      <div class="form-group" id="div_card_comment">
          <label for="phone" class="col-sm-4 control-label">&nbsp;</label>
    <div class="col-sm-8">
        <label>[ An additional 1.5% of the fee amount will be charged as surcharge from credit card users. ]</label>
    </div>
  </div>
    
      <div class="form-group" id="div_final_fee">
          <label for="email" class="col-sm-4 control-label">Amount to be paid <br />( Course Fee + Surcharge ) </label>
          <div class="col-sm-8" style="padding-top: 10px;">
              <input type="text" class="form-control" name="final_fee" id="final_fee" value="<?php echo $courseFees; ?>" />
    </div>
  </div>    
    
      <div class="form-group" id="div_coupon_code">
          <label for="phone" class="col-sm-4 control-label">Coupon Code <span> *</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" name="coupon_code" id="coupon_code" value="<?php echo @$coupon_code; ?>" />
    </div>
  </div>    
    
      <div class="form-group">
          <label for="phone" class="col-sm-4 control-label">Enter Security No. <span> *</span></label>
    <div class="col-sm-8">
        <label class="col-sm-4" style="padding-top: 5px; font-weight: bold; color: #000;">
            <?php
                echo $security_original;
            ?>
        </label>
        <input type="text" class="col-sm-8" name="security" id="security" value="" required />
    </div>
  </div>
    

      
      
      
  </div>
</div>
     
     
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default" onclick="if(!empty_validate()){ return false; }else{ return true; }">Submit</button>
    </div>
  </div>       
     
     
     </form>
</div>


<script type="text/javascript">
function payment_method_change()
{
	ob = document.getElementById('payment_method').value;
        
	if(ob=='Online')
	{
		
		document.getElementById('div_card_type').style.display = "block";
		document.getElementById('div_card_comment').style.display = "block";
		document.getElementById('div_final_fee').style.display = "none";
                document.getElementById('div_coupon_code').style.display = "none";	
                
	}
	else if(ob=='Coupon')
	{
		document.frm.card_type[0].checked=false;
		document.frm.card_type[1].checked=false;		
		
		document.getElementById('div_card_type').style.display = "none";
		document.getElementById('div_card_comment').style.display = "none";
		document.getElementById('div_final_fee').style.display = "none";
                document.getElementById('div_coupon_code').style.display = "block";				
	}
	else
	{
		document.frm.card_type[0].checked=false;
		document.frm.card_type[1].checked=false;		
			
		document.getElementById('div_card_type').style.display = "none";
		document.getElementById('div_card_comment').style.display = "none";
		document.getElementById('div_final_fee').style.display = "none";
                document.getElementById('div_coupon_code').style.display = "none";				
	}
}

function calculatefees()
{
	   if(document.frm.card_type[0].checked==true)
	   {
		var finalfee = parseFloat(document.getElementById('fee').value)+(parseFloat(document.getElementById('fee').value) * parseFloat(1.5)/ 100);

	   }
	   else
	   {
		var finalfee = parseFloat(document.getElementById('fee').value);
	   }
           
            document.getElementById('div_final_fee').style.display = "block";
            document.getElementById('final_fee').value = roundNumber(finalfee,2);           
           
}

function roundNumber(number, decimals) {      
    var d = parseInt(decimals,10),
        dx = Math.pow(10,d),
        n = parseFloat(number),
        f = Math.round(Math.round(n * dx * 10) / 10) / dx;
    return f.toFixed(d);
}

function empty_validate(){
    ob = document.getElementById('payment_method').value;
    if(ob=='Online')
    {
        if(!document.frm.card_type[0].checked && !document.frm.card_type[1].checked){
            alert('Please select a card type.');
            return false;
        }
    }
    else if(ob=='Coupon')
    {
        if(document.getElementById('coupon_code').value==''){
            alert('Please provide a coupon code.');
            return false;            
        }
    }
    if( document.getElementById('security').value != document.getElementById('security_validation').value){
            alert('Security code miss match.');
            return false;         
    }
    return true;
}

window.onload = function(e){ 
    payment_method_change();
}
    </script>