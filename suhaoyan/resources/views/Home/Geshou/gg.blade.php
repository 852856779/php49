	<div id="J_ArtistList" class="artist-list">
      	@foreach ($data as $v)
        <div class="thumbnail">
          <a class="thumb-link" href="/geshou/{{$v->id}}" target="_blank">
            <img class="thumb-img lazy-image" src="/{{$v->s_pic}}" alt="{{$v->s_name}}">
            <span>{{$v->s_name}}</span></a>
        </div>
       @endforeach
    </div>