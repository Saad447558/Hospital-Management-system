# Hospital Management System

A comprehensive front-end hospital management system built with PHP and HTML, designed to handle emergency patient care, doctor communications, and patient care management.

## Features

### Admin Interface
- **Patient Registration**: Register new patients with complete medical and personal information
- **Doctor Communication**: Call/message doctors with patient information and urgency levels
- **Medical Condition Reporting**: Report patient medical conditions and seriousness levels
- **Patient Report Management**: Send patient reports to patient care contacts
- **Billing Management**: Generate and send hospital service fees and complete bills
- **Discharge Management**: Create and send discharge sheets with medication instructions

### Doctor Interface
- **Patient Report Filing**: Comprehensive patient medical report system with:
  - Medical condition assessment (before and after treatment)
  - Treatment documentation
  - Medication prescriptions
  - Lab test ordering
  - Patient disposition (discharge, ward transfer, ICU transfer, emergency observation)
  - Vital signs tracking

### Patient Care Interface
- **Patient Report Viewing**: Access patient medical reports including:
  - Medical condition after treatment
  - Prescribed medications
  - Required lab tests
  - Patient disposition status
  - Billing information and payment due dates

## System Requirements

- Web server with PHP support (PHP 7.4+ recommended)
- Modern web browser
- No database required (uses sample data for demonstration)

## Installation & Setup

### Option 1: Using PHP Built-in Server (Recommended)

1. **Install PHP** (if not already installed):
   ```bash
   # Ubuntu/Debian
   sudo apt update
   sudo apt install php php-cli
   
   # CentOS/RHEL
   sudo yum install php php-cli
   
   # macOS (using Homebrew)
   brew install php
   ```

2. **Navigate to the project directory**:
   ```bash
   cd hospital_management_system
   ```

3. **Start the PHP development server**:
   ```bash
   php -S localhost:8080
   ```

4. **Open your web browser** and navigate to:
   ```
   http://localhost:8080
   ```

### Option 2: Using Apache/Nginx

1. **Copy the project files** to your web server's document root:
   ```bash
   # For Apache (Ubuntu/Debian)
   sudo cp -r hospital_management_system /var/www/html/
   
   # For Apache (CentOS/RHEL)
   sudo cp -r hospital_management_system /var/www/html/
   ```

2. **Set proper permissions**:
   ```bash
   sudo chown -R www-data:www-data /var/www/html/hospital_management_system
   sudo chmod -R 755 /var/www/html/hospital_management_system
   ```

3. **Access the application**:
   ```
   http://your-server-ip/hospital_management_system
   ```

### Option 3: Using Python HTTP Server (For Testing Only)

If PHP is not available, you can use Python's built-in server for basic testing:

```bash
cd hospital_management_system
python3 -m http.server 8080
```

**Note**: PHP functionality will not work with Python server, but you can view the HTML structure and CSS styling.

## Usage Guide

### Getting Started

1. **Access the main page**: Open your browser and navigate to the application URL
2. **Select your role**: Choose from Administrator, Doctor, or Patient Care
3. **Navigate through the interface**: Use the dashboard and navigation menu to access different features

### Admin Functions

1. **Register a Patient**:
   - Click "Administrator" from the main page
   - Select "Register Patient" from the dashboard
   - Fill in all required patient information
   - Submit the form to register the patient

2. **Contact Doctors**:
   - Go to "Call Doctors" from the admin dashboard
   - Select doctors to contact and set urgency level
   - Compose message and send communication

3. **Generate Bills**:
   - Use "Complete Bill" to create comprehensive patient bills
   - Use "General Fees" for specific service charges
   - All calculations are automated with tax and discount support

### Doctor Functions

1. **File Patient Reports**:
   - Access the doctor dashboard
   - Click "File Patient Report"
   - Complete all sections including medical assessment, treatment, and disposition
   - Submit the report for patient care review

### Patient Care Functions

1. **View Patient Reports**:
   - Access the patient care dashboard
   - Use the search function to find specific patients
   - Review medical conditions, medications, and billing information
   - Print or email reports as needed

## File Structure

```
hospital_management_system/
├── index.php                          # Main landing page
├── admin/                             # Admin interface pages
│   ├── admin_dashboard.php
│   ├── admin_register_patient.php
│   ├── admin_call_docs.php
│   ├── admin_report_medical_condition.php
│   ├── admin_send_patient_report.php
│   ├── admin_send_general_fee.php
│   ├── admin_send_complete_bill.php
│   └── admin_send_discharge_sheet.php
├── doctor/                            # Doctor interface pages
│   ├── doc_dashboard.php
│   └── doc_file_patient_report.php
├── patient_care/                      # Patient care interface pages
│   ├── pat_care_dashboard.php
│   └── pat_care_view_patient_report.php
├── includes/                          # Common components
│   ├── header.php
│   └── footer.php
└── assets/                           # Static assets
    ├── css/
    │   └── style.css
    └── js/
        └── script.js
```

## Features Overview

### Responsive Design
- Mobile-friendly interface
- Adaptive layouts for different screen sizes
- Touch-friendly navigation

### User Experience
- Intuitive navigation with role-based menus
- Form validation and error handling
- Print-friendly pages
- Modal previews for reports and bills

### Data Management
- Comprehensive patient information tracking
- Medical condition documentation
- Medication management
- Billing and payment tracking
- Lab test ordering and tracking

### Security Considerations
- Input validation on all forms
- XSS protection through proper HTML encoding
- Role-based access control structure
- Secure form handling practices

## Customization

### Adding New Features
1. Create new PHP files in the appropriate role directory
2. Update navigation in `includes/header.php`
3. Add new styles to `assets/css/style.css`
4. Include JavaScript functionality in `assets/js/script.js`

### Styling Modifications
- Edit `assets/css/style.css` for visual customizations
- Modify color schemes, fonts, and layouts
- Add custom CSS classes for new components

### Database Integration
To integrate with a real database:
1. Install PHP database extensions (mysqli, PDO)
2. Create database connection files
3. Replace sample data with database queries
4. Implement proper CRUD operations
5. Add user authentication and session management

## Browser Compatibility

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+
- Internet Explorer 11+ (limited support)

## Troubleshooting

### Common Issues

1. **PHP files downloading instead of executing**:
   - Ensure PHP is properly installed and configured
   - Check that the web server is configured to process PHP files
   - Verify file permissions

2. **CSS/JavaScript not loading**:
   - Check file paths in HTML
   - Verify web server can serve static files
   - Clear browser cache

3. **Forms not submitting**:
   - Check form action URLs
   - Verify PHP error logs
   - Ensure proper file permissions

### Getting Help

- Check PHP error logs for detailed error information
- Verify all file paths are correct
- Ensure proper web server configuration
- Test with different browsers

## Future Enhancements

- Database integration for persistent data storage
- User authentication and authorization
- Real-time notifications
- Email integration for reports and bills
- Advanced reporting and analytics
- Mobile application development
- Integration with hospital equipment and systems

## License

This project is provided as-is for educational and demonstration purposes. Please ensure compliance with healthcare regulations and data protection laws when implementing in a production environment.

## Support

For technical support or questions about implementation, please refer to the documentation or contact your system administrator.

