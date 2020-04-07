    @if (isset($category))

            <div class="card">   
                <div class="card-body">
                    <img src="{{ asset($category->image) }}" class="img-thumbnail" width="80px">
                    <label class="text-capitalize font-weight-bold" style="font-size: 1.5rem;">{{ $category->name }}</label>
                </div>
            </div>        
        
            <div class="row justify-content-around">
                @foreach ($articles as $article)
                    @if($category->id == $article->category_id)          
                        <div class="card" style="width: 10rem;">
                            <img class="card-img-top" src="{{ asset($article->image) }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->name }}</h5>
                                <p class="card-text">{{ $article->description }}</p>
                                <a href="{{ url('articles/'.$article->id) }}" class="btn btn-indigo btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    @endif            
                @endforeach
            </div>

    @else

        @foreach ($categories as $category)
            <div class="card">   
                <div class="card-body">
                    <img src="{{ asset($category->image) }}" class="img-thumbnail" width="80px">
                    <label class="text-capitalize font-weight-bold" style="font-size: 1.5rem;">{{ $category->name }}</label>
                </div>
            </div>        
        
            <div class="row justify-content-around">
                @foreach ($articles as $article)
                    @if($category->id == $article->category_id)          
                        <div class="card" style="width: 10rem;">
                            <img class="card-img-top" src="{{ asset($article->image) }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->name }}</h5>
                                <p class="card-text">{{ $article->description }}</p>
                                <a href="{{ url('articles/'.$article->id) }}" class="btn btn-indigo btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    @endif            
                @endforeach
            </div>
        @endforeach

    @endif 