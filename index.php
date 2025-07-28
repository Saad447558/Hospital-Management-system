<?php
$page_title = "Hospital Management System - Login";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .login-card {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-header i {
            font-size: 4rem;
            color: #3498db;
            margin-bottom: 1rem;
        }
        .role-selection {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 2rem;
        }
        .role-btn {
            padding: 1rem;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: white;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            color: #2c3e50;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .role-btn:hover {
            border-color: #3498db;
            background: #f8f9fa;
            transform: translateY(-2px);
        }
        .role-btn i {
            font-size: 2rem;
            width: 50px;
            text-align: center;
        }
        .role-btn.admin i { color: #e74c3c; }
        .role-btn.doctor i { color: #27ae60; }
        .role-btn.patient-care i { color: #f39c12; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <i class="fas fa-hospital"></i>
                <h1>Hospital Management System</h1>
                <p>Please select your role to continue</p>
            </div>
            
            <div class="role-selection">
                <a href="admin/admin_dashboard.php" class="role-btn admin">
                    <i class="fas fa-user-shield"></i>
                    <div>
                        <h3>Administrator</h3>
                        <p>Manage patients, doctors, and billing</p>
                    </div>
                </a>
                
                <a href="doctor/doc_dashboard.php" class="role-btn doctor">
                    <i class="fas fa-user-md"></i>
                    <div>
                        <h3>Doctor</h3>
                        <p>File patient reports and medical records</p>
                    </div>
                </a>
                
                <a href="patient_care/pat_care_dashboard.php" class="role-btn patient-care">
                    <i class="fas fa-heart"></i>
                    <div>
                        <h3>Patient Care</h3>
                        <p>View patient reports and care information</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <script src="assets/js/script.js"></script>
</body>
</html>

