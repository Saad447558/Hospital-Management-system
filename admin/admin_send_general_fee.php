<?php
$page_title = "Send General Hospital Fees - Hospital Management System";
$user_role = "admin";
include '../includes/header.php';
?>

<div class="card">
    <div class="card-header">
        <h2><i class="fas fa-money-bill"></i> Send General Hospital Services Fee</h2>
    </div>
    
    <form method="POST" action="process_send_general_fee.php">
        <div class="form-row">
            <div class="form-group">
                <label for="patient_name">Patient Name *</label>
                <input type="text" id="patient_name" name="patient_name" required>
            </div>
            
            <div class="form-group">
                <label for="patient_id">Patient ID *</label>
                <input type="text" id="patient_id" name="patient_id" required>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-bed"></i> Room & Ward Charges</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="room_charges">Room Charges (per day)</label>
                    <input type="number" id="room_charges" name="room_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="room_days">Number of Days</label>
                    <input type="number" id="room_days" name="room_days" min="0" placeholder="0">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="ward_charges">Ward Charges (per day)</label>
                    <input type="number" id="ward_charges" name="ward_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="ward_days">Number of Days in Ward</label>
                    <input type="number" id="ward_days" name="ward_days" min="0" placeholder="0">
                </div>
            </div>
            
            <div class="form-group">
                <label for="total_room_ward">Total Room & Ward Charges</label>
                <input type="number" id="total_room_ward" name="total_room_ward" step="0.01" readonly>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-procedures"></i> ICU Charges</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="icu_cost">ICU Cost (per day)</label>
                    <input type="number" id="icu_cost" name="icu_cost" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="icu_days">Number of Days in ICU</label>
                    <input type="number" id="icu_days" name="icu_days" min="0" placeholder="0">
                </div>
            </div>
            
            <div class="form-group">
                <label for="total_icu">Total ICU Charges</label>
                <input type="number" id="total_icu" name="total_icu" step="0.01" readonly>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-md"></i> Professional Fees</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="surgeon_fee">Surgeon Fee</label>
                    <input type="number" id="surgeon_fee" name="surgeon_fee" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="anesthesiologist_fee">Anesthesiologist Fee</label>
                    <input type="number" id="anesthesiologist_fee" name="anesthesiologist_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="consultation_fee">Consultation Fee</label>
                    <input type="number" id="consultation_fee" name="consultation_fee" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="specialist_fee">Specialist Fee</label>
                    <input type="number" id="specialist_fee" name="specialist_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-procedures"></i> Theatre & Procedure Fees</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="theatre_fee">Operating Theatre Fee</label>
                    <input type="number" id="theatre_fee" name="theatre_fee" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="procedure_fee">Procedure Fee</label>
                    <input type="number" id="procedure_fee" name="procedure_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="equipment_fee">Equipment Usage Fee</label>
                    <input type="number" id="equipment_fee" name="equipment_fee" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="recovery_room_fee">Recovery Room Fee</label>
                    <input type="number" id="recovery_room_fee" name="recovery_room_fee" step="0.01" placeholder="0.00">
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-plus"></i> Other Expenses</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="pharmacy_charges">Pharmacy Charges</label>
                    <input type="number" id="pharmacy_charges" name="pharmacy_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="lab_charges">Laboratory Charges</label>
                    <input type="number" id="lab_charges" name="lab_charges" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="radiology_charges">Radiology Charges</label>
                    <input type="number" id="radiology_charges" name="radiology_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="ambulance_charges">Ambulance Charges</label>
                    <input type="number" id="ambulance_charges" name="ambulance_charges" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="food_charges">Food & Nutrition Charges</label>
                    <input type="number" id="food_charges" name="food_charges" step="0.01" placeholder="0.00">
                </div>
                
                <div class="form-group">
                    <label for="miscellaneous_charges">Miscellaneous Charges</label>
                    <input type="number" id="miscellaneous_charges" name="miscellaneous_charges" step="0.01" placeholder="0.00">
                </div>
            </div>
            
            <div class="form-group">
                <label for="other_expenses_description">Description of Other Expenses</label>
                <textarea id="other_expenses_description" name="other_expenses_description" placeholder="Describe any additional charges..."></textarea>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-calculator"></i> Fee Summary</h3>
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
                    <label for="total_amount">Total Amount</label>
                    <input type="number" id="total_amount" name="total_amount" step="0.01" readonly style="font-weight: bold; font-size: 1.2em;">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="discount">Discount (%)</label>
                    <input type="number" id="discount" name="discount" step="0.01" min="0" max="100" placeholder="0">
                </div>
                
                <div class="form-group">
                    <label for="final_amount">Final Amount After Discount</label>
                    <input type="number" id="final_amount" name="final_amount" step="0.01" readonly style="font-weight: bold; font-size: 1.2em; color: #27ae60;">
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-user-friends"></i> Patient Care Contact</h3>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="pat_care_name">Patient Care Contact Name *</label>
                    <input type="text" id="pat_care_name" name="pat_care_name" required>
                </div>
                
                <div class="form-group">
                    <label for="pat_care_email">Patient Care Email</label>
                    <input type="email" id="pat_care_email" name="pat_care_email" placeholder="patient.care@email.com">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label for="billing_notes">Billing Notes</label>
            <textarea id="billing_notes" name="billing_notes" placeholder="Any special billing notes or instructions..."></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Send Fee Information
            </button>
            <button type="button" class="btn btn-secondary" onclick="calculateTotal()">
                <i class="fas fa-calculator"></i> Recalculate Total
            </button>
            <button type="button" class="btn btn-secondary" onclick="printFeeSheet()">
                <i class="fas fa-print"></i> Print Fee Sheet
            </button>
            <a href="admin_dashboard.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>
        </div>
    </form>
</div>

<script>
// Auto-calculate totals when values change
document.addEventListener('DOMContentLoaded', function() {
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        input.addEventListener('input', calculateTotal);
    });
    
    calculateTotal(); // Initial calculation
});

function calculateTotal() {
    // Room & Ward calculations
    const roomCharges = parseFloat(document.getElementById('room_charges').value) || 0;
    const roomDays = parseFloat(document.getElementById('room_days').value) || 0;
    const wardCharges = parseFloat(document.getElementById('ward_charges').value) || 0;
    const wardDays = parseFloat(document.getElementById('ward_days').value) || 0;
    const totalRoomWard = (roomCharges * roomDays) + (wardCharges * wardDays);
    document.getElementById('total_room_ward').value = totalRoomWard.toFixed(2);
    
    // ICU calculations
    const icuCost = parseFloat(document.getElementById('icu_cost').value) || 0;
    const icuDays = parseFloat(document.getElementById('icu_days').value) || 0;
    const totalIcu = icuCost * icuDays;
    document.getElementById('total_icu').value = totalIcu.toFixed(2);
    
    // Professional fees
    const surgeonFee = parseFloat(document.getElementById('surgeon_fee').value) || 0;
    const anesthesiologistFee = parseFloat(document.getElementById('anesthesiologist_fee').value) || 0;
    const consultationFee = parseFloat(document.getElementById('consultation_fee').value) || 0;
    const specialistFee = parseFloat(document.getElementById('specialist_fee').value) || 0;
    
    // Theatre & procedure fees
    const theatreFee = parseFloat(document.getElementById('theatre_fee').value) || 0;
    const procedureFee = parseFloat(document.getElementById('procedure_fee').value) || 0;
    const equipmentFee = parseFloat(document.getElementById('equipment_fee').value) || 0;
    const recoveryRoomFee = parseFloat(document.getElementById('recovery_room_fee').value) || 0;
    
    // Other expenses
    const pharmacyCharges = parseFloat(document.getElementById('pharmacy_charges').value) || 0;
    const labCharges = parseFloat(document.getElementById('lab_charges').value) || 0;
    const radiologyCharges = parseFloat(document.getElementById('radiology_charges').value) || 0;
    const ambulanceCharges = parseFloat(document.getElementById('ambulance_charges').value) || 0;
    const foodCharges = parseFloat(document.getElementById('food_charges').value) || 0;
    const miscellaneousCharges = parseFloat(document.getElementById('miscellaneous_charges').value) || 0;
    
    // Calculate subtotal
    const subtotal = totalRoomWard + totalIcu + surgeonFee + anesthesiologistFee + 
                    consultationFee + specialistFee + theatreFee + procedureFee + 
                    equipmentFee + recoveryRoomFee + pharmacyCharges + labCharges + 
                    radiologyCharges + ambulanceCharges + foodCharges + miscellaneousCharges;
    
    document.getElementById('subtotal').value = subtotal.toFixed(2);
    
    // Calculate tax
    const taxRate = parseFloat(document.getElementById('tax_rate').value) || 0;
    const taxAmount = (subtotal * taxRate) / 100;
    document.getElementById('tax_amount').value = taxAmount.toFixed(2);
    
    // Calculate total
    const totalAmount = subtotal + taxAmount;
    document.getElementById('total_amount').value = totalAmount.toFixed(2);
    
    // Calculate final amount with discount
    const discount = parseFloat(document.getElementById('discount').value) || 0;
    const discountAmount = (totalAmount * discount) / 100;
    const finalAmount = totalAmount - discountAmount;
    document.getElementById('final_amount').value = finalAmount.toFixed(2);
}

function printFeeSheet() {
    window.print();
}
</script>

<?php include '../includes/footer.php'; ?>

