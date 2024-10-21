<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Perimeter Protection</h1>
        <p class="intro-text">
        Perimeter protection involves physical and network-based security measures designed to prevent unauthorized access to sensitive areas or systems. These methods can include sensors, physical barriers, and advanced network systems like firewalls and intrusion detection/prevention systems.
        </p>
    </div>

    <div class="accordion-container">
        <!-- Physical Perimeter Protection -->
        <div class="accordion-item">
            
            <h2 class="accordion-header" onclick="toggleAccordion('physical')"> <img class="accordion-image" src="../images/physical_perimeter.png" alt="Physical Perimeter Protection" />Physical Perimeter Protection </h2>
            <div id="physical" class="accordion-content">
                <div class="content-flex">
                    <div class="content-text">
                        <h3>Sensors</h3>
                        <p>Sensors are used to detect movement and intrusions at the physical perimeter of a facility. These can include:</p>
                        <ul>
                            <li><strong>Cable Based Sensors:</strong> Embedded in fences or walls, these sensors detect vibrations or attempts to breach the physical barrier.</li>
                            <li><strong>Detection Based Sensors (Radars):</strong> Radars are used to detect movements in a larger area, offering wider perimeter protection.</li>
                            <li><strong>Video-Based Technology:</strong> Cameras and video systems are used to monitor and detect unusual activity in real-time.</li>
                        </ul>

                        <h3>Physical Barriers</h3>
                        <p>Physical barriers, such as fencing and reinforced panels, are designed to delay or prevent intrusion. These structures play a key role in defending sensitive areas by creating an additional layer of security.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Network Perimeter Protection -->
        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleAccordion('network')"><img class="accordion-image" src="../images/network_perimeter.png" alt="Network Perimeter Protection" />Network Perimeter Protection</h2>
            <div id="network" class="accordion-content" style="display:none;">
                <div class="content-flex">
                    <div class="content-text">
                        <h3>Network Perimeter Includes:</h3>
                        <ul>
                            <li><strong>Intrusion Detection Systems (IDS):</strong> IDS monitor network traffic for suspicious activity and issue alerts when potential threats are detected.</li>
                            <li><strong>Intrusion Prevention Systems (IPS):</strong> IPS actively block detected threats by analyzing traffic in real-time, preventing attacks before they can cause damage.</li>
                            <li><strong>Firewalls:</strong> Firewalls control incoming and outgoing network traffic based on predetermined security rules, acting as a barrier between a trusted and untrusted network.</li>
                            <li><strong>Border Routers:</strong> Border routers are placed at the boundary of a network and help direct traffic while maintaining security by enforcing policies.</li>
                            <li><strong>Unified Threat Management (UTM) Systems:</strong> UTM systems combine multiple security functions such as firewall, intrusion detection, and antivirus into a single platform.</li>
                        </ul>
                    </div>
                </div>
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
