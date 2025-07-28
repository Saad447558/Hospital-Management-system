<?php
$page_title = "Register Patient - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-user-plus"></i> Register New Patient</h2>
    </div>
    
    <form method="POST" action="process_register_patient.php">
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
                <input type="text" id="patient_no" name="patient_no" placeholder="Auto-generated" readonly>
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
                <label for="mobile">Mobile Number *</label>
                <input type="tel" id="mobile" name="mobile" placeholder="(XXX) XXX-XXXX" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="medical_condition">Medical Condition *</label>
            <textarea id="medical_condition" name="medical_condition" placeholder="Describe the patient's current medical condition..." required></textarea>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="seriousness_level">Seriousness Level *</label>
                <select id="seriousness_level" name="seriousness_level" required>
                    <option value="">Select Level</option>
                    <option value="Critical">Critical - Immediate attention required</option>
                    <option value="Serious">Serious - Urgent care needed</option>
                    <option value="Moderate">Moderate - Standard care</option>
                    <option value="Stable">Stable - Routine care</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="relevant_docs_assigned">Relevant Doctors Assigned</label>
                <select id="relevant_docs_assigned" name="relevant_docs_assigned" multiple>
                    <option value="Dr. Smith - Emergency">Dr. Smith - Emergency Medicine</option>
                    <option value="Dr. Johnson - Cardiology">Dr. Johnson - Cardiology</option>
                    <option value="Dr. Williams - Surgery">Dr. Williams - Surgery</option>
                    <option value="Dr. Brown - Internal Medicine">Dr. Brown - Internal Medicine</option>
                    <option value="Dr. Davis - Pediatrics">Dr. Davis - Pediatrics</option>
                </select>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="ward_assigned">Ward Assigned</label>
                <select id="ward_assigned" name="ward_assigned">
                    <option value="">Select Ward</option>
                    <option value="Emergency">Emergency Ward</option>
                    <option value="ICU">Intensive Care Unit</option>
                    <option value="General">General Ward</option>
                    <option value="Pediatric">Pediatric Ward</option>
                    <option value="Maternity">Maternity Ward</option>
                    <option value="Surgery">Surgery Ward</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="bed_assigned">Bed Number</label>
                <input type="text" id="bed_assigned" name="bed_assigned" placeholder="e.g., A-101">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="police_case">Police Case</label>
                <select id="police_case" name="police_case">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-friends"></i> Patient Care Contact Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="pat_care_name">Patient Care Contact Name *</label>
                    <input type="text" id="pat_care_name" name="pat_care_name" required>
                </div>
                
                <div class="form-group">
                    <label for="pat_care_mobile">Patient Care Contact Mobile *</label>
                    <input type="tel" id="pat_care_mobile" name="pat_care_mobile" placeholder="(XXX) XXX-XXXX" required>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Register Patient
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<script>
// Auto-generate patient number
document.addEventListener('DOMContentLoaded', function() {
    const patientNoField = document.getElementById('patient_no');
    const currentDate = new Date();
    const year = currentDate.getFullYear();
    const month = String(currentDate.getMonth() + 1).padStart(2, '0');
    const day = String(currentDate.getDate()).padStart(2, '0');
    const random = Math.floor(Math.random() * 1000).toString().padStart(3, '0');
    
    patientNoField.value = `PAT-${year}${month}${day}-${random}`;
});
</script>

<?php include '../includes/footer.php'; ?>

