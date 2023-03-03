<section>
    <div class="newsAll__list__item">
        @foreach ($articles as $article)
        <div class="newsAll__item">
            <a href="{{ route('article', $article->{'slug_' . app()->getLocale()}) }}">
                <div class="newsAll__imgs">
                    <img src="{{ asset($article->image) }}" alt="newsAll">
                </div>

                <section>
                    <h4 class="newsAll__data">{{  date('d.m.Y', strtotime($article->created_at)) }}</h4>
                    <h3 class="newsAll__title__h3">
                        {{ $article->{'title_' . app()->getLocale()} }}
                    </h3>
                    <div class="newsAll__text">
                        <p>
                            {!! $article->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </section>
            </a>
        </div>
        @endforeach
    </div>

    {{-- {{ $articles->links("vendor.pagination.pagination")}} --}}
</section>
