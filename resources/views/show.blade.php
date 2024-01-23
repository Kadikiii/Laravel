
<!DOCTYPE html>
<html>
<head>
  <title>Bookstore</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/css/uikit.min.css" />
</head>
<body>
  <header class="uk-container">
    <div class="uk-background-primary uk-light uk-padding">
      <h1>This is books</h1>
    </div>
  </header>

  <main class="uk-container uk-margin-top">
    @foreach ($book as $books)
      <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid>
        <div class="uk-card-body">
          <h3 class="uk-card-title">{{$books->title}}</h3>
          <p>{{$books->author}}</p>
          <p>{{$books->year}}</p>
          <small>{{$books->id}}</small>
        </div>
      </div>
    @endforeach
  </main>

  <footer class="uk-background-secondary uk-light uk-padding">
    <div class="uk-container">
      <p>&copy; 2024 Bookstore. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.7.4/js/uikit-icons.min.js"></script>
</body>
</html>



