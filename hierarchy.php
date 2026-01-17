<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prism|Hierarchy</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hierarchy-content {
            padding: 60px 20px;
            max-width: 100vw;
            margin: 20px auto;
            background: rgba(244, 240, 240, 0);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
            align-items: start;
        }

        .service-card {
            background: rgba(255, 255, 255, 1);
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
            height: 500px;
            width: 350px;
            margin: auto;

        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center;
            flex-shrink: 0;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 25px;
            min-height: 200px;

        }

        .x {
            color: #333;
            margin: 0 0 15px 0;
            font-weight: bold;

        }

        .x:last-child {
            margin-bottom: 20px;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .contact-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .contact-link:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-3px);
            color: white;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .hierarchy-content {
                margin: 10px;
                padding: 40px 15px;
            }

            .service-card {
                height: 480px;
            }
        }
    </style>
</head>

<body>
    <?php include 'index.php' ?>
    <div class="hierarchy-content">
        <h1 style=" color: aqua;">PRISM Club Hierarchy</h1>
        <div class="team-grid">
            <!-- Dr. Pattem Sampath kumar -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Ashok.jpg" alt="Dr. Maram Ashok">
                <div class="card-body">
                    <h2 class="x">Dr. Maram Ashok</h2>
                    <h3 class="x">Chief Patron</h3>
                    <div class="contact-links">
                        <!-- <a href="https://www.facebook.com/share/1BoKtLC7K6/?mibextid=wwXIfr" class="contact-link"
                            target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/rajas-sangekar-ba86a4280/" class="contact-link"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:rajassangekar1855@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+919975261910" class="contact-link"><i class="fas fa-phone"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Dr. Pattem Sampath kumar -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Sampath.jpg" alt="Dr. Pattem Sampath kumar">
                <div class="card-body">
                    <h2 class="x">Dr. Pattem Sampath kumar</h2>
                    <h3 class="x">Chief Captain</h3>
                    <div class="contact-links">
                        <!-- <a href="https://www.facebook.com/share/1BoKtLC7K6/?mibextid=wwXIfr" class="contact-link"
                            target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/rajas-sangekar-ba86a4280/" class="contact-link"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:rajassangekar1855@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+919975261910" class="contact-link"><i class="fas fa-phone"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="team-grid">
            <!-- Mr Shaik Sohel Pasha -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Shaik.jpg" alt="Mr Shaik Sohel Pasha">
                <div class="card-body">
                    <h2 class="x">Mr Shaik Sohel Pasha</h2>
                    <h3 class="x">Vision Mentors</h3>
                    <div class="contact-links">
                        <!--             
                        <a href="https://www.linkedin.com/in/aditi-singh-4901362a6/" class="contact-link"
                            target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:aditisingh10@kgpian.iitkgp.ac.in" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+918815395895" class="contact-link"><i class="fas fa-phone"></i></a> -->
                    </div>
                </div>
            </div>


            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Shiva Kumar.jpg" alt="Mr. M Shiva kumar">
                <div class="card-body">
                    <h2 class="x">Mr. M Shiva kumar</h2>
                    <h3 class="x">Vision Mentors</h3>
                    <!-- <div class="contact-links">
                        <a href="https://www.linkedin.com/in/varunsnikam/" class="contact-link" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:varunsniitkgp27@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+917558304939" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div> -->
                </div>
            </div>

            <!-- Continue adding all team members following the same pattern... -->
            <!-- Sruthi, Anshu, Soumya, Nirmal, Rupesh, Rohith, Srinu, Srujan -->

        </div>
        <div class="team-grid">
            <!-- Mr Shaik Sohel Pasha -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Varshitha.jpg" alt="K. Anjani Sai Varshitha">
                <div class="card-body">
                    <h2 class="x">K. Anjani Sai Varshitha</h2>
                    <h3 class="x">President</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/korasika-varshitha" class="contact-link" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="mailto: varshithakorasika427@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+918639669596" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mr. M Shiva kumar -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Sahithya.jpg" alt="K. Sri Sahithya">
                <div class="card-body">
                    <h2 class="x">K. Sri Sahithya</h2>
                    <h3 class="x">Vice president</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/sree-sahithya-7385a929a?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                            class="contact-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:sreesahithya.2005@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+918125700378" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Continue adding all team members following the same pattern... -->
            <!-- Sruthi, Anshu, Soumya, Nirmal, Rupesh, Rohith, Srinu, Srujan -->

        </div>
        <div class="team-grid">
            <!-- Mr Shaik Sohel Pasha -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Rithvik Reddy.jpg" alt="B.SAI RITHVIK REDDY">
                <div class="card-body">
                    <h2 class="x">B. Sai Rithvik Reddy</h2>
                    <h3 class="x">Secretary</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/b-sai-rithvik-reddy-776266309?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            class="contact-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:rithvikreddybedadala@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+916305832107" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mr. M Shiva kumar -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Sahithi.jpg" alt="Donga Sahithi">
                <div class="card-body">
                    <h2 class="x">Donga Sahithi</h2>
                    <h3 class="x">Joint secretary</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/sahithi-donga-19bb08329?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            class="contact-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:dongasahithi1@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+919553567996" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Continue adding all team members following the same pattern... -->
            <!-- Sruthi, Anshu, Soumya, Nirmal, Rupesh, Rohith, Srinu, Srujan -->

        </div>
        <div class="team-grid">
            <!-- Mr Shaik Sohel Pasha -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Anvesh.jpg" alt="Anvesh Saadhula">
                <div class="card-body">
                    <h2 class="x">Anvesh Saadhula</h2>
                    <h3 class="x">Treasurer</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/anvesh-saadhula?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            class="contact-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:anveshsaadhula@gmail.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+919346951254" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Mr. M Shiva kumar -->
            <div class="service-card">
                <img class="card-img-top" src="hierarchy images/Prashanthi.jpg" alt="Gaddam Prasanthi">
                <div class="card-body">
                    <h2 class="x">Gaddam Prasanthi</h2>
                    <h3 class="x">Advisor</h3>
                    <div class="contact-links">
                        <a href="https://www.linkedin.com/in/gaddam-prasanthi16" class="contact-link" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:gaddamprasanthi84@gmial.com" class="contact-link"><i
                                class="fas fa-envelope"></i></a>
                        <a href="tel:+919390386060" class="contact-link"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
            </div>

            <!-- Continue adding all team members following the same pattern... -->
            <!-- Sruthi, Anshu, Soumya, Nirmal, Rupesh, Rohith, Srinu, Srujan -->

        </div>
    </div>
</body>

</html>