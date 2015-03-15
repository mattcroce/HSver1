<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="HealthSage">
	<meta name="author" content="HealthSage">
    
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
		    
	<link href="http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="index.css">
	
	<title>Follow The Sage</title>
</head>

<html>
<body>


	<div class="container-fluid">
		<div class="starter-template">
		<div class="col-md-6 col-md-offset-3">
			<br/>
			<div id="targetState">
				<p> What state and county do you live in?</p>
				<br/>
				<form method="post" role="form" id="stateForm" action="statesubmit.php">
				<input type="text" name="stateSubmit" placeholder="Enter your two-letter state abbreviation"/>
				<input type="text" name="countySubmit" placeholder="Enter your county"/>
				<br/><br/>
				Select a benefit that you will definitely need to use this year:
				<select name="benefitSubmit">
					<option value="Abortion for Which Public Funding is Prohibited">Abortion for Which Public Funding is Prohibited</option>
					<option value="Accidental Dental">Accidental Dental</option>
					<option value="Acupuncture">Acupuncture</option>
					<option value="Allergy Testing">Allergy Testing</option>
					<option value="Bariatric Surgery">Bariatric Surgery</option>
					<option value="Basic Dental Care - Adult">Basic Dental Care - Adult</option>
					<option value="Basic Dental Care - Child">Basic Dental Care - Child</option>
					<option value="Chemotherapy">Chemotherapy</option>
					<option value="Chiropractic Care">Chirpractic Care</option>
					<option value="Clinical Trials">Clinical Trials</option>
					<option value="Cosmetic Surgery">Cosmetic Surgety</option>
					<option value="Delivery and All Inpatient Services for Maternity Care">Delivery and All Inpatient Services for Maternity Care</option>
					<option value="Dental Check-Up for Children">Dental Check-Up for Children</option>
					<option value="Diabetes Care Management">Diabetes Care Management</option>
					<option value="Diabetes Education">Diabetes Education</option>
					<option value="Dialysis">Dialysis</option>
					<option value="Durable Medical Equipment">Durable Medical Equipment</option>
					<option value="Emergency Room Services">Emergency Room Services</option>
					<option value="Emergency Transportation/Ambulance">Emergency Transportation/Ambulance</option>
					<option value="Eye Glasses for Children">Eye Glasses for Children</option>
					<option value="Generic Drugs">Generic Drugs</option>
					<option value="Habilitation Services">Habilitation Services</option>
					<option value="Hearing Aids">Hearing Aids</option>
					<option value="Home Health Care Services">Home Health Care Services</option>
					<option value="Hospice Services">Hospice Services</option>
					<option value="Imaging (CT/PET Scans, MRIs)">Imaging (CT/PET Scans, MRIs)</option>
					<option value="Infertility Treatment">Infertility Treatment</option>
					<option value="Infusion Therapy">Infusion Therapy</option>
					<option value="Inpatient Hospital Services (e.g., Hospital Stay)">Inpatient Hospital Services (e.g., Hospital Stay)</option>
					<option value="Inpatient Physical and Surgical Services">Inpatient Physician and Surgical Services</option>
					<option value="Laboratory Outpatient and Profesional Services">Laboratory Outpatient and Professional Services</option>
					<option value="Long-Term/Custodial Nursing Home Care">Long-Term/Custodial Nursing Home Care</option>
					<option value="Major Dental Care - Adult">Major Dental Care - Adult</option>
					<option value="Major Dental Care - Child">Major Dental Care - Child</option>
					<option value="Mental/Behavioral Health Inpatient Services">Mental/Behavioral Health Inpatient Services</option>
					<option value="Mental/Behavioral Health Outpatient Services">Mental/Behavioral Health Outpatient Services</option>
					<option value="Non-Emergency Care When Traveling Outside the U.S.">Non-Emergency Care When Traveling Outside the U.S.</option>
					<option value="Non-Preferred Brand Drugs">Non-Preferred Brand Drugs</option>
					<option value="Nutritional Counseling">Nutritional Counseling</option>
					<option value="Orthodontia - Adult">Orthodontia - Adult</option>
					<option value="Orthodontia - Child">Orthodontia - Child</option>
					<option value="Other Practitioner Office Visit (Nurse, Physician Assistant)">Other Practitioner Office Visit (Nurse, Physician Assistant)</option>
					<option value="Outpatient Facility Fee (e.g., Ambulatory Surgery Center">Outpatient Facility Fee (e.g., Ambulatory Surgery Center)</option>
					<option value="Outpatient Rehabilitation Services">Outpatient Rehabilitation Services</option>
					<option value="Outpatient Surgery Physicial/Surgical Services">Outpatient Surgery Physicial/Surgical Services</option>
					<option value="Preferred Brand Drugs">Preferred Brand Drugs</option>
					<option value="Prenatal and Postnatal Care">Prenatal and Postnatal Care</option>
					<option value="Preventive Care/Screening/Immunization">Preventive Care/Screening/Immunization</option>
					<option value="Primary Care Visit to Treat an Injury or Illness">Primary Care Visit to Treat and Injury or Illness</option>
					<option value="Private-Duty Nursing">Private-Duty Nursing</option>
					<option value="Prosthetic Devices">Prosthetic Devices</option>
					<option value="Radiation">Radiation</option>
					<option value="Reconstructive Surgery">Reconstructive Surgery</option>
					<option value="Rehabilitative Occupational and Rehabilitation Physical Therapy">Rehabilitation Occupational and Rehabilitative Physical Therapy</option>
					<option value="Rehabilitative Speech Therapy">Rehabilitative Speech Therapy</option>
					<option value="Routine Dental Services (Adult)">Routine Dental Services (Adult)</option>
					<option value="Routine Eye Exam (Adult)">Routine Eye Exam (Adult)</option>
					<option value="Routine Eye Exam for Children">Routine Eye Exam for Children</option>
					<option value="Routine Foot Care">Routine Foot Care</option>
					<option value="Skilled Nursing Facility">Skilled Nursing Facility</option>
					<option value="Specialist Visit">Specialist Visit</option>
					<option value="Specialty Drugs">Specialty Drugs</option>
					<option value="Substance Abuse Disorder Inpatient Services">Substance Abuse Disorder Inpatient Services</option>
					<option value="Substance Abuse Disorder Outpatient Services">Substance Abuse Disorder Outpatient Services</option>
					<option value="Transplant">Transplant</option>
					<option value="Treatment for Temporomandibular Joint Disorders">Treatment for Temporomandibular Joint Disorders</option>
					<option value="Urgent Care Centers or Facilities">Urgent Care Centers or Facilities</option>
					<option value="Weight Loss Programs">Weight Loss Programs</option>
					<option value="Well Baby Visits and Care">Well Baby Visits and Care</option>
					<option value="X-rays and Diagnostic Imaging">X-rays and Diagnostic Imaging</option>
				<input type="submit" name="submit" value="Submit"/>
				</form>
				
			</div>
			<br/>
			<br/>
		</div>
		</div>
	</div>
</body>
</html>