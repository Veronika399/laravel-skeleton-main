<form>
    <div class="input-group">
        <input type="text" id="search" name="search" value="{{ request()->input('search') }}" class="form-control"
               placeholder="@lang('Search...')">
        @include('components.form.submit-button', ['title' => 'Search'])
    </div>
</form>
