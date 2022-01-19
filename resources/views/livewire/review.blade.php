<div>
<div class="col-md-6">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

      <form wire:submit.prevent="store">
        @csrf
        <div class="static-contain">
          <div class="mb-3">
            <input  class="form-control" type="text" wire:model="subject" cols="60" rows="1" placeholder="Konu"></textarea>
            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
          </div><br>
          <div class="mb-3">
            <textarea class="form-control" type="text"  wire:model="review" cols="60" rows="3" placeholder="Mesajınız"></textarea>
            @error('review')<span class="text-danger">{{$message}}</span>@enderror
          </div>
        </div>
        <div class="buttons-set">
            @auth
          <button type="submit" title="Submit" class="btn btn-primary">Yorum Yap </button>
            @else
            <a href="/login" class="btn btn-primary">Yorum yapmak için lütfen giriş yapınız</a>
            @endauth
        </div>
      </form>
    </div>
</div>
