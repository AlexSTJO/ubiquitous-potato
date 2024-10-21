<?php
include '../globals/header.php';
include '../globals/navbar.php';
?>
<div class="content">
    <div class="intro-container">
        <h1>Data Integrity</h1>
        <div class="intro-flex-container">
            <div class="intro-text">
                <p>Data integrity is a critical component of information security, focusing on maintaining the accuracy, consistency, and completeness of data over its entire lifecycle. Ensuring that data remains unchanged, unaltered, and reliable is essential for trust in digital systems, whether in financial transactions, medical records, or communication systems.</p>
                <p>In the modern era of cloud computing and distributed systems, maintaining data integrity requires both robust technical controls and procedural checks. Techniques such as encryption, hashing, checksums, access control, and regular backups are crucial to ensuring data integrity across various environments.</p>
                <p>This section will explore different methods of maintaining data integrity, along with examples of how these techniques are applied in real-world scenarios.</p>
            </div>
            <div class="image">
                <img src="../images/integrity.png" alt="Data Integrity Image" style="width:100%; border-radius: 10px;">
            </div>
        </div>
    </div>

    <div class="slideshow-container">
        <!-- Slide 1: Encryption -->
        <div class="mySlides fade">
            <h2>Encryption</h2>
            <p>Encryption involves converting data into a code to prevent unauthorized access. It ensures that even if data is intercepted, it cannot be read without the decryption key.</p>
        </div>

        <!-- Slide 2: Hashing -->
        <div class="mySlides fade">
            <h2>Hashing</h2>
            <p>Hashing converts data into a fixed-size string of characters, typically for verifying integrity. A change in data results in a different hash, making it easy to detect modifications.</p>
        </div>

        <!-- Slide 3: User Access Controls -->
        <div class="mySlides fade">
            <h2>User Access Controls</h2>
            <p>User access controls ensure that only authorized individuals can access, modify, or delete data, reducing the risk of accidental or malicious changes.</p>
        </div>

        <!-- Slide 4: Checksums -->
        <div class="mySlides fade">
            <h2>Checksums</h2>
            <p>A checksum is a value derived from the data to verify its integrity. By comparing the stored and recalculated checksum, you can detect errors or changes in the data.</p>
        </div>

        <!-- Slide 5: Version Control -->
        <div class="mySlides fade">
            <h2>Version Control</h2>
            <p>Version control systems keep track of every change made to a file or set of files, allowing you to restore previous versions if necessary.</p>
        </div>

        <!-- Slide 6: Backups -->
        <div class="mySlides fade">
            <h2>Backups</h2>
            <p>Backups ensure that copies of your data are available in case the original data is lost or corrupted. Regular backups are essential to maintaining data integrity.</p>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- Dots/circles to indicate the current slide -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
        <span class="dot" onclick="currentSlide(5)"></span> 
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}
</script>

<?php
include '../globals/footer.php';
?>
