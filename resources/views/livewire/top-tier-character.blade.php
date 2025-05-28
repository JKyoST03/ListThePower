<div class="text-center text-xl text-[#110303]">
    <div>
        <ul>
            @foreach ($franchiseCharacters as $character)
                <li>{{ $loop->iteration }}. {{ $character->name }}</li>
            @endforeach
        </ul>
    </div>
</div>