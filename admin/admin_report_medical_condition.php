<?php
$page_title = "Report Medical Condition - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-exclamation-triangle"></i> Report Medical Condition</h2>
    </div>
    
    <form method="POST" action="process_report_condition.php">
        <div class="form-row">
            <div class="form-group">
                <label for="patient_id">Patient ID *</label>
                <input type="text" id="patient_id" name="patient_id" placeholder="Enter Patient ID" required>
            </div>
            
            <div class="form-group">
                <label for="patient_name">Patient Name *</label>
                <input type="text" id="patient_name" name="patient_name" required>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="reporting_admin">Reporting Admin *</label>
                <input type="text" id="reporting_admin" name="reporting_admin" placeholder="Your name" required>
            </div>
            
            <div class="form-group">
                <label for="report_time">Report Time</label>
                <input type="datetime-local" id="report_time" name="report_time" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <label for="observed_condition">Observed Medical Condition *</label>
            <textarea id="observed_condition" name="observed_condition" placeholder="Describe the medical condition as observed..." required></textarea>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="seriousness_level">Seriousness Level *</label>
                <select id="seriousness_level" name="seriousness_level" required>
                    <option value="">Select Seriousness Level</option>
                    <option value="Critical">Critical - Life threatening, immediate intervention required</option>
                    <option value="Serious">Serious - Urgent medical attention needed</option>
                    <option value="Moderate">Moderate - Stable but requires monitoring</option>
                    <option value="Mild">Mild - Non-urgent, routine care sufficient</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="vital_signs_status">Vital Signs Status</label>
                <select id="vital_signs_status" name="vital_signs_status">
                    <option value="">Select Status</option>
                    <option value="Stable">Stable</option>
                    <option value="Unstable">Unstable</option>
                    <option value="Critical">Critical</option>
                    <option value="Unknown">Unknown/Not Assessed</option>
                </select>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-heartbeat"></i> Vital Signs (if available)</h3>
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
        </div>
        
        <div class="form-group">
            <label for="symptoms_observed">Symptoms Observed</label>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin-top: 10px;">
                <label><input type="checkbox" name="symptoms[]" value="Chest Pain"> Chest Pain</label>
                <label><input type="checkbox" name="symptoms[]" value="Shortness of Breath"> Shortness of Breath</label>
                <label><input type="checkbox" name="symptoms[]" value="Nausea"> Nausea</label>
                <label><input type="checkbox" name="symptoms[]" value="Vomiting"> Vomiting</label>
                <label><input type="checkbox" name="symptoms[]" value="Dizziness"> Dizziness</label>
                <label><input type="checkbox" name="symptoms[]" value="Headache"> Headache</label>
                <label><input type="checkbox" name="symptoms[]" value="Fever"> Fever</label>
                <label><input type="checkbox" name="symptoms[]" value="Unconscious"> Unconscious</label>
                <label><input type="checkbox" name="symptoms[]" value="Bleeding"> Bleeding</label>
                <label><input type="checkbox" name="symptoms[]" value="Fracture"> Fracture</label>
                <label><input type="checkbox" name="symptoms[]" value="Seizure"> Seizure</label>
                <label><input type="checkbox" name="symptoms[]" value="Other"> Other</label>
            </div>
        </div>
        
        <div class="form-group">
            <label for="additional_notes">Additional Notes</label>
            <textarea id="additional_notes" name="additional_notes" placeholder="Any additional observations or notes..."></textarea>
        </div>
        
        <div class="form-group">
            <label for="doctors_to_notify">Doctors to Notify *</label>
            <select id="doctors_to_notify" name="doctors_to_notify[]" multiple required>
                <option value="Dr. Smith - Emergency">Dr. Smith - Emergency Medicine</option>
                <option value="Dr. Johnson - Cardiology">Dr. Johnson - Cardiology</option>
                <option value="Dr. Williams - Surgery">Dr. Williams - Surgery</option>
                <option value="Dr. Brown - Internal Medicine">Dr. Brown - Internal Medicine</option>
                <option value="Dr. Davis - Pediatrics">Dr. Davis - Pediatrics</option>
                <option value="Dr. Wilson - Neurology">Dr. Wilson - Neurology</option>
                <option value="Dr. Garcia - Orthopedics">Dr. Garcia - Orthopedics</option>
            </select>
            <small>Hold Ctrl (Cmd on Mac) to select multiple doctors</small>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="immediate_action_required">Immediate Action Required</label>
                <select id="immediate_action_required" name="immediate_action_required">
                    <option value="No">No immediate action needed</option>
                    <option value="Monitor">Monitor closely</option>
                    <option value="Medication">Medication administration</option>
                    <option value="Surgery">Surgical intervention</option>
                    <option value="ICU Transfer">Transfer to ICU</option>
                    <option value="Emergency Response">Emergency response team</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="priority_level">Priority Level</label>
                <select id="priority_level" name="priority_level">
                    <option value="Low">Low Priority</option>
                    <option value="Medium">Medium Priority</option>
                    <option value="High">High Priority</option>
                    <option value="Emergency">Emergency Priority</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-warning">
                <i class="fas fa-exclamation-triangle"></i> Submit Report
            </button>
            <button type="button" class="btn btn-danger" onclick="sendEmergencyAlert()">
                <i class="fas fa-bell"></i> Send Emergency Alert
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<script>
// Set current date and time
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    const reportTimeField = document.getElementById('report_time');
    
    // Format datetime for datetime-local input
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    
    reportTimeField.value = `${year}-${month}-${day}T${hours}:${minutes}`;
});

function sendEmergencyAlert() {
    if (confirm('This will send an immediate emergency alert to all available doctors and emergency staff. Continue?')) {
        // In a real application, this would trigger an emergency alert system
        showAlert('Emergency alert sent to all available medical staff!', 'warning');
    }
}

// Auto-update priority based on seriousness level
document.getElementById('seriousness_level').addEventListener('change', function() {
    const priorityField = document.getElementById('priority_level');
    const seriousness = this.value;
    
    switch(seriousness) {
        case 'Critical':
            priorityField.value = 'Emergency';
            break;
        case 'Serious':
            priorityField.value = 'High';
            break;
        case 'Moderate':
            priorityField.value = 'Medium';
            break;
        case 'Mild':
            priorityField.value = 'Low';
            break;
    }
});
</script>

<?php include '../includes/footer.php'; ?>

