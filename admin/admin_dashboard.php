<?php
$page_title = "Admin Dashboard - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-tachometer-alt"></i> Administrator Dashboard</h2>
    </div>
    
    <div class="dashboard-grid">
        <div class="dashboard-card patients">
            <i class="fas fa-users"></i>
            <h3>Patient Management</h3>
            <p>Register new patients and manage existing records</p>
            <a href="admin_register_patient.php" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Register Patient
            </a>
        </div>
        
        <div class="dashboard-card doctors">
            <i class="fas fa-user-md"></i>
            <h3>Doctor Communication</h3>
            <p>Call and message doctors for patient care</p>
            <a href="admin_call_docs.php" class="btn btn-success">
                <i class="fas fa-phone"></i> Contact Doctors
            </a>
        </div>
        
        <div class="dashboard-card emergency">
            <i class="fas fa-ambulance"></i>
            <h3>Emergency Reports</h3>
            <p>Report medical conditions and seriousness levels</p>
            <a href="admin_report_medical_condition.php" class="btn btn-warning">
                <i class="fas fa-exclamation-triangle"></i> Report Condition
            </a>
        </div>
        
        <div class="dashboard-card billing">
            <i class="fas fa-file-invoice-dollar"></i>
            <h3>Billing & Discharge</h3>
            <p>Manage patient billing and discharge procedures</p>
            <a href="admin_send_complete_bill.php" class="btn btn-primary">
                <i class="fas fa-calculator"></i> Billing
            </a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-list"></i> Quick Actions</h3>
        </div>
        <div class="form-row">
            <a href="admin_send_patient_report.php" class="btn btn-secondary">
                <i class="fas fa-file-medical"></i> Send Patient Report
            </a>
            <a href="admin_send_general_fee.php" class="btn btn-secondary">
                <i class="fas fa-money-bill"></i> Send General Fees
            </a>
            <a href="admin_send_discharge_sheet.php" class="btn btn-secondary">
                <i class="fas fa-file-export"></i> Discharge Sheet
            </a>
        </div>
    </div>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <strong>Welcome to the Admin Dashboard!</strong> Use the navigation above to access different functions of the hospital management system.
    </div>
</div>

<?php include '../includes/footer.php'; ?>

