<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Cybersecurity Awareness</h1>
        <p class="intro-text">
        In today’s digital world, cybersecurity is crucial for safeguarding sensitive information and ensuring the protection of both individuals and organizations. With the growing number of cyber threats, staying informed and proactive is more important than ever. Cybersecurity involves not only technical defenses but also awareness of common tactics like social engineering, phishing, and the importance of access control and data integrity. These key areas help protect against breaches, financial loss, and data manipulation. By fostering a culture of cybersecurity awareness, everyone can contribute to a safer digital environment, reducing the risks posed by cybercriminals.
        </p>
    </div>

    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section1')">
                <img src="../images/social_engineering.png" alt="Social Engineering" class="accordion-image">
                Social Engineering
            </h2>
            <div id="section1" class="accordion-content">
                <p>Social engineering refers to tactics used by attackers to manipulate individuals into revealing confidential information. Whether it's through impersonation, creating a sense of urgency, or other deceitful tactics, social engineering is one of the most common and dangerous forms of attack. Raising awareness and educating individuals on how to recognize these tactics is essential for any security strategy.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section2')">
                <img src="../images/phishing.png" alt="Phishing" class="accordion-image">
                Phishing Attacks
            </h2>
            <div id="section2" class="accordion-content">
                <p>Phishing attacks are attempts to deceive users into providing sensitive information by posing as legitimate entities, often through emails or fraudulent websites. These attacks can lead to identity theft, financial loss, and unauthorized access to personal or corporate data. Recognizing phishing attempts and having the necessary protections, such as email filtering and user training, are critical.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section3')">
                <img src="../images/access_control.png" alt="Access Control" class="accordion-image">
                Ensuring Proper Access Control
            </h2>
            <div id="section3" class="accordion-content">
                <p>Access control refers to the practice of restricting access to sensitive data or systems to authorized individuals only. Effective access control mechanisms, such as strong passwords, multi-factor authentication, and role-based permissions, are necessary to prevent unauthorized access and ensure that sensitive information is kept secure.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section4')">
                <img src="../images/data_integrity.png" alt="Data Integrity" class="accordion-image">
                Maintaining Data Integrity
            </h2>
            <div id="section4" class="accordion-content">
                <p>Data integrity involves ensuring that information remains accurate, consistent, and unaltered during its lifecycle. Safeguarding data from unauthorized modifications, accidental changes, or malicious attacks is essential to maintaining trust in digital systems. Regular audits, encryption, and secure backups are key strategies in ensuring data integrity.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section5')">
                <img src="../images/perimeter.png" alt="Perimeter Protection" class="accordion-image">
                Perimeter Protection
            </h2>
            <div id="section5" class="accordion-content">
                <p>Perimeter protection refers to the security measures used to defend the outermost boundaries of a network, preventing unauthorized access to critical systems. This includes firewalls, intrusion detection systems (IDS), and intrusion prevention systems (IPS). By monitoring network traffic and controlling the flow of information, perimeter protection serves as the first line of defense against external threats.</p>
            </div>
        </div>
    </div>
</div>

<script>
function toggleSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section.style.display === "block") {
        section.style.display = "none";
    } else {
        section.style.display = "block";
    }
}
</script>

<?php
include '../globals/footer.php';
?>
