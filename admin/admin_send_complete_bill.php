<?php
$page_title = "Complete Bill - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-file-invoice-dollar"></i> Send Complete Bill</h2>
    </div>
    
    <form method="POST" action="process_complete_bill.php">
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user"></i> Patient Information</h3>
            </div>
            
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
                    <input type="text" id="patient_no" name="patient_no" required>
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
                    <label for="admission_date">Admission Date</label>
                    <input type="date" id="admission_date" name="admission_date">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="discharge_date">Discharge Date</label>
                    <input type="date" id="discharge_date" name="discharge_date">
                </div>
                
                <div class="form-group">
                    <label for="number_of_days_stay">Number of Days Stay *</label>
                    <input type="number" id="number_of_days_stay" name="number_of_days_stay" min="0" required readonly>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-dollar-sign"></i> Billing Details</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="room_charges">Room Charges</label>
                    <input type="number" id="room_charges" name="room_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="doc_fee">Doctor Fee</label>
                    <input type="number" id="doc_fee" name="doc_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="surgeon_fee">Surgeon Fee</label>
                    <input type="number" id="surgeon_fee" name="surgeon_fee" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="icu_fee">ICU Fee</label>
                    <input type="number" id="icu_fee" name="icu_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="medicines">Medicines</label>
                    <input type="number" id="medicines" name="medicines" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="lab_fee">Laboratory Fee</label>
                    <input type="number" id="lab_fee" name="lab_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="food">Food & Nutrition</label>
                    <input type="number" id="food" name="food" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="others">Other Charges</label>
                    <input type="number" id="others" name="others" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-group">
                <label for="other_charges_description">Description of Other Charges</label>
                <textarea id="other_charges_description" name="other_charges_description" placeholder="Describe any additional charges..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-calculator"></i> Bill Summary</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="subtotal">Subtotal</label>
                    <input type="number" id="subtotal" name="subtotal" step="0.01" readonly>
                </div>
                
                <div class="form-group">
                    <label for="tax_rate">Tax Rate (%)</label>
                    <input type="number" id="tax_rate" name="tax_rate" step="0.01" value="8.5" min="0" max="100">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="tax_amount">Tax Amount</label>
                    <input type="number" id="tax_amount" name="tax_amount" step="0.01" readonly>
                </div>
                
                <div class="form-group">
                    <label for="insurance_coverage">Insurance Coverage</label>
                    <input type="number" id="insurance_coverage" name="insurance_coverage" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="discount">Discount (%)</label>
                    <input type="number" id="discount" name="discount" step="0.01" min="0" max="100" placeholder="0">
                </div>
                
                <div class="form-group">
                    <label for="total_charges">Total Charges *</label>
                    <input type="number" id="total_charges" name="total_charges" step="0.01" readonly style="font-weight: bold; font-size: 1.2em; color: #27ae60;">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="amount_paid">Amount Already Paid</label>
                    <input type="number" id="amount_paid" name="amount_paid" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="balance_due">Balance Due</label>
                    <input type="number" id="balance_due" name="balance_due" step="0.01" readonly style="font-weight: bold; font-size: 1.2em; color: #e74c3c;">
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-credit-card"></i> Payment Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="payment_method">Preferred Payment Method</label>
                    <select id="payment_method" name="payment_method">
                        <option value="">Select Payment Method</option>
                        <option value="Cash">Cash</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Check">Check</option>
                        <option value="Insurance">Insurance</option>
                        <option value="Payment Plan">Payment Plan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="payment_due_date">Payment Due Date</label>
                    <input type="date" id="payment_due_date" name="payment_due_date">
                </div>
            </div>
            
            <div class="form-group">
                <label for="payment_instructions">Payment Instructions</label>
                <textarea id="payment_instructions" name="payment_instructions" placeholder="Special payment instructions or notes..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-hospital"></i> Hospital Information</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="hospital_name">Hospital Name</label>
                    <input type="text" id="hospital_name" name="hospital_name" value="General Hospital" readonly>
                </div>
                
                <div class="form-group">
                    <label for="hospital_address">Hospital Address</label>
                    <input type="text" id="hospital_address" name="hospital_address" value="123 Medical Center Dr, Healthcare City, HC 12345" readonly>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="hospital_phone">Hospital Phone</label>
                    <input type="text" id="hospital_phone" name="hospital_phone" value="(555) 123-4567" readonly>
                </div>
                
                <div class="form-group">
                    <label for="billing_department">Billing Department</label>
                    <input type="text" id="billing_department" name="billing_department" value="billing@generalhospital.com" readonly>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="billing_notes">Additional Billing Notes</label>
            <textarea id="billing_notes" name="billing_notes" placeholder="Any additional notes for the patient or billing department..."></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Send Complete Bill
            </button>
            <button type="button" class="btn btn-secondary" onclick="calculateBill()">
                <i class="fas fa-calculator"></i> Recalculate Bill
            </button>
            <button type="button" class="btn btn-secondary" onclick="printBill()">
                <i class="fas fa-print"></i> Print Bill
            </button>
            <button type="button" class="btn btn-warning" onclick="previewBill()">
                <i class="fas fa-eye"></i> Preview Bill
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<!-- Bill Preview Modal -->
<div id="billPreview" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; overflow-y: auto;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 2rem; border-radius: 10px; max-width: 800px; width: 90%; max-height: 80vh; overflow-y: auto;">
        <h3><i class="fas fa-file-invoice-dollar"></i> Complete Bill Preview</h3>
        <div id="billPreviewContent"></div>
        <button onclick="closeBillPreview()" class="btn btn-secondary">Close</button>
    </div>
</div>

<script>
// Auto-calculate days stay when dates change
document.addEventListener('DOMContentLoaded', function() {
    const admissionDate = document.getElementById('admission_date');
    const dischargeDate = document.getElementById('discharge_date');
    const daysStay = document.getElementById('number_of_days_stay');
    
    function calculateDays() {
        if (admissionDate.value && dischargeDate.value) {
            const admission = new Date(admissionDate.value);
            const discharge = new Date(dischargeDate.value);
            const timeDiff = discharge.getTime() - admission.getTime();
            const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
            daysStay.value = daysDiff > 0 ? daysDiff : 0;
        }
        calculateBill();
    }
    
    admissionDate.addEventListener('change', calculateDays);
    dischargeDate.addEventListener('change', calculateDays);
    
    // Set default payment due date (30 days from now)
    const paymentDueDate = document.getElementById('payment_due_date');
    const futureDate = new Date();
    futureDate.setDate(futureDate.getDate() + 30);
    paymentDueDate.value = futureDate.toISOString().split('T')[0];
    
    // Auto-calculate when any amount changes
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        input.addEventListener('input', calculateBill);
    });
    
    calculateBill(); // Initial calculation
});

function calculateBill() {
    const roomCharges = parseFloat(document.getElementById('room_charges').value) || 0;
    const docFee = parseFloat(document.getElementById('doc_fee').value) || 0;
    const surgeonFee = parseFloat(document.getElementById('surgeon_fee').value) || 0;
    const icuFee = parseFloat(document.getElementById('icu_fee').value) || 0;
    const medicines = parseFloat(document.getElementById('medicines').value) || 0;
    const labFee = parseFloat(document.getElementById('lab_fee').value) || 0;
    const food = parseFloat(document.getElementById('food').value) || 0;
    const others = parseFloat(document.getElementById('others').value) || 0;
    
    // Calculate subtotal
    const subtotal = roomCharges + docFee + surgeonFee + icuFee + medicines + labFee + food + others;
    document.getElementById('subtotal').value = subtotal.toFixed(2);
    
    // Calculate tax
    const taxRate = parseFloat(document.getElementById('tax_rate').value) || 0;
    const taxAmount = (subtotal * taxRate) / 100;
    document.getElementById('tax_amount').value = taxAmount.toFixed(2);
    
    // Calculate total with insurance and discount
    const insuranceCoverage = parseFloat(document.getElementById('insurance_coverage').value) || 0;
    const discount = parseFloat(document.getElementById('discount').value) || 0;
    
    const totalBeforeAdjustments = subtotal + taxAmount;
    const discountAmount = (totalBeforeAdjustments * discount) / 100;
    const totalCharges = totalBeforeAdjustments - discountAmount - insuranceCoverage;
    
    document.getElementById('total_charges').value = Math.max(0, totalCharges).toFixed(2);
    
    // Calculate balance due
    const amountPaid = parseFloat(document.getElementById('amount_paid').value) || 0;
    const balanceDue = Math.max(0, totalCharges - amountPaid);
    document.getElementById('balance_due').value = balanceDue.toFixed(2);
}

function previewBill() {
    const patientName = document.getElementById('patient_name').value;
    const patientNo = document.getElementById('patient_no').value;
    const ssn = document.getElementById('ssn').value;
    const age = document.getElementById('age').value;
    const gender = document.getElementById('gender').value;
    const daysStay = document.getElementById('number_of_days_stay').value;
    const totalCharges = document.getElementById('total_charges').value;
    const balanceDue = document.getElementById('balance_due').value;
    
    const previewContent = `
        <div style="font-family: Arial, sans-serif; line-height: 1.6;">
            <div style="text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 1rem; margin-bottom: 2rem;">
                <h2>HOSPITAL BILL</h2>
                <p>General Hospital<br>123 Medical Center Dr, Healthcare City, HC 12345<br>(555) 123-4567</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Patient Information</h4>
                <p><strong>Name:</strong> ${patientName}</p>
                <p><strong>Patient Number:</strong> ${patientNo}</p>
                <p><strong>SSN:</strong> ${ssn}</p>
                <p><strong>Age:</strong> ${age}</p>
                <p><strong>Gender:</strong> ${gender}</p>
                <p><strong>Length of Stay:</strong> ${daysStay} days</p>
            </div>
            
            <div style="margin-bottom: 2rem;">
                <h4>Billing Summary</h4>
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Room Charges:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('room_charges').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Doctor Fee:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('doc_fee').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Surgeon Fee:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('surgeon_fee').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>ICU Fee:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('icu_fee').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Medicines:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('medicines').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Laboratory Fee:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('lab_fee').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Food & Nutrition:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('food').value || '0.00'}</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 8px;"><strong>Other Charges:</strong></td>
                        <td style="padding: 8px; text-align: right;">$${document.getElementById('others').value || '0.00'}</td>
                    </tr>
                    <tr style="border-top: 2px solid #3498db; background: #f8f9fa;">
                        <td style="padding: 12px;"><strong>TOTAL CHARGES:</strong></td>
                        <td style="padding: 12px; text-align: right; font-size: 1.2em;"><strong>$${totalCharges}</strong></td>
                    </tr>
                    <tr style="background: #fff3cd;">
                        <td style="padding: 12px;"><strong>BALANCE DUE:</strong></td>
                        <td style="padding: 12px; text-align: right; font-size: 1.2em; color: #e74c3c;"><strong>$${balanceDue}</strong></td>
                    </tr>
                </table>
            </div>
            
            <div style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #ddd; font-size: 0.9em; color: #666;">
                <p><strong>Payment Due Date:</strong> ${document.getElementById('payment_due_date').value}</p>
                <p><strong>Questions?</strong> Contact our billing department at billing@generalhospital.com or (555) 123-4567</p>
            </div>
        </div>
    `;
    
    document.getElementById('billPreviewContent').innerHTML = previewContent;
    document.getElementById('billPreview').style.display = 'block';
}

function closeBillPreview() {
    document.getElementById('billPreview').style.display = 'none';
}

function printBill() {
    window.print();
}
</script>

<?php include '../includes/footer.php'; ?>

