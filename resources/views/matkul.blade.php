<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/data-matkul') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Tambahkan Data</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <p class="matkul">Universitas Putra Indonesia</p>
<p class="matkul">Mata Kuliah Semester 3</p>

<p class="matkul">Teknik Informatika</p>

<div class="row">
    <p class="hari">Senin</p>
    @foreach ($senin as $item )
  <div class="column" style="">

    <p class="text-2">Mata Kuliah :
        {{$item->matkul}}</p>

    <p class="text-2">Dosen :
        {{$item->dosen}}
    </p>
    <p class="text-2">Jam ke :
        {{$item->jam}}</p>
    <p class="text-2">SKS :
        {{$item->sks}}
    </p>
    <p class="text-2">Waktu :
        {{$item->waktu}}
    </p>

  </div>
  @endforeach
</div>
<div class="row">
    <p class="hari">Selasa</p>
    @foreach ($selasa as $item )
  <div class="column" style="">

    <p class="text-2">Mata Kuliah :
        {{$item->matkul}}</p>

    <p class="text-2">Dosen :
        {{$item->dosen}}
    </p>
    <p class="text-2">Jam ke :
        {{$item->jam}}</p>
    <p class="text-2">SKS :
        {{$item->sks}}
    </p>
    <p class="text-2">Waktu :
        {{$item->waktu}}
    </p>

  </div>
  @endforeach
</div>

<div class="row">
    <p class="hari">Rabu</p>
    @foreach ($rabu as $item )
  <div class="column" style="">

    <p class="text-2">Mata Kuliah :
        {{$item->matkul}}</p>

    <p class="text-2">Dosen :
        {{$item->dosen}}
    </p>
    <p class="text-2">Jam ke :
        {{$item->jam}}</p>
    <p class="text-2">SKS :
        {{$item->sks}}
    </p>
    <p class="text-2">Waktu :
        {{$item->waktu}}
    </p>

  </div>
  @endforeach
</div>

<div class="row">
    <p class="hari">Kamis</p>
    @foreach ($kamis as $item )
  <div class="column" style="">

    <p class="text-2">Mata Kuliah :
        {{$item->matkul}}</p>

    <p class="text-2">Dosen :
        {{$item->dosen}}
    </p>
    <p class="text-2">Jam ke :
        {{$item->jam}}</p>
    <p class="text-2">SKS :
        {{$item->sks}}
    </p>
    <p class="text-2">Waktu :
        {{$item->waktu}}
    </p>

  </div>
  @endforeach
</div>

<div class="row">
    <p class="hari">Jum'at</p>
    @foreach ($jumat as $item )
  <div class="column" style="">

    <p class="text-2">Mata Kuliah :
        {{$item->matkul}}</p>

    <p class="text-2">Dosen :
        {{$item->dosen}}
    </p>
    <p class="text-2">Jam ke :
        {{$item->jam}}</p>
    <p class="text-2">SKS :
        {{$item->sks}}
    </p>
    <p class="text-2">Waktu :
        {{$item->waktu}}
    </p>

  </div>
  @endforeach
  @if ($jumat->count()==0)
      <p class="matkul"> Libur </p>
  @endif
</div>




</body>
</html>
