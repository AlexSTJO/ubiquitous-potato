<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Phishing Attacks</h1>
        <p class="intro-text">
        Phishing attacks are a common method used by cybercriminals to trick individuals into providing personal information, such as login credentials, through deceptive communication. Often, these communications appear to be from a legitimate source, but they lead to malicious websites or requests for sensitive data. This section explores the various types of phishing attacks and how they are executed.
        </p>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../images/bulk.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../images/bulk_1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="../images/bulk_2.avif" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
        </div>

    <div class="tab-container">
        <div class="tab-buttons">
            <button class="tab-button" onclick="openTab('bulk')">Bulk Phishing</button>
            <button class="tab-button" onclick="openTab('spear')">Spear Phishing</button>
            <button class="tab-button" onclick="openTab('voice')">Voice Phishing</button>
            <button class="tab-button" onclick="openTab('sms')">SMS Phishing</button>
            <button class="tab-button" onclick="openTab('search')">Search Engine Phishing</button>
            <button class="tab-button" onclick="openTab('angler')">Angler Phishing</button>
        </div>

        <div id="bulk" class="tab-content">
            <h2>Bulk Phishing</h2>
            <p>Bulk phishing involves sending mass emails to a large group of people, typically with malicious links or attachments. These emails often appear to be from legitimate sources but are designed to trick recipients into providing sensitive information or downloading malware.</p>
        </div>

        <div id="spear" class="tab-content" style="display:none;">
            <h2>Spear Phishing</h2>
            <p>Spear phishing is a more targeted version of phishing. In these attacks, criminals target specific individuals, often those in positions of power or wealth, with personalized messages that make the phishing attempt more convincing.</p>
        </div>

        <div id="voice" class="tab-content" style="display:none;">
            <h2>Voice Phishing (Vishing)</h2>
            <p>Voice phishing, or vishing, involves attackers using phone calls to impersonate a legitimate entity, such as a bank or government agency, to deceive individuals into revealing personal or financial information.</p>
        </div>

        <div id="sms" class="tab-content" style="display:none;">
            <h2>SMS Phishing (Smishing)</h2>
            <p>SMS phishing, also known as smishing, involves sending fraudulent text messages, often offering rewards or gifts with a malicious link, in an attempt to trick individuals into providing sensitive information or installing malware.</p>
        </div>

        <div id="search" class="tab-content" style="display:none;">
            <h2>Search Engine Phishing</h2>
            <p>Search engine phishing involves creating malicious websites that rank high in search engine results. When users visit these sites, they are tricked into providing personal information or downloading malware.</p>
        </div>

        <div id="angler" class="tab-content" style="display:none;">
            <h2>Angler Phishing</h2>
            <p>Angler phishing is a newer form of phishing where attackers impersonate brands or companies on social media platforms. They typically target users who have made complaints or inquiries, tricking them into providing personal information.</p>
        </div>
    </div>
</div>




<script>


let slideIndex = 0;
showSlides(); // Show the first slide
setInterval(showSlides, 10000); // Call showSlides every 10 seconds

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    // Hide all slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    // Increment the slideIndex
    slideIndex++;

    // Loop back to the first slide if at the end
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    // Remove active class from all dots
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    // Show the current slide and add active class to the corresponding dot
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function openTab(tabId) {
    var i, tabcontent, tabbuttons;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none"; 
    }
    document.getElementById(tabId).style.display = "block";
}
</script>

<?php
include '../globals/footer.php';
?>
