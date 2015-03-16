function validateForm (whichform) {
	valid=true;
	fieldcolor='#ECA239';
	validationErrors.innerHTML = "";
	alertmsg = "";
	twonumRegex = /^\d{2}$/;
	threenumRegex = /^\d{3}$/;
	fournumRegex = /^\d{4}$/;
	zipRegex = /^\d{5}$/;
	sixnumRegex = /^\d{6}$/;
	emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	ccRegex = /^\d{16}$/;
	spaceRegex = /^\s*$/;
	singRegex = /^\d{1}$/;
	curdate = new Date();
	currentyear = curdate.getFullYear();
	currentmonth = curdate.getMonth() + 1;
	currentdayofmonth = curdate.getDate();
	
	if (whichform == "studentForm") {
		// Extracurricular Interests logic
		total_cb=document.studentform['student_interests[]'];
		total_si=0;
		for(i=0; i<total_cb.length; i++) {
			if (total_cb[i].checked) {
				total_si++;
			}
		}
		//alertmsg="total student intersts: " + total_cb.length + " total checked: " + total_si + ";
		//valid=false;
		
		if (null != spaceRegex.exec(document.studentform.student_fname.value)) {
			//document.studentform.student_fname.style.background=fieldcolor;
			alertmsg="Please make sure you have specified your first name.";
			valid=false;
		}
		else if (null != spaceRegex.exec(document.studentform.student_lname.value)) {
			//document.studentform.student_lname.style.background=fieldcolor;
			alertmsg="Please make sure you have specified your last name.";
			valid=false;
		}
		else if ((document.studentform.student_dobm.value == "MM") ||
				(document.studentform.student_dobd.value == "DD") ||
				(null == fournumRegex.exec(document.studentform.student_doby.value)) ||
				(document.studentform.student_doby.value >= currentyear)) {
			alertmsg="Please make sure you have specified your DOB correctly.";
			valid=false;
		}
		else if (!((document.studentform.student_gender[1].checked) ||
				(document.studentform.student_gender[2].checked))) {
			alertmsg="Please make sure you have selected a gender.";
			valid=false;
		}
		else if ((null != spaceRegex.exec(document.studentform.student_zip.value)) ||
				(null == zipRegex.exec(document.studentform.student_zip.value))) {
			alertmsg="Please make sure you have specified your zip code correctly.";
			valid=false;
		}
		else if ((null != spaceRegex.exec(document.studentform.student_email.value)) ||
				(null == emailRegex.exec(document.studentform.student_email.value))) {
			alertmsg="Please make sure you have specified your email address correctly.";
			valid=false;
		}
		else if (total_si == 0) {
			alertmsg="Please make sure you have selected at least one Extracurricular Interest.";
			valid=false;
		}
		else if (null != spaceRegex.exec(document.studentform.student_pfname.value)) {
			alertmsg="Please make sure you have specified the Parent / Sponsors first name";
			valid=false;
		}
		else if (null != spaceRegex.exec(document.studentform.student_plname.value)) {
			alertmsg="Please make sure you have specified the Parent / Sponsors last name";
			valid=false;
		}
		else if ((null != spaceRegex.exec(document.studentform.student_pemail.value)) ||
				(null == emailRegex.exec(document.studentform.student_pemail.value))) {
			alertmsg="Please make sure you have specified the Parent / Sponsors email address correctly.";
			valid=false;
		}
		else if (document.studentform.parentrelationship.value == "Select") {
			alertmsg="Please make sure you have selected the Relationship to Student";
			valid=false;
		}
	}
	else if (whichform == "coachForm") {
		if (null != spaceRegex.exec(document.coachform.coach_fname.value)) {
			alertmsg="Please make sure you have specified your first name.";
			valid=false;
		}
		else if (null != spaceRegex.exec(document.coachform.coach_lname.value)) {
			alertmsg="Please make sure you have specified your last name.";
			valid=false;
		}
		else if ((document.coachform.coach_dobm.value == "MM") ||
				(document.coachform.coach_dobd.value == "DD") ||
				(null == fournumRegex.exec(document.coachform.coach_doby.value)) ||
				(document.coachform.coach_doby.value >= currentyear)) {
			alertmsg="Please make sure you have specified your DOB correctly.";
			valid=false;
		}
		else if (!((document.coachform.coach_gender[1].checked) ||
				(document.coachform.coach_gender[2].checked))) {
			alertmsg="Please make sure you have selected a gender.";
			valid=false;
		}
		else if ((null != spaceRegex.exec(document.coachform.coach_zip.value)) ||
				(null == zipRegex.exec(document.coachform.coach_zip.value))) {
			alertmsg="Please make sure you have specified your zip code correctly.";
			valid=false;
		}
		else if ((null != spaceRegex.exec(document.coachform.coach_email.value)) ||
				(null == emailRegex.exec(document.coachform.coach_email.value))) {
			alertmsg="Please make sure you have specified your email address correctly.";
			valid=false;
		}
		else if (document.coachform.coach_extraexpertise1.value == "Select") {
			alertmsg="Please select an Extracurricular Expertise.";
			valid=false;
		}
		else if (null != spaceRegex.exec(document.coachform.coach_question1.value)) {
			alertmsg="Please make sure you have explained how you are qualified to be a coach for the extracurricular expertise.";
			valid=false;
		}
		else if (document.coachform.coach_question1.value.length > 200) {
			cq1size=document.coachform.coach_question1.value.length;
			alertmsg="Please make sure your explanation for how you are qualified to be a coach is less than 200 characters.<br>It is currently at " + cq1size + " characters";
			valid=false;
		}
	}
	
	if (!valid) {
		newlines="<br><br>";
		validationErrors.innerHTML = validationErrors.innerHTML + alertmsg + newlines;
	}
	
	return valid;

}

function validateField(type,field) {
	valid=true;
	switch (type) {
	case "digit":
		with (field) {
			if(isNan(value)) {
				valid=false;
				alert('Value must be all digits');
			}
		}
		break;
	case "zip":
		with (field) {
			if(isNaN(value) || value.length!=5) {
				valid=false;
				alert('Zip field must be a 5 DIGIT number');
			}
		}
		break;
	default:
		valid=false;
		alert('Please enter a correct value for the field');
	}
}