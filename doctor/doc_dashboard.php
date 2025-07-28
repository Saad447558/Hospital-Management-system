<?php
$page_title = "Doctor Dashboard - Hospital Management System";
$user_role = "doctor";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-user-md"></i> Doctor Dashboard</h2>
    </div>
    
    <div class="dashboard-grid">
        <div class="dashboard-card patients">
            <i class="fas fa-file-medical"></i>
            <h3>Patient Reports</h3>
            <p>File and manage patient medical reports</p>
            <a href="doc_file_patient_report.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> File Patient Report
            </a>
        </div>
        
        <div class="dashboard-card emergency">
            <i class="fas fa-ambulance"></i>
            <h3>Emergency Cases</h3>
            <p>View and respond to emergency notifications</p>
            <a href="doc_emergency_cases.php" class="btn btn-warning">
                <i class="fas fa-exclamation-triangle"></i> Emergency Cases
            </a>
        </div>
        
        <div class="dashboard-card doctors">
            <i class="fas fa-calendar-check"></i>
            <h3>My Schedule</h3>
            <p>View appointments and scheduled procedures</p>
            <a href="doc_schedule.php" class="btn btn-success">
                <i class="fas fa-calendar"></i> View Schedule
            </a>
        </div>
        
        <div class="dashboard-card billing">
            <i class="fas fa-chart-line"></i>
            <h3>Patient Statistics</h3>
            <p>View patient care statistics and reports</p>
            <a href="doc_statistics.php" class="btn btn-secondary">
                <i class="fas fa-chart-bar"></i> View Statistics
            </a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-bell"></i> Recent Notifications</h3>
        </div>
        
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Emergency Alert:</strong> New critical patient in Emergency Room - Room 101. Immediate attention required.
        </div>
        
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            <strong>Admin Message:</strong> Please review and file report for Patient ID: PAT-20241214-001.
        </div>
        
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            <strong>System Update:</strong> Patient report for John Doe has been successfully submitted.
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-clock"></i> Quick Actions</h3>
        </div>
        <div class="form-row">
            <a href="doc_file_patient_report.php" class="btn btn-primary">
                <i class="fas fa-file-medical"></i> New Patient Report
            </a>
            <a href="doc_view_patients.php" class="btn btn-secondary">
                <i class="fas fa-users"></i> View All Patients
            </a>
            <a href="doc_emergency_response.php" class="btn btn-danger">
                <i class="fas fa-ambulance"></i> Emergency Response
            </a>
        </div>
    </div>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <strong>Welcome, Doctor!</strong> Use the navigation above to access patient reports and emergency cases. Check notifications regularly for urgent updates.
    </div>
</div>

<?php include '../includes/footer.php'; ?>

