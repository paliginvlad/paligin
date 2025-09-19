<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакти - Приватний виконавець Палігін Олександр Петрович</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
</head>
<body>
 <?php include 'includes/header.php'; ?>

    <main>
        <section class="page-header" style="background-image: url('assets/images/contactinfo.jpg');">
        <div class="page-header-orange-overlay"></div>    
        <div class="page-header-overlay"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <h1>Контакти</h1>
                <p>Контактна інформація та місцезнаходження офісу</p>
            </div>
        </section>

        <section class="contacts-content">
            <div class="container">
                <div class="contacts-grid">
                    <!-- Contact Information -->
                    <div class="contact-section">
                        <h2 class="bronze-heading">Контактна інформація</h2>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/cellphone.png" alt="Cellphone" style="width: 4rem; height: 4rem; object-fit: contain;" />
                                </div>
                                <div class="contact-details">
                                    <h3>Телефон</h3>
                                    <p><a href="tel:+380xxxxxxxxx">+380 (93) 768-76-17</a></p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <img src="assets/images/email.png" alt="Email" style="width: 4rem; height: 4rem; object-fit: contain;" />
                                </div>
                                <div class="contact-details">
                                    <h3>Email</h3>
                                    <p><a href="mailto:example@example.com">paligin@ukr.net</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Address and Hours -->
                    <div class="office-section">
                        <h2 class="bronze-heading">Адреса офісу та графік роботи</h2>
                        <div class="office-info">
                            <div class="office-item">
                                <div class="office-icon">
                                    <img src="assets/images/map-marker-outline.png" alt="Map Marker" style="width: 4rem; height: 4rem; object-fit: contain;" />
                                </div>
                                <div class="office-details">
                                    <h3>Адреса</h3>
                                    <p>пр. Перемоги 139, оф. 203, м. Чернігів, 14013</p>
                                </div>
                            </div>
                            
                            <div class="office-item">
                                <div class="office-icon"><img src="assets/images/clock-time-four-outline.png" alt="Clock time four" style="width: 4rem; height: 4rem; object-fit: contain;" /></div>
                                <div class="office-details">
                                    <h3>Графік роботи</h3>
                                    <p><strong>Понеділок - П'ятниця:</strong> 09:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Maps Section -->
                <div class="map-section">
                    <h2 class="bronze-heading">Розташування на карті</h2>
                    <div class="map-container">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9934.52915135356!2d31.309480000000004!3d51.501615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d548f591cd2c35%3A0x904272febab50272!2z0L_RgNC-0YHQv9C10LrRgiDQn9C10YDQtdC80L7Qs9C4LCAxMzksINCn0LXRgNC90ZbQs9GW0LIsINCn0LXRgNC90ZbQs9GW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDRl9C90LAsIDE0MDAw!5e0!3m2!1suk!2spl!4v1758206750586!5m2!1suk!2spl" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

   <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>