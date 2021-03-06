<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlists</title>
    <link rel="stylesheet" href="CSS/playlists.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"> -->
</head>

<body>
    <!--Search Bar and Header-->
    <header>
        <div class="searchbar">
            <a class="searchbar__button" href="#">
                <i class="fas fa-search"></i>
            </a>
            <input class="searchbar__input" type="search" placeholder="Search...">
        </div>
        <div id="playlist-page__head">
            <h1 id="playlist-page__header">Playlists</h1>
            <a class="playlist-page__create" href="#">
                <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </header>
    <!--Playlist Listings-->
    <section id="playlists">
        <div class="playlist">
            <div class="playlist_item playlist__image">
                <i class="fas fa-headphones-alt playlist-icon"></i>
            </div>
            <a href="#" class="playlist_item playlist__info">
                <div>
                    <p class="playlist__title">Playlist Title</p>
                    <p class="playlist__song-count">Number of Songs</p>
                </div>
            </a>
            <div class="playlist_item playlist__options"> <a href="#"><i class="fas fa-ellipsis-v"></i></a></div>
        </div>
    </section>
    <!--Song Listings for each Playlist-->
    <h2>Songs</h2>
    <section id="songs" class="sortable">
        <div class="song">
            <div class="song_item song__image">
                <i class="fas fa-headphones-alt playlist-icon"></i>
            </div>
            <a href="#" class="song_item song__info">
                <div>
                    <p class="song__title">Playlist Title 1</p>
                    <p class="song__artist">Artist</p>
                    <p class="song__time">3:00</p>
                </div>
            </a>
            <div class="song_item song__options"> <a href="#"><i class="fas fa-ellipsis-v"></i></a></div>
        </div>
        <div class="song">
            <div class="song_item song__image">
                <i class="fas fa-headphones-alt playlist-icon"></i>
            </div>
            <a href="#" class="song_item song__info">
                <div>
                    <p class="song__title">Playlist Title 2</p>
                    <p class="song__artist">Artist</p>
                    <p class="song__time">3:00</p>
                </div>
            </a>
            <div class="song_item song__options"> <a href="#"><i class="fas fa-ellipsis-v"></i></a></div>
        </div>
    </section>
    <!--Create a new Playlist Modal-->
    <section id="createPlaylist">
        <div class="playlistForm">
            <a href="playlists.php" class="close">X</a>
            <h2>Create a New Playlist</h2>
            <form action="" method="" name="create">
                <div class="form-field">
                    <label for="playlist__name">Name: </label>
                    <input type="text" value="Playlist" id="playlist__name">
                </div>
                <div class="form-field">
                    <label for="playlist__description">Description: </label>
                    <textarea name="playlist__description" id="playlist__description" cols="16" rows="5"></textarea>
                </div>
                <div class="form-field">
                    <label for="playlist__image">Image:</label>
                    <input type="file" id="playlist__image">
                </div>
                <div class="form-submit">
                    <input type="submit" value="Create">
                </div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="scripts/playlists.js"></script>
</body>

</html> 