@extends('layouts.app')

@section('content')
<div class="homepage my-5">
    <!-- Judul Utama -->
    <h1 class="text-center text-white bg-pink py-3 mb-4" style="background-color: #ee99c2;">Welcome to Glowify!</h1>

    <!-- Bagian Artikel Unggulan -->
    <div class="featured-section container">
        <h2 class="text-secondary text-center mb-4">Featured Articles</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse($featuredArticles as $article)
            <div class="col">
                <div class="card h-100 shadow-sm" style="background-color: #fff; border-radius: 15px; border: 1px solid #ee99c2;">
                    <div class="card-body">
                        <!-- Judul Artikel -->
                        <h5 class="card-title" style="color: #333; font-family: 'Arial', sans-serif; font-weight: bold;">
                            {{ $article->title }}
                        </h5>
                        
                        <!-- Pengguna dan Waktu -->
                        <p class="text-muted mb-3" style="font-size: 0.9em;">
                            By {{ $article->user->name }} | {{ $article->created_at->format('M d, Y') }}
                        </p>

                        <!-- Cuplikan Artikel -->
                        <p class="card-text" style="color: #555; line-height: 1.6;">
                            {{ \Illuminate\Support\Str::limit($article->full_text, 120, '...') }}
                        </p>

                        <!-- Tombol Lihat Detail -->
                        <a href="{{ route('detailarticle', $article->id) }}" class="btn btn-block text-white" 
                           style="background-color: #ee99c2; border-radius: 5px;">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">No featured articles available.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
