{{ $article->title }}

<h1>{{$article->title}}</h1>
<hr>
{{ $article->content }}
<hr>
{{ $article->user->name }} | {{ $article->category->name }} |

@foreach($article->tags as $tag)
	{{$tag->name}}
@endforeach