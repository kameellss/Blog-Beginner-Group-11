<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: #ffcce1;
            padding: 20px;
            text-align: center;
            color: #fff; /* Ganti warna font menjadi putih */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .article-container {
            background-color: #fff;
            padding: 40px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .article-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ee99c2;
        }

        .article-metadata {
            font-size: 0.9rem;
            color: #ccc; /* Ganti warna font menjadi putih */
            margin-bottom: 20px;
        }

        .article-body {
            color: #333;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag-badge {
            background-color: #ffcce1;
            color: #fff; /* Ganti warna font menjadi putih */
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .footer {
            background-color: #ffcce1;
            padding: 10px;
            text-align: center;
            color: #fff; /* Ganti warna font menjadi putih */
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h1>Glowify Articles</h1>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="article-container mx-auto">
            <!-- Judul Artikel -->
            <h1 class="article-title text-center mb-4">The Title of the Article</h1>

            <!-- Metadata Artikel -->
            <p class="article-metadata text-center">
                By <strong>Author Name</strong> | Published on <strong>December 10, 2024</strong> | Category: <strong>Technology</strong>
            </p>

            <!-- Konten Artikel -->
            <div class="article-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. 
                    Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. 
                    Praesent mauris. Fusce nec tellus sed augue semper porta.
                </p>
                <p>
                    Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per 
                    conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc.
                </p>
            </div>

            <!-- Tag Artikel -->
            <div class="tags mt-4">
                <span class="tag-badge">Tag 1</span>
                <span class="tag-badge">Tag 2</span>
                <span class="tag-badge">Tag 3</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Glowify Articles</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
