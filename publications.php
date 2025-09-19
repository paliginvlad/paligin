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
    <?php include 'includes/header.php'; ?>

     <main>
       <section class="page-header" style="background-image: url('assets/images/publications.jpg'); position: relative;">
            <div class="page-header-orange-overlay"></div>
            <div class="page-header-overlay"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <h1>Публікації</h1>
                <p>Корисні статті та новини у сфері виконавчого провадження</p>
            </div>
        </section>

        <section class="publications-content">
            <div class="container">
                <div class="articles-grid">
                    <article class="article-card" onclick="window.location.href='article.php?id=1'">
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
                            <div class="placeholder-image">
                                <img src="assets/images/file-document-outline.png" alt="File Document" style="width: 4.5rem; height: 4.5rem; object-fit: contain;" />
                            </div>
                        </div>
                        <div class="article-content">
                            <div class="article-date">Скоро</div>
                            <h3>Нова стаття буде опублікована найближчим часом</h3>
                            <p>Слідкуйте за оновленнями на нашому сайті</p>
                        </div>
                    </article>

                    <article class="article-card placeholder">
                        <div class="article-image">
                            <div class="placeholder-image">
                                <img src="assets/images/file-document-outline.png" alt="File Document" style="width: 4.5rem; height: 4.5rem; object-fit: contain;" />
                            </div>
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

    </main>

 <?php include 'includes/footer.php'; ?>
 <script src="js/script.js"></script>
</body>
</html>