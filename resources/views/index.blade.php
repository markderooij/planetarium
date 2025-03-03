<div>
    @foreach ($planets as $planet)
        <div>
            <h2>{{ $planet->name }}</h2>
            <p>{{ $planet->description }}</p>
        </div>  
    @endforeach
</div>
