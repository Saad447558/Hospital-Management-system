<?php
$page_title = "Call Doctors - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-phone"></i> Call/Message Doctors</h2>
    </div>
    
    <form method="POST" action="process_call_docs.php">
        <div class="form-row">
            <div class="form-group">
                <label for="patient_id">Patient ID *</label>
                <input type="text" id="patient_id" name="patient_id" placeholder="Enter Patient ID or Number" required>
            </div>
            
            <div class="form-group">
                <label for="patient_name">Patient Name *</label>
                <input type="text" id="patient_name" name="patient_name" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="doctors_to_contact">Select Doctors to Contact *</label>
            <select id="doctors_to_contact" name="doctors_to_contact[]" multiple required>
                <option value="Dr. Smith - Emergency - (555) 101-1001">Dr. Smith - Emergency Medicine - (555) 101-1001</option>
                <option value="Dr. Johnson - Cardiology - (555) 101-1002">Dr. Johnson - Cardiology - (555) 101-1002</option>
                <option value="Dr. Williams - Surgery - (555) 101-1003">Dr. Williams - Surgery - (555) 101-1003</option>
                <option value="Dr. Brown - Internal Medicine - (555) 101-1004">Dr. Brown - Internal Medicine - (555) 101-1004</option>
                <option value="Dr. Davis - Pediatrics - (555) 101-1005">Dr. Davis - Pediatrics - (555) 101-1005</option>
                <option value="Dr. Wilson - Neurology - (555) 101-1006">Dr. Wilson - Neurology - (555) 101-1006</option>
                <option value="Dr. Garcia - Orthopedics - (555) 101-1007">Dr. Garcia - Orthopedics - (555) 101-1007</option>
                <option value="Dr. Martinez - Anesthesiology - (555) 101-1008">Dr. Martinez - Anesthesiology - (555) 101-1008</option>
            </select>
            <small>Hold Ctrl (Cmd on Mac) to select multiple doctors</small>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label for="urgency_level">Urgency Level *</label>
                <select id="urgency_level" name="urgency_level" required>
                    <option value="">Select Urgency</option>
                    <option value="Emergency">Emergency - Immediate Response Required</option>
                    <option value="Urgent">Urgent - Response within 15 minutes</option>
                    <option value="Standard">Standard - Response within 1 hour</option>
                    <option value="Routine">Routine - Response within 4 hours</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="communication_method">Communication Method *</label>
                <select id="communication_method" name="communication_method" required>
                    <option value="">Select Method</option>
                    <option value="Phone Call">Phone Call</option>
                    <option value="SMS">SMS Message</option>
                    <option value="Both">Both Phone Call and SMS</option>
                    <option value="Pager">Pager</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="message_content">Message Content *</label>
            <textarea id="message_content" name="message_content" placeholder="Enter the message to send to the doctors..." required></textarea>
        </div>
        
        <div class="form-group">
            <label for="patient_location">Patient Current Location</label>
            <select id="patient_location" name="patient_location">
                <option value="">Select Location</option>
                <option value="Emergency Room">Emergency Room</option>
                <option value="Triage">Triage Area</option>
                <option value="Waiting Area">Waiting Area</option>
                <option value="ICU">Intensive Care Unit</option>
                <option value="Operating Room">Operating Room</option>
                <option value="Recovery Room">Recovery Room</option>
                <option value="General Ward">General Ward</option>
            </select>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-clock"></i> Timestamp Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="call_date">Date</label>
                    <input type="date" id="call_date" name="call_date" readonly>
                </div>
                
                <div class="form-group">
                    <label for="call_time">Time</label>
                    <input type="time" id="call_time" name="call_time" readonly>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Send Communication
            </button>
            <button type="button" class="btn btn-warning" onclick="previewMessage()">
                <i class="fas fa-eye"></i> Preview Message
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<!-- Message Preview Modal -->
<div id="messagePreview" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 500px; width: 90%;">
        <h3><i class="fas fa-eye"></i> Message Preview</h3>
        <div id="previewContent"></div>
        <button onclick="closePreview()" class="btn btn-secondary">Close</button>
    </div>
</div>

<script>
// Set current date and time
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    const dateField = document.getElementById('call_date');
    const timeField = document.getElementById('call_time');
    
    dateField.value = now.toISOString().split('T')[0];
    timeField.value = now.toTimeString().split(' ')[0].substring(0, 5);
});

function previewMessage() {
    const doctors = Array.from(document.getElementById('doctors_to_contact').selectedOptions).map(option => option.text);
    const urgency = document.getElementById('urgency_level').value;
    const method = document.getElementById('communication_method').value;
    const message = document.getElementById('message_content').value;
    const patientName = document.getElementById('patient_name').value;
    const patientId = document.getElementById('patient_id').value;
    const location = document.getElementById('patient_location').value;
    
    const previewContent = `
        <p><strong>To:</strong> ${doctors.join(', ')}</p>
        <p><strong>Patient:</strong> ${patientName} (ID: ${patientId})</p>
        <p><strong>Location:</strong> ${location}</p>
        <p><strong>Urgency:</strong> ${urgency}</p>
        <p><strong>Method:</strong> ${method}</p>
        <p><strong>Message:</strong></p>
        <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; margin-top: 1rem;">
            ${message}
        </div>
    `;
    
    document.getElementById('previewContent').innerHTML = previewContent;
    document.getElementById('messagePreview').style.display = 'block';
}

function closePreview() {
    document.getElementById('messagePreview').style.display = 'none';
}
</script>

<?php include '../includes/footer.php'; ?>

