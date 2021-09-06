<?php require('header.php') ?>

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="/materiali.php">Materiali</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/o-ring.php">O-ring</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/thermal_insulator.php">Isolanti termici</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produzioni.php">Produzioni</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contacts.php">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php

if (isset($_POST['submit'])) {
    $to = "info@mati-gasket.it"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $company = $_POST['company'];
    $text = $_POST['message'];

    echo $first_name . " " . $last_name . "\n" . $company . "\n" . $text;


    $subject = "Form submission";
    $subject2 = "Copia dell'email inviata a MATI";

    $message = "Da: " . $first_name . " " . $last_name . "Azienda: " . $company . " messaggio:" . "\n\n" . $text;
    $message2 = "Ecco la tua copia del messaggio " . $first_name . " " . $last_name . "\nAzienda: " . $company . "\n\n" . $text;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender

    echo "Email inviata. A breve verrai ricontattato, grazie.";
}
?>


<div class="container">
    <h2 class="pageTitle">Contatti</h2>
    <div class="container-fluid">
        <div class="gmapsImg">
					<a href="https://www.google.it/maps/place/Via+Pizzo+Camino,+2,+24060+P.l.i.p.+BG/@45.6393087,9.8399393,17z/data=!3m1!4b1!4m5!3m4!1s0x47815cd02ec5b2ab:0xa00e531de88d1c96!8m2!3d45.639305!4d9.842128" target=”_blank”>
						<img class="img-fluid" src="img/gmaps2.jpg">
					</a>
        </div>
        <div class="row">
            <div class="contactPadBox col-lg-4">
                <h5 class="title-sniglet">Azienda</h5>
                <p>via Pizzo Camino, 2<br>24060 - Chiuduno - (BG)<br>Italia</p>
                <p>P.IVA: 04396620165</p>
                <p>
                    <span>Phone:</span>
                    <a href="tel:+39">+39 035 1977 0835</a>
                </p>
                <p>
                    <span>Email: </span>
                    <a href="mailto: info@mati-gasket.it" target="_blank" rel="noopener noreferrer">info@mati-gasket.it</a>
                </p><br>
            </div>
            <div class="footerPadBox col-lg-8">
                <h5 class="title-sniglet">Contattaci</h5>
                <form class="contactForm" method="post" action="">
                    <div class="form-group row">
                        <label for="formName" class="form-label col-form-label col-sm-2">Nome</label>
                        <div class="col-sm-10">
                            <input required="" placeholder="Inserisci il tuo Nome *" name="first_name" type="text" id="formName" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formSurname" class="form-label col-form-label col-sm-2">Cognome</label>
                        <div class="col-sm-10">
                            <input required="" placeholder="Inserisci il tuo Cognome *" name="last_name" type="text" id="formSurname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formPlaintextEmail" class="form-label col-form-label col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input required="" placeholder="Inserisci la tua Email  *" name="email" type="email" id="formPlaintextEmail" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formCompany" class="form-label col-form-label col-sm-2">Azienda</label>
                        <div class="col-sm-10">
                            <input placeholder="Inserisci il nome della tua azienda" name="company" type="text" id="formCompany" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleForm.ControlTextarea1" class="form-label col-form-label col-sm-2">Messaggio</label>
                        <div class="col-sm-10">
                            <textarea required="" placeholder="Inserisci un messaggio" name="message" rows="3" id="exampleForm.ControlTextarea1" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <div class="modalDiv">
                                <span class="message modal-info modalXL">Inviando accetti la <a href="/privacy_policy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="submitForm row">
                        <button type="submit" name="submit" class="btn btn-dark">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php') ?>