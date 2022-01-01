@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">{{ $anime->judul }}</h3>
                <div class="mt-4">
                    <div class="img mx-auto d-flex justify-content-center align-items-end" style="height:20em; background-size:cover; background-repeat:no-repeat; background-image: url({{ $anime->cover_img }});">
                        <img class="shadow-lg rounded mb-2" src="{{ $anime->cover_img }}" alt="gambar {{ $anime->judul }}" height="200em">
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="p-2 fw-bold"><i class="fa fa-info text-warning" style="margin-right: 10px"></i> Detail</h6>
                    <hr>

                    <table class="table table-striped">
                        <tr>
                            <td>Judul</td>
                            <td>{{ $anime->judul }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><a class="text-decoration-none" href="/status/{{ $anime->status->status }}">{{ $anime->status->status }}</a></td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <?php
                                $count = 0;
                                $result = 0;

                                foreach ($anime->rating as $rating) {
                                    $count += 1;
                                    $result += $rating->score;
                                }
                            ?>
                            <td>{{ round($result/$count, 1) }}</td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>
                                @foreach ($anime->genre as $genre)
                                    <a class="text-decoration-none" href="/genre/{{ $genre->genre }}">{{ $genre->genre }}</a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td><a class="text-decoration-none" href="/type/{{ $anime->type->type }}">{{ $anime->type->type }}</a></td>
                        </tr>
                    </table>
                </div>

                <div class="mt-4">
                    <h6 class="p-2 fw-bold"><i class="fa fa-align-left text-warning" style="margin-right: 10px"></i>Sinopsis</h6>
                    <hr>
                    <p>
                        <strong>{{ $anime->judul }}</strong> - {{ $anime->sinopsis }}
                    </p>
                </div>

                <div class="mt-4">
                    <h6 class="p-2 fw-bold"><i class="fa fa-play-circle text-warning" style="margin-right: 10px"></i>Nonton</h6>
                    <hr>
                    <div class="d-flex">
                        @foreach ($anime->videolink as $videolink)
                            <a href="/watch/{{ $anime->id }}/{{ $videolink->id }}" class="btn btn-warning mx-2">Episode {{ $videolink->episode }}</a>
                        @endforeach
                    </div>
                </div>

            </div>

            @if ($is_watched)
            <div class="col-sm-3">
                <div class="m-3 shadow">
                    <p class="text-center">Nilai anime ini</p>

                    <form action="/rating/create" method="POST" class="d-flex flex-column align-items-center p-2">
                        @csrf
                        <input type="number" name="score" id="score" hidden>
                        <input type="number" name="anime_id" value="{{ $anime->id }}" hidden>
                        <div>
                            <i class="fa fa-star fs-4" id="star1" style="color: #888"></i>
                            <i class="fa fa-star fs-4" id="star2" style="color: #888"></i>
                            <i class="fa fa-star fs-4" id="star3" style="color: #888"></i>
                            <i class="fa fa-star fs-4" id="star4" style="color: #888"></i>
                            <i class="fa fa-star fs-4" id="star5" style="color: #888"></i>
                        </div>
                        <input type="submit" value="Kirim" class="btn btn-warning mt-3">
                    </form>

                </div>
            </div>
            @endif

        </div>
    </div>

    @if (session()->has('jsAlert'))
        <script>
            alert("{{ session('jsAlert') }}")
        </script>
    @endif

    <script>
        let score = document.getElementById('score');

        let star1 = document.getElementById('star1');
        let star2 = document.getElementById('star2');
        let star3 = document.getElementById('star3');
        let star4 = document.getElementById('star4');
        let star5 = document.getElementById('star5');

        star1.addEventListener('click', ()=>{
            star1.style.color = '#FFC108';
            star2.style.color = '#888';
            star3.style.color = '#888';
            star4.style.color = '#888';
            star5.style.color = '#888';

            score.value = 2;
        });

        star2.addEventListener('click', ()=>{
            star1.style.color = '#FFC108';
            star2.style.color = '#FFC108';
            star3.style.color = '#888';
            star4.style.color = '#888';
            star5.style.color = '#888';

            score.value = 4;
        });

        star3.addEventListener('click', ()=>{
            star1.style.color = '#FFC108';
            star2.style.color = '#FFC108';
            star3.style.color = '#FFC108';
            star4.style.color = '#888';
            star5.style.color = '#888';
            
            score.value = 6;
        });

        star4.addEventListener('click', ()=>{
            star1.style.color = '#FFC108';
            star2.style.color = '#FFC108';
            star3.style.color = '#FFC108';
            star4.style.color = '#FFC108';
            star5.style.color = '#888';
            
            score.value = 8;
        });

        star5.addEventListener('click', ()=>{
            star1.style.color = '#FFC108';
            star2.style.color = '#FFC108';
            star3.style.color = '#FFC108';
            star4.style.color = '#FFC108';
            star5.style.color = '#FFC108';
            
            score.value = 10;
        });

    </script>
@endsection