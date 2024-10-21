<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Access Control</h1>
        <p class="intro-text">
        Access control is an essential element of security that restricts or permits access to applications, data, systems, and resources based on the given circumstances and access control models. This section explores the various types of access control and their applications in different environments.
        </p>
    </div>

    <div class="accordion-container">
    <div class="accordion-item">
        <h2 class="accordion-header" onclick="toggleAccordion('dac')">
            <img src="../images/dac_icon.png" class="accordion-image" alt="DAC Icon"> DAC - Discretionary Access Control
        </h2>
        <div id="dac" class="accordion-content">
            <p>In discretionary access control (DAC), every object in a protected system has an owner, and it is at the owner's discretion to disburse access to users. This model allows the owner to assign and manage access permissions flexibly.</p>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" onclick="toggleAccordion('rbac')">
            <img src="../images/rbac_icon.png" class="accordion-image" alt="RBAC Icon"> RBAC - Role-based Access Control
        </h2>
        <div id="rbac" class="accordion-content" style="display:none;">
            <p>Role-based access control (RBAC) provides access rights based on business function. It is meant to give employees access only to the information they need to perform their job functions.</p>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" onclick="toggleAccordion('mac')">
            <img src="../images/mac_icon.png" class="accordion-image" alt="MAC Icon"> MAC - Mandatory Access Control
        </h2>
        <div id="mac" class="accordion-content" style="display:none;">
            <p>In mandatory access control (MAC), access is granted in the form of clearance levels. It is commonly used in military and government security environments, where information classification and user clearance levels are strictly enforced.</p>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" onclick="toggleAccordion('abac')">
            <img src="../images/abac_icon.png" class="accordion-image" alt="ABAC Icon"> ABAC - Attribute-based Access Control
        </h2>
        <div id="abac" class="accordion-content" style="display:none;">
            <p>Attribute-based access control (ABAC) grants access flexibly based on attributes and environmental conditions.</p>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" onclick="toggleAccordion('ibac')">
            <img src="../images/ibac_icon.png" class="accordion-image" alt="IBAC Icon"> IBAC - Identity-Based Access Control
        </h2>
        <div id="ibac" class="accordion-content" style="display:none;">
            <p>In identity-based access control (IBAC), each user is individually identified, and their access rights are tailored to their specific identity.</p>
        </div>
    </div>
</div>
</div>

<script>
function toggleAccordion(sectionId) {
    var content = document.getElementById(sectionId);
    if (content.style.display === "block") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}
</script>

<?php
include '../globals/footer.php';
?>
