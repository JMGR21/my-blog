@csrf

<label for="">Titulo</label>
<input type="text" name="title" id="title" value="{{ old("title", $post->title) }}">

<label for="">Slug</label>
<input type="text" name="slug" id="slug" value="{{ old("slug", $post->slug) }}">

<label for="">Category</label>
<select name="category_id" id="category_id">
    <option value="null">Select an option</option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>

<label for="">Posted</label>
<select name="posted" id="posted">
    <option value="yes" {{ old("posted", $post->posted) == "yes" ? "selected" : "" }}>Yes</option>
    <option value="not" {{ old("posted", $post->posted) == "not" ? "selected" : "" }}>No</option>
</select>

<label for="">Content</label>
<textarea name="content" id="content">{{ old("content", $post->content) }}</textarea>

<label for="">Description</label>
<textarea name="description" id="description">{{ old("description", $post->description) }}</textarea>

@if (isset($task) && $task == "edit")
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
@endif

<button type="submit">Enviar</button>