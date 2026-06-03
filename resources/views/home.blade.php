<h1>
    Bem vindo
</h1>
<p>
    Olá {{$name}}
</p>
<p>
    Seus habitos são
</p>
<ul>
    @foreach($habits as $item)
        <li>
            {{$item}}
        </li>
    @endforeach
</ul>


