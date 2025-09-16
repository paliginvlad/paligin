<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Публікації - Приватний виконавець Палігін Олександр Петрович</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <img src="assets/images/logo.png" alt="Логотип" class="logo">
                    <span class="nav-title">Палігін Олександр Петрович</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php" class="nav-link">Головна</a></li>
                    <li><a href="links.php" class="nav-link">Корисні посилання</a></li>
                    <li><a href="documents.php" class="nav-link">Документи</a></li>
                    <li><a href="publications.php" class="nav-link active">Публікації</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Публікації</h1>
                <p>Корисні статті та новини у сфері виконавчого провадження</p>
            </div>
        </section>

        <section class="publications-content">
            <div class="container">
                <div class="articles-grid">
                    <article class="article-card" onclick="openArticle(1)">
                        <div class="article-image">
                            <img src="assets/images/article1.jpg" alt="Повноваження щодо відкриття виконавчого провадження">
                        </div>
                        <div class="article-content">
                            <div class="article-date">16.09.2025</div>
                            <h3>Повноваження щодо відкриття виконавчого провадження</h3>
                            <p>Детальний огляд повноважень приватного виконавця при відкритті виконавчого провадження та основні обмеження у діяльності.</p>
                        </div>
                    </article>

                    <!-- Placeholder for future articles -->
                    <article class="article-card placeholder">
                        <div class="article-image">
                            <div class="placeholder-image">📄</div>
                        </div>
                        <div class="article-content">
                            <div class="article-date">Скоро</div>
                            <h3>Нова стаття буде опублікована найближчим часом</h3>
                            <p>Слідкуйте за оновленнями на нашому сайті</p>
                        </div>
                    </article>

                    <article class="article-card placeholder">
                        <div class="article-image">
                            <div class="placeholder-image">📄</div>
                        </div>
                        <div class="article-content">
                            <div class="article-date">Скоро</div>
                            <h3>Нова стаття буде опублікована найближчим часом</h3>
                            <p>Слідкуйте за оновленнями на нашому сайті</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Article Modal -->
        <div id="articleModal" class="modal" style="display: none;">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" onclick="closeArticle()">&times;</span>
                </div>
                <div class="modal-body">
                    <div id="article1" class="article-full">
                        <img src="assets/images/article1.jpg" alt="Повноваження щодо відкриття виконавчого провадження" class="article-full-image">
                        <div class="article-full-date">16.09.2025</div>
                        <h1>Повноваження щодо відкриття виконавчого провадження</h1>
                        <div class="article-full-content">
                            <p>Приватний виконавець здійснює примусове виконання рішень, передбачених статтею 3 Закону України «Про виконавче провадження», крім:</p>
                            
                            <ol>
                                <li>рішень про відібрання і передання дитини, встановлення побачення з нею або усунення перешкод у побаченні з дитиною;</li>
                                <li>рішень, за якими боржником є держава, державні органи, Національний банк України, органи місцевого самоврядування, їх посадові особи, державні та комунальні підприємства, установи, організації, юридичні особи, частка держави у статутному капіталі яких перевищує 25 відсотків, та/або які фінансуються виключно за кошти державного або місцевого бюджету;</li>
                                <li>рішень, за якими боржником є юридична особа, примусова реалізація майна якої заборонена відповідно до закону;</li>
                                <li>рішень, за якими стягувачами є держава, державні органи;</li>
                                <li>рішень адміністративних судів та рішень Європейського суду з прав людини;</li>
                                <li>рішень, які передбачають вчинення дій щодо майна державної чи комунальної власності;</li>
                                <li>рішень про виселення та вселення фізичних осіб;</li>
                                <li>рішень, за якими боржниками є діти або фізичні особи, які визнані недієздатними чи цивільна дієздатність яких обмежена;</li>
                                <li>рішень про конфіскацію майна;</li>
                                <li>рішень, виконання яких віднесено цим Законом безпосередньо до повноважень інших органів, які не є органами примусового виконання;</li>
                                <li>інших випадків, передбачених цим Законом та Законом України "Про органи та осіб, які здійснюють примусове виконання судових рішень і рішень інших органів".</li>
                            </ol>

                            <p><strong>Обмеження для початківців:</strong></p>
                            <p>Протягом першого року зайняття діяльністю приватного виконавця, приватний виконавець не може здійснювати примусове виконання рішень за якими сума стягнення становить двадцять та більше мільйонів гривень або еквівалентну суму в іноземній валюті.</p>

                            <p>Строк зайняття діяльністю приватного виконавця обчислюється з дня внесення інформації про приватного виконавця до Єдиного реєстру приватних виконавців України.</p>

                            <p><strong>Право на повернення виконавчого документа:</strong></p>
                            <p>Приватний виконавець має право повернути виконавчий документ стягувачу без прийняття до виконання:</p>
                            <ol>
                                <li>якщо на момент подачі стягувачем заяви про примусове виконання рішення кількість виконавчих документів за рішеннями про стягнення періодичних платежів, заробітної плати, заборгованості фізичних осіб з оплати житлово-комунальних послуг, поновлення на роботі перевищує 20 відсотків загальної кількості виконавчих документів, що перебувають на виконанні у приватного виконавця;</li>
                                <li>в інших випадках, передбачених законом.</li>
                            </ol>

                            <p>При поверненні виконавчого документа стягувачу з підстав, передбачених цією частиною, приватний виконавець зобов'язаний письмово зазначити підстави повернення, право стягувача оскаржити рішення про повернення виконавчого документа без прийняття до виконання, а також право стягувача подати виконавчий документ на виконання іншого приватного виконавця або до органу державної виконавчої служби.</p>

                            <p><strong>Конфлікт інтересів:</strong></p>
                            <p>Приватний виконавець не може виконувати рішення, якщо боржником або стягувачем є сам виконавець, близькі йому особи або пов'язані з ним особи, а також у випадках реального або потенційного конфлікту інтересів.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/images/logo-small-inverted.png" alt="Логотип">
                    <span>Приватний виконавець Палігін О.П.</span>
                </div>
                <div class="footer-text">
                    <p>&copy; 2025 Палігін Олександр Петрович. Всі права захищені.</p>
                    <p>Цінуємо Ваш час, працюємо на результат</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script>
        function openArticle(articleId) {
            document.getElementById('articleModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeArticle() {
            document.getElementById('articleModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('articleModal');
            if (event.target == modal) {
                closeArticle();
            }
        }
    </script>
</body>
</html>