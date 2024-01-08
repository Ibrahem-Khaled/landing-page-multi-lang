<form action="{{ route('language.switch') }}" method="POST">
    <select name="language" onchange="this.form.submit()">
        <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>English</option>
        <option value="ar" {{ app()->getLocale() === 'ar' ? 'selected' : '' }}>العربية</option>
    </select>
</form>
