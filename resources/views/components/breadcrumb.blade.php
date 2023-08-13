<nav class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Home</a></li>
        @foreach (explode( '.', request()->route()->getName()) as $route)
          <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($route) }}</li>
        @endforeach
    </ol>
</nav>
