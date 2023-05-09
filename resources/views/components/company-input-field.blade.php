<div class="mb-3 col-md-6">
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" type="text" id="{{ $name }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes }}/>
  @error($name)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
