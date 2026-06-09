<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Login | Creative Startup NZ</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --void: #f4f6f8; --surface: #ffffff; --structure: #e2e8f0; --border-std: 1px solid var(--structure);
      --signal-high: #0f172a; --signal-med: #475569; --signal-low: #64748b; 
      --phoenix: #FF6A00; --terminal: #059669; --warning: #dc2626; 
      --font-brief: 'Inter', sans-serif; --font-cmd: 'Montserrat', sans-serif; --font-data: 'Courier New', monospace;
      --radius-hard: 4px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; border-radius: var(--radius-hard) !important; }
    body { background-color: var(--void); color: var(--signal-med); font-family: var(--font-brief); line-height: 1.6; height: 100vh; display: flex; overflow: hidden; }

    /* UI Basics */
    #login-view { display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 100vh; background-color: var(--void); position: absolute; top: 0; left: 0; z-index: 100; }
    .login-box { background: var(--surface); padding: 3rem; border: var(--border-std); width: 100%; max-width: 400px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
    .dashboard-title { font-family: var(--font-cmd); font-weight: 800; font-size: 1.5rem; color: var(--signal-high); text-transform: uppercase; margin-bottom: 2rem; text-align: center; border-bottom: 2px solid var(--phoenix); padding-bottom: 0.5rem; display: inline-block; width: 100%; }

    .form-group { margin-bottom: 1.5rem; }
    .form-label { display: block; font-family: var(--font-data); font-weight: 700; font-size: 0.85rem; color: var(--phoenix); margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 1px; }
    .form-input { width: 100%; padding: 0.8rem; background-color: var(--surface); border: var(--border-std); color: var(--signal-high); font-family: var(--font-brief); font-size: 0.95rem; }
    .form-input:focus { outline: none; border-color: var(--phoenix); box-shadow: 0 0 0 2px rgba(255, 106, 0, 0.2); }
    select.form-input { appearance: none; cursor: pointer; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    .btn-primary { background-color: var(--phoenix); color: #ffffff; font-family: var(--font-cmd); font-weight: 700; padding: 1rem 2rem; border: none; cursor: pointer; width: 100%; text-transform: uppercase; font-size: 1rem; margin-top: 1rem; transition: filter 0.2s; }
    .btn-primary:hover { filter: brightness(110%); }
    .btn-secondary { background-color: var(--structure); color: var(--signal-high); font-family: var(--font-cmd); font-weight: 700; padding: 1rem 2rem; border: none; cursor: pointer; width: 100%; text-transform: uppercase; font-size: 1rem; margin-top: 0.5rem; transition: filter 0.2s; }
    .btn-secondary:hover { filter: brightness(95%); }

    /* Admin Dashboard Layout */
    #dashboard-view { display: none; width: 100%; height: 100vh; }
    .sidebar { width: 250px; background-color: var(--surface); border-right: var(--border-std); padding: 2rem; display: flex; flex-direction: column; }
    .nav-item { color: var(--signal-med); text-decoration: none; font-family: var(--font-data); font-size: 0.9rem; padding: 1rem; margin-bottom: 0.5rem; border: 1px solid transparent; transition: all 0.2s; cursor: pointer; }
    .nav-item:hover, .nav-item.active { color: var(--phoenix); border: var(--border-std); background-color: var(--void); }
    .main-content { flex: 1; padding: 3rem; overflow-y: auto; position: relative; }
    .view-section { display: none; } .view-section.active-view { display: block; }
    .content-header { font-family: var(--font-cmd); font-size: 2rem; color: var(--signal-high); margin-bottom: 2rem; text-transform: uppercase; display: flex; justify-content: space-between; align-items: center; }

    /* Partner Portal Layout */
    #partner-view { display: none; width: 100%; height: 100vh; flex-direction: column; background: var(--void); overflow-y: auto; }
    .partner-header { background: var(--surface); border-bottom: var(--border-std); padding: 1.5rem 3rem; display: flex; justify-content: space-between; align-items: center; }

    /* Tables */
    .data-table { width: 100%; border-collapse: collapse; background-color: var(--surface); border: var(--border-std); box-shadow: 0 5px 15px rgba(0,0,0,0.02); }
    .data-table th, .data-table td { padding: 1rem; text-align: left; border-bottom: var(--border-std); vertical-align: middle; }
    .data-table th { font-family: var(--font-data); font-size: 0.8rem; color: var(--phoenix); text-transform: uppercase; background-color: var(--void); }
    .data-table td { font-size: 0.95rem; }
    .status-badge { padding: 0.35rem 0.6rem; background-color: var(--void); font-family: var(--font-data); font-size: 0.75rem; color: var(--signal-high); border: var(--border-std); font-weight: bold; }
    .status-commission { background-color: #dcfce7; color: var(--terminal); border-color: #a7f3d0; padding: 0.35rem 0.6rem; font-family: var(--font-data); font-size: 0.75rem; font-weight: bold;}
    .edit-btn { background-color: var(--void); border: var(--border-std); color: var(--phoenix); padding: 0.4rem 0.8rem; cursor: pointer; font-family: var(--font-data); font-weight: 700; font-size: 0.8rem; transition: 0.2s; margin-right: 0.5rem;}
    .edit-btn:hover { background-color: var(--phoenix); color: #fff; }

    /* Modals & Pipeline */
    .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); backdrop-filter: blur(4px); z-index: 200; justify-content: center; align-items: flex-start; overflow-y: auto; padding: 2rem 0; }
    .modal-box { background: var(--surface); padding: 2.5rem; border: var(--border-std); width: 100%; max-width: 800px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); margin: auto; }
    .modal-title { font-family: var(--font-cmd); font-weight: 700; font-size: 1.2rem; color: var(--signal-high); margin-bottom: 1.5rem; text-transform: uppercase; border-bottom: 1px solid var(--structure); padding-bottom: 0.5rem; }
    
    .financial-card { background: var(--void); padding: 1.5rem; border: var(--border-std); margin-top: 1rem; }
    .vendor-row { display: grid; grid-template-columns: 2fr 1fr auto; gap: 0.5rem; margin-bottom: 0.5rem; align-items: center; }
    .add-vendor-btn { background: transparent; border: 1px dashed var(--phoenix); color: var(--phoenix); padding: 0.5rem; cursor: pointer; font-size: 0.8rem; font-family: var(--font-data); width: 100%; text-align: center; margin-top: 0.5rem; }
    .finance-summary { display: flex; justify-content: space-between; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--structure); font-family: var(--font-cmd); font-weight: 800; font-size: 1.1rem; }

    .pipeline-wrapper { max-height: 400px; overflow-y: auto; border: var(--border-std); background: var(--void); padding: 1rem; margin-bottom: 1.5rem; }
    .pipeline-stage-block { margin-bottom: 1rem; background: var(--surface); border: var(--border-std); padding: 1rem; }
    .pipeline-stage-title { font-family: var(--font-cmd); font-weight: 700; color: var(--signal-high); font-size: 0.95rem; margin-bottom: 0.5rem; text-transform: uppercase; border-bottom: 2px solid var(--structure); padding-bottom: 0.3rem;}
    .pipeline-task { display: flex; align-items: center; margin-bottom: 0.4rem; font-size: 0.9rem; }
    .pipeline-task input { margin-right: 10px; width: 16px; height: 16px; accent-color: var(--phoenix); cursor: pointer; }
  </style>
</head>
<body>

  <div id="login-view">
    <div class="login-box">
      <div class="dashboard-title">System Portal</div>
      <form id="loginForm">
        <div class="form-group"><label class="form-label">Username</label><input type="text" id="username" class="form-input" required></div>
        <div class="form-group"><label class="form-label">Passcode</label><input type="password" id="password" class="form-input" required></div>
        <button type="submit" class="btn-primary" id="loginBtn">Authenticate</button>
        <div id="login-error" style="color:red; text-align:center; display:none; margin-top: 1rem; font-family: var(--font-data); font-size: 0.85rem;">Access denied. Check credentials.</div>
      </form>
    </div>
  </div>

  <div id="partner-view">
    <div class="partner-header">
      <div class="dashboard-title" style="margin: 0; border: none; padding: 0;">Partner Portal: <span id="partnerNameDisplay" style="color: var(--phoenix);"></span></div>
      <button class="btn-secondary" style="width: auto; margin: 0; padding: 0.6rem 1.5rem;" onclick="location.reload()">Secure Logout</button>
    </div>
    
    <div style="max-width: 1100px; margin: 3rem auto; width: 100%; padding: 0 2rem;">
      <p style="margin-bottom: 2rem; color: var(--signal-med);">Welcome back. Here is the live status of the clients you have referred to Creative Startup NZ.</p>
      
      <div class="content-header" style="font-size: 1.5rem; margin-bottom:1rem;">Referred Leads (Pre-Sale)</div>
      <table class="data-table" style="margin-bottom: 3rem;">
        <thead><tr><th>Date Referred</th><th>Client Name</th><th>Service Interest</th><th>Pipeline Stage</th></tr></thead>
        <tbody id="partnerLeadsBody"></tbody>
      </table>

      <div class="content-header" style="font-size: 1.5rem; margin-bottom:1rem;">Active Projects & Commissions</div>
      <table class="data-table">
        <thead><tr><th>Client Name</th><th>Service</th><th>Project Phase</th><th>Commission Status</th></tr></thead>
        <tbody id="partnerProjectsBody"></tbody>
      </table>
    </div>
  </div>

  <div id="dashboard-view">
    <div class="sidebar">
      <div class="dashboard-title" style="font-size: 1.2rem; border-color: var(--structure);">Admin Ops</div>
      <div class="nav-item active" onclick="switchView('pipeline', this)">Sales Pipeline</div>
      <div class="nav-item" onclick="switchView('projects', this)">Client Projects</div>
      <div class="nav-item" onclick="switchView('vendors', this)">Vendor Network</div>
      <div class="nav-item" onclick="switchView('support', this)">Support Log</div>
      <div class="nav-item" style="margin-top: auto; color: var(--warning);" onclick="location.reload()">Secure Logout</div>
    </div>
    
    <div class="main-content">
      <div id="view-pipeline" class="view-section active-view">
        <div class="content-header"><span>Sales Pipeline</span><button class="edit-btn" onclick="loadPipelineData()">Refresh Data ⟳</button></div>
        <table class="data-table">
          <thead><tr><th>Date</th><th>Client Name</th><th>Service / Source</th><th>Stage</th><th>Invoice Ref</th><th>Action</th></tr></thead>
          <tbody id="leadsTableBody"></tbody>
        </table>
      </div>

      <div id="view-projects" class="view-section">
        <div class="content-header"><span>Client Projects</span><button class="edit-btn" onclick="loadProjectsData()">Refresh Data ⟳</button></div>
        <table class="data-table">
          <thead><tr><th>Client / Invoice</th><th>Services</th><th>Status</th><th>Referral Partner</th><th>Profit</th><th>Action</th></tr></thead>
          <tbody id="projectsTableBody"></tbody>
        </table>
      </div>

      <div id="view-vendors" class="view-section">
        <div class="content-header"><span>Vendor Network</span><div><button class="edit-btn" onclick="openVendorModal('', '', '', '', '', '')">+ Add Vendor</button><button class="edit-btn" onclick="loadVendorsData()">Refresh ⟳</button></div></div>
        <table class="data-table">
          <thead><tr><th>Vendor Name</th><th>Specialty</th><th>Contact Info</th><th>Active Jobs</th><th>Action</th></tr></thead>
          <tbody id="vendorsTableBody"></tbody>
        </table>
      </div>

      <div id="view-support" class="view-section">
        <div class="content-header"><span>Support Log</span><div><button class="edit-btn" onclick="openSupportModal('', '', '', '', '', '', '')">+ Add Ticket</button><button class="edit-btn" onclick="loadSupportData()">Refresh ⟳</button></div></div>
        <table class="data-table">
          <thead><tr><th>Date / ID</th><th>Client Name</th><th>Enquiry Summary</th><th>Status</th><th>Action</th></tr></thead>
          <tbody id="supportTableBody"></tbody>
        </table>
      </div>
    </div>
  </div>

  <div id="editLeadModal" class="modal-overlay">
    <div class="modal-box">
      <div class="modal-title">Lead Manager: <span id="editLeadName" style="color: var(--phoenix);"></span></div>
      <form id="editLeadForm">
        <input type="hidden" id="editRowIndex">
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Pipeline Stage</label>
            <select id="editStage" class="form-input" required>
              <option value="Lead">Lead</option>
              <option value="Contacted">Contacted</option>
              <option value="Proposal Sent">Proposal Sent</option>
              <option value="Paid">Paid (Moves to Projects)</option>
            </select>
          </div>
          <div class="form-group"><label class="form-label">Lead Source</label><input type="text" id="editLeadSource" class="form-input" placeholder="e.g. Organic, Referral"></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Referral Partner Name</label><input type="text" id="editRefPartner" class="form-input" placeholder="Must match Partner Username"></div>
          <div class="form-group"><label class="form-label">Invoice Number</label><input type="text" id="editInvNumber" class="form-input" placeholder="INV-1001"></div>
        </div>
        <div class="form-group"><label class="form-label">Quoted Invoice Amount ($)</label><input type="number" id="editInvAmount" class="form-input" placeholder="0.00" step="0.01"></div>
        <div class="form-group"><label class="form-label">Project Notes / Brief</label><textarea id="editNotes" class="form-input" rows="6"></textarea></div>
        <button type="submit" class="btn-primary" id="saveLeadBtn">Save Changes</button>
        <button type="button" class="btn-secondary" onclick="closeModal('editLeadModal', 'editLeadForm')">Cancel</button>
      </form>
    </div>
  </div>

  <div id="editProjectModal" class="modal-overlay">
    <div class="modal-box">
      <div class="modal-title">Project: <span id="projClientDisplay" style="color: var(--phoenix);"></span></div>
      <form id="editProjectForm">
        <input type="hidden" id="projRowIndex">
        <input type="hidden" id="projName">
        
        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Macro Status</label>
            <select id="projStatus" class="form-input" required>
              <option value="Onboarding">Onboarding</option>
              <option value="In Design">In Design</option>
              <option value="In Development">In Development</option>
              <option value="Waiting on Client">Waiting on Client</option>
              <option value="Final Review">Final Review</option>
              <option value="Completed">Completed</option>
            </select>
          </div>
          <div class="form-group"><label class="form-label">Deadlines</label><input type="text" id="projDeadlines" class="form-input"></div>
        </div>
        
        <div class="form-row">
          <div class="form-group"><label class="form-label">Services Included</label><input type="text" id="projServices" class="form-input"></div>
          <div class="form-group"><label class="form-label">Deliverables Link</label><input type="text" id="projLink" class="form-input"></div>
        </div>

        <div class="financial-card" style="border-left: 3px solid var(--terminal); margin-bottom: 1.5rem;">
          <div style="font-family: var(--font-data); font-weight:700; color:var(--terminal); margin-bottom: 1rem;">REFERRAL & COMMISSION TRACKING</div>
          <div class="form-row">
            <div class="form-group"><label class="form-label">Referral Partner</label><input type="text" id="projRefPartner" class="form-input" placeholder="No Partner"></div>
            <div class="form-group">
              <label class="form-label">Commission Status</label>
              <select id="projCommissionStatus" class="form-input">
                <option value="N/A">N/A</option>
                <option value="Pending Processing">Pending Processing</option>
                <option value="Paid to Partner">Paid to Partner</option>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Master Onboarding Pipeline (Web Design)</label>
          <div class="pipeline-wrapper" id="pipelineChecklistContainer"></div>
        </div>

        <div class="financial-card">
          <div style="font-family: var(--font-data); font-weight:700; color:var(--phoenix); margin-bottom: 1rem;">FINANCIAL TRACKING</div>
          <div class="form-row" style="margin-bottom: 1rem;">
            <div><label class="form-label">Invoice Number</label><input type="text" id="projInvNum" class="form-input" readonly style="background:var(--structure);"></div>
            <div><label class="form-label">Invoice Amount ($)</label><input type="number" id="projInvAmt" class="form-input" readonly style="background:var(--structure);"></div>
          </div>
          <label class="form-label" style="border-bottom: 1px solid var(--structure); padding-bottom: 0.5rem;">Assigned Vendors & Costs</label>
          <div id="vendorRowsContainer"></div>
          <button type="button" class="add-vendor-btn" onclick="addVendorRow()">+ Add Vendor to Project</button>
          <div class="finance-summary">
            <span>NET PROFIT:</span><span id="projNetProfit" style="color: var(--terminal);">$0.00</span>
          </div>
        </div>

        <button type="submit" class="btn-primary" id="saveProjectBtn">Save Project & Pipeline</button>
        <button type="button" class="btn-secondary" onclick="closeModal('editProjectModal', 'editProjectForm')">Cancel</button>
      </form>
    </div>
  </div>

  <div id="editVendorModal" class="modal-overlay">
    <div class="modal-box"><div class="modal-title">Vendor Manager: <span id="vendorModalTitle" style="color: var(--phoenix);"></span></div>
      <form id="editVendorForm">
        <input type="hidden" id="vendorRowIndex">
        <div class="form-group"><label class="form-label">Name / Agency</label><input type="text" id="vendorName" class="form-input" required></div>
        <div class="form-group"><label class="form-label">Specialty</label><input type="text" id="vendorSpecialty" class="form-input"></div>
        <div class="form-group"><label class="form-label">Email</label><input type="email" id="vendorEmail" class="form-input"></div>
        <div class="form-group"><label class="form-label">Phone / Link</label><input type="text" id="vendorPhone" class="form-input"></div>
        <div class="form-group"><label class="form-label">Active Jobs</label><input type="text" id="vendorActiveJobs" class="form-input"></div>
        <button type="submit" class="btn-primary" id="saveVendorBtn">Save Vendor</button>
        <button type="button" class="btn-secondary" onclick="closeModal('editVendorModal', 'editVendorForm')">Cancel</button>
      </form>
    </div>
  </div>

  <div id="editSupportModal" class="modal-overlay">
    <div class="modal-box"><div class="modal-title">Support Ticket <span id="supportModalTitle" style="color: var(--phoenix);"></span></div>
      <form id="editSupportForm">
        <input type="hidden" id="supportRowIndex">
        <div class="form-row">
            <div class="form-group"><label class="form-label">Client Name</label><input type="text" id="supportClientName" class="form-input" required></div>
            <div class="form-group"><label class="form-label">Client Email</label><input type="email" id="supportClientEmail" class="form-input" required></div>
        </div>
        <div class="form-group"><label class="form-label">Enquiry / Issue</label><textarea id="supportEnquiry" class="form-input" rows="3" required></textarea></div>
        <div class="form-group"><label class="form-label">Resolution / Action Taken</label><textarea id="supportResolution" class="form-input" rows="3"></textarea></div>
        <div class="form-group"><label class="form-label">Status</label><select id="supportStatus" class="form-input" required><option value="Open">Open</option><option value="Pending">Pending</option><option value="Resolved">Resolved</option></select></div>
        <button type="submit" class="btn-primary" id="saveSupportBtn">Save Ticket</button>
        <button type="button" class="btn-secondary" onclick="closeModal('editSupportModal', 'editSupportForm')">Cancel</button>
      </form>
    </div>
  </div>

  <script>
    const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbwUMI-fBoFdCfuu39Q_20MbX0e6m4oOmccTQyu_Tj60B9qagxNVpIdRhYth35_RgBZ0Ew/exec';
    let availableVendors = [];

    // --- 18 STAGE PIPELINE DEFINITION ---
    const masterPipeline = [
      { stage: "1. Lead Gen & Enquiry", tasks: ["Lead Source Logged", "Marketing Channel Identified", "Referral Info Logged", "Group Origin Tracked", "Website Form Received", "Initial Client Msg Checked", "Priority Rating Set", "Ideal Match Assessed"] },
      { stage: "2. Lead Qualification", tasks: ["Business Type Defined", "Client Goals Set", "Budget Expected", "Timeline Set", "Existing Website Reviewed", "Competitor Analysis", "Scope Suitability Checked", "Decision-Maker ID'd", "Discovery Call Booked"] },
      { stage: "3. Discovery & Consultation", tasks: ["Discovery Notes Logged", "Target Audience Analysed", "Branding Discussed", "Website Purpose Defined", "Required Pages Listed", "SEO Needs Checked", "Functionality Defined", "Content/Media Audit Done", "Pain Points Identified", "Domain/Hosting Reviewed"] },
      { stage: "4. Proposal & Quote", tasks: ["Package Selected", "Scope of Work Written", "Deliverables Confirmed", "Optional Add-Ons Listed", "Timeline Estimated", "Pricing Structure Built", "Payment Terms Set", "Proposal Sent", "Quote Accepted"] },
      { stage: "5. Contract & Payment", tasks: ["Service Agreement Sent", "Terms Accepted", "Deposit Invoice Issued", "Deposit Received", "Tax/Billing Info Saved", "Project Start Confirmed", "Client Portal Setup"] },
      { stage: "6. Client Onboarding", tasks: ["Welcome Email Sent", "Onboarding Q's Sent", "Logo Collected", "Colours/Fonts Collected", "Social Links Collected", "Business Info Collected", "Content Submitted", "Images Submitted", "Hosting/Domain Access Rcvd", "GBP Access", "Keywords Collected"] },
      { stage: "7. Project Planning", tasks: ["Milestones Scheduled", "Structure Planned", "Sitemap Created", "Wireframe Planned", "UX Planned", "Content Strategy Set", "SEO Structure Set", "Technical Req's Set", "Internal Team Assigned"] },
      { stage: "8. Design Phase", tasks: ["Moodboard Created", "Low-Fi Wireframes Done", "Design Mockups Done", "Homepage Designed", "Internal Pages Designed", "Mobile Response Planned", "Client Review Meeting", "Revisions Completed", "Design Officially Approved"] },
      { stage: "9. Development Phase", tasks: ["Hosting Env Setup", "HTML/CSS Dev Complete", "Responsive Dev Done", "Mobile Optimisation Done", "Navigation Setup", "Contact Form Integrated", "SEO Foundations Built", "Speed Optimisation Done", "Security Setup", "Browser Testing Done"] },
      { stage: "10. Content Integration", tasks: ["Copywriting Integrated", "SEO Metadata Added", "Image Optimisation Done", "Internal Linking Complete", "CTAs Placed", "Social Media Linked", "Google Maps Integrated", "Final Content Review"] },
      { stage: "11. Client Review", tasks: ["Staging Link Sent", "Feedback Collected", "Revision Round 1 Done", "Revision Round 2 Done", "Final Revision Approval", "Client Sign-Off Secured"] },
      { stage: "12. Pre-Launch Checks", tasks: ["Final Mobile Test", "Cross-Browser Test", "SEO Checklist Cleared", "Speed Test Cleared", "Forms Tested", "Broken Links Checked", "Backup Created", "Security Verified", "Analytics Installed", "GSC Installed"] },
      { stage: "13. Website Launch", tasks: ["DNS Configured", "Website Migrated", "Go-Live Checklist Done", "Live Testing Done", "Indexing Requested", "Launch Confirmed", "Client Notified"] },
      { stage: "14. Handover & Training", tasks: ["Training Session Held", "CMS Instructions Given", "Maintenance Recommended", "Logins Handed Over", "Backup Procedures Shared", "SEO Guidance Given", "Support Info Shared"] },
      { stage: "15. Post-Launch Support", tasks: ["Bug Fix Period Active", "Support Requests Handled", "Website Monitored", "Performance Checked", "Security Monitored", "Analytics Reviewed", "SEO Performance Checked"] },
      { stage: "16. Project Completion", tasks: ["Final Invoice Issued", "Final Payment Received", "Completion Confirmed", "Project Archived", "Internal Review Done", "Lessons Learned Logged"] },
      { stage: "17. Testimonials & Referrals", tasks: ["Testimonial Requested", "Google Review Req Sent", "FB Review Req Sent", "Case Study Approved", "Referral Program Introduced", "Upsell Opportunities Pitched", "Maintenance Pitch Sent"] },
      { stage: "18. Long-Term Retention", tasks: ["Maintenance Plan Active", "SEO Retainer Active", "Social Media Active", "Email Marketing Opportunities", "Quarterly Check-In Done", "Annual Audit Scheduled"] }
    ];

    function safeEncode(str) {
        // Encodes the string and manually escapes single & double quotes so they don't break the HTML onclick attributes
        return encodeURIComponent(str || '').replace(/'/g, "%27").replace(/"/g, "%22");
    }

    function renderPipelineChecklist(savedJsonData) {
      const container = document.getElementById('pipelineChecklistContainer');
      container.innerHTML = '';
      let savedData = {};
      try { savedData = JSON.parse(savedJsonData) || {}; } catch (e) {}

      masterPipeline.forEach((phase, index) => {
        let block = document.createElement('div');
        block.className = 'pipeline-stage-block';
        block.innerHTML = `<div class="pipeline-stage-title">${phase.stage}</div>`;
        phase.tasks.forEach((task, tIndex) => {
          let taskId = `task_${index}_${tIndex}`;
          let isChecked = savedData[taskId] ? 'checked' : '';
          block.innerHTML += `<label class="pipeline-task"><input type="checkbox" class="pipeline-cb" data-taskid="${taskId}" ${isChecked}>${task}</label>`;
        });
        container.appendChild(block);
      });
    }

    function getPipelineJson() {
      let data = {};
      document.querySelectorAll('.pipeline-cb').forEach(cb => { data[cb.getAttribute('data-taskid')] = cb.checked; });
      return JSON.stringify(data);
    }
    // ----------------------------------------

    // LOGIN & ROLE ROUTING
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('loginBtn').textContent = 'Verifying...';
      document.getElementById('login-error').style.display = 'none';
      
      fetch(SCRIPT_URL, { method: 'POST', headers: { 'Content-Type': 'application/x-www-form-urlencoded' }, body: new URLSearchParams({ action: 'login', username: document.getElementById('username').value, password: document.getElementById('password').value }) })
      .then(r => r.json()).then(data => {
        if (data.result === 'success') {
          document.getElementById('login-view').style.display = 'none';
          
          if (data.role === 'Admin') {
            document.getElementById('dashboard-view').style.display = 'flex';
            fetchVendorsList(); loadPipelineData();
          } else if (data.role === 'Partner' || data.role === 'Contractor') {
            document.getElementById('partner-view').style.display = 'flex';
            document.getElementById('partnerNameDisplay').textContent = data.username;
            loadPartnerPortalData(data.username);
          } else {
            document.getElementById('login-error').textContent = 'Role unassigned. Contact Admin.';
            document.getElementById('login-error').style.display = 'block';
            document.getElementById('login-view').style.display = 'flex';
          }
        } else { 
            document.getElementById('login-error').style.display = 'block'; 
            document.getElementById('loginBtn').textContent = 'Authenticate';
        }
      });
    });

    function switchView(viewName, element) {
      document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active')); element.classList.add('active');
      document.querySelectorAll('.view-section').forEach(el => el.classList.remove('active-view')); document.getElementById('view-' + viewName).classList.add('active-view');
      if (viewName === 'pipeline') loadPipelineData();
      if (viewName === 'projects') loadProjectsData();
      if (viewName === 'vendors') loadVendorsData();
      if (viewName === 'support') loadSupportData();
    }

    // --- PARTNER PORTAL DATA FETCH ---
    function loadPartnerPortalData(partnerName) {
      document.getElementById('partnerLeadsBody').innerHTML = '<tr><td colspan="4" style="text-align:center;">Loading referrals...</td></tr>';
      document.getElementById('partnerProjectsBody').innerHTML = '<tr><td colspan="4" style="text-align:center;">Loading projects...</td></tr>';
      
      fetch(SCRIPT_URL + `?action=getPartnerData&partnerName=${encodeURIComponent(partnerName)}`)
      .then(r => r.json()).then(data => {
        const lBody = document.getElementById('partnerLeadsBody');
        const pBody = document.getElementById('partnerProjectsBody');
        lBody.innerHTML = ''; pBody.innerHTML = '';

        if(data.leads && data.leads.length > 0) {
          data.leads.reverse().forEach(lead => {
            lBody.innerHTML += `<tr>
              <td>${new Date(lead.date).toLocaleDateString('en-NZ')}</td>
              <td style="font-weight:600; color:var(--signal-high);">${lead.client}</td>
              <td>${lead.service}</td>
              <td><span class="status-badge">${lead.stage}</span></td>
            </tr>`;
          });
        } else { lBody.innerHTML = '<tr><td colspan="4" style="text-align:center;">No pending referrals found.</td></tr>'; }

        if(data.projects && data.projects.length > 0) {
          data.projects.reverse().forEach(proj => {
            let commClass = (proj.commission === 'Paid to Partner') ? 'status-commission' : 'status-badge';
            pBody.innerHTML += `<tr>
              <td style="font-weight:600; color:var(--signal-high);">${proj.client}</td>
              <td>${proj.service}</td>
              <td><span class="status-badge">${proj.status}</span></td>
              <td><span class="${commClass}">${proj.commission}</span></td>
            </tr>`;
          });
        } else { pBody.innerHTML = '<tr><td colspan="4" style="text-align:center;">No active projects found.</td></tr>'; }
      });
    }

    // --- ADMIN DATA FETCH ---
    function fetchVendorsList() { fetch(SCRIPT_URL + '?action=getVendors').then(r => r.json()).then(data => { availableVendors = data.data ? data.data.map(v => v.vendorName).filter(n => n) : []; }); }

    function loadPipelineData() {
      const tbody = document.getElementById('leadsTableBody'); tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Fetching data...</td></tr>';
      fetch(SCRIPT_URL + '?action=getLeads').then(r => r.json()).then(data => {
        tbody.innerHTML = '';
        if(data.data && data.data.length > 0) {
          data.data.reverse().forEach(lead => {
            let invRef = lead.invNumber ? lead.invNumber : 'N/A';
            let sourceDisplay = lead.leadSource || 'Organic';
            if (lead.refPartner) sourceDisplay += ` <br><span style="color:var(--terminal);">Ref: ${lead.refPartner}</span>`;
            
            // Safely encode to prevent apostrophes from breaking the HTML onclick attribute
            let encName = safeEncode(lead.name);
            let encStage = safeEncode(lead.stage || 'Lead');
            let encNotes = safeEncode(lead.notes);
            let encAmt = safeEncode(lead.invAmount);
            let encNum = safeEncode(lead.invNumber);
            let encSource = safeEncode(lead.leadSource);
            let encPartner = safeEncode(lead.refPartner);

            tbody.innerHTML += `<tr>
              <td>${new Date(lead.date).toLocaleDateString('en-NZ')}</td>
              <td style="font-weight:600; color:var(--signal-high);">${lead.name}</td>
              <td>${lead.service}<br><span style="font-size:0.75rem; color:var(--phoenix);">${sourceDisplay}</span></td>
              <td><span class="status-badge">${lead.stage}</span></td>
              <td><span style="font-family:var(--font-data); font-size:0.8rem;">${invRef}</span></td>
              <td><button class="edit-btn" onclick="openLeadModal('${lead.rowIndex}', '${encName}', '${encStage}', '${encNotes}', '${encAmt}', '${encNum}', '${encSource}', '${encPartner}')">Edit</button></td>
            </tr>`;
          });
        } else { tbody.innerHTML = '<tr><td colspan="6" style="text-align: center;">Pipeline is empty.</td></tr>'; }
      });
    }

    function loadProjectsData() {
      const tbody = document.getElementById('projectsTableBody'); tbody.innerHTML = '<tr><td colspan="6" style="text-align:center;">Fetching data...</td></tr>';
      fetch(SCRIPT_URL + '?action=getProjects').then(r => r.json()).then(data => {
        tbody.innerHTML = '';
        if(data.data && data.data.length > 0) {
          data.data.reverse().forEach(proj => {
            if(proj.clientName) {
                let rev = parseFloat(proj.invoiceAmount) || 0;
                let prof = parseFloat(proj.profit) || 0;
                let profColor = prof > 0 ? 'var(--terminal)' : (prof < 0 ? 'var(--warning)' : 'var(--signal-med)');
                let commClass = (proj.commissionStatus === 'Paid to Partner') ? 'status-commission' : 'status-badge';
                let partnerDisplay = proj.refPartner ? `${proj.refPartner} <br><span class="${commClass}" style="margin-top:0.3rem; display:inline-block;">${proj.commissionStatus}</span>` : 'N/A';

                let encName = safeEncode(proj.clientName);
                let encSvc = safeEncode(proj.services);
                let encStatus = safeEncode(proj.status);
                let encDeadlines = safeEncode(proj.deadlines);
                let encLink = safeEncode(proj.link);
                let encVenData = safeEncode(proj.vendorData || '[]');
                let encInvAmt = safeEncode(proj.invoiceAmount || 0);
                let encInvNum = safeEncode(proj.invoiceNumber);
                let encRef = safeEncode(proj.refPartner);
                let encComm = safeEncode(proj.commissionStatus);
                let encPipe = safeEncode(proj.pipelineData || '{}');

                tbody.innerHTML += `<tr>
                  <td style="font-weight:600; color:var(--signal-high);">${proj.clientName}<br><span style="font-size:0.8rem; font-family:var(--font-data); color:var(--signal-low);">${proj.invoiceNumber || 'No Inv'}</span></td>
                  <td>${proj.services}</td><td><span class="status-badge">${proj.status}</span></td>
                  <td>${partnerDisplay}</td>
                  <td style="font-family:var(--font-data); color:${profColor}; font-weight:bold;">$${prof.toFixed(2)}</td>
                  <td><button class="edit-btn" onclick="openProjectModal('${proj.rowIndex}', '${encName}', '${encSvc}', '${encStatus}', '${encDeadlines}', '${encLink}', '${encVenData}', '${encInvAmt}', '${encInvNum}', '${encRef}', '${encComm}', '${encPipe}')">Manage</button></td>
                </tr>`;
            }
          });
        } else { tbody.innerHTML = '<tr><td colspan="6" style="text-align: center;">No active projects.</td></tr>'; }
      });
    }

    function loadVendorsData() { 
      fetch(SCRIPT_URL + '?action=getVendors').then(r => r.json()).then(data => { 
        const tbody = document.getElementById('vendorsTableBody'); tbody.innerHTML=''; 
        if(data.data && data.data.length > 0) { 
          data.data.reverse().forEach(v => { 
            if(v.vendorName) { 
              let encName = safeEncode(v.vendorName);
              let encSpec = safeEncode(v.specialty);
              let encEmail = safeEncode(v.email);
              let encPhone = safeEncode(v.phone);
              let encJobs = safeEncode(v.activeJobs);
              tbody.innerHTML += `<tr><td>${v.vendorName}</td><td>${v.specialty}</td><td>${v.email}</td><td>${v.activeJobs}</td><td><button class="edit-btn" onclick="openVendorModal('${v.rowIndex}', '${encName}', '${encSpec}', '${encEmail}', '${encPhone}', '${encJobs}')">Edit</button></td></tr>`; 
            }
          }); 
        } else { tbody.innerHTML = '<tr><td colspan="5" style="text-align: center;">No vendors found.</td></tr>'; }
      }); 
    }

    function loadSupportData() { 
      fetch(SCRIPT_URL + '?action=getSupport').then(r => r.json()).then(data => { 
        const tbody = document.getElementById('supportTableBody'); tbody.innerHTML=''; 
        if(data.data && data.data.length > 0) { 
          data.data.reverse().forEach(t => { 
            if(t.ticketId) { 
              let encId = safeEncode(t.ticketId);
              let encName = safeEncode(t.clientName);
              let encEmail = safeEncode(t.clientEmail);
              let encEnq = safeEncode(t.enquiry);
              let encRes = safeEncode(t.resolution);
              let encStatus = safeEncode(t.status);
              tbody.innerHTML += `<tr><td>${t.ticketId}</td><td>${t.clientName}</td><td>${t.enquiry.substring(0,20)}...</td><td>${t.status}</td><td><button class="edit-btn" onclick="openSupportModal('${t.rowIndex}', '${encId}', '${encName}', '${encEmail}', '${encEnq}', '${encRes}', '${encStatus}')">Edit</button></td></tr>`; 
            }
          }); 
        } else { tbody.innerHTML = '<tr><td colspan="5" style="text-align: center;">No support tickets.</td></tr>'; }
      }); 
    }

    // ADMIN MODAL HANDLING
    function closeModal(modalId, formId) { document.getElementById(modalId).style.display = 'none'; document.getElementById(formId).reset(); }

    function openLeadModal(rowIndex, encName, encStage, encNotes, encAmt, encNum, encSource, encPartner) {
      document.getElementById('editRowIndex').value = rowIndex; 
      document.getElementById('editLeadName').textContent = decodeURIComponent(encName);
      document.getElementById('editStage').value = decodeURIComponent(encStage); 
      document.getElementById('editNotes').value = decodeURIComponent(encNotes);
      document.getElementById('editInvAmount').value = decodeURIComponent(encAmt); 
      document.getElementById('editInvNumber').value = decodeURIComponent(encNum);
      document.getElementById('editLeadSource').value = decodeURIComponent(encSource) || '';
      document.getElementById('editRefPartner').value = decodeURIComponent(encPartner) || '';
      document.getElementById('editLeadModal').style.display = 'flex';
    }

    function openProjectModal(rowIndex, encName, encSvc, encStatus, encDeadlines, encLink, encVenData, encInvAmt, encInvNum, encRef, encComm, encPipe) {
      document.getElementById('projRowIndex').value = rowIndex || ''; 
      let name = decodeURIComponent(encName); let invNum = decodeURIComponent(encInvNum);
      
      document.getElementById('projClientDisplay').textContent = name ? `${name} (${invNum || 'No Inv'})` : '(New)';
      document.getElementById('projName').value = name; 
      document.getElementById('projServices').value = decodeURIComponent(encSvc);
      document.getElementById('projStatus').value = decodeURIComponent(encStatus) || 'Onboarding'; 
      document.getElementById('projDeadlines').value = decodeURIComponent(encDeadlines); 
      document.getElementById('projLink').value = decodeURIComponent(encLink);
      document.getElementById('projInvAmt').value = decodeURIComponent(encInvAmt) || 0;
      document.getElementById('projInvNum').value = invNum;
      
      document.getElementById('projRefPartner').value = decodeURIComponent(encRef) || '';
      document.getElementById('projCommissionStatus').value = decodeURIComponent(encComm) || 'N/A';

      renderPipelineChecklist(decodeURIComponent(encPipe));

      const container = document.getElementById('vendorRowsContainer');
      container.innerHTML = '';
      let vData = []; try { vData = JSON.parse(decodeURIComponent(encVenData)); } catch(e) {}
      if(vData.length === 0) addVendorRow(); else { vData.forEach(v => addVendorRow(v.name, v.cost)); }
      calculateProfit(); document.getElementById('editProjectModal').style.display = 'flex';
    }

    function openVendorModal(r, n, s, e, p, j) { document.getElementById('vendorRowIndex').value = r||''; document.getElementById('vendorModalTitle').textContent = r?`- ${decodeURIComponent(n)}`:'(New)'; document.getElementById('vendorName').value = decodeURIComponent(n); document.getElementById('vendorSpecialty').value = decodeURIComponent(s); document.getElementById('vendorEmail').value = decodeURIComponent(e); document.getElementById('vendorPhone').value = decodeURIComponent(p); document.getElementById('vendorActiveJobs').value = decodeURIComponent(j); document.getElementById('editVendorModal').style.display = 'flex'; }
    function openSupportModal(r, i, n, e, q, s, t) { document.getElementById('supportRowIndex').value = r||''; document.getElementById('supportModalTitle').textContent = r?`- ${decodeURIComponent(i)}`:'(New)'; document.getElementById('supportClientName').value = decodeURIComponent(n); document.getElementById('supportClientEmail').value = decodeURIComponent(e); document.getElementById('supportEnquiry').value = decodeURIComponent(q); document.getElementById('supportResolution').value = decodeURIComponent(s); document.getElementById('supportStatus').value = t?decodeURIComponent(t):'Open'; document.getElementById('editSupportModal').style.display = 'flex'; }

    // ADMIN FINANCIALS
    function addVendorRow(vName = '', vCost = '') {
      const row = document.createElement('div'); row.className = 'vendor-row';
      let options = '<option value="">Select Vendor...</option><option value="Internal">Internal Team</option>';
      availableVendors.forEach(v => { options += `<option value="${v}" ${vName===v ? 'selected':''}>${v}</option>`; });
      row.innerHTML = `<select class="form-input v-name">${options}</select><input type="number" class="form-input v-cost" placeholder="Cost ($)" value="${vCost}" step="0.01" oninput="calculateProfit()"><button type="button" style="background:var(--warning); color:#fff; border:none; padding:0.8rem; cursor:pointer; border-radius:4px;" onclick="this.parentElement.remove(); calculateProfit()">X</button>`;
      document.getElementById('vendorRowsContainer').appendChild(row);
    }
    function calculateProfit() {
      const revenue = parseFloat(document.getElementById('projInvAmt').value) || 0; let totalCost = 0;
      document.querySelectorAll('.v-cost').forEach(input => { totalCost += parseFloat(input.value) || 0; });
      const profit = revenue - totalCost;
      const profitEl = document.getElementById('projNetProfit');
      profitEl.textContent = `$${profit.toFixed(2)}`;
      profitEl.style.color = profit > 0 ? 'var(--terminal)' : (profit < 0 ? 'var(--warning)' : 'var(--signal-med)');
    }

    // ADMIN SAVING LOGIC
    document.getElementById('editLeadForm').addEventListener('submit', function(e) {
      e.preventDefault(); const btn = document.getElementById('saveLeadBtn'); btn.textContent = 'Saving...'; btn.disabled = true;
      let params = new URLSearchParams({ action: 'updateLead', rowIndex: document.getElementById('editRowIndex').value, stage: document.getElementById('editStage').value, notes: document.getElementById('editNotes').value, invAmount: document.getElementById('editInvAmount').value, invNumber: document.getElementById('editInvNumber').value, leadSource: document.getElementById('editLeadSource').value, refPartner: document.getElementById('editRefPartner').value });
      fetch(SCRIPT_URL, { method: 'POST', body: params })
      .then(r => r.json()).then(data => { btn.textContent = 'Save Changes'; btn.disabled = false; closeModal('editLeadModal', 'editLeadForm'); loadPipelineData(); });
    });

    document.getElementById('editProjectForm').addEventListener('submit', function(e) {
      e.preventDefault(); const btn = document.getElementById('saveProjectBtn'); btn.textContent = 'Saving...'; btn.disabled = true;
      let vendorData = []; let totalCost = 0; document.querySelectorAll('.vendor-row').forEach(row => { let name = row.querySelector('.v-name').value; let cost = parseFloat(row.querySelector('.v-cost').value) || 0; if(name) { vendorData.push({name: name, cost: cost}); totalCost += cost; } });
      let params = new URLSearchParams({ action: 'updateProject', rowIndex: document.getElementById('projRowIndex').value, clientName: document.getElementById('projName').value, services: document.getElementById('projServices').value, status: document.getElementById('projStatus').value, deadlines: document.getElementById('projDeadlines').value, link: document.getElementById('projLink').value, invoiceAmount: document.getElementById('projInvAmt').value, invoiceNumber: document.getElementById('projInvNum').value, vendorData: JSON.stringify(vendorData), totalCost: totalCost, refPartner: document.getElementById('projRefPartner').value, commissionStatus: document.getElementById('projCommissionStatus').value, pipelineData: getPipelineJson() });
      fetch(SCRIPT_URL, { method: 'POST', body: params })
      .then(r => r.json()).then(data => { btn.textContent = 'Save Project'; btn.disabled = false; closeModal('editProjectModal', 'editProjectForm'); loadProjectsData(); });
    });

    document.getElementById('editVendorForm').addEventListener('submit', function(e) { e.preventDefault(); const btn = document.getElementById('saveVendorBtn'); btn.textContent = 'Saving...'; btn.disabled = true; fetch(SCRIPT_URL, { method: 'POST', body: new URLSearchParams({ action: 'updateVendor', rowIndex: document.getElementById('vendorRowIndex').value, vendorName: document.getElementById('vendorName').value, specialty: document.getElementById('vendorSpecialty').value, email: document.getElementById('vendorEmail').value, phone: document.getElementById('vendorPhone').value, activeJobs: document.getElementById('vendorActiveJobs').value }) }).then(r => r.json()).then(data => { btn.textContent = 'Save Vendor'; btn.disabled = false; closeModal('editVendorModal', 'editVendorForm'); loadVendorsData(); fetchVendorsList(); }); });
    document.getElementById('editSupportForm').addEventListener('submit', function(e) { e.preventDefault(); const btn = document.getElementById('saveSupportBtn'); btn.textContent = 'Saving...'; btn.disabled = true; fetch(SCRIPT_URL, { method: 'POST', body: new URLSearchParams({ action: 'updateSupport', rowIndex: document.getElementById('supportRowIndex').value, clientName: document.getElementById('supportClientName').value, clientEmail: document.getElementById('supportClientEmail').value, enquiry: document.getElementById('supportEnquiry').value, resolution: document.getElementById('supportResolution').value, status: document.getElementById('supportStatus').value }) }).then(r => r.json()).then(data => { btn.textContent = 'Save Ticket'; btn.disabled = false; closeModal('editSupportModal', 'editSupportForm'); loadSupportData(); }); });
  </script>
</body>
</html>