@if (session()->has('success'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show"
class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
