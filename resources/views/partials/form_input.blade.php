<div class="mb-3 form-floating">

  <input type="{{ $type ?? 'text'  }}" class="form-control @error($name) is-invalid @enderror"
         @if(isset($accept)) accept="{{$accept}}" @endif
         placeholder="{{$label}}"
         id="{{$name}}Input" name="{{$name}}" value="{{ $value ?? '' }}">
  <label for="{{$name}}Input" class="">
    {{$label}}
  </label>

  @error($name)
  <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
