<!DOCTYPE html>
<html>
<head>

    <title>Tabel Artikel</title>
</head>
<body>
    <h1>Tabel Artikel</h1>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Artikel</th>
                <th>Tanggal Artikel</th>
                <th>Isi Artikel</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?php echo $article->id; ?></td>
                    <td><?php echo $article->article_title; ?></td>
                    <td><?php echo $article->article_date; ?></td>
                    <td><?php echo $article->article_text; ?></td>
                    <td><?php echo $article->created_at; ?></td>
                    <td><?php echo $article->updated_at; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
    
        th,
        td {
            padding: 8px;
            border: 1px solid #ccc;
        }
    
        th {
            background-color: #f0f0f0;
        }
    
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    
        tr:hover {
            background-color: #e0e0e0;
        }
    </style>       
</body>
</html>