<div>
    
    <input wire:model="search" name="search" type="text"  list="mylist" placeholder="İlanı ara..." />

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>

