<?php
$page_title = "Send Patient Report - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-file-medical"></i> Send Patient Report to Patient Care</h2>
    </div>
    
    <form method="POST" action="process_send_patient_report.php">
        <div class="form-row">
            <div class="form-group">
                <label for="patient_name">Patient Name *</label>
                <input type="text" id="patient_name" name="patient_name" required>
            </div>
            
            <div class="form-group">
                <label for="patient_id">Patient ID *</label>
                <input type="text" id="patient_id" name="patient_id" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="med_cond_after">Medical Condition After Treatment *</label>
            <textarea id="med_cond_after" name="med_cond_after" placeholder="Describe the patient's condition after treatment..." required></textarea>
        </div>
        
        <div class="form-group">
            <label for="medicines_to_give">Medicines to Give *</label>
            <textarea id="medicines_to_give" name="medicines_to_give" placeholder="List all medications with dosage and frequency..." required></textarea>
        </div>
        
        <div class="form-group">
            <label for="lab_test_needed">Lab Tests Needed</label>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                <label><input type="checkbox" name="lab_tests[]" value="Blood Test"> Blood Test</label>
                <label><input type="checkbox" name="lab_tests[]" value="Urine Test"> Urine Test</label>
                <label><input type="checkbox" name="lab_tests[]" value="X-Ray"> X-Ray</label>
                <label><input type="checkbox" name="lab_tests[]" value="CT Scan"> CT Scan</label>
                <label><input type="checkbox" name="lab_tests[]" value="MRI"> MRI</label>
                <label><input type="checkbox" name="lab_tests[]" value="ECG"> ECG</label>
                <label><input type="checkbox" name="lab_tests[]" value="Ultrasound"> Ultrasound</label>
                <label><input type="checkbox" name="lab_tests[]" value="Biopsy"> Biopsy</label>
            </div>
        </div>
        
        <div class="form-group">
            <label for="additional_lab_tests">Additional Lab Tests</label>
            <textarea id="additional_lab_tests" name="additional_lab_tests" placeholder="Specify any additional lab tests required..."></textarea>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-route"></i> Patient Disposition</h3>
            </div>
            
            <div class="form-group">
                <label for="disposition">Patient Disposition *</label>
                <select id="disposition" name="disposition" required>
                    <option value="">Select Disposition</option>
                    <option value="go_home">Go Home - Patient can be discharged</option>
                    <option value="transfer_to_ward">Transfer to Ward - Requires ward admission</option>
                    <option value="transfer_to_icu">Transfer to ICU - Critical care needed</option>
                    <option value="stay_in_emergency">Stay in Emergency - Continue emergency care</option>
                </select>
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
                        <label for="bed_number">Bed Number</label>
                        <input type="text" id="bed_number" name="bed_number" placeholder="e.g., A-101">
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
                        <label for="icu_bed">ICU Bed Number</label>
                        <input type="text" id="icu_bed" name="icu_bed" placeholder="e.g., ICU-01">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-dollar-sign"></i> Billing Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="hospital_bill">Total Hospital Bill *</label>
                    <input type="number" id="hospital_bill" name="hospital_bill" step="0.01" placeholder="0.00" required>
                </div>
                
                <div class="form-group">
                    <label for="pay_by_date">Pay By Date *</label>
                    <input type="date" id="pay_by_date" name="pay_by_date" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="billing_notes">Billing Notes</label>
                <textarea id="billing_notes" name="billing_notes" placeholder="Any special billing instructions or notes..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-friends"></i> Patient Care Contact</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="pat_care_name">Patient Care Contact Name *</label>
                    <input type="text" id="pat_care_name" name="pat_care_name" required>
                </div>
                
                <div class="form-group">
                    <label for="pat_care_contact">Contact Method *</label>
                    <select id="pat_care_contact" name="pat_care_contact" required>
                        <option value="">Select Method</option>
                        <option value="Email">Email</option>
                        <option value="SMS">SMS</option>
                        <option value="Phone Call">Phone Call</option>
                        <option value="All Methods">All Methods</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label for="pat_care_email">Patient Care Email</label>
                <input type="email" id="pat_care_email" name="pat_care_email" placeholder="patient.care@email.com">
            </div>
        </div>
        
        <div class="form-group">
            <label for="additional_instructions">Additional Instructions for Patient Care</label>
            <textarea id="additional_instructions" name="additional_instructions" placeholder="Any additional instructions or special care notes..."></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Send Patient Report
            </button>
            <button type="button" class="btn btn-secondary" onclick="previewReport()">
                <i class="fas fa-eye"></i> Preview Report
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<!-- Report Preview Modal -->
<div id="reportPreview" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; overflow-y: auto;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 600px; width: 90%; max-height: 80vh; overflow-y: auto;">
        <h3><i class="fas fa-eye"></i> Patient Report Preview</h3>
        <div id="previewContent"></div>
        <button onclick="closeReportPreview()" class="btn btn-secondary">Close</button>
    </div>
</div>

<script>
// Set default pay by date (30 days from now)
document.addEventListener('DOMContentLoaded', function() {
    const payByDate = document.getElementById('pay_by_date');
    const futureDate = new Date();
    futureDate.setDate(futureDate.getDate() + 30);
    payByDate.value = futureDate.toISOString().split('T')[0];
});

// Show/hide disposition details
document.getElementById('disposition').addEventListener('change', function() {
    const wardDetails = document.getElementById('ward_details');
    const icuDetails = document.getElementById('icu_details');
    
    wardDetails.style.display = 'none';
    icuDetails.style.display = 'none';
    
    if (this.value === 'transfer_to_ward') {
        wardDetails.style.display = 'block';
    } else if (this.value === 'transfer_to_icu') {
        icuDetails.style.display = 'block';
    }
});

function previewReport() {
    const patientName = document.getElementById('patient_name').value;
    const patientId = document.getElementById('patient_id').value;
    const medCondAfter = document.getElementById('med_cond_after').value;
    const medicines = document.getElementById('medicines_to_give').value;
    const disposition = document.getElementById('disposition').value;
    const hospitalBill = document.getElementById('hospital_bill').value;
    const payByDate = document.getElementById('pay_by_date').value;
    const patCareName = document.getElementById('pat_care_name').value;
    
    const labTests = Array.from(document.querySelectorAll('input[name="lab_tests[]"]:checked')).map(cb => cb.value);
    
    const previewContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6;">
            <h4>Patient Report</h4>
            <p><strong>Patient:</strong> ${patientName} (ID: ${patientId})</p>
            <p><strong>Medical Condition After Treatment:</strong></p>
            <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; margin: 10px 0;">
                ${medCondAfter}
            </div>
            <p><strong>Medicines to Give:</strong></p>
            <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; margin: 10px 0;">
                ${medicines}
            </div>
            <p><strong>Lab Tests Needed:</strong> ${labTests.join(', ') || 'None'}</p>
            <p><strong>Disposition:</strong> ${disposition.replace('_', ' ').toUpperCase()}</p>
            <p><strong>Hospital Bill:</strong> $${hospitalBill}</p>
            <p><strong>Pay By Date:</strong> ${payByDate}</p>
            <p><strong>Patient Care Contact:</strong> ${patCareName}</p>
        </div>
    `;
    
    document.getElementById('previewContent').innerHTML = previewContent;
    document.getElementById('reportPreview').style.display = 'block';
}

function closeReportPreview() {
    document.getElementById('reportPreview').style.display = 'none';
}
</script>

<?php include '../includes/footer.php'; ?>

