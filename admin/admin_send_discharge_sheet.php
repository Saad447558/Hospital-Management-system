<?php
$page_title = "Discharge Sheet - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-file-export"></i> Send Discharge Sheet</h2>
    </div>
    
    <form method="POST" action="process_discharge_sheet.php">
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
                    <label for="discharge_date">Discharge Date *</label>
                    <input type="date" id="discharge_date" name="discharge_date" required>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-hospital"></i> Admission & Treatment Summary</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="admission_date">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date">
                </div>
                
                <div class="form-group">
                    <label for="length_of_stay">Length of Stay (days)</label>
                    <input type="number" id="length_of_stay" name="length_of_stay" readonly>
                </div>
            </div>
            
            <div class="form-group">
                <label for="admission_diagnosis">Admission Diagnosis</label>
                <textarea id="admission_diagnosis" name="admission_diagnosis" placeholder="Primary diagnosis at admission..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="discharge_diagnosis">Discharge Diagnosis</label>
                <textarea id="discharge_diagnosis" name="discharge_diagnosis" placeholder="Final diagnosis at discharge..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="treatment_summary">Treatment Summary</label>
                <textarea id="treatment_summary" name="treatment_summary" placeholder="Summary of treatments provided during stay..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-pills"></i> Discharge Medications</h3>
            </div>
            
            <div class="form-group">
                <label for="medicines_to_give">Medicines to Give *</label>
                <textarea id="medicines_to_give" name="medicines_to_give" placeholder="List all discharge medications with dosage, frequency, and duration..." required></textarea>
            </div>
            
            <div class="form-group">
                <label for="medication_instructions">Medication Instructions</label>
                <textarea id="medication_instructions" name="medication_instructions" placeholder="Special instructions for taking medications..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="pharmacy_information">Pharmacy Information</label>
                <input type="text" id="pharmacy_information" name="pharmacy_information" placeholder="Preferred pharmacy or prescription pickup location">
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-calendar-check"></i> Follow-up Care</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="re_visit_date">Re-visit Date</label>
                    <input type="date" id="re_visit_date" name="re_visit_date">
                </div>
                
                <div class="form-group">
                    <label for="follow_up_doctor">Follow-up Doctor</label>
                    <select id="follow_up_doctor" name="follow_up_doctor">
                        <option value="">Select Doctor</option>
                        <option value="Dr. Smith - Emergency Medicine">Dr. Smith - Emergency Medicine</option>
                        <option value="Dr. Johnson - Cardiology">Dr. Johnson - Cardiology</option>
                        <option value="Dr. Williams - Surgery">Dr. Williams - Surgery</option>
                        <option value="Dr. Brown - Internal Medicine">Dr. Brown - Internal Medicine</option>
                        <option value="Dr. Davis - Pediatrics">Dr. Davis - Pediatrics</option>
                        <option value="Dr. Wilson - Neurology">Dr. Wilson - Neurology</option>
                        <option value="Dr. Garcia - Orthopedics">Dr. Garcia - Orthopedics</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="follow_up_instructions">Follow-up Instructions</label>
                <textarea id="follow_up_instructions" name="follow_up_instructions" placeholder="Specific instructions for follow-up care..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="specialist_referrals">Specialist Referrals</label>
                <textarea id="specialist_referrals" name="specialist_referrals" placeholder="Any specialist referrals needed..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-home"></i> Home Care Instructions</h3>
            </div>
            
            <div class="form-group">
                <label for="activity_restrictions">Activity Restrictions</label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                    <label><input type="checkbox" name="restrictions[]" value="Bed Rest"> Bed Rest</label>
                    <label><input type="checkbox" name="restrictions[]" value="Limited Walking"> Limited Walking</label>
                    <label><input type="checkbox" name="restrictions[]" value="No Heavy Lifting"> No Heavy Lifting</label>
                    <label><input type="checkbox" name="restrictions[]" value="No Driving"> No Driving</label>
                    <label><input type="checkbox" name="restrictions[]" value="No Stairs"> No Stairs</label>
                    <label><input type="checkbox" name="restrictions[]" value="Light Activities Only"> Light Activities Only</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="diet_instructions">Diet Instructions</label>
                <textarea id="diet_instructions" name="diet_instructions" placeholder="Special dietary requirements or restrictions..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="wound_care">Wound Care Instructions</label>
                <textarea id="wound_care" name="wound_care" placeholder="Instructions for wound care, dressing changes, etc..."></textarea>
            </div>
            
            <div class="form-group">
                <label for="warning_signs">Warning Signs to Watch For</label>
                <textarea id="warning_signs" name="warning_signs" placeholder="Symptoms that require immediate medical attention..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-phone"></i> Emergency Contact Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="emergency_contact">Emergency Contact Number</label>
                    <input type="tel" id="emergency_contact" name="emergency_contact" value="911" readonly>
                </div>
                
                <div class="form-group">
                    <label for="hospital_contact">Hospital Contact</label>
                    <input type="tel" id="hospital_contact" name="hospital_contact" value="(555) 123-4567" readonly>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="doctor_contact">Doctor Contact</label>
                    <input type="tel" id="doctor_contact" name="doctor_contact" placeholder="Doctor's contact number">
                </div>
                
                <div class="form-group">
                    <label for="nurse_hotline">Nurse Hotline</label>
                    <input type="tel" id="nurse_hotline" name="nurse_hotline" value="(555) 123-NURSE" readonly>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-md"></i> Discharge Authorization</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="discharging_doctor">Discharging Doctor *</label>
                    <input type="text" id="discharging_doctor" name="discharging_doctor" required>
                </div>
                
                <div class="form-group">
                    <label for="discharge_time">Discharge Time</label>
                    <input type="time" id="discharge_time" name="discharge_time">
                </div>
            </div>
            
            <div class="form-group">
                <label for="discharge_condition">Patient Condition at Discharge</label>
                <select id="discharge_condition" name="discharge_condition">
                    <option value="">Select Condition</option>
                    <option value="Stable">Stable</option>
                    <option value="Improved">Improved</option>
                    <option value="Good">Good</option>
                    <option value="Fair">Fair</option>
                    <option value="Requires Monitoring">Requires Monitoring</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="additional_notes">Additional Notes</label>
                <textarea id="additional_notes" name="additional_notes" placeholder="Any additional discharge notes or instructions..."></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-file-export"></i> Generate Discharge Sheet
            </button>
            <button type="button" class="btn btn-secondary" onclick="previewDischarge()">
                <i class="fas fa-eye"></i> Preview Discharge Sheet
            </button>
            <button type="button" class="btn btn-secondary" onclick="printDischarge()">
                <i class="fas fa-print"></i> Print Discharge Sheet
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<!-- Discharge Preview Modal -->
<div id="dischargePreview" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; overflow-y: auto;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 800px; width: 90%; max-height: 80vh; overflow-y: auto;">
        <h3><i class="fas fa-file-export"></i> Discharge Sheet Preview</h3>
        <div id="dischargePreviewContent"></div>
        <button onclick="closeDischargePreview()" class="btn btn-secondary">Close</button>
    </div>
</div>

<script>
// Set current date and time
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    const dischargeDate = document.getElementById('discharge_date');
    const dischargeTime = document.getElementById('discharge_time');
    
    dischargeDate.value = now.toISOString().split('T')[0];
    dischargeTime.value = now.toTimeString().split(' ')[0].substring(0, 5);
    
    // Set default re-visit date (1 week from discharge)
    const revisitDate = document.getElementById('re_visit_date');
    const futureDate = new Date();
    futureDate.setDate(futureDate.getDate() + 7);
    revisitDate.value = futureDate.toISOString().split('T')[0];
});

// Calculate length of stay
document.getElementById('admission_date').addEventListener('change', calculateStay);
document.getElementById('discharge_date').addEventListener('change', calculateStay);

function calculateStay() {
    const admissionDate = document.getElementById('admission_date').value;
    const dischargeDate = document.getElementById('discharge_date').value;
    
    if (admissionDate && dischargeDate) {
        const admission = new Date(admissionDate);
        const discharge = new Date(dischargeDate);
        const timeDiff = discharge.getTime() - admission.getTime();
        const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        document.getElementById('length_of_stay').value = daysDiff > 0 ? daysDiff : 0;
    }
}

function previewDischarge() {
    const patientName = document.getElementById('patient_name').value;
    const patientNo = document.getElementById('patient_no').value;
    const ssn = document.getElementById('ssn').value;
    const age = document.getElementById('age').value;
    const gender = document.getElementById('gender').value;
    const dischargeDate = document.getElementById('discharge_date').value;
    const medicines = document.getElementById('medicines_to_give').value;
    const revisitDate = document.getElementById('re_visit_date').value;
    const dischargingDoctor = document.getElementById('discharging_doctor').value;
    
    const restrictions = Array.from(document.querySelectorAll('input[name="restrictions[]"]:checked')).map(cb => cb.value);
    
    const previewContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6;">
            <div style="text-align: center; border-bottom: 2px solid #27ae60; padding-bottom: 1rem; margin-bottom: 2rem;">
                <h2>DISCHARGE SUMMARY</h2>
                <p>General Hospital<br>123 Medical Center Dr, Healthcare City, HC 12345<br>(555) 123-4567</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Patient Information</h4>
                <p><strong>Name:</strong> ${patientName}</p>
                <p><strong>Patient Number:</strong> ${patientNo}</p>
                <p><strong>SSN:</strong> ${ssn}</p>
                <p><strong>Age:</strong> ${age}</p>
                <p><strong>Gender:</strong> ${gender}</p>
                <p><strong>Discharge Date:</strong> ${dischargeDate}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Discharge Medications</h4>
                <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px;">
                    ${medicines || 'No medications prescribed'}
                </div>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Activity Restrictions</h4>
                <p>${restrictions.length > 0 ? restrictions.join(', ') : 'No specific restrictions'}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Follow-up Care</h4>
                <p><strong>Next Appointment:</strong> ${revisitDate || 'To be scheduled'}</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Emergency Contacts</h4>
                <p><strong>Emergency:</strong> 911</p>
                <p><strong>Hospital:</strong> (555) 123-4567</p>
                <p><strong>Nurse Hotline:</strong> (555) 123-NURSE</p>
            </div>
            
            <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #ddd;">
                <p><strong>Discharging Physician:</strong> ${dischargingDoctor}</p>
                <p><strong>Date:</strong> ${dischargeDate}</p>
            </div>
        </div>
    `;
    
    document.getElementById('dischargePreviewContent').innerHTML = previewContent;
    document.getElementById('dischargePreview').style.display = 'block';
}

function closeDischargePreview() {
    document.getElementById('dischargePreview').style.display = 'none';
}

function printDischarge() {
    window.print();
}
</script>

<?php include '../includes/footer.php'; ?>

