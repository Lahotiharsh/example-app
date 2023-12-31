<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
</head>
<body>
<header>
    <h6>Playlist</h6>
        <h1>Daily Mix 1</h1>
        <p>A playlist consisting of your fav artists</p>
</header>

<sidebar>
    <div class="nav-options">Home</div>
    <div class="nav-options">Search</div>
    <div class="nav-options">My Playlists</div>
    <div class="playlist-item">Playlist 1</div>
    <div class="playlist-item">Playlist 2</div>
</sidebar>

<main>
//@yield('content')
<table>
      <thead>
        <tr>
          <th>Serial No</th>
          <th>Song Title</th>
          <th>Artist Name</th>
          <th>Album Name</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Song Title 1</td>
          <td>Artist 1</td>
          <td>Album 1</td>
          <td>3:45</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Song Title 2</td>
          <td>Artist 2</td>
          <td>Album 2</td>
          <td>3:45</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Song Title 3</td>
          <td>Artist 3</td>
          <td>Album 3</td>
          <td>3:45</td>
        </tr>
        <!-- Add more rows for songs -->
      </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2023 Playlist Viewer | <a href="#">About</a> | <a href="#">Privacy</a></p>
</footer>
</body>
</html>