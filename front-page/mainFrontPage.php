<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Gym Front Page</title>
    <link rel="stylesheet" href="styleMainFrontPage.css">
    <script>
        // scripts.js

        document.addEventListener('DOMContentLoaded', () => {
            const ctaButton = document.querySelector('.cta-button');

            ctaButton.addEventListener('click', (event) => {
                event.preventDefault();
                alert('Welcome to our shop! Explore our range of olive trees.');
            });

            const navLinks = document.querySelectorAll('nav ul li a');

            navLinks.forEach(link => {
                link.addEventListener('mouseover', () => {
                    link.style.color = '#3a7f3a';
                });

                link.addEventListener('mouseout', () => {
                    link.style.color = '#fff';
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const dropdown = document.querySelector('.dropdown1');
            const dropdownBtn = document.querySelector('.dropdown-btn1');

            dropdownBtn.addEventListener('click', () => {
                dropdown.classList.toggle('active');
            });

            const dropdown2 = document.querySelector('.dropdown2');
            const dropdownBtn2 = document.querySelector('.dropdown-btn2');

            dropdownBtn2.addEventListener('click', () => {
                dropdown2.classList.toggle('active');
            });

            const dropdown3 = document.querySelector('.dropdown3');
            const dropdownBtn3 = document.querySelector('.dropdown-btn3');

            dropdownBtn3.addEventListener('click', () => {
                dropdown3.classList.toggle('active');
            });

        });

    </script>

</head>

<body>


    <header>
        <div class="logo">PF</div>
        <nav>
            <ul>
                <li><a href="index.html">Αρχική</a></li>
                <li><a href="about.html">Υπηρεσίες</a></li>
                <li><a href="gallery.html">Συνδρομές</a></li> <!--μεσα θα χει και κλεισε ραντεβου-->
                <li><a href="shop.html">Ανακοινώσεις</a></li>
                <li><a href="contact.html">Επικοινωνία</a></li>
                <li><a href="cart.html">Εγγραφή/Σύνδεση</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero belowHeader">
            <h1>ΞΕΠΕΡΑΣΕ ΤΑ ΟΡΙΑ ΣΟΥ</h1>
            <p>Pulse Fitness </p>
        </section>
        <div class="aboutUs">
            <h1>Σχετικά με Εμάς</h1>
            <p>Απαρτιζόμενοι από έμπειρους γυμναστές, στη Pulse Fitness επιδιώκουμε να σε βοηθήσουμε<br> να γίνεις η καλύτερη εκδοχή του εαυτού σου. Με μελετημένα προγράμματα και <br>συχνή επίβλεψη από την ομάδα μας, έχουμε δει αξιοσημείωτα αποτελέσματα <br>και βελτίωση από τους συνδρομητές μας. Γίνε και εσύ μέλος της Pulse FItness!</p>
         </div>

                <div class="features ">



                    <div class="plantColumns">

                        <div class="wrapper">
                            <div class="card">
                                <img class="imgCard" src="1.png">

                                <div class="info">
                                    <h1>Ατομικά Προγράμματα</h1>
                                    <p> Pilates Reformer <br> για Ηλικιωμένους <br> Ενδυνάμωσης <br> Απώλειας Βάρους
                                        <br> για Αρχάριους </p>
                                    <button class="btnEidhInfo">Διάβασε περισσότερα</button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="card">

                                <img class="imgCard" src="portokalia87.jpg">

                                <div class="info">
                                    <h1>Ομαδικά Προγράμματα</h1>
                                    <p> Zumba<br> HIIT (High-Intensity Interval Training)<br> Full Body <br> Tabata <br>
                                        Pilates</p>
                                    <button class="btnEidhInfo">Διάβασε περισσότερα</button>
                                </div>
                            </div>
                        </div>


                    </div>


                    </section>


                    <section class="centered-container">
                        <div class="image-container">
                            <div class="gridImgTxt">
                                <div class="dropDownLeftTxt"> <br>
                                    <div class="nearSas">43 PULSES ΣΕ <br> ΟΛΗ ΤΗΝ ΕΛΛΑΔΑ ΚΑΙ ΚΥΠΡΟ </div>
                                </div>
                                <img class="dropDownImg" src="Greek-table-olives-948x640-1-removebg-preview.png"
                                    alt="Citrus Tree">
                            </div>
                        </div>

                        <div class="dropDownsContainer">

                            <div class="dropdown1">
                                <button class="dropdown-btn1">Show More Info</button>
                                <div class="dropdown-content1">
                                    <p>
                                        Discover the fascinating details about our olive trees, citrus fruits, and
                                        pistachios!
                                        Learn about their unique characteristics, cultivation methods, and their role in
                                        a sustainable future.
                                    </p>
                                </div>
                            </div>
                            <div class="dropdown2">
                                <button class="dropdown-btn2">Show More Info</button>
                                <div class="dropdown-content2">
                                    <p>
                                        Discover the fascinating details about our olive trees, citrus fruits, and
                                        pistachios!
                                        Learn about their unique characteristics, cultivation methods, and their role in
                                        a sustainable future.
                                    </p>
                                </div>
                            </div>
                            <div class="dropdown3">
                                <button class="dropdown-btn3">Show More Info</button>
                                <div class="dropdown-content3">
                                    <p>
                                        Discover the fascinating details about our olive trees, citrus fruits, and
                                        pistachios!
                                        Learn about their unique characteristics, cultivation methods, and their role in
                                        a sustainable future.
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                </section>



    </main>

    <footer>
        <p>&copy; 2024 Elton Olive Trees. All rights reserved.</p>
        <ul class="social-links">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
        </ul>
    </footer>
</body>

</html>