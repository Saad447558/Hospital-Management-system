<?php
$page_title = "View Patient Report - Hospital Management System";
$user_role = "patient_care";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-eye"></i> View Patient Report</h2>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-search"></i> Search Patient</h3>
        </div>
        
        <form method="POST" action="">
            <div class="form-row">
                <div class="form-group">
                    <label for="search_type">Search By</label>
                    <select id="search_type" name="search_type">
                        <option value="patient_id">Patient ID</option>
                        <option value="patient_name">Patient Name</option>
                        <option value="ssn">Social Security Number</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="search_value">Search Value</label>
                    <input type="text" id="search_value" name="search_value" placeholder="Enter search value" required>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" name="search_patient" class="btn btn-primary">
                    <i class="fas fa-search"></i> Search Patient
                </button>
                <button type="button" class="btn btn-secondary" onclick="showAllPatients()">
                    <i class="fas fa-list"></i> Show All Patients
                </button>
            </div>
        </form>
    </div>
    
    <?php
    // Simulate patient data (in real application, this would come from database)
    $sample_patients = [
        [
            'name' => 'John Doe',
            'patient_id' => 'PAT-20241214-001',
            'ssn' => '123-45-6789',
            'age' => 45,
            'gender' => 'Male',
            'med_cond_after' => 'Patient responded well to treatment. Chest pain has subsided. Vital signs stable. Blood pressure normalized.',
            'medicines_to_give' => 'Aspirin 81mg daily, Lisinopril 10mg daily, Atorvastatin 20mg at bedtime',
            'lab_test_needed' => 'Follow-up ECG in 1 week, Lipid panel in 3 months',
            'disposition' => 'go_home',
            'transfer_to_ward' => '',
            'transfer_to_icu' => '',
            'stay_in_emergency' => '',
            'hospital_bill' => 2450.00,
            'pay_by_date' => '2025-01-15',
            'report_date' => '2024-12-14'
        ],
        [
            'name' => 'Jane Smith',
            'patient_id' => 'PAT-20241213-002',
            'ssn' => '987-65-4321',
            'age' => 32,
            'gender' => 'Female',
            'med_cond_after' => 'Appendectomy completed successfully. Patient recovering well. No signs of infection. Pain managed with medication.',
            'medicines_to_give' => 'Ibuprofen 600mg every 6 hours as needed for pain, Amoxicillin 500mg three times daily for 7 days',
            'lab_test_needed' => 'Complete blood count in 48 hours, Wound check in 1 week',
            'disposition' => 'transfer_to_ward',
            'transfer_to_ward' => 'Surgical Ward - Room 205',
            'transfer_to_icu' => '',
            'stay_in_emergency' => '',
            'hospital_bill' => 8750.00,
            'pay_by_date' => '2025-01-20',
            'report_date' => '2024-12-13'
        ],
        [
            'name' => 'Michael Johnson',
            'patient_id' => 'PAT-20241212-003',
            'ssn' => '456-78-9123',
            'age' => 67,
            'gender' => 'Male',
            'med_cond_after' => 'Heart attack treated with emergency angioplasty. Stent placed successfully. Patient stable but requires intensive monitoring.',
            'medicines_to_give' => 'Clopidogrel 75mg daily, Metoprolol 50mg twice daily, Atorvastatin 80mg daily',
            'lab_test_needed' => 'Cardiac enzymes every 8 hours, ECG daily, Echocardiogram in 3 days',
            'disposition' => 'transfer_to_icu',
            'transfer_to_ward' => '',
            'transfer_to_icu' => 'Cardiac ICU - Bed 3',
            'stay_in_emergency' => '',
            'hospital_bill' => 15200.00,
            'pay_by_date' => '2025-02-01',
            'report_date' => '2024-12-12'
        ]
    ];
    
    $selected_patient = null;
    $show_all = false;
    
    if (isset($_POST['search_patient']) && !empty($_POST['search_value'])) {
        $search_type = $_POST['search_type'];
        $search_value = strtolower($_POST['search_value']);
        
        foreach ($sample_patients as $patient) {
            if ($search_type == 'patient_id' && strtolower($patient['patient_id']) == $search_value) {
                $selected_patient = $patient;
                break;
            } elseif ($search_type == 'patient_name' && strpos(strtolower($patient['name']), $search_value) !== false) {
                $selected_patient = $patient;
                break;
            } elseif ($search_type == 'ssn' && $patient['ssn'] == $_POST['search_value']) {
                $selected_patient = $patient;
                break;
            }
        }
    }
    
    if (isset($_GET['show_all']) || (isset($_POST['search_patient']) && empty($_POST['search_value']))) {
        $show_all = true;
    }
    ?>
    
    <?php if ($selected_patient): ?>
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-user"></i> Patient Information</h3>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label><strong>Patient Name:</strong></label>
                <p><?php echo $selected_patient['name']; ?></p>
            </div>
            
            <div class="form-group">
                <label><strong>Patient ID:</strong></label>
                <p><?php echo $selected_patient['patient_id']; ?></p>
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label><strong>Age:</strong></label>
                <p><?php echo $selected_patient['age']; ?> years</p>
            </div>
            
            <div class="form-group">
                <label><strong>Gender:</strong></label>
                <p><?php echo $selected_patient['gender']; ?></p>
            </div>
        </div>
        
        <div class="form-group">
            <label><strong>Report Date:</strong></label>
            <p><?php echo $selected_patient['report_date']; ?></p>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-stethoscope"></i> Medical Condition After Treatment</h3>
        </div>
        
        <div style="background: #f8f9fa; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;">
            <?php echo $selected_patient['med_cond_after']; ?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-pills"></i> Medicines to Give</h3>
        </div>
        
        <div style="background: #e8f5e8; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;">
            <?php echo $selected_patient['medicines_to_give']; ?>
        </div>
        
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Important:</strong> Please ensure patient understands medication instructions and dosage. Contact pharmacy for any questions about prescriptions.
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-flask"></i> Lab Tests Needed</h3>
        </div>
        
        <div style="background: #fff3cd; padding: 1rem; border-radius: 5px; margin-bottom: 1rem;">
            <?php echo $selected_patient['lab_test_needed']; ?>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-route"></i> Patient Disposition</h3>
        </div>
        
        <?php
        $disposition_text = '';
        $disposition_class = '';
        
        switch($selected_patient['disposition']) {
            case 'go_home':
                $disposition_text = 'Patient Discharged to Home';
                $disposition_class = 'alert-success';
                break;
            case 'transfer_to_ward':
                $disposition_text = 'Transfer to Ward: ' . $selected_patient['transfer_to_ward'];
                $disposition_class = 'alert-info';
                break;
            case 'transfer_to_icu':
                $disposition_text = 'Transfer to ICU: ' . $selected_patient['transfer_to_icu'];
                $disposition_class = 'alert-danger';
                break;
            case 'stay_in_emergency':
                $disposition_text = 'Continue Emergency Care: ' . $selected_patient['stay_in_emergency'];
                $disposition_class = 'alert-warning';
                break;
        }
        ?>
        
        <div class="alert <?php echo $disposition_class; ?>">
            <i class="fas fa-info-circle"></i>
            <strong><?php echo $disposition_text; ?></strong>
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-dollar-sign"></i> Billing Information</h3>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                <label><strong>Hospital Bill:</strong></label>
                <p style="font-size: 1.2em; color: #e74c3c; font-weight: bold;">$<?php echo number_format($selected_patient['hospital_bill'], 2); ?></p>
            </div>
            
            <div class="form-group">
                <label><strong>Payment Due Date:</strong></label>
                <p style="font-weight: bold;"><?php echo $selected_patient['pay_by_date']; ?></p>
            </div>
        </div>
        
        <?php
        $due_date = new DateTime($selected_patient['pay_by_date']);
        $today = new DateTime();
        $days_until_due = $today->diff($due_date)->days;
        $is_overdue = $today > $due_date;
        ?>
        
        <?php if ($is_overdue): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Payment Overdue:</strong> This bill is <?php echo $days_until_due; ?> days overdue. Please contact billing department immediately.
        </div>
        <?php elseif ($days_until_due <= 7): ?>
        <div class="alert alert-warning">
            <i class="fas fa-clock"></i>
            <strong>Payment Due Soon:</strong> This bill is due in <?php echo $days_until_due; ?> days.
        </div>
        <?php else: ?>
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i>
            <strong>Payment Status:</strong> Payment due in <?php echo $days_until_due; ?> days.
        </div>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <button type="button" class="btn btn-primary" onclick="printReport()">
            <i class="fas fa-print"></i> Print Report
        </button>
        <button type="button" class="btn btn-secondary" onclick="emailReport()">
            <i class="fas fa-envelope"></i> Email Report
        </button>
        <button type="button" class="btn btn-warning" onclick="contactBilling()">
            <i class="fas fa-phone"></i> Contact Billing
        </button>
    </div>
    
    <?php elseif ($show_all): ?>
    <div class="card">
        <div class="card-header">
            <h3><i class="fas fa-list"></i> All Patients</h3>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Disposition</th>
                        <th>Bill Amount</th>
                        <th>Due Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sample_patients as $patient): ?>
                    <tr>
                        <td><?php echo $patient['patient_id']; ?></td>
                        <td><?php echo $patient['name']; ?></td>
                        <td><?php echo $patient['age']; ?></td>
                        <td><?php echo $patient['gender']; ?></td>
                        <td>
                            <?php
                            switch($patient['disposition']) {
                                case 'go_home':
                                    echo '<span class="status-badge status-stable">Discharged</span>';
                                    break;
                                case 'transfer_to_ward':
                                    echo '<span class="status-badge status-serious">Ward</span>';
                                    break;
                                case 'transfer_to_icu':
                                    echo '<span class="status-badge status-critical">ICU</span>';
                                    break;
                                case 'stay_in_emergency':
                                    echo '<span class="status-badge status-serious">Emergency</span>';
                                    break;
                            }
                            ?>
                        </td>
                        <td>$<?php echo number_format($patient['hospital_bill'], 2); ?></td>
                        <td><?php echo $patient['pay_by_date']; ?></td>
                        <td>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="search_type" value="patient_id">
                                <input type="hidden" name="search_value" value="<?php echo $patient['patient_id']; ?>">
                                <button type="submit" name="search_patient" class="btn btn-primary" style="padding: 5px 10px; font-size: 0.8em;">
                                    <i class="fas fa-eye"></i> View
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php elseif (isset($_POST['search_patient'])): ?>
    <div class="alert alert-warning">
        <i class="fas fa-exclamation-triangle"></i>
        <strong>No Patient Found:</strong> No patient found with the provided search criteria. Please check the information and try again.
    </div>
    
    <?php else: ?>
    <div class="alert alert-info">
        <i class="fas fa-info-circle"></i>
        <strong>Search for a Patient:</strong> Use the search form above to find a specific patient report, or click "Show All Patients" to view all available reports.
    </div>
    <?php endif; ?>
</div>

<script>
function showAllPatients() {
    window.location.href = '?show_all=1';
}

function printReport() {
    window.print();
}

function emailReport() {
    showAlert('Email functionality will be implemented with backend integration', 'info');
}

function contactBilling() {
    if (confirm('Contact billing department at (555) 123-4567?')) {
        showAlert('Billing department contact: (555) 123-4567 or billing@generalhospital.com', 'info');
    }
}

// Auto-search when URL parameter is present
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const searchPatient = urlParams.get('search_patient');
    
    if (searchPatient) {
        document.getElementById('search_value').value = searchPatient;
        document.getElementById('search_type').value = 'patient_id';
    }
});
</script>

<?php include '../includes/footer.php'; ?>

