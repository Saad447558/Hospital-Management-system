<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Hospital Management System'; ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <i class="fas fa-hospital"></i>
                <h1>Hospital Management System</h1>
            </div>
            <nav class="nav">
                <?php if (isset($user_role)): ?>
                    <?php if ($user_role == 'admin'): ?>
                        <a href="admin_dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a href="admin_register_patient.php"><i class="fas fa-user-plus"></i> Register Patient</a>
                        <a href="admin_call_docs.php"><i class="fas fa-phone"></i> Call Doctors</a>
                        <a href="admin_send_complete_bill.php"><i class="fas fa-file-invoice"></i> Billing</a>
                    <?php elseif ($user_role == 'doctor'): ?>
                        <a href="doc_dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a href="doc_file_patient_report.php"><i class="fas fa-file-medical"></i> Patient Reports</a>
                    <?php elseif ($user_role == 'patient_care'): ?>
                        <a href="pat_care_dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        <a href="pat_care_view_patient_report.php"><i class="fas fa-eye"></i> View Reports</a>
                    <?php endif; ?>
                    <a href="../index.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="main-content">
        <div class="container">

