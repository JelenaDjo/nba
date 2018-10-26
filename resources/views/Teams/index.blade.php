

        <h1> Teams </h1>

        <ul>
            @foreach($teams as $team)
            <li>
            <div class="blog-post">
                <div class="blog-post-title">
                    <a href="/teams/{{ $team->id }} "> 
                    <p> {{ $team->name}}</p>
                        
                    </a>
                </div>
           </div>
            
            </li>

            @endforeach
         </ul>   
 

