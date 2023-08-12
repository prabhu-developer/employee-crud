<div class="dropdown">
    <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-three-dots"></i>
    </button>
    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="{{ route('employee.show', $employee->id) }}">
                <i class="bi bi-eye-fill me-2"></i>View
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('employee.edit', $employee->id) }}">
                <i class="bi bi-pencil-square me-2"></i> Edit
            </a>
        </li>
        
        <li>
            <a class="dropdown-item text-danger" href="{{ route('employee.edit', $employee->id) }}">
                <i class="bi bi-trash-fill"></i> Delete
            </a>
        </li>
    </ul>
</div>
 