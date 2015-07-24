         
                <div class="row">                 
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
      				<h1 class=" wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">Application Form</h1>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">                     

                        <script type="text/javascript">
                            function empty_validation(){                                
                                if(document.getElementById('first_name').value==''){
                                    alert('Please provide First name');
                                    return false;
                                }
                                if(document.getElementById('last_name').value==''){
                                    alert('Please provide Last name');
                                    return false;
                                }
                                if(document.getElementById('email').value==''){
                                    alert('Please provide Email');
                                    return false;
                                }  
                                return true;
                            }
                            </script>                        
<!-- form goes here -->
<form class="form-horizontal" method="post" name="frm" id="frm" action="<?php echo WEB_URL.'courses/applynow/'.@$course_id.'/'.$type_id; ?>" enctype="multipart/form-data">
    <input type="hidden" name="final_submit" id="final_submit" value="0" />
  <div class="form-group">
    <label for="course_name" class="col-sm-2 control-label">Course Name</label>
    <div class="col-sm-10">
        <label style="padding-top: 8px;"><?php echo $course_name; ?></label>
        <input type="hidden" name="course_name" id="course_name" value="<?php echo $course_name; ?>" />
    </div>
  </div>
      <div class="form-group">
    <label for="campus_id" class="col-sm-2 control-label">Campus</label>
    <div class="col-sm-5">

        <select name="campus_id" class="form-control" id="campus_id" onchange="$('#mod_of_delivery_id').empty(); $('#start_date_id').empty(); $('#campus_name').val( this.options[this.selectedIndex].text ); document.frm.submit();">
          <option value="">Select</option>
<?php foreach($campuses as $row){ ?>
          <option value="<?php echo $row['c']['id'] ?>" <?php if($row['c']['id']==@$campus_id){ echo ' selected'; } ?>><?php echo $row['c']['campus_name'] ?></option>
          <?php } ?>
  </select>
        
        <input type="hidden" name="campus_name" id="campus_name" value="<?php echo @$campus_name ?>" />
        
    </div>
  </div>
    
    <!-- DISCARDED BECAUSE COMING FROM url -->
    <!-- 
      <div class="form-group">
    <label for="student_type_id" class="col-sm-2 control-label">Student type</label>
    <div class="col-sm-10">

      <select name="student_type_id" class="form-control" id="student_type_id" >
          <option value="">Select</option>
<?php foreach($student_types as $row){ ?>
          <option value="<?php echo $row['st']['id'] ?>"><?php echo $row['st']['name'] ?></option>
          <?php } ?>
  </select>
    </div>
  </div> 
    -->
    
    
      <div class="form-group">
    <label for="mod_of_delivery_id" class="col-sm-2 control-label">Delivery mode</label>
    <div class="col-sm-5">

      <select name="mod_of_delivery_id" class="form-control" id="mod_of_delivery_id" onchange="$('#start_date_id').empty(); $('#mod_of_delivery_name').val(this.options[this.selectedIndex].text); document.frm.submit();">
          <option value="">Select</option>
<?php foreach($delivery as $row){ ?>
          <option value="<?php echo $row['md']['id']; ?>" <?php if($row['md']['id']==@$mod_of_delivery_id){ echo ' selected'; } ?>><?php echo $row['md']['name'] ?></option>
          <?php } ?>
  </select>
        
        <input type="hidden" name="mod_of_delivery_name" id="mod_of_delivery_name" value="<?php echo @$mod_of_delivery_name; ?>" />
        
        
    </div>
  </div>     
      <div class="form-group">
    <label for="start_date_id" class="col-sm-2 control-label">Start Date</label>
    <div class="col-sm-5">

      <select name="start_date_id" class="form-control" id="start_date_id" onchange="$('#start_date_name').val(this.options[this.selectedIndex].text);" >
          <option value="">Select</option>
<?php foreach($start_dates as $row){ ?>
          <option value="<?php echo $row['csd']['id'] ?>" <?php if($row['csd']['id']==@$start_date_id){ echo ' selected'; } ?>><?php echo $row['csd']['start_date'] ?></option>
          <?php } ?>
  </select>
        
        <input type="hidden" name="start_date_name" id="start_date_name" value="<?php echo @$start_date_name; ?>" />
        
    </div>
  </div>
      <div class="form-group">
    <label for="first_name" class="col-sm-2 control-label">First Name <span>*</span></label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo @$first_name; ?>" >
    </div>
  </div>
      <div class="form-group">
    <label for="last_name" class="col-sm-2 control-label">Last Name <span>*</span></label>
    <div class="col-sm-5">
      <input type="text" class="form-control"  name="last_name" id="last_name" value="<?php echo @$last_name; ?>" >
    </div>
  </div>
      <div class="form-group">
          <label for="gender" class="col-sm-2 control-label">Gender</label>
          <div class="col-sm-5">
<div class="radio">
  <label>
    <input type="radio" name="gender" id="gender_male" value="Male" <?php if(@$gender=='Male'){ echo ' checked';} ?>>
    Male
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="gender" id="gender_female" value="Female" <?php if(@$gender=='Female'){ echo ' checked';} ?>>
    Female
  </label>
</div>
          </div>
  </div>
      <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-5">
        <textarea name="address" id="address" class="form-control" rows="3" style="resize:vertical;"><?php echo @$address; ?></textarea>
    </div>
  </div>
      <div class="form-group">
    <label for="country_name" class="col-sm-2 control-label">Country</label>
    <div class="col-sm-5">
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
    <label for="email" class="col-sm-2 control-label">Email <span>*</span></label>
    <div class="col-sm-5">
        <input type="email" class="form-control" name="email" id="email" value="<?php echo @$email; ?>" />
    </div>
  </div>
      <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo @$phone; ?>">
    </div>
  </div>
      <div class="form-group">
    <label for="mobile" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo @$mobile; ?>">
    </div>
  </div>
      <div class="form-group">
    <label for="resume" class="col-sm-2 control-label">Resume</label>
    <div class="col-sm-5">
        <input type="file" name="resume" id="resume" >
    </div>
  </div>
    
    
    <?php if(@$course_id==32){ ?>
      <div class="form-group">
    <label for="ahpra" class="col-sm-2 control-label">AHPRA Letter</label>
    <div class="col-sm-5">
      <input type="file" name="ahpra" id="ahpra" >
    </div>
  </div>
    <?php } ?>
    
      <div class="form-group">
    <label for="skype_id" class="col-sm-2 control-label">Skype Id</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="skype_id" id="skype_id" value="<?php echo @$skype_id; ?>">
    </div>
  </div>
      <div class="form-group">
    <label for="facebook_id" class="col-sm-2 control-label">Facebook Id</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="facebook_id" id="facebook_id" value="<?php echo @$facebook_id; ?>">
    </div>
  </div>
    
    <!--
      <div class="form-group">
    <label for="input-course-name" class="col-sm-2 control-label">Enter Security No.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input-course-name" >
    </div>
  </div>
    -->
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
            <input type="checkbox" required> I have read and understood the IHNA Student Handbook and Course Brochure.
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" onclick="if(empty_validation()){ document.getElementById('final_submit').value = 1; }else{ return false; }">Submit</button>
    </div>
  </div>
</form>
                                         
                                         
                                         
                                         
           			</div>
                    
                    
                                    
    
        </div>            
     </div> 