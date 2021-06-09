<?php
  $database = [
      [
          'title' => 'Toxic',
          'author' => 'Britney Spears',
          'album' => 'In the zone',
          'year' => 2003,
          'genre' => 'Dance',
          'poster' => 'https://upload.wikimedia.org/wikipedia/commons/2/2d/Britney_Spears_-_In_the_Zone_Logo.png'
      ],
      [
          'title' => 'Morirò da Re',
          'author' => 'Måneskin',
          'album' => 'Il ballo della vita',
          'year' => 2018,
          'genre' => 'Pop-Rock',
          'poster' => 'https://m.media-amazon.com/images/I/81fCwQeZ-5L._SS500_.jpg'
      ],
      [
          'title' => 'Over my dead body',
          'author' => 'Blind Channel',
          'album' => 'Violent Pop',
          'genre' => 'Pop-Rock',
          'year' => 2020,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810TDpkrM%2BL._SY355_.jpg'
      ],
      [
          'title' => 'Sweet but Psycho',
          'author' => 'Ava Max',
          'album' => 'Heaven & Hell',
          'genre' => 'Dance',
          'year' => 2020,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/712LiaErDaL._AC_SL1425_.jpg'
      ],
      [
          'title' => 'Villain',
          'author' => 'K/DA',
          'album' => 'All Out',
          'genre' => 'Dance',
          'year' => 2020,
          'poster' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/cb/KDA_ALL_OUT.jpg/220px-KDA_ALL_OUT.jpg'
      ],
      [
          'title' => 'Dragula',
          'author' => 'Rob Zombie',
          'album' => 'Hellbilly Deluxe',
          'genre' => 'Rock',
          'year' => 1998,
          'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71fkviQiIKL._AC_SL1087_.jpg'
      ],
      [
          'title' => 'La genesi del tuo colore',
          'author' => 'Irama',
          'album' => 'La genesi del tuo colore',
          'genre' => 'Dance',
          'year' => 2021,
          'poster' => 'https://i1.sndcdn.com/artworks-w5NakIJph5rZl6pr-troYLQ-t500x500.jpg'
      ],
      [
          'title' => 'Ice Cream',
          'author' => 'BLACKPINK',
          'album' => 'THE ALBUM',
          'genre' => 'Kpop',
          'year' => 2020,
          'poster' => 'https://m.media-amazon.com/images/I/81HsEr1r0nL._SS500_.jpg'
      ],
      [
          'title' => 'Arrest me',
          'author' => 'Kaze',
          'album' => 'Arrest me',
          'genre' => 'EDM',
          'year' => 2020,
          'poster' => 'https://m.media-amazon.com/images/I/911MmK-4OkL._SS500_.jpg'
      ],
      [
          'title' => 'Lovesick girls',
          'author' => 'BLACKPINK',
          'album' => 'BLACKPINK',
          'genre' => 'Kpop',
          'year' => 2020,
          'poster' => 'https://www.earone.it/newsimages/blackpink_lovesick_girls.jpg___th_320_0.jpg'
      ],
  ];

  function stripslashes_deep($value)
  {
    $value = is_array($value) ?
      array_map('stripslashes_deep', $value) :
      stripslashes($value);

    return $value;
  }
  
  $database = stripslashes_deep($database);
  
?>
