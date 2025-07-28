<?php
$page_title = "Patient Care Dashboard - Hospital Management System";
$user_role = "patient_care";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-heart"></i> Patient Care Dashboard</h2>
    </div>
    
    <div class="dashboard-grid">
        <div class="dashboard-card patients">
            <i class="fas fa-file-medical-alt"></i>
            <h3>Patient Reports</h3>
            <p>View patient medical reports and care instructions</p>
            <a href="pat_care_view_patient_report.php" class="btn btn-primary">
                <i class="fas fa-eye"></i> View Reports
            </a>
        </div>
        
        <div class="dashboard-card billing">
            <i class="fas fa-file-invoice"></i>
            <h3>Billing Information</h3>
            <p>View patient billing and payment information</p>
            <a href="pat_care_billing.php" class="btn btn-warning">
                <i class="fas fa-dollar-sign"></i> View Billing
            </a>
        </div>
        
        <div class="dashboard-card doctors">
            <i class="fas fa-calendar-alt"></i>
            <h3>Appointments</h3>
            <p>Manage patient appointments and follow-ups</p>
            <a href="pat_care_appointments.php" class="btn btn-success">
                <i class="fas fa-calendar-check"></i> Appointments
            </a>
        </div>
        
        <div class="dashboard-card emergency">
            <i class="fas fa-bell"></i>
            <h3>Notifications</h3>
            <p>View important patient care notifications</p>
            <a href="pat_care_notifications.php" class="btn btn-secondary">
                <i class="fas fa-bell"></i> Notifications
            </a>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-envelope"></i> Recent Messages</h3>
        </div>
        
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            <strong>New Report:</strong> Patient report for John Doe (PAT-20241214-001) has been received. Please review medication instructions.
        </div>
        
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Payment Due:</strong> Hospital bill for Jane Smith (PAT-20241213-002) is due on 01/15/2025. Amount: $2,450.00
        </div>
        
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            <strong>Discharge Ready:</strong> Patient Michael Johnson (PAT-20241212-003) is ready for discharge. Discharge sheet available.
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-search"></i> Quick Patient Search</h3>
        </div>
        
        <form method="GET" action="pat_care_view_patient_report.php">
            <div class="form-row">
                <div class="form-group">
                    <label for="search_patient">Search Patient</label>
                    <input type="text" id="search_patient" name="search_patient" placeholder="Enter Patient ID, Name, or SSN">
                </div>
                
                <div class="form-group">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-chart-pie"></i> Patient Care Summary</h3>
        </div>
        
        <div class="dashboard-grid">
            <div style="text-align: center; padding: 1rem; background: #e3f2fd; border-radius: 10px;">
                <h4 style="color: #1976d2; margin-bottom: 0.5rem;">15</h4>
                <p style="margin: 0; color: #666;">Active Patients</p>
            </div>
            
            <div style="text-align: center; padding: 1rem; background: #f3e5f5; border-radius: 10px;">
                <h4 style="color: #7b1fa2; margin-bottom: 0.5rem;">8</h4>
                <p style="margin: 0; color: #666;">Pending Reports</p>
            </div>
            
            <div style="text-align: center; padding: 1rem; background: #e8f5e8; border-radius: 10px;">
                <h4 style="color: #388e3c; margin-bottom: 0.5rem;">3</h4>
                <p style="margin: 0; color: #666;">Ready for Discharge</p>
            </div>
            
            <div style="text-align: center; padding: 1rem; background: #fff3e0; border-radius: 10px;">
                <h4 style="color: #f57c00; margin-bottom: 0.5rem;">5</h4>
                <p style="margin: 0; color: #666;">Overdue Payments</p>
            </div>
        </div>
    </div>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <strong>Welcome to Patient Care!</strong> Use the dashboard to view patient reports, manage billing, and track care progress. Check notifications regularly for important updates.
    </div>
</div>

<?php include '../includes/footer.php'; ?>

