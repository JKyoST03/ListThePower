<div class="text-center text-xl">
    <div>
        <ul>
            @foreach ($franchiseCharacters as $character)
                <li>{{ $loop->iteration }}. {{ $character->name }}</li>
            @endforeach
        </ul>
    </div>
</div>