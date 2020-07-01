<div>
    <div class="input group">
        <div class="input-group-addon">
            <input class="form-control form-control-sm ml-3 w-75" wire:model="searchTerm" type="text" placeholder="Search" aria-label="Search">
        </div>
    </div>

    <ul class="nav navbar">
        @foreach($buildings as $building)
            <li class="nav-item">{{ $building->buildingName }}</li>
        @endforeach
    </ul>

</div>
