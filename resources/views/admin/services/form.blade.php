<div class="mb-3">
    <label for="background_image" class="form-label">Background Image</label>
    <input id="background_image" type="file" name="background_image" accept="image/*" class="form-control"
        style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
</div>

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input id="title" type="text" name="title" value="{{ old('title', $heroSlider->title ?? '') }}" required
        class="form-control" style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
</div>

<div class="mb-3">
    <label for="subtitle" class="form-label">Subtitle</label>
    <input id="subtitle" type="text" name="subtitle" value="{{ old('subtitle', $heroSlider->subtitle ?? '') }}"
        required class="form-control" style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
</div>

<div class="mb-3">
    <label for="button_text" class="form-label">Button Text</label>
    <input id="button_text" type="text" name="button_text"
        value="{{ old('button_text', $heroSlider->button_text ?? '') }}" class="form-control"
        style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
</div>

<div class="mb-3">
    <label for="button_url" class="form-label">Button URL</label>
    <input id="button_url" type="url" name="button_url"
        value="{{ old('button_url', $heroSlider->button_url ?? '') }}" class="form-control "
        style="background-color: #f0f0f0; padding: 10px; border-radius: 5px;">
</div>
