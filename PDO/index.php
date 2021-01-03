<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "db_sistema";

    //Set DSN
    $dsn = "mysql:host=" . $host . ";dbname=". $dbname;

    //Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // <- This is form LIMIT = ?

    # PDO QUERY
    // $stnt = $pdo->query("SELECT * FROM posts");

    // while($row = $stnt->fetch(PDO::FETCH_ASSOC)){
    //     echo $row["title"] . "<br>";
    // }
    // while($row = $stnt->fetch()){
    //     echo $row->title . "<br>";
    // }

    # PREPARED STATMENTS (prepare & execute)

    // UNSAFE WAY
    //$sql = "SELECT * FROM post WHERE author = '$author'";

    //FETCH MULTIPLE POST
    
    // User Input
    $author = 'Emiliano';
    $isPublished = true;
    $id = 1;
    $limit = 1;

    //Positional parameters
    $sql = 'SELECT * FROM posts WHERE author = ? && is_published = ? LIMIT ?';
    $stnt = $pdo->prepare($sql);
    $stnt->execute([$author,$isPublished, $limit]);
    $posts = $stnt->fetchAll();

    // //Name Parameters
    // $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :isPublished';
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute(["author" => $author, "isPublished" => $isPublished]);
    // $posts = $stnt->fetchAll();

    // //var_dump($posts);
    foreach($posts as $post){
        echo $post->title . "<br>";
    }

    // // FETCH SINGLE POST
    // $sql = 'SELECT * FROM posts WHERE id = :id';
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute(["id" => $id]);
    // $post = $stnt->fetch();

    // echo $post->body;

    // // GET ROW COUNT
    // $stnt = $pdo->prepare("SELECT * FROM posts WHERE author = :author");
    // $stnt->execute(["author" => $author]);
    // $postCount = $stnt->rowCount();

    // echo $postCount;

    // INSERT DATA
    // $title = "Post Five";
    // $body = "This is post five";
    // $author = "Kevin";

    // $sql = "INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)";
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute(["title" => $title, "body" => $body, "author" => $author]);

    // echo "Post added";

    // UPDATE DATA
    // $id = 1;
    // $body = "This is the updated post";

    // $sql = "UPDATE posts SET body = :body WHERE id = :id";
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute(["id" => $id, "body" => $body]);

    // echo "Post update";

    // // DELETE DATA
    // $id = 3;

    // $sql = "DELETE FROM posts WHERE id = :id";
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute(["id" => $id]);

    // echo "Post deleted";

    // SEARCH DATA
    // $search = "%f%";

    // $sql = "SELECT * FROM posts WHERE title LIKE ?";
    // $stnt = $pdo->prepare($sql);
    // $stnt->execute([$search]);
    // $posts = $stnt->fetchAll();

    // foreach($posts as $post){
    //     echo $post->title . "<br>";
    // }

