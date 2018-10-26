<h2>
    <a href="/">
        All teams
    </a>
</h2>
 
<div class="blog-post"> 
    
    <h2 class="blog-post-title">          
        {{ $team->name}}  
    </h2>


 
        <h4>Players</h4>
        <ul class="list-unstyled">
            @foreach($team->players as $player)

            <li>
                <p><strong>Players:</strong> {{$player->first_name}} {{ $player->last_name}} </p>
                <p>  </p>

            </li>
            @endforeach

           
        </ul>
