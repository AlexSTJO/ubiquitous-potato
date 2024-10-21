<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Social Engineering</h1>
        <p class="intro-text">
        Social engineering is a tactic that exploits human psychology to compromise personal or organizational security. Attackers manipulate individuals by exploiting qualities such as greed, curiosity, or kindness, often creating a false sense of trust. Social engineering can be a multi-step process where the initial interaction provides access to more sensitive systems, allowing the attacker to pursue a larger agenda.
        </p>
    </div>

    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section1')">Phishing</h2>
            <div id="section1" class="accordion-content">
                <p>Phishing is a form of social engineering that uses deceptive emails, websites, or messages to trick individuals into providing sensitive information. Spear phishing targets specific individuals or organizations with tailored messages, making the attack more convincing and harder to detect.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section2')">Pretexting</h2>
            <div id="section2" class="accordion-content">
                <p>Pretexting involves creating a fabricated scenario (a pretext) to steal personal information or gain access to systems. Attackers may impersonate trusted figures such as company representatives or government officials to deceive the target into divulging sensitive data.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section3')">Quid Pro Quo</h2>
            <div id="section3" class="accordion-content">
                <p>Quid Pro Quo attacks involve offering something of value in exchange for information or access. For example, an attacker may pose as technical support and offer assistance in exchange for login credentials or access to a network.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section4')">Tailgating</h2>
            <div id="section4" class="accordion-content">
                <p>Tailgating occurs when an attacker gains unauthorized access to a restricted area by following closely behind an authorized person, relying on social norms such as politeness to avoid being questioned.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section5')">Impersonation</h2>
            <div id="section5" class="accordion-content">
                <p>Impersonation involves the attacker pretending to be a trusted figure, such as an executive or colleague, to trick the target into providing sensitive information or access to secure systems.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section6')">Baiting</h2>
            <div id="section6" class="accordion-content">
                <p>Baiting relies on the victim's curiosity by offering something appealing, such as free software or a USB drive. Once the victim takes the bait, the attacker can install malicious software or gain access to the system.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section7')">Scareware</h2>
            <div id="section7" class="accordion-content">
                <p>Scareware involves tricking individuals into believing their system is at risk, prompting them to install fake software or malware disguised as legitimate protection.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section8')">Watering Hole Attack</h2>
            <div id="section8" class="accordion-content">
                <p>A watering hole attack targets a group of individuals by compromising websites they are likely to visit, embedding malware to infect visitors' systems.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section9')">Shoulder Surfing</h2>
            <div id="section9" class="accordion-content">
                <p>Shoulder surfing is a low-tech form of social engineering where attackers observe individuals entering sensitive information, such as passwords or PINs, by physically watching over their shoulder.</p>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" onclick="toggleSection('section10')">Piggybacking</h2>
            <div id="section10" class="accordion-content">
                <p>Piggybacking is similar to tailgating but differs in that the authorized person knowingly or unknowingly grants access to the attacker by holding a door open for them. This usually occurs due to politeness or a lack of awareness, allowing the unauthorized individual to enter secure areas.</p>
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
