<?php
$page_title = "File Patient Report - Hospital Management System";
$user_role = "doctor";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-file-medical"></i> File Patient Report</h2>
    </div>
    
    <form method="POST" action="process_patient_report.php">
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user"></i> Patient Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="patient_name">Patient Name *</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                
                <div class="form-group">
                    <label for="ssn">Social Security Number *</label>
                    <input type="text" id="ssn" name="ssn" placeholder="XXX-XX-XXXX" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="patient_no">Patient Number *</label>
                    <input type="text" id="patient_no" name="patient_no" required>
                </div>
                
                <div class="form-group">
                    <label for="age">Age *</label>
                    <input type="number" id="age" name="age" min="0" max="150" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="gender">Gender *</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="report_date">Report Date</label>
                    <input type="date" id="report_date" name="report_date" readonly>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-stethoscope"></i> Medical Condition Assessment</h3>
            </div>
            
            <div class="form-group">
                <label for="med_condition_before">Medical Condition Before Treatment *</label>
                <textarea id="med_condition_before" name="med_condition_before" placeholder="Describe the patient's condition upon arrival/before treatment..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="initial_symptoms">Initial Symptoms Observed</label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                    <label><input type="checkbox" name="initial_symptoms[]" value="Chest Pain"> Chest Pain</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Shortness of Breath"> Shortness of Breath</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Nausea"> Nausea</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Vomiting"> Vomiting</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Dizziness"> Dizziness</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Headache"> Headache</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Fever"> Fever</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Unconscious"> Unconscious</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Bleeding"> Bleeding</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Fracture"> Fracture</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Seizure"> Seizure</label>
                    <label><input type="checkbox" name="initial_symptoms[]" value="Abdominal Pain"> Abdominal Pain</label>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-heartbeat"></i> Vital Signs on Arrival</h4>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="blood_pressure">Blood Pressure</label>
                        <input type="text" id="blood_pressure" name="blood_pressure" placeholder="e.g., 120/80">
                    </div>
                    
                    <div class="form-group">
                        <label for="heart_rate">Heart Rate (BPM)</label>
                        <input type="number" id="heart_rate" name="heart_rate" placeholder="e.g., 72">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="temperature">Temperature (°F)</label>
                        <input type="number" id="temperature" name="temperature" step="0.1" placeholder="e.g., 98.6">
                    </div>
                    
                    <div class="form-group">
                        <label for="oxygen_saturation">Oxygen Saturation (%)</label>
                        <input type="number" id="oxygen_saturation" name="oxygen_saturation" min="0" max="100" placeholder="e.g., 98">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="respiratory_rate">Respiratory Rate (per min)</label>
                        <input type="number" id="respiratory_rate" name="respiratory_rate" placeholder="e.g., 16">
                    </div>
                    
                    <div class="form-group">
                        <label for="pain_scale">Pain Scale (0-10)</label>
                        <input type="number" id="pain_scale" name="pain_scale" min="0" max="10" placeholder="0 = No pain, 10 = Severe">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-procedures"></i> Treatment Provided</h3>
            </div>
            
            <div class="form-group">
                <label for="treatment_given">Treatment Given *</label>
                <textarea id="treatment_given" name="treatment_given" placeholder="Describe all treatments, procedures, and interventions provided..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="procedures_performed">Procedures Performed</label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                    <label><input type="checkbox" name="procedures[]" value="IV Insertion"> IV Insertion</label>
                    <label><input type="checkbox" name="procedures[]" value="Blood Draw"> Blood Draw</label>
                    <label><input type="checkbox" name="procedures[]" value="X-Ray"> X-Ray</label>
                    <label><input type="checkbox" name="procedures[]" value="CT Scan"> CT Scan</label>
                    <label><input type="checkbox" name="procedures[]" value="MRI"> MRI</label>
                    <label><input type="checkbox" name="procedures[]" value="ECG"> ECG</label>
                    <label><input type="checkbox" name="procedures[]" value="Ultrasound"> Ultrasound</label>
                    <label><input type="checkbox" name="procedures[]" value="Surgery"> Surgery</label>
                    <label><input type="checkbox" name="procedures[]" value="Intubation"> Intubation</label>
                    <label><input type="checkbox" name="procedures[]" value="Catheter Insertion"> Catheter Insertion</label>
                    <label><input type="checkbox" name="procedures[]" value="Wound Suturing"> Wound Suturing</label>
                    <label><input type="checkbox" name="procedures[]" value="Splinting"> Splinting</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="medicines_to_give">Medicines to Give *</label>
                <textarea id="medicines_to_give" name="medicines_to_give" placeholder="List all medications prescribed with dosage, frequency, and duration..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="medication_administration">Medications Administered During Treatment</label>
                <textarea id="medication_administration" name="medication_administration" placeholder="List medications given during the treatment session..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-flask"></i> Laboratory Tests</h3>
            </div>
            
            <div class="form-group">
                <label for="lab_test">Lab Tests Ordered</label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                    <label><input type="checkbox" name="lab_tests[]" value="Complete Blood Count"> Complete Blood Count (CBC)</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Basic Metabolic Panel"> Basic Metabolic Panel</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Liver Function Tests"> Liver Function Tests</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Cardiac Enzymes"> Cardiac Enzymes</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Urinalysis"> Urinalysis</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Blood Gas Analysis"> Blood Gas Analysis</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Coagulation Studies"> Coagulation Studies</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Toxicology Screen"> Toxicology Screen</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Cultures"> Cultures</label>
                    <label><input type="checkbox" name="lab_tests[]" value="Pregnancy Test"> Pregnancy Test</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="lab_results">Lab Results (if available)</label>
                <textarea id="lab_results" name="lab_results" placeholder="Enter any available lab results..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="additional_tests">Additional Tests Required</label>
                <textarea id="additional_tests" name="additional_tests" placeholder="Specify any additional tests or follow-up studies needed..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-clipboard-check"></i> Post-Treatment Assessment</h3>
            </div>
            
            <div class="form-group">
                <label for="med_cond_after">Medical Condition After Treatment *</label>
                <textarea id="med_cond_after" name="med_cond_after" placeholder="Describe the patient's condition after treatment..." required></textarea>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-heartbeat"></i> Vital Signs After Treatment</h4>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="post_blood_pressure">Blood Pressure</label>
                        <input type="text" id="post_blood_pressure" name="post_blood_pressure" placeholder="e.g., 120/80">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_heart_rate">Heart Rate (BPM)</label>
                        <input type="number" id="post_heart_rate" name="post_heart_rate" placeholder="e.g., 72">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="post_temperature">Temperature (°F)</label>
                        <input type="number" id="post_temperature" name="post_temperature" step="0.1" placeholder="e.g., 98.6">
                    </div>
                    
                    <div class="form-group">
                        <label for="post_oxygen_saturation">Oxygen Saturation (%)</label>
                        <input type="number" id="post_oxygen_saturation" name="post_oxygen_saturation" min="0" max="100" placeholder="e.g., 98">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-route"></i> Patient Disposition</h3>
            </div>
            
            <div class="form-group">
                <label for="disposition">Patient Disposition *</label>
                <select id="disposition" name="disposition" required>
                    <option value="">Select Disposition</option>
                    <option value="go_home">Go Home - Patient discharged to home</option>
                    <option value="transfer_to_ward">Transfer to Ward - Requires ward admission</option>
                    <option value="transfer_to_icu">Transfer to ICU - Critical care needed</option>
                    <option value="stay_in_emergency">Stay in Emergency - Continue emergency observation</option>
                </select>
            </div>
            
            <div id="home_instructions" style="display: none;">
                <div class="form-group">
                    <label for="discharge_instructions">Discharge Instructions</label>
                    <textarea id="discharge_instructions" name="discharge_instructions" placeholder="Instructions for home care..."></textarea>
                </div>
            </div>
            
            <div id="ward_details" style="display: none;">
                <div class="form-row">
                    <div class="form-group">
                        <label for="ward_name">Ward Name</label>
                        <select id="ward_name" name="ward_name">
                            <option value="">Select Ward</option>
                            <option value="General Ward">General Ward</option>
                            <option value="Cardiac Ward">Cardiac Ward</option>
                            <option value="Surgical Ward">Surgical Ward</option>
                            <option value="Pediatric Ward">Pediatric Ward</option>
                            <option value="Maternity Ward">Maternity Ward</option>
                            <option value="Orthopedic Ward">Orthopedic Ward</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="ward_reason">Reason for Ward Admission</label>
                        <textarea id="ward_reason" name="ward_reason" placeholder="Reason for ward admission..."></textarea>
                    </div>
                </div>
            </div>
            
            <div id="icu_details" style="display: none;">
                <div class="form-row">
                    <div class="form-group">
                        <label for="icu_type">ICU Type</label>
                        <select id="icu_type" name="icu_type">
                            <option value="">Select ICU Type</option>
                            <option value="General ICU">General ICU</option>
                            <option value="Cardiac ICU">Cardiac ICU</option>
                            <option value="Surgical ICU">Surgical ICU</option>
                            <option value="Neurological ICU">Neurological ICU</option>
                            <option value="Pediatric ICU">Pediatric ICU</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="icu_reason">Reason for ICU Admission</label>
                        <textarea id="icu_reason" name="icu_reason" placeholder="Critical condition requiring ICU care..."></textarea>
                    </div>
                </div>
            </div>
            
            <div id="emergency_details" style="display: none;">
                <div class="form-group">
                    <label for="emergency_observation">Emergency Observation Notes</label>
                    <textarea id="emergency_observation" name="emergency_observation" placeholder="Reason for continued emergency observation..."></textarea>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-md"></i> Doctor Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="attending_doctor">Attending Doctor *</label>
                    <input type="text" id="attending_doctor" name="attending_doctor" placeholder="Your name" required>
                </div>
                
                <div class="form-group">
                    <label for="doctor_specialty">Specialty</label>
                    <select id="doctor_specialty" name="doctor_specialty">
                        <option value="">Select Specialty</option>
                        <option value="Emergency Medicine">Emergency Medicine</option>
                        <option value="Internal Medicine">Internal Medicine</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Pediatrics">Pediatrics</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Orthopedics">Orthopedics</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="report_time">Report Time</label>
                    <input type="time" id="report_time" name="report_time" readonly>
                </div>
                
                <div class="form-group">
                    <label for="treatment_duration">Treatment Duration (minutes)</label>
                    <input type="number" id="treatment_duration" name="treatment_duration" placeholder="e.g., 45">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="additional_notes">Additional Notes</label>
            <textarea id="additional_notes" name="additional_notes" placeholder="Any additional observations, recommendations, or notes..."></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> File Patient Report
            </button>
            <button type="button" class="btn btn-secondary" onclick="previewReport()">
                <i class="fas fa-eye"></i> Preview Report
            </button>
            <button type="button" class="btn btn-secondary" onclick="saveAsDraft()">
                <i class="fas fa-file"></i> Save as Draft
            </button>
            <a href="doc_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<!-- Report Preview Modal -->
<div id="reportPreview" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; overflow-y: auto;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 800px; width: 90%; max-height: 80vh; overflow-y: auto;">
        <h3><i class="fas fa-file-medical"></i> Patient Report Preview</h3>
        <div id="previewContent"></div>
        <button onclick="closeReportPreview()" class="btn btn-secondary">Close</button>
    </div>
</div>

<script>
// Set current date and time
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    const reportDate = document.getElementById('report_date');
    const reportTime = document.getElementById('report_time');
    
    reportDate.value = now.toISOString().split('T')[0];
    reportTime.value = now.toTimeString().split(' ')[0].substring(0, 5);
});

// Show/hide disposition details
document.getElementById('disposition').addEventListener('change', function() {
    const homeInstructions = document.getElementById('home_instructions');
    const wardDetails = document.getElementById('ward_details');
    const icuDetails = document.getElementById('icu_details');
    const emergencyDetails = document.getElementById('emergency_details');
    
    // Hide all details first
    homeInstructions.style.display = 'none';
    wardDetails.style.display = 'none';
    icuDetails.style.display = 'none';
    emergencyDetails.style.display = 'none';
    
    // Show relevant details based on selection
    switch(this.value) {
        case 'go_home':
            homeInstructions.style.display = 'block';
            break;
        case 'transfer_to_ward':
            wardDetails.style.display = 'block';
            break;
        case 'transfer_to_icu':
            icuDetails.style.display = 'block';
            break;
        case 'stay_in_emergency':
            emergencyDetails.style.display = 'block';
            break;
    }
});

function previewReport() {
    const patientName = document.getElementById('patient_name').value;
    const patientNo = document.getElementById('patient_no').value;
    const medCondBefore = document.getElementById('med_condition_before').value;
    const medCondAfter = document.getElementById('med_cond_after').value;
    const treatmentGiven = document.getElementById('treatment_given').value;
    const medicines = document.getElementById('medicines_to_give').value;
    const disposition = document.getElementById('disposition').value;
    const attendingDoctor = document.getElementById('attending_doctor').value;
    
    const labTests = Array.from(document.querySelectorAll('input[name="lab_tests[]"]:checked')).map(cb => cb.value);
    const procedures = Array.from(document.querySelectorAll('input[name="procedures[]"]:checked')).map(cb => cb.value);
    
    const previewContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6;">
            <div style="text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 1rem; margin-bottom: 2rem;">
                <h2>PATIENT MEDICAL REPORT</h2>
                <p>General Hospital - Medical Department</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Patient Information</h4>
                <p><strong>Name:</strong> ${patientName}</p>
                <p><strong>Patient Number:</strong> ${patientNo}</p>
                <p><strong>Report Date:</strong> ${document.getElementById('report_date').value}</p>
                <p><strong>Attending Doctor:</strong> ${attendingDoctor}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Medical Condition Before Treatment</h4>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    ${medCondBefore}
                </div>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Treatment Provided</h4>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    ${treatmentGiven}
                </div>
                <p><strong>Procedures:</strong> ${procedures.join(', ') || 'None'}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Medical Condition After Treatment</h4>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    ${medCondAfter}
                </div>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Medications Prescribed</h4>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    ${medicines}
                </div>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Lab Tests Ordered</h4>
                <p>${labTests.join(', ') || 'None'}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Patient Disposition</h4>
                <p><strong>${disposition.replace('_', ' ').toUpperCase()}</strong></p>
            </div>
        </div>
    `;
    
    document.getElementById('previewContent').innerHTML = previewContent;
    document.getElementById('reportPreview').style.display = 'block';
}

function closeReportPreview() {
    document.getElementById('reportPreview').style.display = 'none';
}

function saveAsDraft() {
    showAlert('Report saved as draft. You can continue editing later.', 'info');
}
</script>

<?php include '../includes/footer.php'; ?>

